<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfForumField
 *
 * @ORM\Table(name="xf_forum_field", indexes={@ORM\Index(name="field_id", columns={"field_id"})})
 * @ORM\Entity
 */
class XfForumField
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
     * @var binary
     *
     * @ORM\Column(name="field_id", type="binary", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $fieldId;

    public function getNodeId(): ?int
    {
        return $this->nodeId;
    }

    public function getFieldId()
    {
        return $this->fieldId;
    }


}
