<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfPhraseCompiled
 *
 * @ORM\Table(name="xf_phrase_compiled")
 * @ORM\Entity
 */
class XfPhraseCompiled
{
    /**
     * @var int
     *
     * @ORM\Column(name="language_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $languageId;

    /**
     * @var binary
     *
     * @ORM\Column(name="title", type="binary", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="phrase_text", type="text", length=16777215, nullable=false)
     */
    private $phraseText;

    public function getLanguageId(): ?int
    {
        return $this->languageId;
    }

    public function getTitle()
    {
        return $this->title;
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


}
