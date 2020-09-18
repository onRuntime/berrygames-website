<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfThreadView
 *
 * @ORM\Table(name="xf_thread_view")
 * @ORM\Entity
 */
class XfThreadView
{
    /**
     * @var int
     *
     * @ORM\Column(name="thread_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $threadId;

    /**
     * @var int
     *
     * @ORM\Column(name="total", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $total;

    public function getThreadId(): ?int
    {
        return $this->threadId;
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
