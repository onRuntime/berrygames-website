<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfPhraseMap
 *
 * @ORM\Table(name="xf_phrase_map", uniqueConstraints={@ORM\UniqueConstraint(name="language_id_title", columns={"language_id", "title"})}, indexes={@ORM\Index(name="phrase_id", columns={"phrase_id"}), @ORM\Index(name="group_language", columns={"phrase_group", "language_id"}), @ORM\Index(name="title", columns={"title"})})
 * @ORM\Entity
 */
class XfPhraseMap
{
    /**
     * @var int
     *
     * @ORM\Column(name="phrase_map_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $phraseMapId;

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
     * @var int
     *
     * @ORM\Column(name="phrase_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $phraseId;

    /**
     * @var binary|null
     *
     * @ORM\Column(name="phrase_group", type="binary", nullable=true)
     */
    private $phraseGroup;

    public function getPhraseMapId(): ?int
    {
        return $this->phraseMapId;
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

    public function getPhraseId(): ?int
    {
        return $this->phraseId;
    }

    public function setPhraseId(int $phraseId): self
    {
        $this->phraseId = $phraseId;

        return $this;
    }

    public function getPhraseGroup()
    {
        return $this->phraseGroup;
    }

    public function setPhraseGroup($phraseGroup): self
    {
        $this->phraseGroup = $phraseGroup;

        return $this;
    }


}
