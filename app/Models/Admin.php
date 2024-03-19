<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Admin extends Authenticatable
{
    use HasFactory;
    protected $guard = 'admin';

    // public static function validate(Request $request)
    // {
    //     $request->validate([
    //         'email' => 'required',
    //         'password' => 'required|min:6',
    //     ]);
    // }

}
