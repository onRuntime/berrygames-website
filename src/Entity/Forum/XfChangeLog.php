<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfChangeLog
 *
 * @ORM\Table(name="xf_change_log", indexes={@ORM\Index(name="edit_date", columns={"edit_date"}), @ORM\Index(name="content_type_date", columns={"content_type", "edit_date"}), @ORM\Index(name="content_type_content_id_date", columns={"content_type", "content_id", "edit_date"})})
 * @ORM\Entity
 */
class XfChangeLog
{
    /**
     * @var int
     *
     * @ORM\Column(name="log_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $logId;

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
     * @ORM\Column(name="field", type="string", length=100, nullable=false)
     */
    private $field = '';

    /**
     * @var string
     *
     * @ORM\Column(name="old_value", type="text", length=65535, nullable=false)
     */
    private $oldValue;

    /**
     * @var string
     *
     * @ORM\Column(name="new_value", type="text", length=65535, nullable=false)
     */
    private $newValue;

    /**
     * @var bool
     *
     * @ORM\Column(name="protected", type="boolean", nullable=false)
     */
    private $protected = '0';

    public function getLogId(): ?int
    {
        return $this->logId;
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

    public function getField(): ?string
    {
        return $this->field;
    }

    public function setField(string $field): self
    {
        $this->field = $field;

        return $this;
    }

    public function getOldValue(): ?string
    {
        return $this->oldValue;
    }

    public function setOldValue(string $oldValue): self
    {
        $this->oldValue = $oldValue;

        return $this;
    }

    public function getNewValue(): ?string
    {
        return $this->newValue;
    }

    public function setNewValue(string $newValue): self
    {
        $this->newValue = $newValue;

        return $this;
    }

    public function getProtected(): ?bool
    {
        return $this->protected;
    }

    public function setProtected(bool $protected): self
    {
        $this->protected = $protected;

        return $this;
    }


}
