<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfCaptchaLog
 *
 * @ORM\Table(name="xf_captcha_log", indexes={@ORM\Index(name="captcha_date", columns={"captcha_date"})})
 * @ORM\Entity
 */
class XfCaptchaLog
{
    /**
     * @var binary
     *
     * @ORM\Column(name="hash", type="binary", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $hash;

    /**
     * @var string
     *
     * @ORM\Column(name="captcha_type", type="string", length=250, nullable=false)
     */
    private $captchaType;

    /**
     * @var string
     *
     * @ORM\Column(name="captcha_data", type="string", length=250, nullable=false)
     */
    private $captchaData;

    /**
     * @var int
     *
     * @ORM\Column(name="captcha_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $captchaDate;

    public function getHash()
    {
        return $this->hash;
    }

    public function getCaptchaType(): ?string
    {
        return $this->captchaType;
    }

    public function setCaptchaType(string $captchaType): self
    {
        $this->captchaType = $captchaType;

        return $this;
    }

    public function getCaptchaData(): ?string
    {
        return $this->captchaData;
    }

    public function setCaptchaData(string $captchaData): self
    {
        $this->captchaData = $captchaData;

        return $this;
    }

    public function getCaptchaDate(): ?int
    {
        return $this->captchaDate;
    }

    public function setCaptchaDate(int $captchaDate): self
    {
        $this->captchaDate = $captchaDate;

        return $this;
    }


}
