<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfUserFollow
 *
 * @ORM\Table(name="xf_user_follow", indexes={@ORM\Index(name="follow_user_id", columns={"follow_user_id"})})
 * @ORM\Entity
 */
class XfUserFollow
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
     * @ORM\Column(name="follow_user_id", type="integer", nullable=false, options={"unsigned"=true,"comment"="User being followed"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $followUserId;

    /**
     * @var int
     *
     * @ORM\Column(name="follow_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $followDate = '0';

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function getFollowUserId(): ?int
    {
        return $this->followUserId;
    }

    public function getFollowDate(): ?int
    {
        return $this->followDate;
    }

    public function setFollowDate(int $followDate): self
    {
        $this->followDate = $followDate;

        return $this;
    }


}
