<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfPurchasable
 *
 * @ORM\Table(name="xf_purchasable")
 * @ORM\Entity
 */
class XfPurchasable
{
    /**
     * @var string
     *
     * @ORM\Column(name="purchasable_type_id", type="string", length=50, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $purchasableTypeId;

    /**
     * @var string
     *
     * @ORM\Column(name="purchasable_class", type="string", length=100, nullable=false)
     */
    private $purchasableClass;

    /**
     * @var binary
     *
     * @ORM\Column(name="addon_id", type="binary", nullable=false)
     */
    private $addonId = '';

    public function getPurchasableTypeId(): ?string
    {
        return $this->purchasableTypeId;
    }

    public function getPurchasableClass(): ?string
    {
        return $this->purchasableClass;
    }

    public function setPurchasableClass(string $purchasableClass): self
    {
        $this->purchasableClass = $purchasableClass;

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
