<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfSearch
 *
 * @ORM\Table(name="xf_search", indexes={@ORM\Index(name="query_hash", columns={"query_hash"}), @ORM\Index(name="search_date", columns={"search_date"})})
 * @ORM\Entity
 */
class XfSearch
{
    /**
     * @var int
     *
     * @ORM\Column(name="search_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $searchId;

    /**
     * @var string
     *
     * @ORM\Column(name="search_results", type="blob", length=16777215, nullable=false)
     */
    private $searchResults;

    /**
     * @var int
     *
     * @ORM\Column(name="result_count", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $resultCount;

    /**
     * @var string
     *
     * @ORM\Column(name="search_type", type="string", length=25, nullable=false)
     */
    private $searchType;

    /**
     * @var string
     *
     * @ORM\Column(name="search_query", type="string", length=200, nullable=false)
     */
    private $searchQuery;

    /**
     * @var string
     *
     * @ORM\Column(name="search_constraints", type="blob", length=16777215, nullable=false)
     */
    private $searchConstraints;

    /**
     * @var string
     *
     * @ORM\Column(name="search_order", type="string", length=50, nullable=false)
     */
    private $searchOrder;

    /**
     * @var bool
     *
     * @ORM\Column(name="search_grouping", type="boolean", nullable=false)
     */
    private $searchGrouping = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="user_results", type="blob", length=16777215, nullable=false)
     */
    private $userResults;

    /**
     * @var string
     *
     * @ORM\Column(name="warnings", type="blob", length=16777215, nullable=false)
     */
    private $warnings;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $userId;

    /**
     * @var int
     *
     * @ORM\Column(name="search_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $searchDate;

    /**
     * @var string
     *
     * @ORM\Column(name="query_hash", type="string", length=32, nullable=false)
     */
    private $queryHash = '';

    public function getSearchId(): ?int
    {
        return $this->searchId;
    }

    public function getSearchResults()
    {
        return $this->searchResults;
    }

    public function setSearchResults($searchResults): self
    {
        $this->searchResults = $searchResults;

        return $this;
    }

    public function getResultCount(): ?int
    {
        return $this->resultCount;
    }

    public function setResultCount(int $resultCount): self
    {
        $this->resultCount = $resultCount;

        return $this;
    }

    public function getSearchType(): ?string
    {
        return $this->searchType;
    }

    public function setSearchType(string $searchType): self
    {
        $this->searchType = $searchType;

        return $this;
    }

    public function getSearchQuery(): ?string
    {
        return $this->searchQuery;
    }

    public function setSearchQuery(string $searchQuery): self
    {
        $this->searchQuery = $searchQuery;

        return $this;
    }

    public function getSearchConstraints()
    {
        return $this->searchConstraints;
    }

    public function setSearchConstraints($searchConstraints): self
    {
        $this->searchConstraints = $searchConstraints;

        return $this;
    }

    public function getSearchOrder(): ?string
    {
        return $this->searchOrder;
    }

    public function setSearchOrder(string $searchOrder): self
    {
        $this->searchOrder = $searchOrder;

        return $this;
    }

    public function getSearchGrouping(): ?bool
    {
        return $this->searchGrouping;
    }

    public function setSearchGrouping(bool $searchGrouping): self
    {
        $this->searchGrouping = $searchGrouping;

        return $this;
    }

    public function getUserResults()
    {
        return $this->userResults;
    }

    public function setUserResults($userResults): self
    {
        $this->userResults = $userResults;

        return $this;
    }

    public function getWarnings()
    {
        return $this->warnings;
    }

    public function setWarnings($warnings): self
    {
        $this->warnings = $warnings;

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

    public function getSearchDate(): ?int
    {
        return $this->searchDate;
    }

    public function setSearchDate(int $searchDate): self
    {
        $this->searchDate = $searchDate;

        return $this;
    }

    public function getQueryHash(): ?string
    {
        return $this->queryHash;
    }

    public function setQueryHash(string $queryHash): self
    {
        $this->queryHash = $queryHash;

        return $this;
    }


}
