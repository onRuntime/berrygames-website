<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfAdvertising
 *
 * @ORM\Table(name="xf_advertising")
 * @ORM\Entity
 */
class XfAdvertising
{
    /**
     * @var int
     *
     * @ORM\Column(name="ad_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $adId;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=150, nullable=false)
     */
    private $title;

    /**
     * @var binary
     *
     * @ORM\Column(name="position_id", type="binary", nullable=false)
     */
    private $positionId;

    /**
     * @var string
     *
     * @ORM\Column(name="ad_html", type="text", length=65535, nullable=false)
     */
    private $adHtml;

    /**
     * @var int
     *
     * @ORM\Column(name="display_order", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $displayOrder = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="display_criteria", type="blob", length=65535, nullable=false)
     */
    private $displayCriteria;

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active;

    public function getAdId(): ?int
    {
        return $this->adId;
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

    public function getPositionId()
    {
        return $this->positionId;
    }

    public function setPositionId($positionId): self
    {
        $this->positionId = $positionId;

        return $this;
    }

    public function getAdHtml(): ?string
    {
        return $this->adHtml;
    }

    public function setAdHtml(string $adHtml): self
    {
        $this->adHtml = $adHtml;

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

    public function getDisplayCriteria()
    {
        return $this->displayCriteria;
    }

    public function setDisplayCriteria($displayCriteria): self
    {
        $this->displayCriteria = $displayCriteria;

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
