<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfAttachmentData
 *
 * @ORM\Table(name="xf_attachment_data", indexes={@ORM\Index(name="upload_date", columns={"upload_date"}), @ORM\Index(name="attach_count", columns={"attach_count"}), @ORM\Index(name="user_id_upload_date", columns={"user_id", "upload_date"})})
 * @ORM\Entity
 */
class XfAttachmentData
{
    /**
     * @var int
     *
     * @ORM\Column(name="data_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $dataId;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $userId;

    /**
     * @var int
     *
     * @ORM\Column(name="upload_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $uploadDate;

    /**
     * @var string
     *
     * @ORM\Column(name="filename", type="string", length=100, nullable=false)
     */
    private $filename;

    /**
     * @var int
     *
     * @ORM\Column(name="file_size", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $fileSize;

    /**
     * @var string
     *
     * @ORM\Column(name="file_hash", type="string", length=32, nullable=false)
     */
    private $fileHash;

    /**
     * @var string
     *
     * @ORM\Column(name="file_path", type="string", length=250, nullable=false)
     */
    private $filePath = '';

    /**
     * @var int
     *
     * @ORM\Column(name="width", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $width = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="height", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $height = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="thumbnail_width", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $thumbnailWidth = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="thumbnail_height", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $thumbnailHeight = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="attach_count", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $attachCount = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="xfa_do", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $xfaDo = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="xfa_url", type="string", length=250, nullable=false)
     */
    private $xfaUrl = '';

    public function getDataId(): ?int
    {
        return $this->dataId;
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

    public function getUploadDate(): ?int
    {
        return $this->uploadDate;
    }

    public function setUploadDate(int $uploadDate): self
    {
        $this->uploadDate = $uploadDate;

        return $this;
    }

    public function getFilename(): ?string
    {
        return $this->filename;
    }

    public function setFilename(string $filename): self
    {
        $this->filename = $filename;

        return $this;
    }

    public function getFileSize(): ?int
    {
        return $this->fileSize;
    }

    public function setFileSize(int $fileSize): self
    {
        $this->fileSize = $fileSize;

        return $this;
    }

    public function getFileHash(): ?string
    {
        return $this->fileHash;
    }

    public function setFileHash(string $fileHash): self
    {
        $this->fileHash = $fileHash;

        return $this;
    }

    public function getFilePath(): ?string
    {
        return $this->filePath;
    }

    public function setFilePath(string $filePath): self
    {
        $this->filePath = $filePath;

        return $this;
    }

    public function getWidth(): ?int
    {
        return $this->width;
    }

    public function setWidth(int $width): self
    {
        $this->width = $width;

        return $this;
    }

    public function getHeight(): ?int
    {
        return $this->height;
    }

    public function setHeight(int $height): self
    {
        $this->height = $height;

        return $this;
    }

    public function getThumbnailWidth(): ?int
    {
        return $this->thumbnailWidth;
    }

    public function setThumbnailWidth(int $thumbnailWidth): self
    {
        $this->thumbnailWidth = $thumbnailWidth;

        return $this;
    }

    public function getThumbnailHeight(): ?int
    {
        return $this->thumbnailHeight;
    }

    public function setThumbnailHeight(int $thumbnailHeight): self
    {
        $this->thumbnailHeight = $thumbnailHeight;

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

    public function getXfaDo(): ?int
    {
        return $this->xfaDo;
    }

    public function setXfaDo(int $xfaDo): self
    {
        $this->xfaDo = $xfaDo;

        return $this;
    }

    public function getXfaUrl(): ?string
    {
        return $this->xfaUrl;
    }

    public function setXfaUrl(string $xfaUrl): self
    {
        $this->xfaUrl = $xfaUrl;

        return $this;
    }


}
