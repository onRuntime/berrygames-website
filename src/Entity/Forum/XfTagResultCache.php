<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfTagResultCache
 *
 * @ORM\Table(name="xf_tag_result_cache", uniqueConstraints={@ORM\UniqueConstraint(name="tag_id_user_id", columns={"tag_id", "user_id"})}, indexes={@ORM\Index(name="expiration_date", columns={"expiry_date"})})
 * @ORM\Entity
 */
class XfTagResultCache
{
    /**
     * @var int
     *
     * @ORM\Column(name="result_cache_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $resultCacheId;

    /**
     * @var int
     *
     * @ORM\Column(name="tag_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $tagId;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $userId;

    /**
     * @var int
     *
     * @ORM\Column(name="cache_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $cacheDate;

    /**
     * @var int
     *
     * @ORM\Column(name="expiry_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $expiryDate;

    /**
     * @var string
     *
     * @ORM\Column(name="results", type="blob", length=16777215, nullable=false)
     */
    private $results;

    public function getResultCacheId(): ?int
    {
        return $this->resultCacheId;
    }

    public function getTagId(): ?int
    {
        return $this->tagId;
    }

    public function setTagId(int $tagId): self
    {
        $this->tagId = $tagId;

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

    public function getCacheDate(): ?int
    {
        return $this->cacheDate;
    }

    public function setCacheDate(int $cacheDate): self
    {
        $this->cacheDate = $cacheDate;

        return $this;
    }

    public function getExpiryDate(): ?int
    {
        return $this->expiryDate;
    }

    public function setExpiryDate(int $expiryDate): self
    {
        $this->expiryDate = $expiryDate;

        return $this;
    }

    public function getResults()
    {
        return $this->results;
    }

    public function setResults($results): self
    {
        $this->results = $results;

        return $this;
    }


}
