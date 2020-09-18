<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfRoute
 *
 * @ORM\Table(name="xf_route", uniqueConstraints={@ORM\UniqueConstraint(name="route_type", columns={"route_type", "route_prefix", "sub_name"})})
 * @ORM\Entity
 */
class XfRoute
{
    /**
     * @var int
     *
     * @ORM\Column(name="route_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $routeId;

    /**
     * @var binary
     *
     * @ORM\Column(name="route_type", type="binary", nullable=false)
     */
    private $routeType;

    /**
     * @var binary
     *
     * @ORM\Column(name="route_prefix", type="binary", nullable=false)
     */
    private $routePrefix;

    /**
     * @var binary
     *
     * @ORM\Column(name="sub_name", type="binary", nullable=false)
     */
    private $subName;

    /**
     * @var string
     *
     * @ORM\Column(name="format", type="string", length=255, nullable=false)
     */
    private $format = '';

    /**
     * @var string
     *
     * @ORM\Column(name="build_class", type="string", length=100, nullable=false)
     */
    private $buildClass = '';

    /**
     * @var binary
     *
     * @ORM\Column(name="build_method", type="binary", nullable=false)
     */
    private $buildMethod = '';

    /**
     * @var binary
     *
     * @ORM\Column(name="controller", type="binary", nullable=false)
     */
    private $controller;

    /**
     * @var binary
     *
     * @ORM\Column(name="context", type="binary", nullable=false)
     */
    private $context = '';

    /**
     * @var binary
     *
     * @ORM\Column(name="action_prefix", type="binary", nullable=false)
     */
    private $actionPrefix = '';

    /**
     * @var binary
     *
     * @ORM\Column(name="addon_id", type="binary", nullable=false)
     */
    private $addonId = '';

    public function getRouteId(): ?int
    {
        return $this->routeId;
    }

    public function getRouteType()
    {
        return $this->routeType;
    }

    public function setRouteType($routeType): self
    {
        $this->routeType = $routeType;

        return $this;
    }

    public function getRoutePrefix()
    {
        return $this->routePrefix;
    }

    public function setRoutePrefix($routePrefix): self
    {
        $this->routePrefix = $routePrefix;

        return $this;
    }

    public function getSubName()
    {
        return $this->subName;
    }

    public function setSubName($subName): self
    {
        $this->subName = $subName;

        return $this;
    }

    public function getFormat(): ?string
    {
        return $this->format;
    }

    public function setFormat(string $format): self
    {
        $this->format = $format;

        return $this;
    }

    public function getBuildClass(): ?string
    {
        return $this->buildClass;
    }

    public function setBuildClass(string $buildClass): self
    {
        $this->buildClass = $buildClass;

        return $this;
    }

    public function getBuildMethod()
    {
        return $this->buildMethod;
    }

    public function setBuildMethod($buildMethod): self
    {
        $this->buildMethod = $buildMethod;

        return $this;
    }

    public function getController()
    {
        return $this->controller;
    }

    public function setController($controller): self
    {
        $this->controller = $controller;

        return $this;
    }

    public function getContext()
    {
        return $this->context;
    }

    public function setContext($context): self
    {
        $this->context = $context;

        return $this;
    }

    public function getActionPrefix()
    {
        return $this->actionPrefix;
    }

    public function setActionPrefix($actionPrefix): self
    {
        $this->actionPrefix = $actionPrefix;

        return $this;
    }

    public function getAddonId()
    {
        return $this->addonId;
    }

    public function setAddonId($addonId): self
    {
        $this->addonId = $addonId;

        return $this;
    }


}
