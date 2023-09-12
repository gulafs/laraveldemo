<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    use HasFactory;
    protected $table = 'userDetail';
    protected $fillable = [
        'name',
        'mobile',
        'email',
        'password',
        'city',
        'salary',
        'joining_date',
    ];
}
