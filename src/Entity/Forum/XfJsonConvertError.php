<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfJsonConvertError
 *
 * @ORM\Table(name="xf_json_convert_error", uniqueConstraints={@ORM\UniqueConstraint(name="table_column_pk", columns={"table_name", "column_name", "pk_id"})})
 * @ORM\Entity
 */
class XfJsonConvertError
{
    /**
     * @var int
     *
     * @ORM\Column(name="error_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $errorId;

    /**
     * @var binary
     *
     * @ORM\Column(name="table_name", type="binary", nullable=false)
     */
    private $tableName;

    /**
     * @var binary
     *
     * @ORM\Column(name="column_name", type="binary", nullable=false)
     */
    private $columnName;

    /**
     * @var int
     *
     * @ORM\Column(name="pk_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $pkId;

    /**
     * @var string
     *
     * @ORM\Column(name="original_value", type="blob", length=16777215, nullable=false)
     */
    private $originalValue;

    public function getErrorId(): ?int
    {
        return $this->errorId;
    }

    public function getTableName()
    {
        return $this->tableName;
    }

    public function setTableName($tableName): self
    {
        $this->tableName = $tableName;

        return $this;
    }

    public function getColumnName()
    {
        return $this->columnName;
    }

    public function setColumnName($columnName): self
    {
        $this->columnName = $columnName;

        return $this;
    }

    public function getPkId(): ?int
    {
        return $this->pkId;
    }

    public function setPkId(int $pkId): self
    {
        $this->pkId = $pkId;

        return $this;
    }

    public function getOriginalValue()
    {
        return $this->originalValue;
    }

    public function setOriginalValue($originalValue): self
    {
        $this->originalValue = $originalValue;

        return $this;
    }


}
