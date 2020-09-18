<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfStylePropertyMap
 *
 * @ORM\Table(name="xf_style_property_map", uniqueConstraints={@ORM\UniqueConstraint(name="style_id", columns={"style_id", "property_name"})}, indexes={@ORM\Index(name="parent_property_id", columns={"parent_property_id"})})
 * @ORM\Entity
 */
class XfStylePropertyMap
{
    /**
     * @var int
     *
     * @ORM\Column(name="property_map_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $propertyMapId;

    /**
     * @var int
     *
     * @ORM\Column(name="style_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $styleId;

    /**
     * @var binary
     *
     * @ORM\Column(name="property_name", type="binary", nullable=false)
     */
    private $propertyName;

    /**
     * @var int
     *
     * @ORM\Column(name="property_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $propertyId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="parent_property_id", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $parentPropertyId;

    public function getPropertyMapId(): ?int
    {
        return $this->propertyMapId;
    }

    public function getStyleId(): ?int
    {
        return $this->styleId;
    }

    public function setStyleId(int $styleId): self
    {
        $this->styleId = $styleId;

        return $this;
    }

    public function getPropertyName()
    {
        return $this->propertyName;
    }

    public function setPropertyName($propertyName): self
    {
        $this->propertyName = $propertyName;

        return $this;
    }

    public function getPropertyId(): ?int
    {
        return $this->propertyId;
    }

    public function setPropertyId(int $propertyId): self
    {
        $this->propertyId = $propertyId;

        return $this;
    }

    public function getParentPropertyId(): ?int
    {
        return $this->parentPropertyId;
    }

    public function setParentPropertyId(?int $parentPropertyId): self
    {
        $this->parentPropertyId = $parentPropertyId;

        return $this;
    }


}
