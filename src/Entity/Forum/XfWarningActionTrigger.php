<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfWarningActionTrigger
 *
 * @ORM\Table(name="xf_warning_action_trigger", indexes={@ORM\Index(name="user_id_points", columns={"user_id", "trigger_points"})})
 * @ORM\Entity
 */
class XfWarningActionTrigger
{
    /**
     * @var int
     *
     * @ORM\Column(name="action_trigger_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $actionTriggerId;

    /**
     * @var int
     *
     * @ORM\Column(name="warning_action_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $warningActionId;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $userId;

    /**
     * @var int
     *
     * @ORM\Column(name="trigger_points", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $triggerPoints;

    /**
     * @var int
     *
     * @ORM\Column(name="action_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $actionDate;

    /**
     * @var binary
     *
     * @ORM\Column(name="action", type="binary", nullable=false)
     */
    private $action;

    /**
     * @var int
     *
     * @ORM\Column(name="min_unban_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $minUnbanDate = '0';

    public function getActionTriggerId(): ?int
    {
        return $this->actionTriggerId;
    }

    public function getWarningActionId(): ?int
    {
        return $this->warningActionId;
    }

    public function setWarningActionId(int $warningActionId): self
    {
        $this->warningActionId = $warningActionId;

        return $this;
    }

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    public function getTriggerPoints(): ?int
    {
        return $this->triggerPoints;
    }

    public function setTriggerPoints(int $triggerPoints): self
    {
        $this->triggerPoints = $triggerPoints;

        return $this;
    }

    public function getActionDate(): ?int
    {
        return $this->actionDate;
    }

    public function setActionDate(int $actionDate): self
    {
        $this->actionDate = $actionDate;

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

    public function getMinUnbanDate(): ?int
    {
        return $this->minUnbanDate;
    }

    public function setMinUnbanDate(int $minUnbanDate): self
    {
        $this->minUnbanDate = $minUnbanDate;

        return $this;
    }


}
