<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfAdminLog
 *
 * @ORM\Table(name="xf_admin_log", indexes={@ORM\Index(name="user_id_request_date", columns={"user_id", "request_date"}), @ORM\Index(name="request_date", columns={"request_date"})})
 * @ORM\Entity
 */
class XfAdminLog
{
    /**
     * @var int
     *
     * @ORM\Column(name="admin_log_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $adminLogId;

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
    private $ipAddress = '';

    /**
     * @var int
     *
     * @ORM\Column(name="request_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $requestDate;

    /**
     * @var string
     *
     * @ORM\Column(name="request_url", type="text", length=65535, nullable=false)
     */
    private $requestUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="request_data", type="blob", length=16777215, nullable=false)
     */
    private $requestData;

    public function getAdminLogId(): ?int
    {
        return $this->adminLogId;
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

    public function getRequestDate(): ?int
    {
        return $this->requestDate;
    }

    public function setRequestDate(int $requestDate): self
    {
        $this->requestDate = $requestDate;

        return $this;
    }

    public function getRequestUrl(): ?string
    {
        return $this->requestUrl;
    }

    public function setRequestUrl(string $requestUrl): self
    {
        $this->requestUrl = $requestUrl;

        return $this;
    }

    public function getRequestData()
    {
        return $this->requestData;
    }

    public function setRequestData($requestData): self
    {
        $this->requestData = $requestData;

        return $this;
    }


}
