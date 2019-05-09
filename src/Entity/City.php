<?php
// api/src/Entity/City.php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * A city.
 *
 * @ORM\Entity
 * @ApiResource
 */
class City
{
    /**
     * @var int The id of this city.
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string The Google Place id of this city.
     *
     * @ORM\Column
     */
    public $google_place_id;

    /**
     * @var string The Location name of this city.
     *
     * @ORM\Column
     */
    public $location_name;

    /**
     * @var string The description of this city.
     *
     * @ORM\Column
     */
    public $description;
    
    public function __construct()
    {
        $this->reviews = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }
}