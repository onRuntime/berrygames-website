<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfEditHistory
 *
 * @ORM\Table(name="xf_edit_history", indexes={@ORM\Index(name="edit_date", columns={"edit_date"}), @ORM\Index(name="edit_user_id", columns={"edit_user_id"}), @ORM\Index(name="content_type", columns={"content_type", "content_id", "edit_date"})})
 * @ORM\Entity
 */
class XfEditHistory
{
    /**
     * @var int
     *
     * @ORM\Column(name="edit_history_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $editHistoryId;

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
     * @ORM\Column(name="edit_user_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $editUserId;

    /**
     * @var int
     *
     * @ORM\Column(name="edit_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $editDate;

    /**
     * @var string
     *
     * @ORM\Column(name="old_text", type="text", length=16777215, nullable=false)
     */
    private $oldText;

    public function getEditHistoryId(): ?int
    {
        return $this->editHistoryId;
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

    public function getEditUserId(): ?int
    {
        return $this->editUserId;
    }

    public function setEditUserId(int $editUserId): self
    {
        $this->editUserId = $editUserId;

        return $this;
    }

    public function getEditDate(): ?int
    {
        return $this->editDate;
    }

    public function setEditDate(int $editDate): self
    {
        $this->editDate = $editDate;

        return $this;
    }

    public function getOldText(): ?string
    {
        return $this->oldText;
    }

    public function setOldText(string $oldText): self
    {
        $this->oldText = $oldText;

        return $this;
    }


}
