<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfRouteFilter
 *
 * @ORM\Table(name="xf_route_filter", indexes={@ORM\Index(name="route_type_prefix", columns={"prefix"})})
 * @ORM\Entity
 */
class XfRouteFilter
{
    /**
     * @var int
     *
     * @ORM\Column(name="route_filter_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $routeFilterId;

    /**
     * @var string
     *
     * @ORM\Column(name="prefix", type="string", length=25, nullable=false)
     */
    private $prefix;

    /**
     * @var string
     *
     * @ORM\Column(name="find_route", type="string", length=255, nullable=false)
     */
    private $findRoute;

    /**
     * @var string
     *
     * @ORM\Column(name="replace_route", type="string", length=255, nullable=false)
     */
    private $replaceRoute;

    /**
     * @var bool
     *
     * @ORM\Column(name="enabled", type="boolean", nullable=false)
     */
    private $enabled = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="url_to_route_only", type="boolean", nullable=false)
     */
    private $urlToRouteOnly = '0';

    public function getRouteFilterId(): ?int
    {
        return $this->routeFilterId;
    }

    public function getPrefix(): ?string
    {
        return $this->prefix;
    }

    public function setPrefix(string $prefix): self
    {
        $this->prefix = $prefix;

        return $this;
    }

    public function getFindRoute(): ?string
    {
        return $this->findRoute;
    }

    public function setFindRoute(string $findRoute): self
    {
        $this->findRoute = $findRoute;

        return $this;
    }

    public function getReplaceRoute(): ?string
    {
        return $this->replaceRoute;
    }

    public function setReplaceRoute(string $replaceRoute): self
    {
        $this->replaceRoute = $replaceRoute;

        return $this;
    }

    public function getEnabled(): ?bool
    {
        return $this->enabled;
    }

    public function setEnabled(bool $enabled): self
    {
        $this->enabled = $enabled;

        return $this;
    }

    public function getUrlToRouteOnly(): ?bool
    {
        return $this->urlToRouteOnly;
    }

    public function setUrlToRouteOnly(bool $urlToRouteOnly): self
    {
        $this->urlToRouteOnly = $urlToRouteOnly;

        return $this;
    }


}
