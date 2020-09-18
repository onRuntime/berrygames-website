<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfConversationMaster
 *
 * @ORM\Table(name="xf_conversation_master", indexes={@ORM\Index(name="start_date", columns={"start_date"}), @ORM\Index(name="user_id", columns={"user_id"})})
 * @ORM\Entity
 */
class XfConversationMaster
{
    /**
     * @var int
     *
     * @ORM\Column(name="conversation_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $conversationId;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=150, nullable=false)
     */
    private $title;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=50, nullable=false)
     */
    private $username;

    /**
     * @var int
     *
     * @ORM\Column(name="start_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $startDate;

    /**
     * @var bool
     *
     * @ORM\Column(name="open_invite", type="boolean", nullable=false)
     */
    private $openInvite = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="conversation_open", type="boolean", nullable=false, options={"default"="1"})
     */
    private $conversationOpen = '1';

    /**
     * @var int
     *
     * @ORM\Column(name="reply_count", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $replyCount = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="recipient_count", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $recipientCount = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="first_message_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $firstMessageId;

    /**
     * @var int
     *
     * @ORM\Column(name="last_message_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $lastMessageDate;

    /**
     * @var int
     *
     * @ORM\Column(name="last_message_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $lastMessageId;

    /**
     * @var int
     *
     * @ORM\Column(name="last_message_user_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $lastMessageUserId;

    /**
     * @var string
     *
     * @ORM\Column(name="last_message_username", type="string", length=50, nullable=false)
     */
    private $lastMessageUsername;

    /**
     * @var string
     *
     * @ORM\Column(name="recipients", type="blob", length=16777215, nullable=false)
     */
    private $recipients;

    public function getConversationId(): ?int
    {
        return $this->conversationId;
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

    public function getStartDate(): ?int
    {
        return $this->startDate;
    }

    public function setStartDate(int $startDate): self
    {
        $this->startDate = $startDate;

        return $this;
    }

    public function getOpenInvite(): ?bool
    {
        return $this->openInvite;
    }

    public function setOpenInvite(bool $openInvite): self
    {
        $this->openInvite = $openInvite;

        return $this;
    }

    public function getConversationOpen(): ?bool
    {
        return $this->conversationOpen;
    }

    public function setConversationOpen(bool $conversationOpen): self
    {
        $this->conversationOpen = $conversationOpen;

        return $this;
    }

    public function getReplyCount(): ?int
    {
        return $this->replyCount;
    }

    public function setReplyCount(int $replyCount): self
    {
        $this->replyCount = $replyCount;

        return $this;
    }

    public function getRecipientCount(): ?int
    {
        return $this->recipientCount;
    }

    public function setRecipientCount(int $recipientCount): self
    {
        $this->recipientCount = $recipientCount;

        return $this;
    }

    public function getFirstMessageId(): ?int
    {
        return $this->firstMessageId;
    }

    public function setFirstMessageId(int $firstMessageId): self
    {
        $this->firstMessageId = $firstMessageId;

        return $this;
    }

    public function getLastMessageDate(): ?int
    {
        return $this->lastMessageDate;
    }

    public function setLastMessageDate(int $lastMessageDate): self
    {
        $this->lastMessageDate = $lastMessageDate;

        return $this;
    }

    public function getLastMessageId(): ?int
    {
        return $this->lastMessageId;
    }

    public function setLastMessageId(int $lastMessageId): self
    {
        $this->lastMessageId = $lastMessageId;

        return $this;
    }

    public function getLastMessageUserId(): ?int
    {
        return $this->lastMessageUserId;
    }

    public function setLastMessageUserId(int $lastMessageUserId): self
    {
        $this->lastMessageUserId = $lastMessageUserId;

        return $this;
    }

    public function getLastMessageUsername(): ?string
    {
        return $this->lastMessageUsername;
    }

    public function setLastMessageUsername(string $lastMessageUsername): self
    {
        $this->lastMessageUsername = $lastMessageUsername;

        return $this;
    }

    public function getRecipients()
    {
        return $this->recipients;
    }

    public function setRecipients($recipients): self
    {
        $this->recipients = $recipients;

        return $this;
    }


}
