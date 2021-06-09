<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;

class DeviceController extends Controller
{
    public function add(Request $req)
    {
        $device = new Device;
        $device->name = $req->name;
        $device->email = $req->email;
        $device->address = $req->address;
        $result = $device->save();
        if($result)
        {
            return ["Result" => "Data has been saved"];
        }else{
            return ["Result" => "Operation failed"];
        }
        
    }
}
