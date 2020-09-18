<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfConnectedAccountProvider
 *
 * @ORM\Table(name="xf_connected_account_provider")
 * @ORM\Entity
 */
class XfConnectedAccountProvider
{
    /**
     * @var binary
     *
     * @ORM\Column(name="provider_id", type="binary", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $providerId;

    /**
     * @var string
     *
     * @ORM\Column(name="provider_class", type="string", length=100, nullable=false)
     */
    private $providerClass;

    /**
     * @var int
     *
     * @ORM\Column(name="display_order", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $displayOrder;

    /**
     * @var string
     *
     * @ORM\Column(name="options", type="blob", length=16777215, nullable=false)
     */
    private $options;

    public function getProviderId()
    {
        return $this->providerId;
    }

    public function getProviderClass(): ?string
    {
        return $this->providerClass;
    }

    public function setProviderClass(string $providerClass): self
    {
        $this->providerClass = $providerClass;

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

    public function getOptions()
    {
        return $this->options;
    }

    public function setOptions($options): self
    {
        $this->options = $options;

        return $this;
    }


}
