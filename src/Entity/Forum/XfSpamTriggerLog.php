<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfSpamTriggerLog
 *
 * @ORM\Table(name="xf_spam_trigger_log", uniqueConstraints={@ORM\UniqueConstraint(name="content_type", columns={"content_type", "content_id"})}, indexes={@ORM\Index(name="log_date", columns={"log_date"})})
 * @ORM\Entity
 */
class XfSpamTriggerLog
{
    /**
     * @var int
     *
     * @ORM\Column(name="trigger_log_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $triggerLogId;

    /**
     * @var binary
     *
     * @ORM\Column(name="content_type", type="binary", nullable=false)
     */
    private $contentType;

    /**
     * @var int|null
     *
     * @ORM\Column(name="content_id", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $contentId;

    /**
     * @var int
     *
     * @ORM\Column(name="log_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $logDate;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $userId;

    /**
     * @var binary
     *
     * @ORM\Column(name="ip_address", type="binary", nullable=false)
     */
    private $ipAddress;

    /**
     * @var binary
     *
     * @ORM\Column(name="result", type="binary", nullable=false)
     */
    private $result;

    /**
     * @var string
     *
     * @ORM\Column(name="details", type="blob", length=16777215, nullable=false)
     */
    private $details;

    /**
     * @var string
     *
     * @ORM\Column(name="request_state", type="blob", length=16777215, nullable=false)
     */
    private $requestState;

    public function getTriggerLogId(): ?int
    {
        return $this->triggerLogId;
    }

    public function getContentType()
    {
        return $this->contentType;
    }

    public function setContentType($contentType): self
    {
        $this->contentType = $contentType;

        return $this;
    }

    public function getContentId(): ?int
    {
        return $this->contentId;
    }

    public function setContentId(?int $contentId): self
    {
        $this->contentId = $contentId;

        return $this;
    }

    public function getLogDate(): ?int
    {
        return $this->logDate;
    }

    public function setLogDate(int $logDate): self
    {
        $this->logDate = $logDate;

        return $this;
    }

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    public function getIpAddress()
    {
        return $this->ipAddress;
    }

    public function setIpAddress($ipAddress): self
    {
        $this->ipAddress = $ipAddress;

        return $this;
    }

    public function getResult()
    {
        return $this->result;
    }

    public function setResult($result): self
    {
        $this->result = $result;

        return $this;
    }

    public function getDetails()
    {
        return $this->details;
    }

    public function setDetails($details): self
    {
        $this->details = $details;

        return $this;
    }

    public function getRequestState()
    {
        return $this->requestState;
    }

    public function setRequestState($requestState): self
    {
        $this->requestState = $requestState;

        return $this;
    }


}
