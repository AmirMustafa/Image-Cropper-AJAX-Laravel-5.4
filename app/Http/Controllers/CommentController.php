<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Session;
use Illuminate\Contracts\Validation\Validator;
use Mail;
//use Illuminate\Http\UploadedFile;
use Symfony\Component\HttpFoundation\File\UploadedFile;

use Illuminate\Support\Facades\Input;

$file = \Illuminate\Support\Facades\Request::file('imgInp');

session_start();

class CommentController extends Controller
{
    public function comment_dbm(Request $request)
    {
       if (Input::hasFile('imgInp')) {//Way of checking uploaded file in laravel
            //return "file present";
        //echo "file present";
        //print_r($_FILES);

        $image = $_FILES['imgInp']['name'];
        $tmp_name = $_FILES['imgInp']['tmp_name'];
        $store = "resources/views/cmnt_pic/".$image;
        move_uploaded_file($tmp_name, $store);
    }
       else{
        return "file not present";
    }

    $insert = DB::insert('insert into usr_dtls (first_name, last_name, username, email,password ) values (?, ?, ?, ?, ?)', [$data['first_name'], $data['last_name'], $data['user_name'], $data['uemail'], $data['user_pass1']]);
      
//
      

    }
}