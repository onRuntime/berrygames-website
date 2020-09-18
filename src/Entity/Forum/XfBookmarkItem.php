<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfBookmarkItem
 *
 * @ORM\Table(name="xf_bookmark_item", uniqueConstraints={@ORM\UniqueConstraint(name="user_id_content_type_content_id", columns={"user_id", "content_type", "content_id"})}, indexes={@ORM\Index(name="content_type_content_id", columns={"content_type", "content_id"})})
 * @ORM\Entity
 */
class XfBookmarkItem
{
    /**
     * @var int
     *
     * @ORM\Column(name="bookmark_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $bookmarkId;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $userId;

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
     * @ORM\Column(name="bookmark_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $bookmarkDate;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text", length=65535, nullable=false)
     */
    private $message;

    /**
     * @var string
     *
     * @ORM\Column(name="labels", type="blob", length=16777215, nullable=false)
     */
    private $labels;

    public function getBookmarkId(): ?int
    {
        return $this->bookmarkId;
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

    public function getBookmarkDate(): ?int
    {
        return $this->bookmarkDate;
    }

    public function setBookmarkDate(int $bookmarkDate): self
    {
        $this->bookmarkDate = $bookmarkDate;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }

    public function getLabels()
    {
        return $this->labels;
    }

    public function setLabels($labels): self
    {
        $this->labels = $labels;

        return $this;
    }


}
