<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\app\Models\Traits\CrudTrait;

class Customer extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'user_name',
        'salary'
    ];
    use HasFactory;
    use CrudTrait;
}