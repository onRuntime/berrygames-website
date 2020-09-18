<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfImageProxy
 *
 * @ORM\Table(name="xf_image_proxy", uniqueConstraints={@ORM\UniqueConstraint(name="url_hash", columns={"url_hash"})}, indexes={@ORM\Index(name="pruned_fetch_date", columns={"pruned", "fetch_date"}), @ORM\Index(name="last_request_date", columns={"last_request_date"}), @ORM\Index(name="is_processing", columns={"is_processing"})})
 * @ORM\Entity
 */
class XfImageProxy
{
    /**
     * @var int
     *
     * @ORM\Column(name="image_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $imageId;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="text", length=65535, nullable=false)
     */
    private $url;

    /**
     * @var binary
     *
     * @ORM\Column(name="url_hash", type="binary", nullable=false)
     */
    private $urlHash;

    /**
     * @var int
     *
     * @ORM\Column(name="file_size", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $fileSize = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="file_name", type="string", length=250, nullable=false)
     */
    private $fileName = '';

    /**
     * @var string
     *
     * @ORM\Column(name="mime_type", type="string", length=100, nullable=false)
     */
    private $mimeType = '';

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

    public function getImageId(): ?int
    {
        return $this->imageId;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function getUrlHash()
    {
        return $this->urlHash;
    }

    public function setUrlHash($urlHash): self
    {
        $this->urlHash = $urlHash;

        return $this;
    }

    public function getFileSize(): ?int
    {
        return $this->fileSize;
    }

    public function setFileSize(int $fileSize): self
    {
        $this->fileSize = $fileSize;

        return $this;
    }

    public function getFileName(): ?string
    {
        return $this->fileName;
    }

    public function setFileName(string $fileName): self
    {
        $this->fileName = $fileName;

        return $this;
    }

    public function getMimeType(): ?string
    {
        return $this->mimeType;
    }

    public function setMimeType(string $mimeType): self
    {
        $this->mimeType = $mimeType;

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
