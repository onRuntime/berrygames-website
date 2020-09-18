<?php

namespace App\Entity\Berrygames;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Ranks
 *
 * @ORM\Table(name="ranks")
 * @ORM\Entity
 * @UniqueEntity("rankid")
 */
class Ranks
{
    /**
     * @var string
     *
     * @ORM\Id
     * @ORM\Column(name="rankid", type="string", length=255, nullable=false)
     */
    private $rankid;

    /**
     * @var int
     *
     * @ORM\Column(name="tab", type="integer", nullable=false)
     */
    private $tab;

    /**
     * @var string
     *
     * @ORM\Column(name="tag", type="string", length=255, nullable=true)
     */
    private $tag;

    /**
     * @var string
     *
     * @ORM\Column(name="prefix", type="string", length=255, nullable=true)
     */
    private $prefix;

    /**
     * @var string
     *
     * @ORM\Column(name="suffix", type="string", length=255, nullable=true)
     */
    private $suffix;

    /**
     * @var int
     *
     * @ORM\Column(name="permission", type="integer", nullable=false)
     */
    private $permission;

    public function getRankid(): ?string
    {
        return $this->rankid;
    }

    public function setRankid(string $rankid): self
    {
        $this->rankid = $rankid;

        return $this;
    }

    public function getTab(): ?int
    {
        return $this->tab;
    }

    public function setTab(int $tab): self
    {
        $this->tab = $tab;

        return $this;
    }

    public function getTag(): ?string
    {
        return $this->tag;
    }

    public function setTag(?string $tag): self
    {
        $this->tag = $tag;

        return $this;
    }

    public function getPrefix(): ?string
    {
        return $this->prefix;
    }

    public function setPrefix(?string $prefix): self
    {
        $this->prefix = $prefix;

        return $this;
    }

    public function getSuffix(): ?string
    {
        return $this->suffix;
    }

    public function setSuffix(?string $suffix): self
    {
        $this->suffix = $suffix;

        return $this;
    }

    public function getPermission(): ?int
    {
        return $this->permission;
    }

    public function setPermission(int $permission): self
    {
        $this->permission = $permission;

        return $this;
    }


}
