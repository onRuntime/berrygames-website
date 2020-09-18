<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfTemplate
 *
 * @ORM\Table(name="xf_template", uniqueConstraints={@ORM\UniqueConstraint(name="type_title_style_id", columns={"type", "title", "style_id"})})
 * @ORM\Entity
 */
class XfTemplate
{
    /**
     * @var int
     *
     * @ORM\Column(name="template_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $templateId;

    /**
     * @var binary
     *
     * @ORM\Column(name="type", type="binary", nullable=false)
     */
    private $type;

    /**
     * @var binary
     *
     * @ORM\Column(name="title", type="binary", nullable=false)
     */
    private $title;

    /**
     * @var int
     *
     * @ORM\Column(name="style_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $styleId;

    /**
     * @var string
     *
     * @ORM\Column(name="template", type="text", length=16777215, nullable=false, options={"comment"="User-editable HTML and template syntax"})
     */
    private $template;

    /**
     * @var string
     *
     * @ORM\Column(name="template_parsed", type="blob", length=16777215, nullable=false)
     */
    private $templateParsed;

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

    /**
     * @var int
     *
     * @ORM\Column(name="last_edit_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $lastEditDate = '0';

    public function getTemplateId(): ?int
    {
        return $this->templateId;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type): self
    {
        $this->type = $type;

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

    public function getStyleId(): ?int
    {
        return $this->styleId;
    }

    public function setStyleId(int $styleId): self
    {
        $this->styleId = $styleId;

        return $this;
    }

    public function getTemplate(): ?string
    {
        return $this->template;
    }

    public function setTemplate(string $template): self
    {
        $this->template = $template;

        return $this;
    }

    public function getTemplateParsed()
    {
        return $this->templateParsed;
    }

    public function setTemplateParsed($templateParsed): self
    {
        $this->templateParsed = $templateParsed;

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

    public function getLastEditDate(): ?int
    {
        return $this->lastEditDate;
    }

    public function setLastEditDate(int $lastEditDate): self
    {
        $this->lastEditDate = $lastEditDate;

        return $this;
    }


}
