<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    // Specify the attributes that can be mass assigned
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
    ];
}
