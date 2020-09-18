<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfUpgradeCheck
 *
 * @ORM\Table(name="xf_upgrade_check", indexes={@ORM\Index(name="check_date", columns={"check_date"})})
 * @ORM\Entity
 */
class XfUpgradeCheck
{
    /**
     * @var int
     *
     * @ORM\Column(name="check_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $checkId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="error_code", type="string", length=50, nullable=true)
     */
    private $errorCode;

    /**
     * @var int|null
     *
     * @ORM\Column(name="check_date", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $checkDate;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="board_url_valid", type="boolean", nullable=true)
     */
    private $boardUrlValid;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="branding_valid", type="boolean", nullable=true)
     */
    private $brandingValid;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="license_expired", type="boolean", nullable=true)
     */
    private $licenseExpired;

    /**
     * @var string|null
     *
     * @ORM\Column(name="invalid_add_ons", type="blob", length=65535, nullable=true)
     */
    private $invalidAddOns;

    /**
     * @var string|null
     *
     * @ORM\Column(name="available_updates", type="blob", length=65535, nullable=true)
     */
    private $availableUpdates;

    public function getCheckId(): ?int
    {
        return $this->checkId;
    }

    public function getErrorCode(): ?string
    {
        return $this->errorCode;
    }

    public function setErrorCode(?string $errorCode): self
    {
        $this->errorCode = $errorCode;

        return $this;
    }

    public function getCheckDate(): ?int
    {
        return $this->checkDate;
    }

    public function setCheckDate(?int $checkDate): self
    {
        $this->checkDate = $checkDate;

        return $this;
    }

    public function getBoardUrlValid(): ?bool
    {
        return $this->boardUrlValid;
    }

    public function setBoardUrlValid(?bool $boardUrlValid): self
    {
        $this->boardUrlValid = $boardUrlValid;

        return $this;
    }

    public function getBrandingValid(): ?bool
    {
        return $this->brandingValid;
    }

    public function setBrandingValid(?bool $brandingValid): self
    {
        $this->brandingValid = $brandingValid;

        return $this;
    }

    public function getLicenseExpired(): ?bool
    {
        return $this->licenseExpired;
    }

    public function setLicenseExpired(?bool $licenseExpired): self
    {
        $this->licenseExpired = $licenseExpired;

        return $this;
    }

    public function getInvalidAddOns()
    {
        return $this->invalidAddOns;
    }

    public function setInvalidAddOns($invalidAddOns): self
    {
        $this->invalidAddOns = $invalidAddOns;

        return $this;
    }

    public function getAvailableUpdates()
    {
        return $this->availableUpdates;
    }

    public function setAvailableUpdates($availableUpdates): self
    {
        $this->availableUpdates = $availableUpdates;

        return $this;
    }


}
