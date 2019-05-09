<?php
// api/src/Entity/File.php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * A File.
 *
 * @ORM\Entity
 @ApiResource @ApiResource(
 *     collectionOperations={"get", "post"},
 *     itemOperations={"delete" , "get"}
 * )
 * 
 */
class File
{
    /**
     * @var int The id of this File.
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string The title of this file.
     *
     * @ORM\Column
     */
    public $name;

    /**
     * @var Tour The user this tour order is about.
     *
     * @ORM\ManyToOne(targetEntity="Tour", inversedBy="file")
     */
    public $tour;

    /**
     * @var TourOrder The user this tour order is about.
     *
     * @ORM\ManyToOne(targetEntity="TourOrder", inversedBy="file")
     */
    public $tour_order;

            public function __construct()
    {
        $this->reviews = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }
}