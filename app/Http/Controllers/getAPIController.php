<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class getAPIController extends Controller
{
    public function getData()
    {
        return ['name' => 'jawad altaf', "email" => "jawad@test.com", "address" => "fsd"];
    }
}
