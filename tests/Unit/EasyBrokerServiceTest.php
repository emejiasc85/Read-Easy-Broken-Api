<?php

namespace Tests\Unit;

use App\Services\EasyBrokerService;
use Tests\TestCase;

class EasyBrokerServiceTest extends TestCase
{
    function test_get_properties_service()
    {
        $easyBroken = new EasyBrokerService();
        $properties = $easyBroken->getProperties();

        $this->assertTrue($properties->ok());
    }

}
