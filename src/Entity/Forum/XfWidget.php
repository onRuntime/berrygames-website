<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfWidget
 *
 * @ORM\Table(name="xf_widget", uniqueConstraints={@ORM\UniqueConstraint(name="widget_key", columns={"widget_key"})})
 * @ORM\Entity
 */
class XfWidget
{
    /**
     * @var int
     *
     * @ORM\Column(name="widget_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $widgetId;

    /**
     * @var binary
     *
     * @ORM\Column(name="widget_key", type="binary", nullable=false)
     */
    private $widgetKey;

    /**
     * @var binary
     *
     * @ORM\Column(name="definition_id", type="binary", nullable=false)
     */
    private $definitionId;

    /**
     * @var string
     *
     * @ORM\Column(name="positions", type="blob", length=65535, nullable=false)
     */
    private $positions;

    /**
     * @var string
     *
     * @ORM\Column(name="options", type="blob", length=65535, nullable=false)
     */
    private $options;

    /**
     * @var string
     *
     * @ORM\Column(name="display_condition", type="text", length=16777215, nullable=false)
     */
    private $displayCondition;

    /**
     * @var string
     *
     * @ORM\Column(name="condition_expression", type="blob", length=16777215, nullable=false)
     */
    private $conditionExpression;

    public function getWidgetId(): ?int
    {
        return $this->widgetId;
    }

    public function getWidgetKey()
    {
        return $this->widgetKey;
    }

    public function setWidgetKey($widgetKey): self
    {
        $this->widgetKey = $widgetKey;

        return $this;
    }

    public function getDefinitionId()
    {
        return $this->definitionId;
    }

    public function setDefinitionId($definitionId): self
    {
        $this->definitionId = $definitionId;

        return $this;
    }

    public function getPositions()
    {
        return $this->positions;
    }

    public function setPositions($positions): self
    {
        $this->positions = $positions;

        return $this;
    }

    public function getOptions()
    {
        return $this->options;
    }

    public function setOptions($options): self
    {
        $this->options = $options;

        return $this;
    }

    public function getDisplayCondition(): ?string
    {
        return $this->displayCondition;
    }

    public function setDisplayCondition(string $displayCondition): self
    {
        $this->displayCondition = $displayCondition;

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


}
