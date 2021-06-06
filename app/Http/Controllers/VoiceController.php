<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio\Rest\Client;
use Twilio\TwiML\VoiceResponse;

class VoiceController extends Controller
{

    /**
     * Responds to phone call
     *
     * @param  Request  $request
     * @return Response
     */
    public function respondToCall(Request $request)
    {
        $response = new VoiceResponse();
        $response->say('Welcome to our home');
        $response->dial('6');
        $response->say('Goodbye');

        return $response;
    }

    
}
