<?php

namespace App\Entity\Berrygames;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Translations
 *
 * @ORM\Table(name="translations")
 * @ORM\Entity
 * @UniqueEntity("i18n")
 */
class Translations
{
    /**
     * @var string
     *
     * @ORM\Id
     * @ORM\Column(name="i18n", type="string", length=255, nullable=false)
     */
    private $i18n;

    /**
     * @var string
     *
     * @ORM\Column(name="en", type="text", length=4294967295, nullable=false)
     */
    private $en;

    /**
     * @var string
     *
     * @ORM\Column(name="fr", type="text", length=4294967295, nullable=false)
     */
    private $fr;

    public function getI18n(): ?string
    {
        return $this->i18n;
    }

    public function setI18n(string $i18n): self
    {
        $this->i18n = $i18n;

        return $this;
    }

    public function geten(): ?string
    {
        return $this->en;
    }

    public function seten(string $en): self
    {
        $this->en = $en;

        return $this;
    }

    public function getfr(): ?string
    {
        return $this->fr;
    }

    public function setfr(string $fr): self
    {
        $this->fr = $fr;

        return $this;
    }


}
