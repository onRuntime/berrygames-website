<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfOptionGroupRelation
 *
 * @ORM\Table(name="xf_option_group_relation", indexes={@ORM\Index(name="group_id_display_order", columns={"group_id", "display_order"})})
 * @ORM\Entity
 */
class XfOptionGroupRelation
{
    /**
     * @var binary
     *
     * @ORM\Column(name="option_id", type="binary", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $optionId;

    /**
     * @var binary
     *
     * @ORM\Column(name="group_id", type="binary", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $groupId;

    /**
     * @var int
     *
     * @ORM\Column(name="display_order", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $displayOrder;

    public function getOptionId()
    {
        return $this->optionId;
    }

    public function getGroupId()
    {
        return $this->groupId;
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
