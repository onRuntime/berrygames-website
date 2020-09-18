<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfUserChangeTemp
 *
 * @ORM\Table(name="xf_user_change_temp", uniqueConstraints={@ORM\UniqueConstraint(name="user_id", columns={"user_id", "change_key"})}, indexes={@ORM\Index(name="expiry_date", columns={"expiry_date"}), @ORM\Index(name="change_key", columns={"change_key"})})
 * @ORM\Entity
 */
class XfUserChangeTemp
{
    /**
     * @var int
     *
     * @ORM\Column(name="user_change_temp_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userChangeTempId;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $userId;

    /**
     * @var binary|null
     *
     * @ORM\Column(name="change_key", type="binary", nullable=true)
     */
    private $changeKey;

    /**
     * @var binary
     *
     * @ORM\Column(name="action_type", type="binary", nullable=false)
     */
    private $actionType;

    /**
     * @var binary|null
     *
     * @ORM\Column(name="action_modifier", type="binary", nullable=true)
     */
    private $actionModifier;

    /**
     * @var string|null
     *
     * @ORM\Column(name="new_value", type="blob", length=16777215, nullable=true)
     */
    private $newValue;

    /**
     * @var string|null
     *
     * @ORM\Column(name="old_value", type="blob", length=16777215, nullable=true)
     */
    private $oldValue;

    /**
     * @var int|null
     *
     * @ORM\Column(name="create_date", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $createDate;

    /**
     * @var int|null
     *
     * @ORM\Column(name="expiry_date", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $expiryDate;

    public function getUserChangeTempId(): ?int
    {
        return $this->userChangeTempId;
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

    public function getChangeKey()
    {
        return $this->changeKey;
    }

    public function setChangeKey($changeKey): self
    {
        $this->changeKey = $changeKey;

        return $this;
    }

    public function getActionType()
    {
        return $this->actionType;
    }

    public function setActionType($actionType): self
    {
        $this->actionType = $actionType;

        return $this;
    }

    public function getActionModifier()
    {
        return $this->actionModifier;
    }

    public function setActionModifier($actionModifier): self
    {
        $this->actionModifier = $actionModifier;

        return $this;
    }

    public function getNewValue()
    {
        return $this->newValue;
    }

    public function setNewValue($newValue): self
    {
        $this->newValue = $newValue;

        return $this;
    }

    public function getOldValue()
    {
        return $this->oldValue;
    }

    public function setOldValue($oldValue): self
    {
        $this->oldValue = $oldValue;

        return $this;
    }

    public function getCreateDate(): ?int
    {
        return $this->createDate;
    }

    public function setCreateDate(?int $createDate): self
    {
        $this->createDate = $createDate;

        return $this;
    }

    public function getExpiryDate(): ?int
    {
        return $this->expiryDate;
    }

    public function setExpiryDate(?int $expiryDate): self
    {
        $this->expiryDate = $expiryDate;

        return $this;
    }


}
