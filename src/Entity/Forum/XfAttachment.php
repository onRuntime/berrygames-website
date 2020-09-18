<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfAttachment
 *
 * @ORM\Table(name="xf_attachment", indexes={@ORM\Index(name="temp_hash_attach_date", columns={"temp_hash", "attach_date"}), @ORM\Index(name="unassociated_attach_date", columns={"unassociated", "attach_date"}), @ORM\Index(name="content_type_id_date", columns={"content_type", "content_id", "attach_date"})})
 * @ORM\Entity
 */
class XfAttachment
{
    /**
     * @var int
     *
     * @ORM\Column(name="attachment_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $attachmentId;

    /**
     * @var int
     *
     * @ORM\Column(name="data_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $dataId;

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
     * @ORM\Column(name="attach_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $attachDate;

    /**
     * @var string
     *
     * @ORM\Column(name="temp_hash", type="string", length=32, nullable=false)
     */
    private $tempHash = '';

    /**
     * @var bool
     *
     * @ORM\Column(name="unassociated", type="boolean", nullable=false)
     */
    private $unassociated;

    /**
     * @var int
     *
     * @ORM\Column(name="view_count", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $viewCount = '0';

    public function getAttachmentId(): ?int
    {
        return $this->attachmentId;
    }

    public function getDataId(): ?int
    {
        return $this->dataId;
    }

    public function setDataId(int $dataId): self
    {
        $this->dataId = $dataId;

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

    public function getAttachDate(): ?int
    {
        return $this->attachDate;
    }

    public function setAttachDate(int $attachDate): self
    {
        $this->attachDate = $attachDate;

        return $this;
    }

    public function getTempHash(): ?string
    {
        return $this->tempHash;
    }

    public function setTempHash(string $tempHash): self
    {
        $this->tempHash = $tempHash;

        return $this;
    }

    public function getUnassociated(): ?bool
    {
        return $this->unassociated;
    }

    public function setUnassociated(bool $unassociated): self
    {
        $this->unassociated = $unassociated;

        return $this;
    }

    public function getViewCount(): ?int
    {
        return $this->viewCount;
    }

    public function setViewCount(int $viewCount): self
    {
        $this->viewCount = $viewCount;

        return $this;
    }


}
