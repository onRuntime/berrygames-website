<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfIp
 *
 * @ORM\Table(name="xf_ip", indexes={@ORM\Index(name="content_type_content_id", columns={"content_type", "content_id"}), @ORM\Index(name="log_date", columns={"log_date"}), @ORM\Index(name="user_id_log_date", columns={"user_id", "log_date"}), @ORM\Index(name="ip_log_date", columns={"ip", "log_date"})})
 * @ORM\Entity
 */
class XfIp
{
    /**
     * @var int
     *
     * @ORM\Column(name="ip_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ipId;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $userId;

    /**
     * @var binary
     *
     * @ORM\Column(name="content_type", type="binary", nullable=false)
     */
    private $contentType;

    /**
     * @var int
     *
     * @ORM\Column(name="content_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $contentId;

    /**
     * @var binary
     *
     * @ORM\Column(name="action", type="binary", nullable=false)
     */
    private $action = '';

    /**
     * @var binary
     *
     * @ORM\Column(name="ip", type="binary", nullable=false)
     */
    private $ip;

    /**
     * @var int
     *
     * @ORM\Column(name="log_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $logDate;

    public function getIpId(): ?int
    {
        return $this->ipId;
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

    public function setContentId(int $contentId): self
    {
        $this->contentId = $contentId;

        return $this;
    }

    public function getAction()
    {
        return $this->action;
    }

    public function setAction($action): self
    {
        $this->action = $action;

        return $this;
    }

    public function getIp()
    {
        return $this->ip;
    }

    public function setIp($ip): self
    {
        $this->ip = $ip;

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


}
