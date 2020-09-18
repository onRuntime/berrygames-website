<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfPhrase
 *
 * @ORM\Table(name="xf_phrase", uniqueConstraints={@ORM\UniqueConstraint(name="title", columns={"title", "language_id"})}, indexes={@ORM\Index(name="language_id_global_cache", columns={"language_id", "global_cache"})})
 * @ORM\Entity
 */
class XfPhrase
{
    /**
     * @var int
     *
     * @ORM\Column(name="phrase_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $phraseId;

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
     * @var string
     *
     * @ORM\Column(name="phrase_text", type="text", length=16777215, nullable=false)
     */
    private $phraseText;

    /**
     * @var bool
     *
     * @ORM\Column(name="global_cache", type="boolean", nullable=false)
     */
    private $globalCache = '0';

    /**
     * @var binary
     *
     * @ORM\Column(name="addon_id", type="binary", nullable=false)
     */
    private $addonId = '';

    /**
     * @var int
     *
     * @ORM\Column(name="version_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $versionId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="version_string", type="string", length=30, nullable=false)
     */
    private $versionString = '';

    public function getPhraseId(): ?int
    {
        return $this->phraseId;
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

    public function getPhraseText(): ?string
    {
        return $this->phraseText;
    }

    public function setPhraseText(string $phraseText): self
    {
        $this->phraseText = $phraseText;

        return $this;
    }

    public function getGlobalCache(): ?bool
    {
        return $this->globalCache;
    }

    public function setGlobalCache(bool $globalCache): self
    {
        $this->globalCache = $globalCache;

        return $this;
    }

    public function getAddonId()
    {
        return $this->addonId;
    }

    public function setAddonId($addonId): self
    {
        $this->addonId = $addonId;

        return $this;
    }

    public function getVersionId(): ?int
    {
        return $this->versionId;
    }

    public function setVersionId(int $versionId): self
    {
        $this->versionId = $versionId;

        return $this;
    }

    public function getVersionString(): ?string
    {
        return $this->versionString;
    }

    public function setVersionString(string $versionString): self
    {
        $this->versionString = $versionString;

        return $this;
    }


}
