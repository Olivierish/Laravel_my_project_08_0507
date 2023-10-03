<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function index() {
        $users = [
            [
                'name' => 'Mustermann',
                'vorname' => 'Tom',
                'ort' => 'Paris'
            ],
            [
                'name' => 'Musterfrau',
                'vorname' => 'Anna',
                'ort' => 'Sylt'
            ],
            [
                'name' => 'Boss',
                'vorname' => 'Hugo',
                'ort' => 'Bangkok'
            ]
        ];
        // return view('portfolio')->with(['daten' => $users, 'blabla'=> $weitereDaten]);
        return view('portfolio')->with(['daten' => $users]);
    }
}