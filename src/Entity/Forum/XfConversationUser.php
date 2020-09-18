<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfConversationUser
 *
 * @ORM\Table(name="xf_conversation_user", indexes={@ORM\Index(name="owner_starred_date", columns={"owner_user_id", "is_starred", "last_message_date"}), @ORM\Index(name="owner_user_id_last_message_date", columns={"owner_user_id", "last_message_date"}), @ORM\Index(name="owner_user_id_is_unread", columns={"owner_user_id", "is_unread"})})
 * @ORM\Entity
 */
class XfConversationUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="conversation_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $conversationId;

    /**
     * @var int
     *
     * @ORM\Column(name="owner_user_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ownerUserId;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_unread", type="boolean", nullable=false)
     */
    private $isUnread;

    /**
     * @var int
     *
     * @ORM\Column(name="reply_count", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $replyCount;

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
     * @var bool
     *
     * @ORM\Column(name="is_starred", type="boolean", nullable=false)
     */
    private $isStarred = '0';

    public function getConversationId(): ?int
    {
        return $this->conversationId;
    }

    public function getOwnerUserId(): ?int
    {
        return $this->ownerUserId;
    }

    public function getIsUnread(): ?bool
    {
        return $this->isUnread;
    }

    public function setIsUnread(bool $isUnread): self
    {
        $this->isUnread = $isUnread;

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

    public function getIsStarred(): ?bool
    {
        return $this->isStarred;
    }

    public function setIsStarred(bool $isStarred): self
    {
        $this->isStarred = $isStarred;

        return $this;
    }


}
