<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfWidgetDefinition
 *
 * @ORM\Table(name="xf_widget_definition")
 * @ORM\Entity
 */
class XfWidgetDefinition
{
    /**
     * @var binary
     *
     * @ORM\Column(name="definition_id", type="binary", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $definitionId;

    /**
     * @var string
     *
     * @ORM\Column(name="definition_class", type="string", length=100, nullable=false)
     */
    private $definitionClass;

    /**
     * @var binary
     *
     * @ORM\Column(name="addon_id", type="binary", nullable=false)
     */
    private $addonId = '';

    public function getDefinitionId()
    {
        return $this->definitionId;
    }

    public function getDefinitionClass(): ?string
    {
        return $this->definitionClass;
    }

    public function setDefinitionClass(string $definitionClass): self
    {
        $this->definitionClass = $definitionClass;

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
