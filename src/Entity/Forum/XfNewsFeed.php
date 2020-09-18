<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfNewsFeed
 *
 * @ORM\Table(name="xf_news_feed", indexes={@ORM\Index(name="event_date", columns={"event_date"}), @ORM\Index(name="userId_eventDate", columns={"user_id", "event_date"}), @ORM\Index(name="contentType_contentId", columns={"content_type", "content_id"})})
 * @ORM\Entity
 */
class XfNewsFeed
{
    /**
     * @var int
     *
     * @ORM\Column(name="news_feed_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $newsFeedId;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false, options={"unsigned"=true,"comment"="The user who performed the action"})
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=50, nullable=false, options={"comment"="Corresponds to user_id"})
     */
    private $username = '';

    /**
     * @var binary
     *
     * @ORM\Column(name="content_type", type="binary", nullable=false, options={"comment"="eg: thread"})
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
     * @ORM\Column(name="action", type="string", length=25, nullable=false, options={"comment"="eg: edit"})
     */
    private $action;

    /**
     * @var int
     *
     * @ORM\Column(name="event_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $eventDate;

    /**
     * @var string
     *
     * @ORM\Column(name="extra_data", type="blob", length=16777215, nullable=false, options={"comment"="Serialized. Stores any extra data relevant to the action"})
     */
    private $extraData;

    public function getNewsFeedId(): ?int
    {
        return $this->newsFeedId;
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

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

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

    public function getAction(): ?string
    {
        return $this->action;
    }

    public function setAction(string $action): self
    {
        $this->action = $action;

        return $this;
    }

    public function getEventDate(): ?int
    {
        return $this->eventDate;
    }

    public function setEventDate(int $eventDate): self
    {
        $this->eventDate = $eventDate;

        return $this;
    }

    public function getExtraData()
    {
        return $this->extraData;
    }

    public function setExtraData($extraData): self
    {
        $this->extraData = $extraData;

        return $this;
    }


}
