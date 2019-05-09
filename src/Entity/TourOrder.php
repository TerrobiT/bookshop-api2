<?php
// api/src/Entity/TourOrder.php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * A tourOrder.
 *
 * @ORM\Entity
 @ApiResource(
 *     collectionOperations={"get"},
 *     itemOperations={}
 * )
 */
class TourOrder
{
    /**
     * @var int The id of this tourOrder.
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;



        public function __construct()
    {
        $this->reviews = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }
}