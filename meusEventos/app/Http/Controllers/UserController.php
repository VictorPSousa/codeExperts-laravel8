<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class UserController extends Controller{
    private $url;

    public function __construct(){
        $this->url = "http://localhost:8080";
    }
    
    public function create_user(Request $request/* $name, $email, $pass */){
        // $request = Http::post($this->url);
        dd($request->all());
    }

    public function delete_user($id){
        $request = Http::del($this->url);
        return $request->json();
    }

    public function update_user($id, $name, $email, $pass){
        $request = Http::put($this->url);
        return $request->json();
    }

    // retornando dados específicos de um user
    public function get_user($id){
        $response = Http::get($this->url."/user?id=".$id);
        return $response->json();
    }

    public function start_recovery($email){
        $request = Http::post($this->url."/user/recovery");
        return $request->json();
    }

    public function get_recovery(){
        $response = Http::get($this->url."/user/recovery");
        return $response->json();
    }

    public function finish_recovery(){
        $request = Http::put($this->url."/user/recovery");
        return $request->json();
    }

}
