<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistrationForTesting extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'surname',
        'patronymic',
        'phone',
        'email',
        'have_ielts',
        'ielts_file',
        'test_date',
        'test_time_slot',
        'interview_date',
        'interview_time_slot',
        'test_score',
        'test_passed',
        'interview_passed',
        'pending_test_date',
        'pending_test_time_slot',
        'pending_interview_date',
        'pending_interview_time_slot',
        'confirmation_token',
        'is_confirmed',
        'is_deleted',
    ];
}
