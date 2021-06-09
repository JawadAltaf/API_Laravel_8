<?php

namespace App\Http\Controllers;
use App\Models\Device;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function list()
    {
        return Device::all();
    }
}
