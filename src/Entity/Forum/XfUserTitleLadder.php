<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfUserTitleLadder
 *
 * @ORM\Table(name="xf_user_title_ladder")
 * @ORM\Entity
 */
class XfUserTitleLadder
{
    /**
     * @var int
     *
     * @ORM\Column(name="minimum_level", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $minimumLevel;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=250, nullable=false)
     */
    private $title;

    public function getMinimumLevel(): ?int
    {
        return $this->minimumLevel;
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


}
