<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function userProfile(Request $request)
    {
        // Logique pour récupérer le profil de l'utilisateur authentifié
        $user = $request->user();
        return response()->json(['user' => $user]);
    }

    public function publicRoute()
    {
        // Logique pour une route publique
        return response()->json(['message' => 'Cette route est publique']);
    }

    public function getNumberFree()
    {
        $number = rand(1, 100); // Replace this with your logic
        return response()->json(['number' => $number]);
    }

    public function getNumberKey( Request $request, $key)
    {
        if ( $key == '1234')
        {
            $number = rand(1, 100); // Replace this with your logic
            return response()->json(['number' => $number]);
        }
        return response()->json(['error' => 'Unauthorized'], 401);    }

    public function getTokenR(Request $request )
    {
        //$user = auth()->user();
        $token = $request->bearerToken();


        //$user = $request->user();
        //$token = $user->createToken('AppName')->accessToken;
        return response()->json(['token' => $token]);
    }


}
