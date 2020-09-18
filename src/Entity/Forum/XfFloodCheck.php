<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfFloodCheck
 *
 * @ORM\Table(name="xf_flood_check", indexes={@ORM\Index(name="flood_time", columns={"flood_time"})})
 * @ORM\Entity
 */
class XfFloodCheck
{
    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="flood_action", type="string", length=25, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $floodAction;

    /**
     * @var int
     *
     * @ORM\Column(name="flood_time", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $floodTime;

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function getFloodAction(): ?string
    {
        return $this->floodAction;
    }

    public function getFloodTime(): ?int
    {
        return $this->floodTime;
    }

    public function setFloodTime(int $floodTime): self
    {
        $this->floodTime = $floodTime;

        return $this;
    }


}
