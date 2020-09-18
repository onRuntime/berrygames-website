<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfTemplateMap
 *
 * @ORM\Table(name="xf_template_map", uniqueConstraints={@ORM\UniqueConstraint(name="style_id_type_title", columns={"style_id", "type", "title"})}, indexes={@ORM\Index(name="template_id", columns={"template_id"}), @ORM\Index(name="type_title", columns={"type", "title"})})
 * @ORM\Entity
 */
class XfTemplateMap
{
    /**
     * @var int
     *
     * @ORM\Column(name="template_map_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $templateMapId;

    /**
     * @var int
     *
     * @ORM\Column(name="style_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $styleId;

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
     * @ORM\Column(name="template_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $templateId;

    public function getTemplateMapId(): ?int
    {
        return $this->templateMapId;
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

    public function getTemplateId(): ?int
    {
        return $this->templateId;
    }

    public function setTemplateId(int $templateId): self
    {
        $this->templateId = $templateId;

        return $this;
    }


}
