<?php

namespace Tests\Feature;

use App\Mail\NewConsultationRequestMail;
use App\Models\ChatMessage;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class ChatConsultationTest extends TestCase
{
    private $createdChatMessagesTable = false;
    private $createdMessageIds = [];

    protected function setUp(): void
    {
        parent::setUp();

        if (!Schema::hasTable('chat_messages')) {
            Schema::create('chat_messages', function (Blueprint $table) {
                $table->id();
                $table->string('name')->nullable();
                $table->text('message');
                $table->string('contact_type')->nullable();
                $table->string('contact_value')->nullable();
                $table->boolean('consent')->default(false);
                $table->string('locale')->default('ru');
                $table->string('status')->default('new');
                $table->timestamps();
            });

            $this->createdChatMessagesTable = true;
        }
    }

    protected function tearDown(): void
    {
        if (Schema::hasTable('chat_messages') && $this->createdMessageIds) {
            ChatMessage::whereIn('id', $this->createdMessageIds)->delete();
        }

        if ($this->createdChatMessagesTable) {
            Schema::dropIfExists('chat_messages');
        }

        parent::tearDown();
    }

    public function test_consultation_is_saved_and_notification_is_sent(): void
    {
        Mail::fake();
        config(['chatbot.consultation_notification_email' => 'operator@example.com']);

        $response = $this->postJson(route('front.chat.contact'), [
            'name' => 'Иван Иванов',
            'message' => 'Мне нужна консультация по поступлению.',
            'contact_type' => 'email',
            'contact_value' => 'ivan@example.com',
            'consent' => '1',
        ]);

        $response->assertOk();
        $this->assertDatabaseHas('chat_messages', [
            'contact_value' => 'ivan@example.com',
            'status' => 'new',
        ]);
        $this->createdMessageIds[] = ChatMessage::where('contact_value', 'ivan@example.com')->latest('id')->value('id');
        Mail::assertSent(NewConsultationRequestMail::class, function ($mail) {
            return $mail->hasTo('operator@example.com')
                && $mail->chatMessage->contact_value === 'ivan@example.com';
        });
    }

    public function test_invalid_contact_value_is_rejected_without_saving_or_sending(): void
    {
        Mail::fake();
        $messageCount = ChatMessage::count();

        $response = $this->postJson(route('front.chat.contact'), [
            'message' => 'Мне нужна консультация по поступлению.',
            'contact_type' => 'email',
            'contact_value' => 'not-an-email',
            'consent' => '1',
        ]);

        $response->assertStatus(422);
        $this->assertSame($messageCount, ChatMessage::count());
        Mail::assertNothingSent();
    }
}
