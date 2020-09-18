<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfAttachmentView
 *
 * @ORM\Table(name="xf_attachment_view")
 * @ORM\Entity
 */
class XfAttachmentView
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
     * @ORM\Column(name="total", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $total;

    public function getAttachmentId(): ?int
    {
        return $this->attachmentId;
    }

    public function getTotal(): ?int
    {
        return $this->total;
    }

    public function setTotal(int $total): self
    {
        $this->total = $total;

        return $this;
    }


}
