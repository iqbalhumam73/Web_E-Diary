<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $fillable = [
        'account_username',
        'account_name',
        'account_email',
        'account_phone',
        'account_photo',
        'account_bio'
    ];
    protected $table = 'account';
}
