<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfTemplateHistory
 *
 * @ORM\Table(name="xf_template_history", indexes={@ORM\Index(name="type_title_style_id", columns={"type", "title", "style_id"}), @ORM\Index(name="title", columns={"title"}), @ORM\Index(name="log_date", columns={"log_date"})})
 * @ORM\Entity
 */
class XfTemplateHistory
{
    /**
     * @var int
     *
     * @ORM\Column(name="template_history_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $templateHistoryId;

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
     * @ORM\Column(name="template", type="text", length=16777215, nullable=false)
     */
    private $template;

    /**
     * @var int
     *
     * @ORM\Column(name="edit_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $editDate;

    /**
     * @var int
     *
     * @ORM\Column(name="log_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $logDate;

    public function getTemplateHistoryId(): ?int
    {
        return $this->templateHistoryId;
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

    public function getEditDate(): ?int
    {
        return $this->editDate;
    }

    public function setEditDate(int $editDate): self
    {
        $this->editDate = $editDate;

        return $this;
    }

    public function getLogDate(): ?int
    {
        return $this->logDate;
    }

    public function setLogDate(int $logDate): self
    {
        $this->logDate = $logDate;

        return $this;
    }


}
