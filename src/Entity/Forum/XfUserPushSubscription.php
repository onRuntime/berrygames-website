<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfUserPushSubscription
 *
 * @ORM\Table(name="xf_user_push_subscription", uniqueConstraints={@ORM\UniqueConstraint(name="endpoint_hash", columns={"endpoint_hash"})}, indexes={@ORM\Index(name="user_id", columns={"user_id"})})
 * @ORM\Entity
 */
class XfUserPushSubscription
{
    /**
     * @var int
     *
     * @ORM\Column(name="endpoint_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $endpointId;

    /**
     * @var binary
     *
     * @ORM\Column(name="endpoint_hash", type="binary", nullable=false)
     */
    private $endpointHash;

    /**
     * @var string
     *
     * @ORM\Column(name="endpoint", type="text", length=65535, nullable=false)
     */
    private $endpoint;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $userId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="data", type="blob", length=16777215, nullable=true)
     */
    private $data;

    /**
     * @var int
     *
     * @ORM\Column(name="last_seen", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $lastSeen;

    public function getEndpointId(): ?int
    {
        return $this->endpointId;
    }

    public function getEndpointHash()
    {
        return $this->endpointHash;
    }

    public function setEndpointHash($endpointHash): self
    {
        $this->endpointHash = $endpointHash;

        return $this;
    }

    public function getEndpoint(): ?string
    {
        return $this->endpoint;
    }

    public function setEndpoint(string $endpoint): self
    {
        $this->endpoint = $endpoint;

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

    public function getData()
    {
        return $this->data;
    }

    public function setData($data): self
    {
        $this->data = $data;

        return $this;
    }

    public function getLastSeen(): ?int
    {
        return $this->lastSeen;
    }

    public function setLastSeen(int $lastSeen): self
    {
        $this->lastSeen = $lastSeen;

        return $this;
    }


}
