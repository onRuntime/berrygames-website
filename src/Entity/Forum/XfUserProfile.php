<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfUserProfile
 *
 * @ORM\Table(name="xf_user_profile", indexes={@ORM\Index(name="dob", columns={"dob_month", "dob_day", "dob_year"})})
 * @ORM\Entity
 */
class XfUserProfile
{
    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userId;

    /**
     * @var bool
     *
     * @ORM\Column(name="dob_day", type="boolean", nullable=false)
     */
    private $dobDay = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="dob_month", type="boolean", nullable=false)
     */
    private $dobMonth = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="dob_year", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $dobYear = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="signature", type="text", length=65535, nullable=false)
     */
    private $signature;

    /**
     * @var string
     *
     * @ORM\Column(name="website", type="text", length=65535, nullable=false)
     */
    private $website;

    /**
     * @var string
     *
     * @ORM\Column(name="location", type="string", length=50, nullable=false)
     */
    private $location = '';

    /**
     * @var string
     *
     * @ORM\Column(name="following", type="text", length=65535, nullable=false, options={"comment"="Comma-separated integers from xf_user_follow"})
     */
    private $following;

    /**
     * @var string
     *
     * @ORM\Column(name="ignored", type="text", length=65535, nullable=false, options={"comment"="Comma-separated integers from xf_user_ignored"})
     */
    private $ignored;

    /**
     * @var int
     *
     * @ORM\Column(name="avatar_crop_x", type="integer", nullable=false, options={"unsigned"=true,"comment"="X-Position from which to start the square crop on the m avatar"})
     */
    private $avatarCropX = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="avatar_crop_y", type="integer", nullable=false, options={"unsigned"=true,"comment"="Y-Position from which to start the square crop on the m avatar"})
     */
    private $avatarCropY = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="about", type="text", length=65535, nullable=false)
     */
    private $about;

    /**
     * @var string
     *
     * @ORM\Column(name="custom_fields", type="blob", length=16777215, nullable=false)
     */
    private $customFields;

    /**
     * @var string
     *
     * @ORM\Column(name="connected_accounts", type="blob", length=16777215, nullable=false)
     */
    private $connectedAccounts;

    /**
     * @var int
     *
     * @ORM\Column(name="password_date", type="integer", nullable=false, options={"default"="1","unsigned"=true})
     */
    private $passwordDate = '1';

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function getDobDay(): ?bool
    {
        return $this->dobDay;
    }

    public function setDobDay(bool $dobDay): self
    {
        $this->dobDay = $dobDay;

        return $this;
    }

    public function getDobMonth(): ?bool
    {
        return $this->dobMonth;
    }

    public function setDobMonth(bool $dobMonth): self
    {
        $this->dobMonth = $dobMonth;

        return $this;
    }

    public function getDobYear(): ?int
    {
        return $this->dobYear;
    }

    public function setDobYear(int $dobYear): self
    {
        $this->dobYear = $dobYear;

        return $this;
    }

    public function getSignature(): ?string
    {
        return $this->signature;
    }

    public function setSignature(string $signature): self
    {
        $this->signature = $signature;

        return $this;
    }

    public function getWebsite(): ?string
    {
        return $this->website;
    }

    public function setWebsite(string $website): self
    {
        $this->website = $website;

        return $this;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(string $location): self
    {
        $this->location = $location;

        return $this;
    }

    public function getFollowing(): ?string
    {
        return $this->following;
    }

    public function setFollowing(string $following): self
    {
        $this->following = $following;

        return $this;
    }

    public function getIgnored(): ?string
    {
        return $this->ignored;
    }

    public function setIgnored(string $ignored): self
    {
        $this->ignored = $ignored;

        return $this;
    }

    public function getAvatarCropX(): ?int
    {
        return $this->avatarCropX;
    }

    public function setAvatarCropX(int $avatarCropX): self
    {
        $this->avatarCropX = $avatarCropX;

        return $this;
    }

    public function getAvatarCropY(): ?int
    {
        return $this->avatarCropY;
    }

    public function setAvatarCropY(int $avatarCropY): self
    {
        $this->avatarCropY = $avatarCropY;

        return $this;
    }

    public function getAbout(): ?string
    {
        return $this->about;
    }

    public function setAbout(string $about): self
    {
        $this->about = $about;

        return $this;
    }

    public function getCustomFields()
    {
        return $this->customFields;
    }

    public function setCustomFields($customFields): self
    {
        $this->customFields = $customFields;

        return $this;
    }

    public function getConnectedAccounts()
    {
        return $this->connectedAccounts;
    }

    public function setConnectedAccounts($connectedAccounts): self
    {
        $this->connectedAccounts = $connectedAccounts;

        return $this;
    }

    public function getPasswordDate(): ?int
    {
        return $this->passwordDate;
    }

    public function setPasswordDate(int $passwordDate): self
    {
        $this->passwordDate = $passwordDate;

        return $this;
    }


}
