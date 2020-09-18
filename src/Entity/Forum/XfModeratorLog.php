<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfModeratorLog
 *
 * @ORM\Table(name="xf_moderator_log", indexes={@ORM\Index(name="user_id_log_date", columns={"user_id", "log_date"}), @ORM\Index(name="content_type_id", columns={"content_type", "content_id"}), @ORM\Index(name="discussion_content_type_id", columns={"discussion_content_type", "discussion_content_id"}), @ORM\Index(name="log_date", columns={"log_date"})})
 * @ORM\Entity
 */
class XfModeratorLog
{
    /**
     * @var int
     *
     * @ORM\Column(name="moderator_log_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $moderatorLogId;

    /**
     * @var int
     *
     * @ORM\Column(name="log_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $logDate;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $userId;

    /**
     * @var binary
     *
     * @ORM\Column(name="ip_address", type="binary", nullable=false)
     */
    private $ipAddress = '';

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
     * @ORM\Column(name="content_user_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $contentUserId;

    /**
     * @var string
     *
     * @ORM\Column(name="content_username", type="string", length=50, nullable=false)
     */
    private $contentUsername;

    /**
     * @var string
     *
     * @ORM\Column(name="content_title", type="string", length=150, nullable=false)
     */
    private $contentTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="content_url", type="text", length=65535, nullable=false)
     */
    private $contentUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="discussion_content_type", type="string", length=25, nullable=false)
     */
    private $discussionContentType;

    /**
     * @var int
     *
     * @ORM\Column(name="discussion_content_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $discussionContentId;

    /**
     * @var string
     *
     * @ORM\Column(name="action", type="string", length=25, nullable=false)
     */
    private $action;

    /**
     * @var string
     *
     * @ORM\Column(name="action_params", type="blob", length=16777215, nullable=false)
     */
    private $actionParams;

    public function getModeratorLogId(): ?int
    {
        return $this->moderatorLogId;
    }

    public function getLogDate(): ?int
    {
        return $this->logDate;
    }

    public function setLogDate(int $logDate): self
    {
        $this->logDate = $logDate;

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

    public function getIpAddress()
    {
        return $this->ipAddress;
    }

    public function setIpAddress($ipAddress): self
    {
        $this->ipAddress = $ipAddress;

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

    public function getContentUserId(): ?int
    {
        return $this->contentUserId;
    }

    public function setContentUserId(int $contentUserId): self
    {
        $this->contentUserId = $contentUserId;

        return $this;
    }

    public function getContentUsername(): ?string
    {
        return $this->contentUsername;
    }

    public function setContentUsername(string $contentUsername): self
    {
        $this->contentUsername = $contentUsername;

        return $this;
    }

    public function getContentTitle(): ?string
    {
        return $this->contentTitle;
    }

    public function setContentTitle(string $contentTitle): self
    {
        $this->contentTitle = $contentTitle;

        return $this;
    }

    public function getContentUrl(): ?string
    {
        return $this->contentUrl;
    }

    public function setContentUrl(string $contentUrl): self
    {
        $this->contentUrl = $contentUrl;

        return $this;
    }

    public function getDiscussionContentType(): ?string
    {
        return $this->discussionContentType;
    }

    public function setDiscussionContentType(string $discussionContentType): self
    {
        $this->discussionContentType = $discussionContentType;

        return $this;
    }

    public function getDiscussionContentId(): ?int
    {
        return $this->discussionContentId;
    }

    public function setDiscussionContentId(int $discussionContentId): self
    {
        $this->discussionContentId = $discussionContentId;

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

    public function getActionParams()
    {
        return $this->actionParams;
    }

    public function setActionParams($actionParams): self
    {
        $this->actionParams = $actionParams;

        return $this;
    }


}
