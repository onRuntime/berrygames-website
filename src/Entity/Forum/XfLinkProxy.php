<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfLinkProxy
 *
 * @ORM\Table(name="xf_link_proxy", uniqueConstraints={@ORM\UniqueConstraint(name="url_hash", columns={"url_hash"})}, indexes={@ORM\Index(name="last_request_date", columns={"last_request_date"})})
 * @ORM\Entity
 */
class XfLinkProxy
{
    /**
     * @var int
     *
     * @ORM\Column(name="link_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $linkId;

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
     * @ORM\Column(name="hits", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $hits = '0';

    public function getLinkId(): ?int
    {
        return $this->linkId;
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

    public function getHits(): ?int
    {
        return $this->hits;
    }

    public function setHits(int $hits): self
    {
        $this->hits = $hits;

        return $this;
    }


}
