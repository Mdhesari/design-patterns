<?php

namespace App\Factory\Atransport;

use App\Factory\ATransport\Logistics\RoadLogistic;
use App\Factory\ATransport\Logistics\SeaLogistic;
use App\Factory\ATransport\Logistics\SkyLogistic;

class ATransportFactory
{

    public function newRoadTransport()
    {

        $road = new RoadLogistic;

        return $road->newTransport();
    }

    public function newSkyTransfer()
    {

        $sky = new SkyLogistic;

        return $sky->newTransport();
    }

    public function newSeaTransport()
    {

        $sea = new SeaLogistic;

        return $sea->newTransport();
    }
}
