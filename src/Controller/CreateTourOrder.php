<?php
// api/src/Controller/CreateTourOrder.php

namespace App\Controller;

use App\Entity\Tour;
use App\Handler\TourOrderHandler;

class CreateTourOrder
{
    private $tourOrderHandler;

    public function __construct(TourOrderHandler $tourOrderHandler)
    {
        $this->tourOrderHandler = $tourOrderHandler;
    }

    public function __invoke(Tour $data): Tour
    {
        $this->tourOrderHandler->handle($data);

        return $data;
    }
}