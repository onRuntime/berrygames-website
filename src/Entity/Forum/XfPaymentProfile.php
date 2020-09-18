<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfPaymentProfile
 *
 * @ORM\Table(name="xf_payment_profile")
 * @ORM\Entity
 */
class XfPaymentProfile
{
    /**
     * @var int
     *
     * @ORM\Column(name="payment_profile_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $paymentProfileId;

    /**
     * @var binary
     *
     * @ORM\Column(name="provider_id", type="binary", nullable=false)
     */
    private $providerId;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=100, nullable=false)
     */
    private $title = '';

    /**
     * @var string
     *
     * @ORM\Column(name="display_title", type="string", length=100, nullable=false)
     */
    private $displayTitle = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="options", type="blob", length=65535, nullable=true)
     */
    private $options;

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $active = '1';

    public function getPaymentProfileId(): ?int
    {
        return $this->paymentProfileId;
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

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getDisplayTitle(): ?string
    {
        return $this->displayTitle;
    }

    public function setDisplayTitle(string $displayTitle): self
    {
        $this->displayTitle = $displayTitle;

        return $this;
    }

    public function getOptions()
    {
        return $this->options;
    }

    public function setOptions($options): self
    {
        $this->options = $options;

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


}
