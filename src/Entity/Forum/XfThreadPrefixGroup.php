<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfThreadPrefixGroup
 *
 * @ORM\Table(name="xf_thread_prefix_group")
 * @ORM\Entity
 */
class XfThreadPrefixGroup
{
    /**
     * @var int
     *
     * @ORM\Column(name="prefix_group_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $prefixGroupId;

    /**
     * @var int
     *
     * @ORM\Column(name="display_order", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $displayOrder;

    public function getPrefixGroupId(): ?int
    {
        return $this->prefixGroupId;
    }

    public function getDisplayOrder(): ?int
    {
        return $this->displayOrder;
    }

    public function setDisplayOrder(int $displayOrder): self
    {
        $this->displayOrder = $displayOrder;

        return $this;
    }


}
