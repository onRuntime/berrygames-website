<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfApiAttachmentKey
 *
 * @ORM\Table(name="xf_api_attachment_key", indexes={@ORM\Index(name="create_date", columns={"create_date"})})
 * @ORM\Entity
 */
class XfApiAttachmentKey
{
    /**
     * @var binary
     *
     * @ORM\Column(name="attachment_key", type="binary", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $attachmentKey;

    /**
     * @var int
     *
     * @ORM\Column(name="create_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $createDate;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $userId;

    /**
     * @var binary
     *
     * @ORM\Column(name="temp_hash", type="binary", nullable=false)
     */
    private $tempHash;

    /**
     * @var binary
     *
     * @ORM\Column(name="content_type", type="binary", nullable=false)
     */
    private $contentType;

    /**
     * @var string
     *
     * @ORM\Column(name="context", type="blob", length=65535, nullable=false)
     */
    private $context;

    public function getAttachmentKey()
    {
        return $this->attachmentKey;
    }

    public function getCreateDate(): ?int
    {
        return $this->createDate;
    }

    public function setCreateDate(int $createDate): self
    {
        $this->createDate = $createDate;

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

    public function getTempHash()
    {
        return $this->tempHash;
    }

    public function setTempHash($tempHash): self
    {
        $this->tempHash = $tempHash;

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

    public function getContext()
    {
        return $this->context;
    }

    public function setContext($context): self
    {
        $this->context = $context;

        return $this;
    }


}
