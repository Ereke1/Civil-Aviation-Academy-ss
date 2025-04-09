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
        'test_date',
        'pending_test_date',
        'confirmation_token',
        'is_confirmed',
    ];
}
