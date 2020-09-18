<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfApprovalQueue
 *
 * @ORM\Table(name="xf_approval_queue", indexes={@ORM\Index(name="content_date", columns={"content_date"})})
 * @ORM\Entity
 */
class XfApprovalQueue
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
     * @ORM\Column(name="content_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $contentDate = '0';

    public function getContentType()
    {
        return $this->contentType;
    }

    public function getContentId(): ?int
    {
        return $this->contentId;
    }

    public function getContentDate(): ?int
    {
        return $this->contentDate;
    }

    public function setContentDate(int $contentDate): self
    {
        $this->contentDate = $contentDate;

        return $this;
    }


}
