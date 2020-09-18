<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfFindNew
 *
 * @ORM\Table(name="xf_find_new", indexes={@ORM\Index(name="type_user_date", columns={"content_type", "user_id", "cache_date"}), @ORM\Index(name="cache_date", columns={"cache_date"})})
 * @ORM\Entity
 */
class XfFindNew
{
    /**
     * @var int
     *
     * @ORM\Column(name="find_new_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $findNewId;

    /**
     * @var binary
     *
     * @ORM\Column(name="content_type", type="binary", nullable=false)
     */
    private $contentType;

    /**
     * @var string
     *
     * @ORM\Column(name="filters", type="blob", length=16777215, nullable=false)
     */
    private $filters;

    /**
     * @var binary
     *
     * @ORM\Column(name="filter_hash", type="binary", nullable=false)
     */
    private $filterHash = '';

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="results", type="blob", length=16777215, nullable=false)
     */
    private $results;

    /**
     * @var int
     *
     * @ORM\Column(name="cache_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $cacheDate;

    public function getFindNewId(): ?int
    {
        return $this->findNewId;
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

    public function getFilters()
    {
        return $this->filters;
    }

    public function setFilters($filters): self
    {
        $this->filters = $filters;

        return $this;
    }

    public function getFilterHash()
    {
        return $this->filterHash;
    }

    public function setFilterHash($filterHash): self
    {
        $this->filterHash = $filterHash;

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

    public function getResults()
    {
        return $this->results;
    }

    public function setResults($results): self
    {
        $this->results = $results;

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


}
