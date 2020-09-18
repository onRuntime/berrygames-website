<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfRegistrationSpamCache
 *
 * @ORM\Table(name="xf_registration_spam_cache", indexes={@ORM\Index(name="timeout", columns={"timeout"})})
 * @ORM\Entity
 */
class XfRegistrationSpamCache
{
    /**
     * @var binary
     *
     * @ORM\Column(name="cache_key", type="binary", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cacheKey = '';

    /**
     * @var string
     *
     * @ORM\Column(name="result", type="blob", length=16777215, nullable=false)
     */
    private $result;

    /**
     * @var int
     *
     * @ORM\Column(name="timeout", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $timeout = '0';

    public function getCacheKey()
    {
        return $this->cacheKey;
    }

    public function getResult()
    {
        return $this->result;
    }

    public function setResult($result): self
    {
        $this->result = $result;

        return $this;
    }

    public function getTimeout(): ?int
    {
        return $this->timeout;
    }

    public function setTimeout(int $timeout): self
    {
        $this->timeout = $timeout;

        return $this;
    }


}
