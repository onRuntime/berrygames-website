<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfNavigationType
 *
 * @ORM\Table(name="xf_navigation_type")
 * @ORM\Entity
 */
class XfNavigationType
{
    /**
     * @var binary
     *
     * @ORM\Column(name="navigation_type_id", type="binary", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $navigationTypeId;

    /**
     * @var string
     *
     * @ORM\Column(name="handler_class", type="string", length=100, nullable=false)
     */
    private $handlerClass;

    /**
     * @var int
     *
     * @ORM\Column(name="display_order", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $displayOrder = '0';

    public function getNavigationTypeId()
    {
        return $this->navigationTypeId;
    }

    public function getHandlerClass(): ?string
    {
        return $this->handlerClass;
    }

    public function setHandlerClass(string $handlerClass): self
    {
        $this->handlerClass = $handlerClass;

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


}
