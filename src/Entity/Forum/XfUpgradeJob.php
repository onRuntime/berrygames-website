<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfUpgradeJob
 *
 * @ORM\Table(name="xf_upgrade_job", indexes={@ORM\Index(name="immediate", columns={"immediate"})})
 * @ORM\Entity
 */
class XfUpgradeJob
{
    /**
     * @var binary
     *
     * @ORM\Column(name="unique_key", type="binary", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $uniqueKey;

    /**
     * @var string
     *
     * @ORM\Column(name="execute_class", type="string", length=100, nullable=false)
     */
    private $executeClass;

    /**
     * @var string
     *
     * @ORM\Column(name="execute_data", type="blob", length=16777215, nullable=false)
     */
    private $executeData;

    /**
     * @var bool
     *
     * @ORM\Column(name="immediate", type="boolean", nullable=false)
     */
    private $immediate;

    public function getUniqueKey()
    {
        return $this->uniqueKey;
    }

    public function getExecuteClass(): ?string
    {
        return $this->executeClass;
    }

    public function setExecuteClass(string $executeClass): self
    {
        $this->executeClass = $executeClass;

        return $this;
    }

    public function getExecuteData()
    {
        return $this->executeData;
    }

    public function setExecuteData($executeData): self
    {
        $this->executeData = $executeData;

        return $this;
    }

    public function getImmediate(): ?bool
    {
        return $this->immediate;
    }

    public function setImmediate(bool $immediate): self
    {
        $this->immediate = $immediate;

        return $this;
    }


}
