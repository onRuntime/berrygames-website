<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfContentSpamCache
 *
 * @ORM\Table(name="xf_content_spam_cache", uniqueConstraints={@ORM\UniqueConstraint(name="content_type", columns={"content_type", "content_id"})}, indexes={@ORM\Index(name="insert_date", columns={"insert_date"})})
 * @ORM\Entity
 */
class XfContentSpamCache
{
    /**
     * @var int
     *
     * @ORM\Column(name="spam_cache_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $spamCacheId;

    /**
     * @var binary
     *
     * @ORM\Column(name="content_type", type="binary", nullable=false)
     */
    private $contentType;

    /**
     * @var int
     *
     * @ORM\Column(name="content_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $contentId;

    /**
     * @var string
     *
     * @ORM\Column(name="spam_params", type="blob", length=16777215, nullable=false)
     */
    private $spamParams;

    /**
     * @var int
     *
     * @ORM\Column(name="insert_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $insertDate;

    public function getSpamCacheId(): ?int
    {
        return $this->spamCacheId;
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

    public function getContentId(): ?int
    {
        return $this->contentId;
    }

    public function setContentId(int $contentId): self
    {
        $this->contentId = $contentId;

        return $this;
    }

    public function getSpamParams()
    {
        return $this->spamParams;
    }

    public function setSpamParams($spamParams): self
    {
        $this->spamParams = $spamParams;

        return $this;
    }

    public function getInsertDate(): ?int
    {
        return $this->insertDate;
    }

    public function setInsertDate(int $insertDate): self
    {
        $this->insertDate = $insertDate;

        return $this;
    }


}
