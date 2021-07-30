<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UsersController extends Controller
{
    public function allUsers(){
     
       $all_users = Http::get("https://book-app-nodejs.herokuapp.com/users");
      // return json_decode($all_users);
    //    exit;
    //   // return view('pages.all-users',['all-users'=>$all_users]);
    //   $url = 'https://book-app-nodejs.herokuapp.com/users';
    //     $option['Username'] = env('DMVIC_USER_NAME');
    //     $option['Password'] = env('DMVIC_USER_PASSWORD');
    //     $response = Http::get($url,[
    //         'Username'=>env('DMVIC_USER_NAME'),
    //         'Password'=>env('DMVIC_USER_PASSWORD'),
    //     ]);
    //     if($response->successful()){
    //         $token_array = (array)$response->json();
    //         $this->dmvic_login_info = $token_array;
    //     }else{}
    //     //dd($response);
        return view('pages.all-users',[
            "all_user" => json_decode($all_users)
        ]);
    }
}
