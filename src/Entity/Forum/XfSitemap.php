<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfSitemap
 *
 * @ORM\Table(name="xf_sitemap", indexes={@ORM\Index(name="is_active", columns={"is_active"})})
 * @ORM\Entity
 */
class XfSitemap
{
    /**
     * @var int
     *
     * @ORM\Column(name="sitemap_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $sitemapId;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_active", type="boolean", nullable=false)
     */
    private $isActive;

    /**
     * @var int
     *
     * @ORM\Column(name="file_count", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $fileCount;

    /**
     * @var int
     *
     * @ORM\Column(name="entry_count", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $entryCount = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="is_compressed", type="boolean", nullable=false)
     */
    private $isCompressed;

    /**
     * @var int|null
     *
     * @ORM\Column(name="complete_date", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $completeDate;

    public function getSitemapId(): ?int
    {
        return $this->sitemapId;
    }

    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }

    public function setIsActive(bool $isActive): self
    {
        $this->isActive = $isActive;

        return $this;
    }

    public function getFileCount(): ?int
    {
        return $this->fileCount;
    }

    public function setFileCount(int $fileCount): self
    {
        $this->fileCount = $fileCount;

        return $this;
    }

    public function getEntryCount(): ?int
    {
        return $this->entryCount;
    }

    public function setEntryCount(int $entryCount): self
    {
        $this->entryCount = $entryCount;

        return $this;
    }

    public function getIsCompressed(): ?bool
    {
        return $this->isCompressed;
    }

    public function setIsCompressed(bool $isCompressed): self
    {
        $this->isCompressed = $isCompressed;

        return $this;
    }

    public function getCompleteDate(): ?int
    {
        return $this->completeDate;
    }

    public function setCompleteDate(?int $completeDate): self
    {
        $this->completeDate = $completeDate;

        return $this;
    }


}
