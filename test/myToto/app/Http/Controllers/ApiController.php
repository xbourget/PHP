<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function sayHello()
    {
        return response()->json(['reponse' => 'BONJOUR']);
    }

}
