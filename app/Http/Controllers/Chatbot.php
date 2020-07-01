<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Chatbot extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function echo(Request $request)
    {
        $data = $request->json()->all();
        $text = $data['text'];
        $echoText = "{$text} too";
        return response()->json($echoText);
    }
}
