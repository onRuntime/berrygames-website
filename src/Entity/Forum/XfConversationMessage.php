<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfConversationMessage
 *
 * @ORM\Table(name="xf_conversation_message", indexes={@ORM\Index(name="user_id", columns={"user_id"}), @ORM\Index(name="conversation_id_message_date", columns={"conversation_id", "message_date"}), @ORM\Index(name="message_date", columns={"message_date"})})
 * @ORM\Entity
 */
class XfConversationMessage
{
    /**
     * @var int
     *
     * @ORM\Column(name="message_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $messageId;

    /**
     * @var int
     *
     * @ORM\Column(name="conversation_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $conversationId;

    /**
     * @var int
     *
     * @ORM\Column(name="message_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $messageDate;

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
     * @var string
     *
     * @ORM\Column(name="message", type="text", length=16777215, nullable=false)
     */
    private $message;

    /**
     * @var int
     *
     * @ORM\Column(name="attach_count", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $attachCount = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="ip_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $ipId = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="embed_metadata", type="blob", length=65535, nullable=true)
     */
    private $embedMetadata;

    /**
     * @var int
     *
     * @ORM\Column(name="reaction_score", type="integer", nullable=false)
     */
    private $reactionScore = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="reactions", type="blob", length=65535, nullable=true)
     */
    private $reactions;

    /**
     * @var string
     *
     * @ORM\Column(name="reaction_users", type="blob", length=65535, nullable=false)
     */
    private $reactionUsers;

    public function getMessageId(): ?int
    {
        return $this->messageId;
    }

    public function getConversationId(): ?int
    {
        return $this->conversationId;
    }

    public function setConversationId(int $conversationId): self
    {
        $this->conversationId = $conversationId;

        return $this;
    }

    public function getMessageDate(): ?int
    {
        return $this->messageDate;
    }

    public function setMessageDate(int $messageDate): self
    {
        $this->messageDate = $messageDate;

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

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }

    public function getAttachCount(): ?int
    {
        return $this->attachCount;
    }

    public function setAttachCount(int $attachCount): self
    {
        $this->attachCount = $attachCount;

        return $this;
    }

    public function getIpId(): ?int
    {
        return $this->ipId;
    }

    public function setIpId(int $ipId): self
    {
        $this->ipId = $ipId;

        return $this;
    }

    public function getEmbedMetadata()
    {
        return $this->embedMetadata;
    }

    public function setEmbedMetadata($embedMetadata): self
    {
        $this->embedMetadata = $embedMetadata;

        return $this;
    }

    public function getReactionScore(): ?int
    {
        return $this->reactionScore;
    }

    public function setReactionScore(int $reactionScore): self
    {
        $this->reactionScore = $reactionScore;

        return $this;
    }

    public function getReactions()
    {
        return $this->reactions;
    }

    public function setReactions($reactions): self
    {
        $this->reactions = $reactions;

        return $this;
    }

    public function getReactionUsers()
    {
        return $this->reactionUsers;
    }

    public function setReactionUsers($reactionUsers): self
    {
        $this->reactionUsers = $reactionUsers;

        return $this;
    }


}
