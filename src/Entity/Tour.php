<?php
// api/src/Entity/Tour.php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * A tour.
 *
 * @ORM\Entity
 @ApiResource(
 *     collectionOperations={"get", "post"},
 *     itemOperations={"delete","get"}
 * )
 */
class Tour
{
    /**
     * @var int The id of this tour.
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

/**
     * @var DateTimeInterface the create date of this tour.
     *
     * @ORM\Column(type="datetime")
     */
    public $date_create;

    /**
     * @var DateTimeInterface the start date of this tour.
     *
     * @ORM\Column(type="datetime")
     */
    public $start_date;
    
    /**
     * @var DateTimeInterface the finish date of this tour.
     *
     * @ORM\Column(type="datetime")
     */
    public $finish_date;

    /**
     * @var City The city this tour is about.
     *
     * @ORM\ManyToOne(targetEntity="City", inversedBy="tour")
     */
    public $city;

    /**
     * @var City The user this tour is about.
     *
     * @ORM\ManyToOne(targetEntity="User", inversedBy="tour")
     */
    public $user;

    /**
     * @var City The array files this tour is about.
     *
     * @ORM\ManyToOne(targetEntity="File", inversedBy="tour")
     */
    public $file;

    /**
     ** @var float The cost of this tour.
     *
     * @ORM\Column(type="float")
     */
    public $cost;

    /**
     * @var int The count of photos of this tour.
     *
     * @ORM\Column(type="float")
     */
    public $count_of_photos;

    /**
     * @var string The photos type of this tour.
     *
     * @ORM\Column
     */
    public $photos_type;

    /**
     * @var string The comment of this tour.
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