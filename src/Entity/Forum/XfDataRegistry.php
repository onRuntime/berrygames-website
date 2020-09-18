<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfDataRegistry
 *
 * @ORM\Table(name="xf_data_registry")
 * @ORM\Entity
 */
class XfDataRegistry
{
    /**
     * @var binary
     *
     * @ORM\Column(name="data_key", type="binary", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $dataKey;

    /**
     * @var string
     *
     * @ORM\Column(name="data_value", type="blob", length=16777215, nullable=false)
     */
    private $dataValue;

    public function getDataKey()
    {
        return $this->dataKey;
    }

    public function getDataValue()
    {
        return $this->dataValue;
    }

    public function setDataValue($dataValue): self
    {
        $this->dataValue = $dataValue;

        return $this;
    }


}
