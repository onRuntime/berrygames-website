<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfThreadWatch
 *
 * @ORM\Table(name="xf_thread_watch", indexes={@ORM\Index(name="thread_id_email_subscribe", columns={"thread_id", "email_subscribe"})})
 * @ORM\Entity
 */
class XfThreadWatch
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
     * @ORM\Column(name="thread_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $threadId;

    /**
     * @var bool
     *
     * @ORM\Column(name="email_subscribe", type="boolean", nullable=false)
     */
    private $emailSubscribe = '0';

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function getThreadId(): ?int
    {
        return $this->threadId;
    }

    public function getEmailSubscribe(): ?bool
    {
        return $this->emailSubscribe;
    }

    public function setEmailSubscribe(bool $emailSubscribe): self
    {
        $this->emailSubscribe = $emailSubscribe;

        return $this;
    }


}
