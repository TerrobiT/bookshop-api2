<?php
// api/src/Entity/User.php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * A user.
 *
 * @ORM\Entity
 @ApiResource
 */
class User
{
    /**
     * @var int The id of this user.
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

     /**
     * @var string The username of this user.
     *
     * @ORM\Column
     */
    public $username;

     /**
     * @var string The email of this user.
     *
     * @ORM\Column
     */
    public $email;

     /**
     * @var string The password of this feedback.
     *
     * @ORM\Column
     */
    public $password;

     /**
     * @var string The roles of this feedback.
     *
     * @ORM\Column
     */
    public $roles;

    public function __construct()
    {
        $this->reviews = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }
}