<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index(){
        // return view('web.home');
        $data = [
        ['id' => 1, 'url' => 'John Doe'],
        ['id' => 2, 'url' => 'Jane Doe'],
        // Add more sample data as needed
        ];
        return view('show-data', compact('data'));
    }



}
