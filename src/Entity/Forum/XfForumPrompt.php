<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfForumPrompt
 *
 * @ORM\Table(name="xf_forum_prompt")
 * @ORM\Entity
 */
class XfForumPrompt
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
     * @ORM\Column(name="prompt_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $promptId;

    public function getNodeId(): ?int
    {
        return $this->nodeId;
    }

    public function getPromptId(): ?int
    {
        return $this->promptId;
    }


}
