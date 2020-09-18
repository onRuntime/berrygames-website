<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfDraft
 *
 * @ORM\Table(name="xf_draft", uniqueConstraints={@ORM\UniqueConstraint(name="draft_key_user", columns={"draft_key", "user_id"})}, indexes={@ORM\Index(name="last_update", columns={"last_update"})})
 * @ORM\Entity
 */
class XfDraft
{
    /**
     * @var int
     *
     * @ORM\Column(name="draft_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $draftId;

    /**
     * @var binary
     *
     * @ORM\Column(name="draft_key", type="binary", nullable=false)
     */
    private $draftKey;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $userId;

    /**
     * @var int
     *
     * @ORM\Column(name="last_update", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $lastUpdate;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text", length=16777215, nullable=false)
     */
    private $message;

    /**
     * @var string
     *
     * @ORM\Column(name="extra_data", type="blob", length=16777215, nullable=false)
     */
    private $extraData;

    public function getDraftId(): ?int
    {
        return $this->draftId;
    }

    public function getDraftKey()
    {
        return $this->draftKey;
    }

    public function setDraftKey($draftKey): self
    {
        $this->draftKey = $draftKey;

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

    public function getLastUpdate(): ?int
    {
        return $this->lastUpdate;
    }

    public function setLastUpdate(int $lastUpdate): self
    {
        $this->lastUpdate = $lastUpdate;

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
