<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfSessionActivity
 *
 * @ORM\Table(name="xf_session_activity", indexes={@ORM\Index(name="view_date", columns={"view_date"})})
 * @ORM\Entity
 */
class XfSessionActivity
{
    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $userId;

    /**
     * @var binary
     *
     * @ORM\Column(name="unique_key", type="binary", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $uniqueKey;

    /**
     * @var binary
     *
     * @ORM\Column(name="ip", type="binary", nullable=false)
     */
    private $ip = '';

    /**
     * @var string
     *
     * @ORM\Column(name="controller_name", type="string", length=100, nullable=false)
     */
    private $controllerName;

    /**
     * @var string
     *
     * @ORM\Column(name="controller_action", type="string", length=75, nullable=false)
     */
    private $controllerAction;

    /**
     * @var string
     *
     * @ORM\Column(name="view_state", type="string", length=0, nullable=false)
     */
    private $viewState;

    /**
     * @var binary
     *
     * @ORM\Column(name="params", type="binary", nullable=false)
     */
    private $params;

    /**
     * @var int
     *
     * @ORM\Column(name="view_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $viewDate;

    /**
     * @var binary
     *
     * @ORM\Column(name="robot_key", type="binary", nullable=false)
     */
    private $robotKey = '';

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function getUniqueKey()
    {
        return $this->uniqueKey;
    }

    public function getIp()
    {
        return $this->ip;
    }

    public function setIp($ip): self
    {
        $this->ip = $ip;

        return $this;
    }

    public function getControllerName(): ?string
    {
        return $this->controllerName;
    }

    public function setControllerName(string $controllerName): self
    {
        $this->controllerName = $controllerName;

        return $this;
    }

    public function getControllerAction(): ?string
    {
        return $this->controllerAction;
    }

    public function setControllerAction(string $controllerAction): self
    {
        $this->controllerAction = $controllerAction;

        return $this;
    }

    public function getViewState(): ?string
    {
        return $this->viewState;
    }

    public function setViewState(string $viewState): self
    {
        $this->viewState = $viewState;

        return $this;
    }

    public function getParams()
    {
        return $this->params;
    }

    public function setParams($params): self
    {
        $this->params = $params;

        return $this;
    }

    public function getViewDate(): ?int
    {
        return $this->viewDate;
    }

    public function setViewDate(int $viewDate): self
    {
        $this->viewDate = $viewDate;

        return $this;
    }

    public function getRobotKey()
    {
        return $this->robotKey;
    }

    public function setRobotKey($robotKey): self
    {
        $this->robotKey = $robotKey;

        return $this;
    }


}
