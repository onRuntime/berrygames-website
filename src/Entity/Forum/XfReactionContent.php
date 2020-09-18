<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfReactionContent
 *
 * @ORM\Table(name="xf_reaction_content", uniqueConstraints={@ORM\UniqueConstraint(name="content_type_id_user_id", columns={"content_type", "content_id", "reaction_user_id"})}, indexes={@ORM\Index(name="content_type_id_reaction_date", columns={"content_type", "content_id", "reaction_date"}), @ORM\Index(name="content_user_id_reaction_date", columns={"content_user_id", "reaction_date"}), @ORM\Index(name="reaction_date", columns={"reaction_date"})})
 * @ORM\Entity
 */
class XfReactionContent
{
    /**
     * @var int
     *
     * @ORM\Column(name="reaction_content_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $reactionContentId;

    /**
     * @var int
     *
     * @ORM\Column(name="reaction_id", type="integer", nullable=false, options={"default"="1","unsigned"=true})
     */
    private $reactionId = '1';

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
     * @ORM\Column(name="reaction_user_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $reactionUserId;

    /**
     * @var int
     *
     * @ORM\Column(name="reaction_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $reactionDate;

    /**
     * @var int
     *
     * @ORM\Column(name="content_user_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $contentUserId;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_counted", type="boolean", nullable=false, options={"default"="1"})
     */
    private $isCounted = '1';

    public function getReactionContentId(): ?int
    {
        return $this->reactionContentId;
    }

    public function getReactionId(): ?int
    {
        return $this->reactionId;
    }

    public function setReactionId(int $reactionId): self
    {
        $this->reactionId = $reactionId;

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

    public function getReactionUserId(): ?int
    {
        return $this->reactionUserId;
    }

    public function setReactionUserId(int $reactionUserId): self
    {
        $this->reactionUserId = $reactionUserId;

        return $this;
    }

    public function getReactionDate(): ?int
    {
        return $this->reactionDate;
    }

    public function setReactionDate(int $reactionDate): self
    {
        $this->reactionDate = $reactionDate;

        return $this;
    }

    public function getContentUserId(): ?int
    {
        return $this->contentUserId;
    }

    public function setContentUserId(int $contentUserId): self
    {
        $this->contentUserId = $contentUserId;

        return $this;
    }

    public function getIsCounted(): ?bool
    {
        return $this->isCounted;
    }

    public function setIsCounted(bool $isCounted): self
    {
        $this->isCounted = $isCounted;

        return $this;
    }


}
