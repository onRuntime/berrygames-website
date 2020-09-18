<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfMemberStat
 *
 * @ORM\Table(name="xf_member_stat", uniqueConstraints={@ORM\UniqueConstraint(name="member_stat_key", columns={"member_stat_key"})}, indexes={@ORM\Index(name="display_order", columns={"display_order"})})
 * @ORM\Entity
 */
class XfMemberStat
{
    /**
     * @var int
     *
     * @ORM\Column(name="member_stat_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $memberStatId;

    /**
     * @var binary
     *
     * @ORM\Column(name="member_stat_key", type="binary", nullable=false)
     */
    private $memberStatKey;

    /**
     * @var string|null
     *
     * @ORM\Column(name="criteria", type="blob", length=65535, nullable=true)
     */
    private $criteria;

    /**
     * @var string
     *
     * @ORM\Column(name="callback_class", type="string", length=100, nullable=false)
     */
    private $callbackClass = '';

    /**
     * @var string
     *
     * @ORM\Column(name="callback_method", type="string", length=75, nullable=false)
     */
    private $callbackMethod = '';

    /**
     * @var string
     *
     * @ORM\Column(name="sort_order", type="string", length=50, nullable=false, options={"default"="message_count"})
     */
    private $sortOrder = 'message_count';

    /**
     * @var string
     *
     * @ORM\Column(name="sort_direction", type="string", length=5, nullable=false, options={"default"="desc"})
     */
    private $sortDirection = 'desc';

    /**
     * @var binary
     *
     * @ORM\Column(name="permission_limit", type="binary", nullable=false)
     */
    private $permissionLimit = '';

    /**
     * @var bool
     *
     * @ORM\Column(name="show_value", type="boolean", nullable=false, options={"default"="1"})
     */
    private $showValue = '1';

    /**
     * @var int
     *
     * @ORM\Column(name="user_limit", type="integer", nullable=false, options={"default"="20","unsigned"=true})
     */
    private $userLimit = '20';

    /**
     * @var int
     *
     * @ORM\Column(name="display_order", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $displayOrder = '0';

    /**
     * @var binary
     *
     * @ORM\Column(name="addon_id", type="binary", nullable=false)
     */
    private $addonId = '';

    /**
     * @var bool
     *
     * @ORM\Column(name="overview_display", type="boolean", nullable=false, options={"default"="1"})
     */
    private $overviewDisplay = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $active = '1';

    /**
     * @var int
     *
     * @ORM\Column(name="cache_lifetime", type="integer", nullable=false, options={"default"="60","unsigned"=true})
     */
    private $cacheLifetime = '60';

    /**
     * @var int
     *
     * @ORM\Column(name="cache_expiry", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $cacheExpiry = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="cache_results", type="blob", length=65535, nullable=true)
     */
    private $cacheResults;

    public function getMemberStatId(): ?int
    {
        return $this->memberStatId;
    }

    public function getMemberStatKey()
    {
        return $this->memberStatKey;
    }

    public function setMemberStatKey($memberStatKey): self
    {
        $this->memberStatKey = $memberStatKey;

        return $this;
    }

    public function getCriteria()
    {
        return $this->criteria;
    }

    public function setCriteria($criteria): self
    {
        $this->criteria = $criteria;

        return $this;
    }

    public function getCallbackClass(): ?string
    {
        return $this->callbackClass;
    }

    public function setCallbackClass(string $callbackClass): self
    {
        $this->callbackClass = $callbackClass;

        return $this;
    }

    public function getCallbackMethod(): ?string
    {
        return $this->callbackMethod;
    }

    public function setCallbackMethod(string $callbackMethod): self
    {
        $this->callbackMethod = $callbackMethod;

        return $this;
    }

    public function getSortOrder(): ?string
    {
        return $this->sortOrder;
    }

    public function setSortOrder(string $sortOrder): self
    {
        $this->sortOrder = $sortOrder;

        return $this;
    }

    public function getSortDirection(): ?string
    {
        return $this->sortDirection;
    }

    public function setSortDirection(string $sortDirection): self
    {
        $this->sortDirection = $sortDirection;

        return $this;
    }

    public function getPermissionLimit()
    {
        return $this->permissionLimit;
    }

    public function setPermissionLimit($permissionLimit): self
    {
        $this->permissionLimit = $permissionLimit;

        return $this;
    }

    public function getShowValue(): ?bool
    {
        return $this->showValue;
    }

    public function setShowValue(bool $showValue): self
    {
        $this->showValue = $showValue;

        return $this;
    }

    public function getUserLimit(): ?int
    {
        return $this->userLimit;
    }

    public function setUserLimit(int $userLimit): self
    {
        $this->userLimit = $userLimit;

        return $this;
    }

    public function getDisplayOrder(): ?int
    {
        return $this->displayOrder;
    }

    public function setDisplayOrder(int $displayOrder): self
    {
        $this->displayOrder = $displayOrder;

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

    public function getOverviewDisplay(): ?bool
    {
        return $this->overviewDisplay;
    }

    public function setOverviewDisplay(bool $overviewDisplay): self
    {
        $this->overviewDisplay = $overviewDisplay;

        return $this;
    }

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function getCacheLifetime(): ?int
    {
        return $this->cacheLifetime;
    }

    public function setCacheLifetime(int $cacheLifetime): self
    {
        $this->cacheLifetime = $cacheLifetime;

        return $this;
    }

    public function getCacheExpiry(): ?int
    {
        return $this->cacheExpiry;
    }

    public function setCacheExpiry(int $cacheExpiry): self
    {
        $this->cacheExpiry = $cacheExpiry;

        return $this;
    }

    public function getCacheResults()
    {
        return $this->cacheResults;
    }

    public function setCacheResults($cacheResults): self
    {
        $this->cacheResults = $cacheResults;

        return $this;
    }


}
