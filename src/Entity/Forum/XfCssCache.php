<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfCssCache
 *
 * @ORM\Table(name="xf_css_cache", uniqueConstraints={@ORM\UniqueConstraint(name="style_language_title_modifier", columns={"style_id", "language_id", "title", "modifier_key"})})
 * @ORM\Entity
 */
class XfCssCache
{
    /**
     * @var int
     *
     * @ORM\Column(name="cache_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cacheId;

    /**
     * @var int
     *
     * @ORM\Column(name="style_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $styleId;

    /**
     * @var int
     *
     * @ORM\Column(name="language_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $languageId;

    /**
     * @var binary
     *
     * @ORM\Column(name="title", type="binary", nullable=false)
     */
    private $title;

    /**
     * @var binary
     *
     * @ORM\Column(name="modifier_key", type="binary", nullable=false)
     */
    private $modifierKey;

    /**
     * @var string
     *
     * @ORM\Column(name="output", type="blob", length=16777215, nullable=false)
     */
    private $output;

    /**
     * @var int
     *
     * @ORM\Column(name="cache_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $cacheDate;

    public function getCacheId(): ?int
    {
        return $this->cacheId;
    }

    public function getStyleId(): ?int
    {
        return $this->styleId;
    }

    public function setStyleId(int $styleId): self
    {
        $this->styleId = $styleId;

        return $this;
    }

    public function getLanguageId(): ?int
    {
        return $this->languageId;
    }

    public function setLanguageId(int $languageId): self
    {
        $this->languageId = $languageId;

        return $this;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getModifierKey()
    {
        return $this->modifierKey;
    }

    public function setModifierKey($modifierKey): self
    {
        $this->modifierKey = $modifierKey;

        return $this;
    }

    public function getOutput()
    {
        return $this->output;
    }

    public function setOutput($output): self
    {
        $this->output = $output;

        return $this;
    }

    public function getCacheDate(): ?int
    {
        return $this->cacheDate;
    }

    public function setCacheDate(int $cacheDate): self
    {
        $this->cacheDate = $cacheDate;

        return $this;
    }


}
