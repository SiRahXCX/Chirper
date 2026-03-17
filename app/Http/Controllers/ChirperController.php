<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChirperController extends Controller
{
    public function index()
    {
        $chirps = [
            [
                'author' => 'Jane Doe',
                'message' => 'Enim nostrud sit occaecat ut velit.',
                'time' => '1 hour ago'
            ],

            [
                'author' => 'John Smith',
                'message' => 'Laborum aute nulla sit commodo ex in.',
                'time' => '2 hour ago'
            ],
        ];

        return view('home', ['chirps' => $chirps]);
    }
}
