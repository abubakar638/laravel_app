<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersTable extends Model
{
    protected $table = "users";
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'user_id', 'user_name', 'password', 'date'];
    use HasFactory;

    public $timestamps = false;
}
