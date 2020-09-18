<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfOembed
 *
 * @ORM\Table(name="xf_oembed", uniqueConstraints={@ORM\UniqueConstraint(name="media_hash", columns={"media_hash"})}, indexes={@ORM\Index(name="pruned_fetch_date", columns={"pruned", "fetch_date"}), @ORM\Index(name="last_request_date", columns={"last_request_date"}), @ORM\Index(name="is_processing", columns={"is_processing"})})
 * @ORM\Entity
 */
class XfOembed
{
    /**
     * @var int
     *
     * @ORM\Column(name="oembed_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $oembedId;

    /**
     * @var binary
     *
     * @ORM\Column(name="media_site_id", type="binary", nullable=false)
     */
    private $mediaSiteId;

    /**
     * @var binary
     *
     * @ORM\Column(name="media_id", type="binary", nullable=false)
     */
    private $mediaId;

    /**
     * @var binary
     *
     * @ORM\Column(name="media_hash", type="binary", nullable=false)
     */
    private $mediaHash;

    /**
     * @var string|null
     *
     * @ORM\Column(name="title", type="text", length=16777215, nullable=true)
     */
    private $title;

    /**
     * @var int
     *
     * @ORM\Column(name="fetch_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $fetchDate = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="first_request_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $firstRequestDate = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="last_request_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $lastRequestDate = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="views", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $views = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="pruned", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $pruned = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="is_processing", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $isProcessing = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="failed_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $failedDate = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="fail_count", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $failCount = '0';

    public function getOembedId(): ?int
    {
        return $this->oembedId;
    }

    public function getMediaSiteId()
    {
        return $this->mediaSiteId;
    }

    public function setMediaSiteId($mediaSiteId): self
    {
        $this->mediaSiteId = $mediaSiteId;

        return $this;
    }

    public function getMediaId()
    {
        return $this->mediaId;
    }

    public function setMediaId($mediaId): self
    {
        $this->mediaId = $mediaId;

        return $this;
    }

    public function getMediaHash()
    {
        return $this->mediaHash;
    }

    public function setMediaHash($mediaHash): self
    {
        $this->mediaHash = $mediaHash;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getFetchDate(): ?int
    {
        return $this->fetchDate;
    }

    public function setFetchDate(int $fetchDate): self
    {
        $this->fetchDate = $fetchDate;

        return $this;
    }

    public function getFirstRequestDate(): ?int
    {
        return $this->firstRequestDate;
    }

    public function setFirstRequestDate(int $firstRequestDate): self
    {
        $this->firstRequestDate = $firstRequestDate;

        return $this;
    }

    public function getLastRequestDate(): ?int
    {
        return $this->lastRequestDate;
    }

    public function setLastRequestDate(int $lastRequestDate): self
    {
        $this->lastRequestDate = $lastRequestDate;

        return $this;
    }

    public function getViews(): ?int
    {
        return $this->views;
    }

    public function setViews(int $views): self
    {
        $this->views = $views;

        return $this;
    }

    public function getPruned(): ?int
    {
        return $this->pruned;
    }

    public function setPruned(int $pruned): self
    {
        $this->pruned = $pruned;

        return $this;
    }

    public function getIsProcessing(): ?int
    {
        return $this->isProcessing;
    }

    public function setIsProcessing(int $isProcessing): self
    {
        $this->isProcessing = $isProcessing;

        return $this;
    }

    public function getFailedDate(): ?int
    {
        return $this->failedDate;
    }

    public function setFailedDate(int $failedDate): self
    {
        $this->failedDate = $failedDate;

        return $this;
    }

    public function getFailCount(): ?int
    {
        return $this->failCount;
    }

    public function setFailCount(int $failCount): self
    {
        $this->failCount = $failCount;

        return $this;
    }


}
