<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfFindNewDefault
 *
 * @ORM\Table(name="xf_find_new_default", uniqueConstraints={@ORM\UniqueConstraint(name="user_content", columns={"user_id", "content_type"})})
 * @ORM\Entity
 */
class XfFindNewDefault
{
    /**
     * @var int
     *
     * @ORM\Column(name="find_new_default_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $findNewDefaultId;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $userId;

    /**
     * @var binary
     *
     * @ORM\Column(name="content_type", type="binary", nullable=false)
     */
    private $contentType;

    /**
     * @var string
     *
     * @ORM\Column(name="filters", type="blob", length=65535, nullable=false)
     */
    private $filters;

    public function getFindNewDefaultId(): ?int
    {
        return $this->findNewDefaultId;
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

    public function getContentType()
    {
        return $this->contentType;
    }

    public function setContentType($contentType): self
    {
        $this->contentType = $contentType;

        return $this;
    }

    public function getFilters()
    {
        return $this->filters;
    }

    public function setFilters($filters): self
    {
        $this->filters = $filters;

        return $this;
    }


}
