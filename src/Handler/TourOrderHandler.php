<?php

namespace App\Handler;

use App\Entity\Tour;

class TourOrderHandler
{
    public function handle(Tour $tour): array
    {
        // your logic for publishing book or/and eg. return your custom data
        echo 123;
    }
}