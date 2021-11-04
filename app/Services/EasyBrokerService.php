<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class EasyBrokerService {


    public function __construct() {
        
    }

    public function getProperties()
    {

        $response = Http::withHeaders([
            'accept'          => 'application/json',
            'X-Authorization' => config('easybroker.api_key')
        ])->get(config('easybroker.base_url').'properties', [
            'page'                  => 1,
            'limit'                 => 20,
            'updated_after'         => '2020-03-01T23:26:53.402Z',
            'updated_before'        => '2025-03-01T23:26:53.402Z',
            'operation_type'        => 'sale',
            'min_price'             => 500000,
            'max_price'             => 3000000,
            'min_bedrooms'          => 1,
            'min_bathrooms'         => 1,
            'min_parking_spaces'    => 1,
            'min_construction_size' => 100,
            'max_construction_size' => 1000,
            'min_lot_size'          => 100,
            'max_lot_size'          => 1000
        ]);
        
        return $response;

    }

}
