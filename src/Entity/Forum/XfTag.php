<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfTag
 *
 * @ORM\Table(name="xf_tag", uniqueConstraints={@ORM\UniqueConstraint(name="tag_url", columns={"tag_url"}), @ORM\UniqueConstraint(name="tag", columns={"tag"})}, indexes={@ORM\Index(name="use_count", columns={"use_count"})})
 * @ORM\Entity
 */
class XfTag
{
    /**
     * @var int
     *
     * @ORM\Column(name="tag_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tagId;

    /**
     * @var string
     *
     * @ORM\Column(name="tag", type="string", length=100, nullable=false)
     */
    private $tag;

    /**
     * @var string
     *
     * @ORM\Column(name="tag_url", type="string", length=100, nullable=false)
     */
    private $tagUrl;

    /**
     * @var int
     *
     * @ORM\Column(name="use_count", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $useCount = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="last_use_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $lastUseDate = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="permanent", type="boolean", nullable=false)
     */
    private $permanent = '0';

    public function getTagId(): ?int
    {
        return $this->tagId;
    }

    public function getTag(): ?string
    {
        return $this->tag;
    }

    public function setTag(string $tag): self
    {
        $this->tag = $tag;

        return $this;
    }

    public function getTagUrl(): ?string
    {
        return $this->tagUrl;
    }

    public function setTagUrl(string $tagUrl): self
    {
        $this->tagUrl = $tagUrl;

        return $this;
    }

    public function getUseCount(): ?int
    {
        return $this->useCount;
    }

    public function setUseCount(int $useCount): self
    {
        $this->useCount = $useCount;

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

    public function getPermanent(): ?bool
    {
        return $this->permanent;
    }

    public function setPermanent(bool $permanent): self
    {
        $this->permanent = $permanent;

        return $this;
    }


}
