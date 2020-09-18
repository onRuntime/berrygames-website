<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfThreadPromptGroup
 *
 * @ORM\Table(name="xf_thread_prompt_group")
 * @ORM\Entity
 */
class XfThreadPromptGroup
{
    /**
     * @var int
     *
     * @ORM\Column(name="prompt_group_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $promptGroupId;

    /**
     * @var int
     *
     * @ORM\Column(name="display_order", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $displayOrder;

    public function getPromptGroupId(): ?int
    {
        return $this->promptGroupId;
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
