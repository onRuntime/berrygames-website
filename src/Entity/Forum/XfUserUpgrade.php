<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfUserUpgrade
 *
 * @ORM\Table(name="xf_user_upgrade", indexes={@ORM\Index(name="display_order", columns={"display_order"})})
 * @ORM\Entity
 */
class XfUserUpgrade
{
    /**
     * @var int
     *
     * @ORM\Column(name="user_upgrade_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userUpgradeId;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=50, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="display_order", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $displayOrder = '0';

    /**
     * @var binary
     *
     * @ORM\Column(name="extra_group_ids", type="binary", nullable=false)
     */
    private $extraGroupIds = '';

    /**
     * @var bool
     *
     * @ORM\Column(name="recurring", type="boolean", nullable=false)
     */
    private $recurring = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="cost_amount", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $costAmount;

    /**
     * @var string
     *
     * @ORM\Column(name="cost_currency", type="string", length=3, nullable=false)
     */
    private $costCurrency;

    /**
     * @var bool
     *
     * @ORM\Column(name="length_amount", type="boolean", nullable=false)
     */
    private $lengthAmount;

    /**
     * @var string
     *
     * @ORM\Column(name="length_unit", type="string", length=0, nullable=false)
     */
    private $lengthUnit = '';

    /**
     * @var binary
     *
     * @ORM\Column(name="disabled_upgrade_ids", type="binary", nullable=false)
     */
    private $disabledUpgradeIds = '';

    /**
     * @var bool
     *
     * @ORM\Column(name="can_purchase", type="boolean", nullable=false, options={"default"="1"})
     */
    private $canPurchase = '1';

    /**
     * @var binary
     *
     * @ORM\Column(name="payment_profile_ids", type="binary", nullable=false)
     */
    private $paymentProfileIds = '';

    public function getUserUpgradeId(): ?int
    {
        return $this->userUpgradeId;
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

    public function getDisplayOrder(): ?int
    {
        return $this->displayOrder;
    }

    public function setDisplayOrder(int $displayOrder): self
    {
        $this->displayOrder = $displayOrder;

        return $this;
    }

    public function getExtraGroupIds()
    {
        return $this->extraGroupIds;
    }

    public function setExtraGroupIds($extraGroupIds): self
    {
        $this->extraGroupIds = $extraGroupIds;

        return $this;
    }

    public function getRecurring(): ?bool
    {
        return $this->recurring;
    }

    public function setRecurring(bool $recurring): self
    {
        $this->recurring = $recurring;

        return $this;
    }

    public function getCostAmount(): ?string
    {
        return $this->costAmount;
    }

    public function setCostAmount(string $costAmount): self
    {
        $this->costAmount = $costAmount;

        return $this;
    }

    public function getCostCurrency(): ?string
    {
        return $this->costCurrency;
    }

    public function setCostCurrency(string $costCurrency): self
    {
        $this->costCurrency = $costCurrency;

        return $this;
    }

    public function getLengthAmount(): ?bool
    {
        return $this->lengthAmount;
    }

    public function setLengthAmount(bool $lengthAmount): self
    {
        $this->lengthAmount = $lengthAmount;

        return $this;
    }

    public function getLengthUnit(): ?string
    {
        return $this->lengthUnit;
    }

    public function setLengthUnit(string $lengthUnit): self
    {
        $this->lengthUnit = $lengthUnit;

        return $this;
    }

    public function getDisabledUpgradeIds()
    {
        return $this->disabledUpgradeIds;
    }

    public function setDisabledUpgradeIds($disabledUpgradeIds): self
    {
        $this->disabledUpgradeIds = $disabledUpgradeIds;

        return $this;
    }

    public function getCanPurchase(): ?bool
    {
        return $this->canPurchase;
    }

    public function setCanPurchase(bool $canPurchase): self
    {
        $this->canPurchase = $canPurchase;

        return $this;
    }

    public function getPaymentProfileIds()
    {
        return $this->paymentProfileIds;
    }

    public function setPaymentProfileIds($paymentProfileIds): self
    {
        $this->paymentProfileIds = $paymentProfileIds;

        return $this;
    }


}
