<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfClassExtension
 *
 * @ORM\Table(name="xf_class_extension", uniqueConstraints={@ORM\UniqueConstraint(name="from_class", columns={"from_class", "to_class"})})
 * @ORM\Entity
 */
class XfClassExtension
{
    /**
     * @var int
     *
     * @ORM\Column(name="extension_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $extensionId;

    /**
     * @var string
     *
     * @ORM\Column(name="from_class", type="string", length=100, nullable=false)
     */
    private $fromClass;

    /**
     * @var string
     *
     * @ORM\Column(name="to_class", type="string", length=100, nullable=false)
     */
    private $toClass;

    /**
     * @var int
     *
     * @ORM\Column(name="execute_order", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $executeOrder;

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active;

    /**
     * @var binary
     *
     * @ORM\Column(name="addon_id", type="binary", nullable=false)
     */
    private $addonId;

    public function getExtensionId(): ?int
    {
        return $this->extensionId;
    }

    public function getFromClass(): ?string
    {
        return $this->fromClass;
    }

    public function setFromClass(string $fromClass): self
    {
        $this->fromClass = $fromClass;

        return $this;
    }

    public function getToClass(): ?string
    {
        return $this->toClass;
    }

    public function setToClass(string $toClass): self
    {
        $this->toClass = $toClass;

        return $this;
    }

    public function getExecuteOrder(): ?int
    {
        return $this->executeOrder;
    }

    public function setExecuteOrder(int $executeOrder): self
    {
        $this->executeOrder = $executeOrder;

        return $this;
    }

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

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
