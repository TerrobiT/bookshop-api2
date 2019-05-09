<?php
// api/src/Entity/Feedback.php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * A feedback.
 *
 * @ORM\Entity
 @ApiResource(
 *     collectionOperations={"get", "post"},
 *     itemOperations={}
 * )
 */
class Feedback
{
    /**
     * @var int The id of this feedback.
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

     /**
     * @var string The trouble of this feedback.
     *
     * @ORM\Column
     */
    public $trouble;

     /**
     * @var string The message of this feedback.
     *
     * @ORM\Column
     */
    public $message;

     /**
     * @var string The contact of this feedback.
     *
     * @ORM\Column
     */
    public $contact;

     /**
     * @var int The user of this feedback.
     *
     * @ORM\Column(type="integer")
     */
    public $user;

        public function __construct()
    {
        $this->reviews = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }
}