<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index(){
        $data = [
            ['id' => 1, 'url' => 'John Doe'],
            ['id' => 2, 'url' => 'Jane Doe'],
            // Add more sample data as needed
        ];
        return view('web.home');
    }
}
