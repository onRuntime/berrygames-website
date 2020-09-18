<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfLinkForum
 *
 * @ORM\Table(name="xf_link_forum")
 * @ORM\Entity
 */
class XfLinkForum
{
    /**
     * @var int
     *
     * @ORM\Column(name="node_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $nodeId;

    /**
     * @var string
     *
     * @ORM\Column(name="link_url", type="string", length=150, nullable=false)
     */
    private $linkUrl;

    /**
     * @var int
     *
     * @ORM\Column(name="redirect_count", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $redirectCount = '0';

    public function getNodeId(): ?int
    {
        return $this->nodeId;
    }

    public function getLinkUrl(): ?string
    {
        return $this->linkUrl;
    }

    public function setLinkUrl(string $linkUrl): self
    {
        $this->linkUrl = $linkUrl;

        return $this;
    }

    public function getRedirectCount(): ?int
    {
        return $this->redirectCount;
    }

    public function setRedirectCount(int $redirectCount): self
    {
        $this->redirectCount = $redirectCount;

        return $this;
    }


}
