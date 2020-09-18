<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfMailQueue
 *
 * @ORM\Table(name="xf_mail_queue", indexes={@ORM\Index(name="send_date_queue_date", columns={"send_date", "queue_date"})})
 * @ORM\Entity
 */
class XfMailQueue
{
    /**
     * @var int
     *
     * @ORM\Column(name="mail_queue_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $mailQueueId;

    /**
     * @var string
     *
     * @ORM\Column(name="mail_data", type="blob", length=16777215, nullable=false)
     */
    private $mailData;

    /**
     * @var int
     *
     * @ORM\Column(name="queue_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $queueDate;

    /**
     * @var int
     *
     * @ORM\Column(name="send_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $sendDate = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="fail_date", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $failDate;

    /**
     * @var int
     *
     * @ORM\Column(name="fail_count", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $failCount = '0';

    public function getMailQueueId(): ?int
    {
        return $this->mailQueueId;
    }

    public function getMailData()
    {
        return $this->mailData;
    }

    public function setMailData($mailData): self
    {
        $this->mailData = $mailData;

        return $this;
    }

    public function getQueueDate(): ?int
    {
        return $this->queueDate;
    }

    public function setQueueDate(int $queueDate): self
    {
        $this->queueDate = $queueDate;

        return $this;
    }

    public function getSendDate(): ?int
    {
        return $this->sendDate;
    }

    public function setSendDate(int $sendDate): self
    {
        $this->sendDate = $sendDate;

        return $this;
    }

    public function getFailDate(): ?int
    {
        return $this->failDate;
    }

    public function setFailDate(?int $failDate): self
    {
        $this->failDate = $failDate;

        return $this;
    }

    public function getFailCount(): ?int
    {
        return $this->failCount;
    }

    public function setFailCount(int $failCount): self
    {
        $this->failCount = $failCount;

        return $this;
    }


}
