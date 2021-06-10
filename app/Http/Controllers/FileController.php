<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    // File Uploading through API
    public function upload(Request $req)
    {
        $result = $req->file("file")->store('apiDocs');
        if($result)
        {
            return ["Result"=>"Successfully Uploaded".$result];
        }else{
            return ["Result" => "something went wrong"];
        }
       
    }
}
