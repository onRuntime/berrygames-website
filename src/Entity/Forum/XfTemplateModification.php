<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfTemplateModification
 *
 * @ORM\Table(name="xf_template_modification", uniqueConstraints={@ORM\UniqueConstraint(name="modification_key", columns={"modification_key"})}, indexes={@ORM\Index(name="addon_id", columns={"addon_id"}), @ORM\Index(name="template_order", columns={"template", "execution_order"})})
 * @ORM\Entity
 */
class XfTemplateModification
{
    /**
     * @var int
     *
     * @ORM\Column(name="modification_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $modificationId;

    /**
     * @var binary
     *
     * @ORM\Column(name="addon_id", type="binary", nullable=false)
     */
    private $addonId;

    /**
     * @var binary
     *
     * @ORM\Column(name="type", type="binary", nullable=false)
     */
    private $type;

    /**
     * @var binary
     *
     * @ORM\Column(name="template", type="binary", nullable=false)
     */
    private $template;

    /**
     * @var binary
     *
     * @ORM\Column(name="modification_key", type="binary", nullable=false)
     */
    private $modificationKey;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="execution_order", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $executionOrder;

    /**
     * @var bool
     *
     * @ORM\Column(name="enabled", type="boolean", nullable=false)
     */
    private $enabled;

    /**
     * @var string
     *
     * @ORM\Column(name="action", type="string", length=25, nullable=false)
     */
    private $action;

    /**
     * @var string
     *
     * @ORM\Column(name="find", type="text", length=65535, nullable=false)
     */
    private $find;

    /**
     * @var string
     *
     * @ORM\Column(name="replace", type="text", length=65535, nullable=false)
     */
    private $replace;

    public function getModificationId(): ?int
    {
        return $this->modificationId;
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

    public function getType()
    {
        return $this->type;
    }

    public function setType($type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getTemplate()
    {
        return $this->template;
    }

    public function setTemplate($template): self
    {
        $this->template = $template;

        return $this;
    }

    public function getModificationKey()
    {
        return $this->modificationKey;
    }

    public function setModificationKey($modificationKey): self
    {
        $this->modificationKey = $modificationKey;

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

    public function getExecutionOrder(): ?int
    {
        return $this->executionOrder;
    }

    public function setExecutionOrder(int $executionOrder): self
    {
        $this->executionOrder = $executionOrder;

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

    public function getAction(): ?string
    {
        return $this->action;
    }

    public function setAction(string $action): self
    {
        $this->action = $action;

        return $this;
    }

    public function getFind(): ?string
    {
        return $this->find;
    }

    public function setFind(string $find): self
    {
        $this->find = $find;

        return $this;
    }

    public function getReplace(): ?string
    {
        return $this->replace;
    }

    public function setReplace(string $replace): self
    {
        $this->replace = $replace;

        return $this;
    }


}
