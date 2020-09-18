<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfUserGroupPromotion
 *
 * @ORM\Table(name="xf_user_group_promotion", indexes={@ORM\Index(name="title", columns={"title"})})
 * @ORM\Entity
 */
class XfUserGroupPromotion
{
    /**
     * @var int
     *
     * @ORM\Column(name="promotion_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $promotionId;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=100, nullable=false)
     */
    private $title;

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $active = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="user_criteria", type="blob", length=16777215, nullable=false)
     */
    private $userCriteria;

    /**
     * @var binary
     *
     * @ORM\Column(name="extra_user_group_ids", type="binary", nullable=false)
     */
    private $extraUserGroupIds;

    public function getPromotionId(): ?int
    {
        return $this->promotionId;
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

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function getUserCriteria()
    {
        return $this->userCriteria;
    }

    public function setUserCriteria($userCriteria): self
    {
        $this->userCriteria = $userCriteria;

        return $this;
    }

    public function getExtraUserGroupIds()
    {
        return $this->extraUserGroupIds;
    }

    public function setExtraUserGroupIds($extraUserGroupIds): self
    {
        $this->extraUserGroupIds = $extraUserGroupIds;

        return $this;
    }


}
