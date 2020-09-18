<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfUserConfirmation
 *
 * @ORM\Table(name="xf_user_confirmation", indexes={@ORM\Index(name="confirmation_date", columns={"confirmation_date"})})
 * @ORM\Entity
 */
class XfUserConfirmation
{
    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="confirmation_type", type="string", length=25, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $confirmationType;

    /**
     * @var string
     *
     * @ORM\Column(name="confirmation_key", type="string", length=16, nullable=false)
     */
    private $confirmationKey;

    /**
     * @var int
     *
     * @ORM\Column(name="confirmation_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $confirmationDate;

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function getConfirmationType(): ?string
    {
        return $this->confirmationType;
    }

    public function getConfirmationKey(): ?string
    {
        return $this->confirmationKey;
    }

    public function setConfirmationKey(string $confirmationKey): self
    {
        $this->confirmationKey = $confirmationKey;

        return $this;
    }

    public function getConfirmationDate(): ?int
    {
        return $this->confirmationDate;
    }

    public function setConfirmationDate(int $confirmationDate): self
    {
        $this->confirmationDate = $confirmationDate;

        return $this;
    }


}
