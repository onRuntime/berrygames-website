<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfStyleProperty
 *
 * @ORM\Table(name="xf_style_property", uniqueConstraints={@ORM\UniqueConstraint(name="style_id_property_name", columns={"style_id", "property_name"})})
 * @ORM\Entity
 */
class XfStyleProperty
{
    /**
     * @var int
     *
     * @ORM\Column(name="property_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $propertyId;

    /**
     * @var binary
     *
     * @ORM\Column(name="property_name", type="binary", nullable=false)
     */
    private $propertyName;

    /**
     * @var int
     *
     * @ORM\Column(name="style_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $styleId;

    /**
     * @var binary|null
     *
     * @ORM\Column(name="group_name", type="binary", nullable=true)
     */
    private $groupName;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=100, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description = '';

    /**
     * @var string
     *
     * @ORM\Column(name="property_type", type="string", length=25, nullable=false)
     */
    private $propertyType;

    /**
     * @var string
     *
     * @ORM\Column(name="css_components", type="blob", length=65535, nullable=false)
     */
    private $cssComponents;

    /**
     * @var string
     *
     * @ORM\Column(name="value_type", type="string", length=25, nullable=false)
     */
    private $valueType = '';

    /**
     * @var string
     *
     * @ORM\Column(name="value_parameters", type="text", length=65535, nullable=false)
     */
    private $valueParameters;

    /**
     * @var binary
     *
     * @ORM\Column(name="depends_on", type="binary", nullable=false)
     */
    private $dependsOn = '';

    /**
     * @var binary
     *
     * @ORM\Column(name="value_group", type="binary", nullable=false)
     */
    private $valueGroup = '';

    /**
     * @var string
     *
     * @ORM\Column(name="property_value", type="blob", length=16777215, nullable=false)
     */
    private $propertyValue;

    /**
     * @var int
     *
     * @ORM\Column(name="display_order", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $displayOrder = '0';

    /**
     * @var binary
     *
     * @ORM\Column(name="addon_id", type="binary", nullable=false)
     */
    private $addonId;

    public function getPropertyId(): ?int
    {
        return $this->propertyId;
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

    public function getStyleId(): ?int
    {
        return $this->styleId;
    }

    public function setStyleId(int $styleId): self
    {
        $this->styleId = $styleId;

        return $this;
    }

    public function getGroupName()
    {
        return $this->groupName;
    }

    public function setGroupName($groupName): self
    {
        $this->groupName = $groupName;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPropertyType(): ?string
    {
        return $this->propertyType;
    }

    public function setPropertyType(string $propertyType): self
    {
        $this->propertyType = $propertyType;

        return $this;
    }

    public function getCssComponents()
    {
        return $this->cssComponents;
    }

    public function setCssComponents($cssComponents): self
    {
        $this->cssComponents = $cssComponents;

        return $this;
    }

    public function getValueType(): ?string
    {
        return $this->valueType;
    }

    public function setValueType(string $valueType): self
    {
        $this->valueType = $valueType;

        return $this;
    }

    public function getValueParameters(): ?string
    {
        return $this->valueParameters;
    }

    public function setValueParameters(string $valueParameters): self
    {
        $this->valueParameters = $valueParameters;

        return $this;
    }

    public function getDependsOn()
    {
        return $this->dependsOn;
    }

    public function setDependsOn($dependsOn): self
    {
        $this->dependsOn = $dependsOn;

        return $this;
    }

    public function getValueGroup()
    {
        return $this->valueGroup;
    }

    public function setValueGroup($valueGroup): self
    {
        $this->valueGroup = $valueGroup;

        return $this;
    }

    public function getPropertyValue()
    {
        return $this->propertyValue;
    }

    public function setPropertyValue($propertyValue): self
    {
        $this->propertyValue = $propertyValue;

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

    public function getAddonId()
    {
        return $this->addonId;
    }

    public function setAddonId($addonId): self
    {
        $this->addonId = $addonId;

        return $this;
    }


}
