<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfStyle
 *
 * @ORM\Table(name="xf_style", uniqueConstraints={@ORM\UniqueConstraint(name="designer_mode", columns={"designer_mode"})})
 * @ORM\Entity
 */
class XfStyle
{
    /**
     * @var int
     *
     * @ORM\Column(name="style_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $styleId;

    /**
     * @var int
     *
     * @ORM\Column(name="parent_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $parentId;

    /**
     * @var binary
     *
     * @ORM\Column(name="parent_list", type="binary", nullable=false, options={"comment"="IDs of ancestor styles in order, eg: this,parent,grandparent,root"})
     */
    private $parentList;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=50, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=100, nullable=false)
     */
    private $description = '';

    /**
     * @var string
     *
     * @ORM\Column(name="properties", type="blob", length=16777215, nullable=false, options={"comment"="Serialized array of materialized style properties for this style"})
     */
    private $properties;

    /**
     * @var int
     *
     * @ORM\Column(name="last_modified_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $lastModifiedDate = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="user_selectable", type="boolean", nullable=false, options={"default"="1","comment"="Unselectable styles are unselectable by non-admin visitors"})
     */
    private $userSelectable = '1';

    /**
     * @var binary|null
     *
     * @ORM\Column(name="designer_mode", type="binary", nullable=true)
     */
    private $designerMode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="th_child_style_cache_uix", type="blob", length=65535, nullable=true)
     */
    private $thChildStyleCacheUix;

    /**
     * @var int
     *
     * @ORM\Column(name="th_product_id_uix", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $thProductIdUix = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="th_product_version_uix", type="string", length=250, nullable=true)
     */
    private $thProductVersionUix;

    /**
     * @var bool
     *
     * @ORM\Column(name="th_primary_child_uix", type="boolean", nullable=false)
     */
    private $thPrimaryChildUix = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="th_child_style_xml_uix", type="string", length=100, nullable=false)
     */
    private $thChildStyleXmlUix = '';

    public function getStyleId(): ?int
    {
        return $this->styleId;
    }

    public function getParentId(): ?int
    {
        return $this->parentId;
    }

    public function setParentId(int $parentId): self
    {
        $this->parentId = $parentId;

        return $this;
    }

    public function getParentList()
    {
        return $this->parentList;
    }

    public function setParentList($parentList): self
    {
        $this->parentList = $parentList;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getProperties()
    {
        return $this->properties;
    }

    public function setProperties($properties): self
    {
        $this->properties = $properties;

        return $this;
    }

    public function getLastModifiedDate(): ?int
    {
        return $this->lastModifiedDate;
    }

    public function setLastModifiedDate(int $lastModifiedDate): self
    {
        $this->lastModifiedDate = $lastModifiedDate;

        return $this;
    }

    public function getUserSelectable(): ?bool
    {
        return $this->userSelectable;
    }

    public function setUserSelectable(bool $userSelectable): self
    {
        $this->userSelectable = $userSelectable;

        return $this;
    }

    public function getDesignerMode()
    {
        return $this->designerMode;
    }

    public function setDesignerMode($designerMode): self
    {
        $this->designerMode = $designerMode;

        return $this;
    }

    public function getThChildStyleCacheUix()
    {
        return $this->thChildStyleCacheUix;
    }

    public function setThChildStyleCacheUix($thChildStyleCacheUix): self
    {
        $this->thChildStyleCacheUix = $thChildStyleCacheUix;

        return $this;
    }

    public function getThProductIdUix(): ?int
    {
        return $this->thProductIdUix;
    }

    public function setThProductIdUix(int $thProductIdUix): self
    {
        $this->thProductIdUix = $thProductIdUix;

        return $this;
    }

    public function getThProductVersionUix(): ?string
    {
        return $this->thProductVersionUix;
    }

    public function setThProductVersionUix(?string $thProductVersionUix): self
    {
        $this->thProductVersionUix = $thProductVersionUix;

        return $this;
    }

    public function getThPrimaryChildUix(): ?bool
    {
        return $this->thPrimaryChildUix;
    }

    public function setThPrimaryChildUix(bool $thPrimaryChildUix): self
    {
        $this->thPrimaryChildUix = $thPrimaryChildUix;

        return $this;
    }

    public function getThChildStyleXmlUix(): ?string
    {
        return $this->thChildStyleXmlUix;
    }

    public function setThChildStyleXmlUix(string $thChildStyleXmlUix): self
    {
        $this->thChildStyleXmlUix = $thChildStyleXmlUix;

        return $this;
    }


}
