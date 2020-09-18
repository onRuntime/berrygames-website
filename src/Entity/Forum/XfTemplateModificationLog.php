<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfTemplateModificationLog
 *
 * @ORM\Table(name="xf_template_modification_log", indexes={@ORM\Index(name="modification_id", columns={"modification_id"})})
 * @ORM\Entity
 */
class XfTemplateModificationLog
{
    /**
     * @var int
     *
     * @ORM\Column(name="template_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $templateId;

    /**
     * @var int
     *
     * @ORM\Column(name="modification_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $modificationId;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=25, nullable=false)
     */
    private $status;

    /**
     * @var int
     *
     * @ORM\Column(name="apply_count", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $applyCount = '0';

    public function getTemplateId(): ?int
    {
        return $this->templateId;
    }

    public function getModificationId(): ?int
    {
        return $this->modificationId;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getApplyCount(): ?int
    {
        return $this->applyCount;
    }

    public function setApplyCount(int $applyCount): self
    {
        $this->applyCount = $applyCount;

        return $this;
    }


}
