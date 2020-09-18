<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfThreadRedirect
 *
 * @ORM\Table(name="xf_thread_redirect", indexes={@ORM\Index(name="redirect_key_expiry_date", columns={"redirect_key", "expiry_date"})})
 * @ORM\Entity
 */
class XfThreadRedirect
{
    /**
     * @var int
     *
     * @ORM\Column(name="thread_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $threadId;

    /**
     * @var string
     *
     * @ORM\Column(name="target_url", type="text", length=65535, nullable=false)
     */
    private $targetUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="redirect_key", type="string", length=50, nullable=false)
     */
    private $redirectKey = '';

    /**
     * @var int
     *
     * @ORM\Column(name="expiry_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $expiryDate = '0';

    public function getThreadId(): ?int
    {
        return $this->threadId;
    }

    public function getTargetUrl(): ?string
    {
        return $this->targetUrl;
    }

    public function setTargetUrl(string $targetUrl): self
    {
        $this->targetUrl = $targetUrl;

        return $this;
    }

    public function getRedirectKey(): ?string
    {
        return $this->redirectKey;
    }

    public function setRedirectKey(string $redirectKey): self
    {
        $this->redirectKey = $redirectKey;

        return $this;
    }

    public function getExpiryDate(): ?int
    {
        return $this->expiryDate;
    }

    public function setExpiryDate(int $expiryDate): self
    {
        $this->expiryDate = $expiryDate;

        return $this;
    }


}
