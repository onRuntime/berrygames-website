<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfPermissionCacheContent
 *
 * @ORM\Table(name="xf_permission_cache_content")
 * @ORM\Entity
 */
class XfPermissionCacheContent
{
    /**
     * @var int
     *
     * @ORM\Column(name="permission_combination_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $permissionCombinationId;

    /**
     * @var binary
     *
     * @ORM\Column(name="content_type", type="binary", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $contentType;

    /**
     * @var int
     *
     * @ORM\Column(name="content_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $contentId;

    /**
     * @var string
     *
     * @ORM\Column(name="cache_value", type="blob", length=16777215, nullable=false)
     */
    private $cacheValue;

    public function getPermissionCombinationId(): ?int
    {
        return $this->permissionCombinationId;
    }

    public function getContentType()
    {
        return $this->contentType;
    }

    public function getContentId(): ?int
    {
        return $this->contentId;
    }

    public function getCacheValue()
    {
        return $this->cacheValue;
    }

    public function setCacheValue($cacheValue): self
    {
        $this->cacheValue = $cacheValue;

        return $this;
    }


}
