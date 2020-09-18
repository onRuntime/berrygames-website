<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfEmailBounceLog
 *
 * @ORM\Table(name="xf_email_bounce_log", indexes={@ORM\Index(name="log_date", columns={"log_date"})})
 * @ORM\Entity
 */
class XfEmailBounceLog
{
    /**
     * @var int
     *
     * @ORM\Column(name="bounce_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $bounceId;

    /**
     * @var int
     *
     * @ORM\Column(name="log_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $logDate;

    /**
     * @var int
     *
     * @ORM\Column(name="email_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $emailDate;

    /**
     * @var string
     *
     * @ORM\Column(name="message_type", type="string", length=25, nullable=false)
     */
    private $messageType;

    /**
     * @var string
     *
     * @ORM\Column(name="action_taken", type="string", length=25, nullable=false)
     */
    private $actionTaken;

    /**
     * @var int|null
     *
     * @ORM\Column(name="user_id", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $userId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="recipient", type="string", length=255, nullable=true)
     */
    private $recipient;

    /**
     * @var string
     *
     * @ORM\Column(name="raw_message", type="blob", length=16777215, nullable=false)
     */
    private $rawMessage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="status_code", type="string", length=25, nullable=true)
     */
    private $statusCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="diagnostic_info", type="text", length=65535, nullable=true)
     */
    private $diagnosticInfo;

    public function getBounceId(): ?int
    {
        return $this->bounceId;
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

    public function getEmailDate(): ?int
    {
        return $this->emailDate;
    }

    public function setEmailDate(int $emailDate): self
    {
        $this->emailDate = $emailDate;

        return $this;
    }

    public function getMessageType(): ?string
    {
        return $this->messageType;
    }

    public function setMessageType(string $messageType): self
    {
        $this->messageType = $messageType;

        return $this;
    }

    public function getActionTaken(): ?string
    {
        return $this->actionTaken;
    }

    public function setActionTaken(string $actionTaken): self
    {
        $this->actionTaken = $actionTaken;

        return $this;
    }

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function setUserId(?int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    public function getRecipient(): ?string
    {
        return $this->recipient;
    }

    public function setRecipient(?string $recipient): self
    {
        $this->recipient = $recipient;

        return $this;
    }

    public function getRawMessage()
    {
        return $this->rawMessage;
    }

    public function setRawMessage($rawMessage): self
    {
        $this->rawMessage = $rawMessage;

        return $this;
    }

    public function getStatusCode(): ?string
    {
        return $this->statusCode;
    }

    public function setStatusCode(?string $statusCode): self
    {
        $this->statusCode = $statusCode;

        return $this;
    }

    public function getDiagnosticInfo(): ?string
    {
        return $this->diagnosticInfo;
    }

    public function setDiagnosticInfo(?string $diagnosticInfo): self
    {
        $this->diagnosticInfo = $diagnosticInfo;

        return $this;
    }


}
