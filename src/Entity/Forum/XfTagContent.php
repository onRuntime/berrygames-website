<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfTagContent
 *
 * @ORM\Table(name="xf_tag_content", uniqueConstraints={@ORM\UniqueConstraint(name="content_type_id_tag", columns={"content_type", "content_id", "tag_id"})}, indexes={@ORM\Index(name="tag_id_content_date", columns={"tag_id", "content_date"})})
 * @ORM\Entity
 */
class XfTagContent
{
    /**
     * @var int
     *
     * @ORM\Column(name="tag_content_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tagContentId;

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
     * @var int
     *
     * @ORM\Column(name="tag_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $tagId;

    /**
     * @var int
     *
     * @ORM\Column(name="add_user_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $addUserId;

    /**
     * @var int
     *
     * @ORM\Column(name="add_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $addDate;

    /**
     * @var bool
     *
     * @ORM\Column(name="visible", type="boolean", nullable=false)
     */
    private $visible;

    /**
     * @var int
     *
     * @ORM\Column(name="content_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $contentDate;

    public function getTagContentId(): ?int
    {
        return $this->tagContentId;
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

    public function getTagId(): ?int
    {
        return $this->tagId;
    }

    public function setTagId(int $tagId): self
    {
        $this->tagId = $tagId;

        return $this;
    }

    public function getAddUserId(): ?int
    {
        return $this->addUserId;
    }

    public function setAddUserId(int $addUserId): self
    {
        $this->addUserId = $addUserId;

        return $this;
    }

    public function getAddDate(): ?int
    {
        return $this->addDate;
    }

    public function setAddDate(int $addDate): self
    {
        $this->addDate = $addDate;

        return $this;
    }

    public function getVisible(): ?bool
    {
        return $this->visible;
    }

    public function setVisible(bool $visible): self
    {
        $this->visible = $visible;

        return $this;
    }

    public function getContentDate(): ?int
    {
        return $this->contentDate;
    }

    public function setContentDate(int $contentDate): self
    {
        $this->contentDate = $contentDate;

        return $this;
    }


}
