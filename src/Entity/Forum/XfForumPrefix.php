<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfForumPrefix
 *
 * @ORM\Table(name="xf_forum_prefix", indexes={@ORM\Index(name="prefix_id", columns={"prefix_id"})})
 * @ORM\Entity
 */
class XfForumPrefix
{
    /**
     * @var int
     *
     * @ORM\Column(name="node_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $nodeId;

    /**
     * @var int
     *
     * @ORM\Column(name="prefix_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $prefixId;

    public function getNodeId(): ?int
    {
        return $this->nodeId;
    }

    public function getPrefixId(): ?int
    {
        return $this->prefixId;
    }


}
