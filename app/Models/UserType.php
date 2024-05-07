<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserType extends Model
{
    use HasFactory;

    protected $table = 'user_type_master';

    protected $primaryKey = "user_type_id";

    protected $fillable = [
        'user_type'
    ];
}
