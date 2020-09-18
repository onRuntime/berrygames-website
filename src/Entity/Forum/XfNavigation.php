<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfNavigation
 *
 * @ORM\Table(name="xf_navigation", indexes={@ORM\Index(name="parent_navigation_id_display_order", columns={"parent_navigation_id", "display_order"})})
 * @ORM\Entity
 */
class XfNavigation
{
    /**
     * @var binary
     *
     * @ORM\Column(name="navigation_id", type="binary", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $navigationId;

    /**
     * @var binary
     *
     * @ORM\Column(name="parent_navigation_id", type="binary", nullable=false)
     */
    private $parentNavigationId;

    /**
     * @var int
     *
     * @ORM\Column(name="display_order", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $displayOrder = '0';

    /**
     * @var binary
     *
     * @ORM\Column(name="navigation_type_id", type="binary", nullable=false)
     */
    private $navigationTypeId;

    /**
     * @var string
     *
     * @ORM\Column(name="type_config", type="text", length=16777215, nullable=false)
     */
    private $typeConfig;

    /**
     * @var string
     *
     * @ORM\Column(name="condition_expression", type="blob", length=16777215, nullable=false)
     */
    private $conditionExpression;

    /**
     * @var string
     *
     * @ORM\Column(name="condition_setup", type="blob", length=16777215, nullable=false)
     */
    private $conditionSetup;

    /**
     * @var string
     *
     * @ORM\Column(name="data_expression", type="blob", length=16777215, nullable=false)
     */
    private $dataExpression;

    /**
     * @var string
     *
     * @ORM\Column(name="data_setup", type="blob", length=16777215, nullable=false)
     */
    private $dataSetup;

    /**
     * @var string
     *
     * @ORM\Column(name="global_setup", type="blob", length=16777215, nullable=false)
     */
    private $globalSetup;

    /**
     * @var bool
     *
     * @ORM\Column(name="enabled", type="boolean", nullable=false)
     */
    private $enabled = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="is_customized", type="boolean", nullable=false)
     */
    private $isCustomized = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="default_value", type="blob", length=16777215, nullable=false)
     */
    private $defaultValue;

    /**
     * @var binary
     *
     * @ORM\Column(name="addon_id", type="binary", nullable=false)
     */
    private $addonId = '';

    public function getNavigationId()
    {
        return $this->navigationId;
    }

    public function getParentNavigationId()
    {
        return $this->parentNavigationId;
    }

    public function setParentNavigationId($parentNavigationId): self
    {
        $this->parentNavigationId = $parentNavigationId;

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

    public function getNavigationTypeId()
    {
        return $this->navigationTypeId;
    }

    public function setNavigationTypeId($navigationTypeId): self
    {
        $this->navigationTypeId = $navigationTypeId;

        return $this;
    }

    public function getTypeConfig(): ?string
    {
        return $this->typeConfig;
    }

    public function setTypeConfig(string $typeConfig): self
    {
        $this->typeConfig = $typeConfig;

        return $this;
    }

    public function getConditionExpression()
    {
        return $this->conditionExpression;
    }

    public function setConditionExpression($conditionExpression): self
    {
        $this->conditionExpression = $conditionExpression;

        return $this;
    }

    public function getConditionSetup()
    {
        return $this->conditionSetup;
    }

    public function setConditionSetup($conditionSetup): self
    {
        $this->conditionSetup = $conditionSetup;

        return $this;
    }

    public function getDataExpression()
    {
        return $this->dataExpression;
    }

    public function setDataExpression($dataExpression): self
    {
        $this->dataExpression = $dataExpression;

        return $this;
    }

    public function getDataSetup()
    {
        return $this->dataSetup;
    }

    public function setDataSetup($dataSetup): self
    {
        $this->dataSetup = $dataSetup;

        return $this;
    }

    public function getGlobalSetup()
    {
        return $this->globalSetup;
    }

    public function setGlobalSetup($globalSetup): self
    {
        $this->globalSetup = $globalSetup;

        return $this;
    }

    public function getEnabled(): ?bool
    {
        return $this->enabled;
    }

    public function setEnabled(bool $enabled): self
    {
        $this->enabled = $enabled;

        return $this;
    }

    public function getIsCustomized(): ?bool
    {
        return $this->isCustomized;
    }

    public function setIsCustomized(bool $isCustomized): self
    {
        $this->isCustomized = $isCustomized;

        return $this;
    }

    public function getDefaultValue()
    {
        return $this->defaultValue;
    }

    public function setDefaultValue($defaultValue): self
    {
        $this->defaultValue = $defaultValue;

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
