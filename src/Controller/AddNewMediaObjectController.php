<?php


namespace App\Controller;


use App\Entity\MediaObject;
use Symfony\Component\HttpFoundation\Request;


class AddNewMediaObjectController
{
    public function __invoke(MediaObject $data, Request $request): MediaObject
    {
        var_dump($data);
        var_dump(json_encode($request));
    }
}