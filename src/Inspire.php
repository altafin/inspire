<?php

namespace Altafin\Inspire;

use Illuminate\Support\Facades\Http;

class Inspire
{
    public function justDoIt() {
        return Http::get('https://inspiration.goprogram.ai/');
        //return view('form:inspire', compact('response'));
        //return $response['quote'] . ' - ' . $response['author'];
    }
}
