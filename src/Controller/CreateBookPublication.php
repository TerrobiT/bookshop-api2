<?php


namespace App\Controller;

use App\Entity\Tour;
use App\Handler\BookPublishingHandler;

class CreateBookPublication
{
    private $bookPublishingHandler;

    public function __construct(BookPublishingHandler $bookPublishingHandler)
    {
        $this->bookPublishingHandler = $bookPublishingHandler;
    }

    public function __invoke(Tour $data): Tour
    {
        $this->bookPublishingHandler->handle($data);

        return $data;
    }
}