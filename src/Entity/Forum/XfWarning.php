<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfWarning
 *
 * @ORM\Table(name="xf_warning", indexes={@ORM\Index(name="is_expired_expiry", columns={"is_expired", "expiry_date"}), @ORM\Index(name="warning_user_id", columns={"warning_user_id"}), @ORM\Index(name="content_type_id", columns={"content_type", "content_id"}), @ORM\Index(name="user_id_date", columns={"user_id", "warning_date"})})
 * @ORM\Entity
 */
class XfWarning
{
    /**
     * @var int
     *
     * @ORM\Column(name="warning_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $warningId;

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
     * @var string
     *
     * @ORM\Column(name="content_title", type="string", length=255, nullable=false)
     */
    private $contentTitle;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $userId;

    /**
     * @var int
     *
     * @ORM\Column(name="warning_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $warningDate;

    /**
     * @var int
     *
     * @ORM\Column(name="warning_user_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $warningUserId;

    /**
     * @var int
     *
     * @ORM\Column(name="warning_definition_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $warningDefinitionId;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="notes", type="text", length=65535, nullable=false)
     */
    private $notes;

    /**
     * @var int
     *
     * @ORM\Column(name="points", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $points;

    /**
     * @var int
     *
     * @ORM\Column(name="expiry_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $expiryDate;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_expired", type="boolean", nullable=false)
     */
    private $isExpired;

    /**
     * @var binary
     *
     * @ORM\Column(name="extra_user_group_ids", type="binary", nullable=false)
     */
    private $extraUserGroupIds;

    public function getWarningId(): ?int
    {
        return $this->warningId;
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

    public function getContentTitle(): ?string
    {
        return $this->contentTitle;
    }

    public function setContentTitle(string $contentTitle): self
    {
        $this->contentTitle = $contentTitle;

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

    public function getWarningDate(): ?int
    {
        return $this->warningDate;
    }

    public function setWarningDate(int $warningDate): self
    {
        $this->warningDate = $warningDate;

        return $this;
    }

    public function getWarningUserId(): ?int
    {
        return $this->warningUserId;
    }

    public function setWarningUserId(int $warningUserId): self
    {
        $this->warningUserId = $warningUserId;

        return $this;
    }

    public function getWarningDefinitionId(): ?int
    {
        return $this->warningDefinitionId;
    }

    public function setWarningDefinitionId(int $warningDefinitionId): self
    {
        $this->warningDefinitionId = $warningDefinitionId;

        return $this;
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

    public function getNotes(): ?string
    {
        return $this->notes;
    }

    public function setNotes(string $notes): self
    {
        $this->notes = $notes;

        return $this;
    }

    public function getPoints(): ?int
    {
        return $this->points;
    }

    public function setPoints(int $points): self
    {
        $this->points = $points;

        return $this;
    }

    public function getExpiryDate(): ?int
    {
        return $this->expiryDate;
    }

    public function setExpiryDate(int $expiryDate): self
    {
        $this->expiryDate = $expiryDate;

        return $this;
    }

    public function getIsExpired(): ?bool
    {
        return $this->isExpired;
    }

    public function setIsExpired(bool $isExpired): self
    {
        $this->isExpired = $isExpired;

        return $this;
    }

    public function getExtraUserGroupIds()
    {
        return $this->extraUserGroupIds;
    }

    public function setExtraUserGroupIds($extraUserGroupIds): self
    {
        $this->extraUserGroupIds = $extraUserGroupIds;

        return $this;
    }


}
