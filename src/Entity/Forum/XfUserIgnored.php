<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfUserIgnored
 *
 * @ORM\Table(name="xf_user_ignored", indexes={@ORM\Index(name="ignored_user_id", columns={"ignored_user_id"})})
 * @ORM\Entity
 */
class XfUserIgnored
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
     * @var int
     *
     * @ORM\Column(name="ignored_user_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ignoredUserId;

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function getIgnoredUserId(): ?int
    {
        return $this->ignoredUserId;
    }


}
