<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfDeletionLog
 *
 * @ORM\Table(name="xf_deletion_log", indexes={@ORM\Index(name="delete_user_id_date", columns={"delete_user_id", "delete_date"})})
 * @ORM\Entity
 */
class XfDeletionLog
{
    /**
     * @var binary
     *
     * @ORM\Column(name="content_type", type="binary", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $contentType;

    /**
     * @var int
     *
     * @ORM\Column(name="content_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $contentId;

    /**
     * @var int
     *
     * @ORM\Column(name="delete_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $deleteDate;

    /**
     * @var int
     *
     * @ORM\Column(name="delete_user_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $deleteUserId;

    /**
     * @var string
     *
     * @ORM\Column(name="delete_username", type="string", length=50, nullable=false)
     */
    private $deleteUsername;

    /**
     * @var string
     *
     * @ORM\Column(name="delete_reason", type="string", length=100, nullable=false)
     */
    private $deleteReason = '';

    public function getContentType()
    {
        return $this->contentType;
    }

    public function getContentId(): ?int
    {
        return $this->contentId;
    }

    public function getDeleteDate(): ?int
    {
        return $this->deleteDate;
    }

    public function setDeleteDate(int $deleteDate): self
    {
        $this->deleteDate = $deleteDate;

        return $this;
    }

    public function getDeleteUserId(): ?int
    {
        return $this->deleteUserId;
    }

    public function setDeleteUserId(int $deleteUserId): self
    {
        $this->deleteUserId = $deleteUserId;

        return $this;
    }

    public function getDeleteUsername(): ?string
    {
        return $this->deleteUsername;
    }

    public function setDeleteUsername(string $deleteUsername): self
    {
        $this->deleteUsername = $deleteUsername;

        return $this;
    }

    public function getDeleteReason(): ?string
    {
        return $this->deleteReason;
    }

    public function setDeleteReason(string $deleteReason): self
    {
        $this->deleteReason = $deleteReason;

        return $this;
    }


}
