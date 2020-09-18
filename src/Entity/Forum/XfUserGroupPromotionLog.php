<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfUserGroupPromotionLog
 *
 * @ORM\Table(name="xf_user_group_promotion_log", indexes={@ORM\Index(name="promotion_date", columns={"promotion_date"}), @ORM\Index(name="user_id_date", columns={"user_id", "promotion_date"})})
 * @ORM\Entity
 */
class XfUserGroupPromotionLog
{
    /**
     * @var int
     *
     * @ORM\Column(name="promotion_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $promotionId;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $userId;

    /**
     * @var int
     *
     * @ORM\Column(name="promotion_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $promotionDate;

    /**
     * @var string
     *
     * @ORM\Column(name="promotion_state", type="string", length=0, nullable=false, options={"default"="automatic"})
     */
    private $promotionState = 'automatic';

    public function getPromotionId(): ?int
    {
        return $this->promotionId;
    }

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function getPromotionDate(): ?int
    {
        return $this->promotionDate;
    }

    public function setPromotionDate(int $promotionDate): self
    {
        $this->promotionDate = $promotionDate;

        return $this;
    }

    public function getPromotionState(): ?string
    {
        return $this->promotionState;
    }

    public function setPromotionState(string $promotionState): self
    {
        $this->promotionState = $promotionState;

        return $this;
    }


}
