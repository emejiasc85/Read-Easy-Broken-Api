<?php

namespace App\Http\Controllers;

use App\Services\EasyBrokerService;

class PropertyController extends Controller
{
    public function __invoke()
    {
        $easyBroker = new EasyBrokerService();

        $properties = $easyBroker->getProperties();

        return view('welcome', ['properties' => $properties->object()]);
    }
}
