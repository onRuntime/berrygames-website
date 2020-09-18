<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfPaymentProviderLog
 *
 * @ORM\Table(name="xf_payment_provider_log", indexes={@ORM\Index(name="subscriber_id", columns={"subscriber_id"}), @ORM\Index(name="transaction_id", columns={"transaction_id"}), @ORM\Index(name="log_date", columns={"log_date"})})
 * @ORM\Entity
 */
class XfPaymentProviderLog
{
    /**
     * @var int
     *
     * @ORM\Column(name="provider_log_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $providerLogId;

    /**
     * @var binary|null
     *
     * @ORM\Column(name="purchase_request_key", type="binary", nullable=true)
     */
    private $purchaseRequestKey;

    /**
     * @var binary
     *
     * @ORM\Column(name="provider_id", type="binary", nullable=false)
     */
    private $providerId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="transaction_id", type="string", length=100, nullable=true)
     */
    private $transactionId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="subscriber_id", type="string", length=100, nullable=true)
     */
    private $subscriberId;

    /**
     * @var string
     *
     * @ORM\Column(name="log_type", type="string", length=0, nullable=false)
     */
    private $logType;

    /**
     * @var string
     *
     * @ORM\Column(name="log_message", type="string", length=255, nullable=false)
     */
    private $logMessage = '';

    /**
     * @var string
     *
     * @ORM\Column(name="log_details", type="blob", length=16777215, nullable=false)
     */
    private $logDetails;

    /**
     * @var int
     *
     * @ORM\Column(name="log_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $logDate = '0';

    public function getProviderLogId(): ?int
    {
        return $this->providerLogId;
    }

    public function getPurchaseRequestKey()
    {
        return $this->purchaseRequestKey;
    }

    public function setPurchaseRequestKey($purchaseRequestKey): self
    {
        $this->purchaseRequestKey = $purchaseRequestKey;

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

    public function getTransactionId(): ?string
    {
        return $this->transactionId;
    }

    public function setTransactionId(?string $transactionId): self
    {
        $this->transactionId = $transactionId;

        return $this;
    }

    public function getSubscriberId(): ?string
    {
        return $this->subscriberId;
    }

    public function setSubscriberId(?string $subscriberId): self
    {
        $this->subscriberId = $subscriberId;

        return $this;
    }

    public function getLogType(): ?string
    {
        return $this->logType;
    }

    public function setLogType(string $logType): self
    {
        $this->logType = $logType;

        return $this;
    }

    public function getLogMessage(): ?string
    {
        return $this->logMessage;
    }

    public function setLogMessage(string $logMessage): self
    {
        $this->logMessage = $logMessage;

        return $this;
    }

    public function getLogDetails()
    {
        return $this->logDetails;
    }

    public function setLogDetails($logDetails): self
    {
        $this->logDetails = $logDetails;

        return $this;
    }

    public function getLogDate(): ?int
    {
        return $this->logDate;
    }

    public function setLogDate(int $logDate): self
    {
        $this->logDate = $logDate;

        return $this;
    }


}
