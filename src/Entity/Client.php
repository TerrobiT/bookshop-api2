<?php
// api/src/Entity/Client.php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * A client.
 *
 * @ORM\Entity
 * @ApiResource(
 *     collectionOperations={"get", "post"},
 *     itemOperations={"get", "put"}
 * )
 */
class Client
{
    /**
     * @var int The id of this client.
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string The title of this client.
     *
     * @ORM\Column
     */
    public $name;
    
    public function __construct()
    {
        $this->reviews = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }
}
