<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfThreadPrompt
 *
 * @ORM\Table(name="xf_thread_prompt", indexes={@ORM\Index(name="materialized_order", columns={"materialized_order"})})
 * @ORM\Entity
 */
class XfThreadPrompt
{
    /**
     * @var int
     *
     * @ORM\Column(name="prompt_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $promptId;

    /**
     * @var int
     *
     * @ORM\Column(name="prompt_group_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $promptGroupId;

    /**
     * @var int
     *
     * @ORM\Column(name="display_order", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $displayOrder;

    /**
     * @var int
     *
     * @ORM\Column(name="materialized_order", type="integer", nullable=false, options={"unsigned"=true,"comment"="Internally-set order, based on prompt_group.display_order, prompt.display_order"})
     */
    private $materializedOrder;

    public function getPromptId(): ?int
    {
        return $this->promptId;
    }

    public function getPromptGroupId(): ?int
    {
        return $this->promptGroupId;
    }

    public function setPromptGroupId(int $promptGroupId): self
    {
        $this->promptGroupId = $promptGroupId;

        return $this;
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

    public function getMaterializedOrder(): ?int
    {
        return $this->materializedOrder;
    }

    public function setMaterializedOrder(int $materializedOrder): self
    {
        $this->materializedOrder = $materializedOrder;

        return $this;
    }


}
