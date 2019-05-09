<?php
// api/src/Entity/Advert.php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * A advert.
 *
 * @ORM\Entity
 * @ApiResource
 */
class Advert
{
    /**
     * @var int The id of this advert.
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var DateTimeInterface the start date of this advert.
     *
     * @ORM\Column(type="datetime")
     */
    public $start_date;
    
    /**
     * @var DateTimeInterface the finish date of this advert.
     *
     * @ORM\Column(type="datetime")
     */
    public $finish_date;

    /**
     * @var City The city this advert is about.
     *
     * @ORM\ManyToOne(targetEntity="City", inversedBy="advert")
     */
    public $city;

    /**
     * @var string The phone of this advert.
     *
     * @ORM\Column
     */
    public $phone;

     /**
     * @var string The email of this advert.
     *
     * @ORM\Column
     */
    public $email;

     /**
     * @var string The name of this advert.
     *
     * @ORM\Column
     */
    public $name;

     /**
     * @var string The comment of this advert.
     *
     * @ORM\Column
     */
    public $comment;
    
    public function __construct()
    {
        $this->reviews = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }
}