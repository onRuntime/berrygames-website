<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfForumWatch
 *
 * @ORM\Table(name="xf_forum_watch", indexes={@ORM\Index(name="node_id_notify_on", columns={"node_id", "notify_on"})})
 * @ORM\Entity
 */
class XfForumWatch
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
     * @ORM\Column(name="node_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $nodeId;

    /**
     * @var string
     *
     * @ORM\Column(name="notify_on", type="string", length=0, nullable=false)
     */
    private $notifyOn;

    /**
     * @var bool
     *
     * @ORM\Column(name="send_alert", type="boolean", nullable=false)
     */
    private $sendAlert;

    /**
     * @var bool
     *
     * @ORM\Column(name="send_email", type="boolean", nullable=false)
     */
    private $sendEmail;

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function getNodeId(): ?int
    {
        return $this->nodeId;
    }

    public function getNotifyOn(): ?string
    {
        return $this->notifyOn;
    }

    public function setNotifyOn(string $notifyOn): self
    {
        $this->notifyOn = $notifyOn;

        return $this;
    }

    public function getSendAlert(): ?bool
    {
        return $this->sendAlert;
    }

    public function setSendAlert(bool $sendAlert): self
    {
        $this->sendAlert = $sendAlert;

        return $this;
    }

    public function getSendEmail(): ?bool
    {
        return $this->sendEmail;
    }

    public function setSendEmail(bool $sendEmail): self
    {
        $this->sendEmail = $sendEmail;

        return $this;
    }


}
