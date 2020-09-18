<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\GoodBinaryRepository")
 */
class GoodBinary
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="binary")
     */
    private $simpleUuid;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSimpleUuid()
    {
        return $this->simpleUuid;
    }

    public function setSimpleUuid($simpleUuid): self
    {
        $this->simpleUuid = $simpleUuid;

        return $this;
    }
}
