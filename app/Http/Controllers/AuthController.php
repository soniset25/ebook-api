<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Routing\Controller as BaseController;

class AuthController extends BaseController
{
    public function me() 
    {
        return
        [
            "NIS" => "3103118126",
            "Name" => "Soni Setiawan",
            "Gender" => "Laki-laki",
            "Phone" => "083126678325",
            "Class" => "XII RPL 4",
        ];
    }
}
