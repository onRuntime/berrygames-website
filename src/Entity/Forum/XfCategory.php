<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfCategory
 *
 * @ORM\Table(name="xf_category")
 * @ORM\Entity
 */
class XfCategory
{
    /**
     * @var int
     *
     * @ORM\Column(name="node_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $nodeId;

    public function getNodeId(): ?int
    {
        return $this->nodeId;
    }


}
