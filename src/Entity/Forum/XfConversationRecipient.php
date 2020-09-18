<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfConversationRecipient
 *
 * @ORM\Table(name="xf_conversation_recipient", indexes={@ORM\Index(name="user_id", columns={"user_id"})})
 * @ORM\Entity
 */
class XfConversationRecipient
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
     * @ORM\Column(name="user_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="recipient_state", type="string", length=0, nullable=false)
     */
    private $recipientState;

    /**
     * @var int
     *
     * @ORM\Column(name="last_read_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $lastReadDate;

    public function getConversationId(): ?int
    {
        return $this->conversationId;
    }

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function getRecipientState(): ?string
    {
        return $this->recipientState;
    }

    public function setRecipientState(string $recipientState): self
    {
        $this->recipientState = $recipientState;

        return $this;
    }

    public function getLastReadDate(): ?int
    {
        return $this->lastReadDate;
    }

    public function setLastReadDate(int $lastReadDate): self
    {
        $this->lastReadDate = $lastReadDate;

        return $this;
    }


}
