<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;
use Validator;

class DeviceController extends Controller
{
    // For Add data into database through API
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

    // For Update data into database through API
    public function update(Request $req)
    {
        $device = Device::find($req->id);
        $device->name = $req->name;
        $device->email = $req->email;
        $device->address = $req->address;
        $result = $device->save();

        if($result)
        {
            return ["result" => "Data has been updated"];
        }else{
            return ["result" => "somthing went wrong"];
        }
    }

    // For Delete data from database through API
    public function delete($id)
    {
        $device = Device::find($id);
        $result = $device->delete();
        if($result)
        {
            return ["Result" => "Data has been deleted"];
        }else{
            return ["Result" => "Something went wrong"];
        }
    }

    // For search data from database through API
    public function search($name)
    {
        $searchResult = Device::where("name","like","%".$name."%")->get();
        if(count($searchResult))
        {
            return $searchResult;
        }else{
            return array("Result","No record found");
        } 
    }

    // Validation API for validate data before insert into database
    public function validation(Request $req)
    {
        $rules = array(
            "email" => "required"
        );
        $validator = Validator::make($req->all(), $rules);
        if($validator->fails())
        {
            return $validator->errors();
            // return response()->json($validator->errors(),401);
        }else{

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
}
