<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfImageProxyReferrer
 *
 * @ORM\Table(name="xf_image_proxy_referrer", uniqueConstraints={@ORM\UniqueConstraint(name="image_id_hash", columns={"image_id", "referrer_hash"})}, indexes={@ORM\Index(name="last_date", columns={"last_date"})})
 * @ORM\Entity
 */
class XfImageProxyReferrer
{
    /**
     * @var int
     *
     * @ORM\Column(name="referrer_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $referrerId;

    /**
     * @var int
     *
     * @ORM\Column(name="image_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $imageId;

    /**
     * @var binary
     *
     * @ORM\Column(name="referrer_hash", type="binary", nullable=false)
     */
    private $referrerHash;

    /**
     * @var string
     *
     * @ORM\Column(name="referrer_url", type="text", length=65535, nullable=false)
     */
    private $referrerUrl;

    /**
     * @var int
     *
     * @ORM\Column(name="hits", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $hits;

    /**
     * @var int
     *
     * @ORM\Column(name="first_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $firstDate;

    /**
     * @var int
     *
     * @ORM\Column(name="last_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $lastDate;

    public function getReferrerId(): ?int
    {
        return $this->referrerId;
    }

    public function getImageId(): ?int
    {
        return $this->imageId;
    }

    public function setImageId(int $imageId): self
    {
        $this->imageId = $imageId;

        return $this;
    }

    public function getReferrerHash()
    {
        return $this->referrerHash;
    }

    public function setReferrerHash($referrerHash): self
    {
        $this->referrerHash = $referrerHash;

        return $this;
    }

    public function getReferrerUrl(): ?string
    {
        return $this->referrerUrl;
    }

    public function setReferrerUrl(string $referrerUrl): self
    {
        $this->referrerUrl = $referrerUrl;

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

    public function getFirstDate(): ?int
    {
        return $this->firstDate;
    }

    public function setFirstDate(int $firstDate): self
    {
        $this->firstDate = $firstDate;

        return $this;
    }

    public function getLastDate(): ?int
    {
        return $this->lastDate;
    }

    public function setLastDate(int $lastDate): self
    {
        $this->lastDate = $lastDate;

        return $this;
    }


}
