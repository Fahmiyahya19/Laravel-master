<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = "carts";
    protected $primarykey = "id";
    protected $fillable = [
        'username',
        'user_id',
        'game',
        'value'
    ];
}
