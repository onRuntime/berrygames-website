<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfErrorLog
 *
 * @ORM\Table(name="xf_error_log", indexes={@ORM\Index(name="exception_date", columns={"exception_date"})})
 * @ORM\Entity
 */
class XfErrorLog
{
    /**
     * @var int
     *
     * @ORM\Column(name="error_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $errorId;

    /**
     * @var int
     *
     * @ORM\Column(name="exception_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $exceptionDate;

    /**
     * @var int|null
     *
     * @ORM\Column(name="user_id", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $userId;

    /**
     * @var binary
     *
     * @ORM\Column(name="ip_address", type="binary", nullable=false)
     */
    private $ipAddress = '';

    /**
     * @var string
     *
     * @ORM\Column(name="exception_type", type="string", length=75, nullable=false)
     */
    private $exceptionType;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text", length=65535, nullable=false)
     */
    private $message;

    /**
     * @var string
     *
     * @ORM\Column(name="filename", type="string", length=255, nullable=false)
     */
    private $filename;

    /**
     * @var int
     *
     * @ORM\Column(name="line", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $line;

    /**
     * @var string
     *
     * @ORM\Column(name="trace_string", type="text", length=16777215, nullable=false)
     */
    private $traceString;

    /**
     * @var string
     *
     * @ORM\Column(name="request_state", type="blob", length=16777215, nullable=false)
     */
    private $requestState;

    public function getErrorId(): ?int
    {
        return $this->errorId;
    }

    public function getExceptionDate(): ?int
    {
        return $this->exceptionDate;
    }

    public function setExceptionDate(int $exceptionDate): self
    {
        $this->exceptionDate = $exceptionDate;

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

    public function getIpAddress()
    {
        return $this->ipAddress;
    }

    public function setIpAddress($ipAddress): self
    {
        $this->ipAddress = $ipAddress;

        return $this;
    }

    public function getExceptionType(): ?string
    {
        return $this->exceptionType;
    }

    public function setExceptionType(string $exceptionType): self
    {
        $this->exceptionType = $exceptionType;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }

    public function getFilename(): ?string
    {
        return $this->filename;
    }

    public function setFilename(string $filename): self
    {
        $this->filename = $filename;

        return $this;
    }

    public function getLine(): ?int
    {
        return $this->line;
    }

    public function setLine(int $line): self
    {
        $this->line = $line;

        return $this;
    }

    public function getTraceString(): ?string
    {
        return $this->traceString;
    }

    public function setTraceString(string $traceString): self
    {
        $this->traceString = $traceString;

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
