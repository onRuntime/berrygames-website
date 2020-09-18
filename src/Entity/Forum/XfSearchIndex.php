<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfSearchIndex
 *
 * @ORM\Table(name="xf_search_index", indexes={@ORM\Index(name="user_id_item_date", columns={"user_id", "item_date"}), @ORM\Index(name="title_message_metadata", columns={"title", "message", "metadata"}), @ORM\Index(name="title_metadata", columns={"title", "metadata"})})
 * @ORM\Entity
 */
class XfSearchIndex
{
    /**
     * @var string
     *
     * @ORM\Column(name="content_type", type="string", length=25, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $contentType;

    /**
     * @var int
     *
     * @ORM\Column(name="content_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $contentId;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=250, nullable=false)
     */
    private $title = '';

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text", length=16777215, nullable=false)
     */
    private $message;

    /**
     * @var string
     *
     * @ORM\Column(name="metadata", type="text", length=16777215, nullable=false)
     */
    private $metadata;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $userId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="item_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $itemDate;

    /**
     * @var int
     *
     * @ORM\Column(name="discussion_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $discussionId = '0';

    public function getContentType(): ?string
    {
        return $this->contentType;
    }

    public function getContentId(): ?int
    {
        return $this->contentId;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

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

    public function getMetadata(): ?string
    {
        return $this->metadata;
    }

    public function setMetadata(string $metadata): self
    {
        $this->metadata = $metadata;

        return $this;
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

    public function getItemDate(): ?int
    {
        return $this->itemDate;
    }

    public function setItemDate(int $itemDate): self
    {
        $this->itemDate = $itemDate;

        return $this;
    }

    public function getDiscussionId(): ?int
    {
        return $this->discussionId;
    }

    public function setDiscussionId(int $discussionId): self
    {
        $this->discussionId = $discussionId;

        return $this;
    }


}
