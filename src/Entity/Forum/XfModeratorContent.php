<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfModeratorContent
 *
 * @ORM\Table(name="xf_moderator_content", uniqueConstraints={@ORM\UniqueConstraint(name="content_user_id", columns={"content_type", "content_id", "user_id"})}, indexes={@ORM\Index(name="user_id", columns={"user_id"})})
 * @ORM\Entity
 */
class XfModeratorContent
{
    /**
     * @var int
     *
     * @ORM\Column(name="moderator_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $moderatorId;

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
     * @ORM\Column(name="user_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $userId;

    public function getModeratorId(): ?int
    {
        return $this->moderatorId;
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

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }


}
