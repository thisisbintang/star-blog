<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(Request $request) {
        return view('about', [
            'title' => 'About',
            'name' => 'Bintang Fadjrul',
            'email' => 'bintangfadjrulfallah@gmail.com',
            'image' => 'photo.jpg'
        ]);
    }
}
