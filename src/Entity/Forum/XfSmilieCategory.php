<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfSmilieCategory
 *
 * @ORM\Table(name="xf_smilie_category")
 * @ORM\Entity
 */
class XfSmilieCategory
{
    /**
     * @var int
     *
     * @ORM\Column(name="smilie_category_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $smilieCategoryId;

    /**
     * @var int
     *
     * @ORM\Column(name="display_order", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $displayOrder;

    public function getSmilieCategoryId(): ?int
    {
        return $this->smilieCategoryId;
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
