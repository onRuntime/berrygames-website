<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfApiKeyScope
 *
 * @ORM\Table(name="xf_api_key_scope")
 * @ORM\Entity
 */
class XfApiKeyScope
{
    /**
     * @var int
     *
     * @ORM\Column(name="api_key_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $apiKeyId;

    /**
     * @var binary
     *
     * @ORM\Column(name="api_scope_id", type="binary", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $apiScopeId;

    public function getApiKeyId(): ?int
    {
        return $this->apiKeyId;
    }

    public function getApiScopeId()
    {
        return $this->apiScopeId;
    }


}
