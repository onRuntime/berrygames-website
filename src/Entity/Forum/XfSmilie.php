<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfSmilie
 *
 * @ORM\Table(name="xf_smilie", indexes={@ORM\Index(name="display_order", columns={"display_order"})})
 * @ORM\Entity
 */
class XfSmilie
{
    /**
     * @var int
     *
     * @ORM\Column(name="smilie_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $smilieId;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=50, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="smilie_text", type="text", length=65535, nullable=false)
     */
    private $smilieText;

    /**
     * @var string
     *
     * @ORM\Column(name="image_url", type="string", length=200, nullable=false)
     */
    private $imageUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="image_url_2x", type="string", length=200, nullable=false)
     */
    private $imageUrl2x = '';

    /**
     * @var bool
     *
     * @ORM\Column(name="sprite_mode", type="boolean", nullable=false)
     */
    private $spriteMode = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="sprite_params", type="blob", length=65535, nullable=false)
     */
    private $spriteParams;

    /**
     * @var int
     *
     * @ORM\Column(name="smilie_category_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $smilieCategoryId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="display_order", type="integer", nullable=false, options={"default"="1","unsigned"=true})
     */
    private $displayOrder = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="display_in_editor", type="boolean", nullable=false, options={"default"="1"})
     */
    private $displayInEditor = '1';

    public function getSmilieId(): ?int
    {
        return $this->smilieId;
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

    public function getSmilieText(): ?string
    {
        return $this->smilieText;
    }

    public function setSmilieText(string $smilieText): self
    {
        $this->smilieText = $smilieText;

        return $this;
    }

    public function getImageUrl(): ?string
    {
        return $this->imageUrl;
    }

    public function setImageUrl(string $imageUrl): self
    {
        $this->imageUrl = $imageUrl;

        return $this;
    }

    public function getImageUrl2x(): ?string
    {
        return $this->imageUrl2x;
    }

    public function setImageUrl2x(string $imageUrl2x): self
    {
        $this->imageUrl2x = $imageUrl2x;

        return $this;
    }

    public function getSpriteMode(): ?bool
    {
        return $this->spriteMode;
    }

    public function setSpriteMode(bool $spriteMode): self
    {
        $this->spriteMode = $spriteMode;

        return $this;
    }

    public function getSpriteParams()
    {
        return $this->spriteParams;
    }

    public function setSpriteParams($spriteParams): self
    {
        $this->spriteParams = $spriteParams;

        return $this;
    }

    public function getSmilieCategoryId(): ?int
    {
        return $this->smilieCategoryId;
    }

    public function setSmilieCategoryId(int $smilieCategoryId): self
    {
        $this->smilieCategoryId = $smilieCategoryId;

        return $this;
    }

    public function getDisplayOrder(): ?int
    {
        return $this->displayOrder;
    }

    public function setDisplayOrder(int $displayOrder): self
    {
        $this->displayOrder = $displayOrder;

        return $this;
    }

    public function getDisplayInEditor(): ?bool
    {
        return $this->displayInEditor;
    }

    public function setDisplayInEditor(bool $displayInEditor): self
    {
        $this->displayInEditor = $displayInEditor;

        return $this;
    }


}
