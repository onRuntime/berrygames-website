<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfUserUpgradeActive
 *
 * @ORM\Table(name="xf_user_upgrade_active", uniqueConstraints={@ORM\UniqueConstraint(name="user_id_upgrade_id", columns={"user_id", "user_upgrade_id"})}, indexes={@ORM\Index(name="start_date", columns={"start_date"}), @ORM\Index(name="end_date", columns={"end_date"})})
 * @ORM\Entity
 */
class XfUserUpgradeActive
{
    /**
     * @var int
     *
     * @ORM\Column(name="user_upgrade_record_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userUpgradeRecordId;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $userId;

    /**
     * @var binary|null
     *
     * @ORM\Column(name="purchase_request_key", type="binary", nullable=true)
     */
    private $purchaseRequestKey;

    /**
     * @var int
     *
     * @ORM\Column(name="user_upgrade_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $userUpgradeId;

    /**
     * @var string
     *
     * @ORM\Column(name="extra", type="blob", length=16777215, nullable=false)
     */
    private $extra;

    /**
     * @var int
     *
     * @ORM\Column(name="start_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $startDate;

    /**
     * @var int
     *
     * @ORM\Column(name="end_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $endDate = '0';

    public function getUserUpgradeRecordId(): ?int
    {
        return $this->userUpgradeRecordId;
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

    public function getPurchaseRequestKey()
    {
        return $this->purchaseRequestKey;
    }

    public function setPurchaseRequestKey($purchaseRequestKey): self
    {
        $this->purchaseRequestKey = $purchaseRequestKey;

        return $this;
    }

    public function getUserUpgradeId(): ?int
    {
        return $this->userUpgradeId;
    }

    public function setUserUpgradeId(int $userUpgradeId): self
    {
        $this->userUpgradeId = $userUpgradeId;

        return $this;
    }

    public function getExtra()
    {
        return $this->extra;
    }

    public function setExtra($extra): self
    {
        $this->extra = $extra;

        return $this;
    }

    public function getStartDate(): ?int
    {
        return $this->startDate;
    }

    public function setStartDate(int $startDate): self
    {
        $this->startDate = $startDate;

        return $this;
    }

    public function getEndDate(): ?int
    {
        return $this->endDate;
    }

    public function setEndDate(int $endDate): self
    {
        $this->endDate = $endDate;

        return $this;
    }


}
