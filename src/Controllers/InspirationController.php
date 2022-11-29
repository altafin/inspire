<?php

namespace Altafin\Inspire\Controllers;

use App\Http\Controllers\Controller;
//use App\Http\Requests;
use Illuminate\Http\Request;
use Altafin\Inspire\Inspire;

class InspirationController extends Controller
{
    public function __invoke(Inspire $inspire)
    {
        $quote = $inspire->justDoIt();
        return view('inspire::index', compact('quote'));
    }
}
