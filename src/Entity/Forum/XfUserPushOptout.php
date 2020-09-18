<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfUserPushOptout
 *
 * @ORM\Table(name="xf_user_push_optout")
 * @ORM\Entity
 */
class XfUserPushOptout
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
     * @var binary
     *
     * @ORM\Column(name="push", type="binary", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $push;

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function getPush()
    {
        return $this->push;
    }


}
