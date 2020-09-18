<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfWarningAction
 *
 * @ORM\Table(name="xf_warning_action", indexes={@ORM\Index(name="points", columns={"points"})})
 * @ORM\Entity
 */
class XfWarningAction
{
    /**
     * @var int
     *
     * @ORM\Column(name="warning_action_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $warningActionId;

    /**
     * @var int
     *
     * @ORM\Column(name="points", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $points;

    /**
     * @var binary
     *
     * @ORM\Column(name="action", type="binary", nullable=false)
     */
    private $action;

    /**
     * @var binary
     *
     * @ORM\Column(name="action_length_type", type="binary", nullable=false)
     */
    private $actionLengthType;

    /**
     * @var int
     *
     * @ORM\Column(name="action_length", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $actionLength;

    /**
     * @var binary
     *
     * @ORM\Column(name="extra_user_group_ids", type="binary", nullable=false)
     */
    private $extraUserGroupIds;

    public function getWarningActionId(): ?int
    {
        return $this->warningActionId;
    }

    public function getPoints(): ?int
    {
        return $this->points;
    }

    public function setPoints(int $points): self
    {
        $this->points = $points;

        return $this;
    }

    public function getAction()
    {
        return $this->action;
    }

    public function setAction($action): self
    {
        $this->action = $action;

        return $this;
    }

    public function getActionLengthType()
    {
        return $this->actionLengthType;
    }

    public function setActionLengthType($actionLengthType): self
    {
        $this->actionLengthType = $actionLengthType;

        return $this;
    }

    public function getActionLength(): ?int
    {
        return $this->actionLength;
    }

    public function setActionLength(int $actionLength): self
    {
        $this->actionLength = $actionLength;

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
