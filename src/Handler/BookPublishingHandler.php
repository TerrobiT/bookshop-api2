<?php

namespace App\Handler;

use App\Entity\Tour;

class BookPublishingHandler
{
    public function handle(Tour $book): array
    {
        // your logic for publishing book or/and eg. return your custom data
        echo 123;
    }
}