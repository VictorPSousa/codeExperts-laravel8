<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HelloWorldController extends Controller{
    public function helloWorld(){
        return view('hello-world');
    }

    public function hello($name = "Teste"){
        return 'Hello, '.$name; 
    }
    
    public function consumoDeAPI(){
        $response = Http::get("http://localhost:8181/albums");
        // dd($response->json());
        $resp = $response->json();
        return view('albums', compact('resp'));
        // $url = "http://localhost:8181/albums";
        // $results = json_decode(file_get_contents($url));

        // foreach($results as $rs){
        //     echo "Título: ".$rs->title."<br/>";
        //     echo "Artista: ".$rs->artist."<br/>";
        //     echo "Preço: R$".$rs->price."<br/><br/>";
        // }

        // return 'Resultados.'; 
    }
}
