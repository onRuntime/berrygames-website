<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfPurchaseRequest
 *
 * @ORM\Table(name="xf_purchase_request", uniqueConstraints={@ORM\UniqueConstraint(name="request_key", columns={"request_key"})}, indexes={@ORM\Index(name="provider_id_metadata", columns={"provider_id", "provider_metadata"})})
 * @ORM\Entity
 */
class XfPurchaseRequest
{
    /**
     * @var int
     *
     * @ORM\Column(name="purchase_request_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $purchaseRequestId;

    /**
     * @var binary
     *
     * @ORM\Column(name="request_key", type="binary", nullable=false)
     */
    private $requestKey;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $userId = '0';

    /**
     * @var binary
     *
     * @ORM\Column(name="provider_id", type="binary", nullable=false)
     */
    private $providerId;

    /**
     * @var int
     *
     * @ORM\Column(name="payment_profile_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $paymentProfileId;

    /**
     * @var string
     *
     * @ORM\Column(name="purchasable_type_id", type="string", length=50, nullable=false)
     */
    private $purchasableTypeId;

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
     * @var string|null
     *
     * @ORM\Column(name="extra_data", type="blob", length=65535, nullable=true)
     */
    private $extraData;

    /**
     * @var binary|null
     *
     * @ORM\Column(name="provider_metadata", type="binary", nullable=true)
     */
    private $providerMetadata;

    public function getPurchaseRequestId(): ?int
    {
        return $this->purchaseRequestId;
    }

    public function getRequestKey()
    {
        return $this->requestKey;
    }

    public function setRequestKey($requestKey): self
    {
        $this->requestKey = $requestKey;

        return $this;
    }

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    public function getProviderId()
    {
        return $this->providerId;
    }

    public function setProviderId($providerId): self
    {
        $this->providerId = $providerId;

        return $this;
    }

    public function getPaymentProfileId(): ?int
    {
        return $this->paymentProfileId;
    }

    public function setPaymentProfileId(int $paymentProfileId): self
    {
        $this->paymentProfileId = $paymentProfileId;

        return $this;
    }

    public function getPurchasableTypeId(): ?string
    {
        return $this->purchasableTypeId;
    }

    public function setPurchasableTypeId(string $purchasableTypeId): self
    {
        $this->purchasableTypeId = $purchasableTypeId;

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

    public function getExtraData()
    {
        return $this->extraData;
    }

    public function setExtraData($extraData): self
    {
        $this->extraData = $extraData;

        return $this;
    }

    public function getProviderMetadata()
    {
        return $this->providerMetadata;
    }

    public function setProviderMetadata($providerMetadata): self
    {
        $this->providerMetadata = $providerMetadata;

        return $this;
    }


}
