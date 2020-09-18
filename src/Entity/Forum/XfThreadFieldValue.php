<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfThreadFieldValue
 *
 * @ORM\Table(name="xf_thread_field_value", indexes={@ORM\Index(name="field_id", columns={"field_id"})})
 * @ORM\Entity
 */
class XfThreadFieldValue
{
    /**
     * @var int
     *
     * @ORM\Column(name="thread_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $threadId;

    /**
     * @var binary
     *
     * @ORM\Column(name="field_id", type="binary", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $fieldId;

    /**
     * @var string
     *
     * @ORM\Column(name="field_value", type="text", length=16777215, nullable=false)
     */
    private $fieldValue;

    public function getThreadId(): ?int
    {
        return $this->threadId;
    }

    public function getFieldId()
    {
        return $this->fieldId;
    }

    public function getFieldValue(): ?string
    {
        return $this->fieldValue;
    }

    public function setFieldValue(string $fieldValue): self
    {
        $this->fieldValue = $fieldValue;

        return $this;
    }


}
