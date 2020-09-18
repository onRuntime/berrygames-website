<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfReaction
 *
 * @ORM\Table(name="xf_reaction", indexes={@ORM\Index(name="display_order", columns={"display_order"})})
 * @ORM\Entity
 */
class XfReaction
{
    /**
     * @var int
     *
     * @ORM\Column(name="reaction_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $reactionId;

    /**
     * @var string
     *
     * @ORM\Column(name="text_color", type="string", length=100, nullable=false)
     */
    private $textColor;

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
     * @ORM\Column(name="reaction_score", type="integer", nullable=false, options={"default"="1"})
     */
    private $reactionScore = '1';

    /**
     * @var int
     *
     * @ORM\Column(name="display_order", type="integer", nullable=false, options={"default"="1","unsigned"=true})
     */
    private $displayOrder = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $active = '1';

    public function getReactionId(): ?int
    {
        return $this->reactionId;
    }

    public function getTextColor(): ?string
    {
        return $this->textColor;
    }

    public function setTextColor(string $textColor): self
    {
        $this->textColor = $textColor;

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

    public function getReactionScore(): ?int
    {
        return $this->reactionScore;
    }

    public function setReactionScore(int $reactionScore): self
    {
        $this->reactionScore = $reactionScore;

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

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }


}
