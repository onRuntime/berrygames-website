<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfApiKey
 *
 * @ORM\Table(name="xf_api_key", uniqueConstraints={@ORM\UniqueConstraint(name="api_key_hash", columns={"api_key_hash"})})
 * @ORM\Entity
 */
class XfApiKey
{
    /**
     * @var int
     *
     * @ORM\Column(name="api_key_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $apiKeyId;

    /**
     * @var binary
     *
     * @ORM\Column(name="api_key", type="binary", nullable=false)
     */
    private $apiKey;

    /**
     * @var binary
     *
     * @ORM\Column(name="api_key_hash", type="binary", nullable=false)
     */
    private $apiKeyHash;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=50, nullable=false)
     */
    private $title = '';

    /**
     * @var bool
     *
     * @ORM\Column(name="is_super_user", type="boolean", nullable=false)
     */
    private $isSuperUser;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $userId = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="allow_all_scopes", type="boolean", nullable=false)
     */
    private $allowAllScopes;

    /**
     * @var string
     *
     * @ORM\Column(name="scopes", type="blob", length=16777215, nullable=false)
     */
    private $scopes;

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active;

    /**
     * @var int
     *
     * @ORM\Column(name="creation_user_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $creationUserId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="creation_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $creationDate = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="last_use_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $lastUseDate = '0';

    public function getApiKeyId(): ?int
    {
        return $this->apiKeyId;
    }

    public function getApiKey()
    {
        return $this->apiKey;
    }

    public function setApiKey($apiKey): self
    {
        $this->apiKey = $apiKey;

        return $this;
    }

    public function getApiKeyHash()
    {
        return $this->apiKeyHash;
    }

    public function setApiKeyHash($apiKeyHash): self
    {
        $this->apiKeyHash = $apiKeyHash;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getIsSuperUser(): ?bool
    {
        return $this->isSuperUser;
    }

    public function setIsSuperUser(bool $isSuperUser): self
    {
        $this->isSuperUser = $isSuperUser;

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

    public function getAllowAllScopes(): ?bool
    {
        return $this->allowAllScopes;
    }

    public function setAllowAllScopes(bool $allowAllScopes): self
    {
        $this->allowAllScopes = $allowAllScopes;

        return $this;
    }

    public function getScopes()
    {
        return $this->scopes;
    }

    public function setScopes($scopes): self
    {
        $this->scopes = $scopes;

        return $this;
    }

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function getCreationUserId(): ?int
    {
        return $this->creationUserId;
    }

    public function setCreationUserId(int $creationUserId): self
    {
        $this->creationUserId = $creationUserId;

        return $this;
    }

    public function getCreationDate(): ?int
    {
        return $this->creationDate;
    }

    public function setCreationDate(int $creationDate): self
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    public function getLastUseDate(): ?int
    {
        return $this->lastUseDate;
    }

    public function setLastUseDate(int $lastUseDate): self
    {
        $this->lastUseDate = $lastUseDate;

        return $this;
    }


}
