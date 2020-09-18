<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfNoticeDismissed
 *
 * @ORM\Table(name="xf_notice_dismissed", indexes={@ORM\Index(name="user_id", columns={"user_id"})})
 * @ORM\Entity
 */
class XfNoticeDismissed
{
    /**
     * @var int
     *
     * @ORM\Column(name="notice_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $noticeId;

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
     * @ORM\Column(name="dismiss_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $dismissDate = '0';

    public function getNoticeId(): ?int
    {
        return $this->noticeId;
    }

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function getDismissDate(): ?int
    {
        return $this->dismissDate;
    }

    public function setDismissDate(int $dismissDate): self
    {
        $this->dismissDate = $dismissDate;

        return $this;
    }


}
