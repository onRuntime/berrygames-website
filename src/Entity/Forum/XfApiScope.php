<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfApiScope
 *
 * @ORM\Table(name="xf_api_scope")
 * @ORM\Entity
 */
class XfApiScope
{
    /**
     * @var binary
     *
     * @ORM\Column(name="api_scope_id", type="binary", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $apiScopeId;

    /**
     * @var binary
     *
     * @ORM\Column(name="addon_id", type="binary", nullable=false)
     */
    private $addonId = '';

    public function getApiScopeId()
    {
        return $this->apiScopeId;
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
