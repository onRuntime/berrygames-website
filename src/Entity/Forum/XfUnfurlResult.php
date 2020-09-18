<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfUnfurlResult
 *
 * @ORM\Table(name="xf_unfurl_result", uniqueConstraints={@ORM\UniqueConstraint(name="url_hash", columns={"url_hash"})}, indexes={@ORM\Index(name="last_request_date", columns={"last_request_date"})})
 * @ORM\Entity
 */
class XfUnfurlResult
{
    /**
     * @var int
     *
     * @ORM\Column(name="result_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $resultId;

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
     * @var string|null
     *
     * @ORM\Column(name="title", type="text", length=65535, nullable=true)
     */
    private $title;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="image_url", type="text", length=65535, nullable=true)
     */
    private $imageUrl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="favicon_url", type="text", length=65535, nullable=true)
     */
    private $faviconUrl;

    /**
     * @var int
     *
     * @ORM\Column(name="last_request_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $lastRequestDate = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="pending", type="boolean", nullable=false)
     */
    private $pending = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="error_count", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $errorCount = '0';

    public function getResultId(): ?int
    {
        return $this->resultId;
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

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getImageUrl(): ?string
    {
        return $this->imageUrl;
    }

    public function setImageUrl(?string $imageUrl): self
    {
        $this->imageUrl = $imageUrl;

        return $this;
    }

    public function getFaviconUrl(): ?string
    {
        return $this->faviconUrl;
    }

    public function setFaviconUrl(?string $faviconUrl): self
    {
        $this->faviconUrl = $faviconUrl;

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

    public function getPending(): ?bool
    {
        return $this->pending;
    }

    public function setPending(bool $pending): self
    {
        $this->pending = $pending;

        return $this;
    }

    public function getErrorCount(): ?int
    {
        return $this->errorCount;
    }

    public function setErrorCount(int $errorCount): self
    {
        $this->errorCount = $errorCount;

        return $this;
    }


}
