<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfTemplatePhrase
 *
 * @ORM\Table(name="xf_template_phrase", indexes={@ORM\Index(name="phrase_title", columns={"phrase_title"})})
 * @ORM\Entity
 */
class XfTemplatePhrase
{
    /**
     * @var int
     *
     * @ORM\Column(name="template_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $templateId;

    /**
     * @var binary
     *
     * @ORM\Column(name="phrase_title", type="binary", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $phraseTitle;

    public function getTemplateId(): ?int
    {
        return $this->templateId;
    }

    public function getPhraseTitle()
    {
        return $this->phraseTitle;
    }


}
