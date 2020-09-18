<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfWarningDefinition
 *
 * @ORM\Table(name="xf_warning_definition", indexes={@ORM\Index(name="points_default", columns={"points_default"})})
 * @ORM\Entity
 */
class XfWarningDefinition
{
    /**
     * @var int
     *
     * @ORM\Column(name="warning_definition_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $warningDefinitionId;

    /**
     * @var int
     *
     * @ORM\Column(name="points_default", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $pointsDefault;

    /**
     * @var string
     *
     * @ORM\Column(name="expiry_type", type="string", length=0, nullable=false)
     */
    private $expiryType;

    /**
     * @var int
     *
     * @ORM\Column(name="expiry_default", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $expiryDefault;

    /**
     * @var binary
     *
     * @ORM\Column(name="extra_user_group_ids", type="binary", nullable=false)
     */
    private $extraUserGroupIds;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_editable", type="boolean", nullable=false)
     */
    private $isEditable;

    public function getWarningDefinitionId(): ?int
    {
        return $this->warningDefinitionId;
    }

    public function getPointsDefault(): ?int
    {
        return $this->pointsDefault;
    }

    public function setPointsDefault(int $pointsDefault): self
    {
        $this->pointsDefault = $pointsDefault;

        return $this;
    }

    public function getExpiryType(): ?string
    {
        return $this->expiryType;
    }

    public function setExpiryType(string $expiryType): self
    {
        $this->expiryType = $expiryType;

        return $this;
    }

    public function getExpiryDefault(): ?int
    {
        return $this->expiryDefault;
    }

    public function setExpiryDefault(int $expiryDefault): self
    {
        $this->expiryDefault = $expiryDefault;

        return $this;
    }

    public function getExtraUserGroupIds()
    {
        return $this->extraUserGroupIds;
    }

    public function setExtraUserGroupIds($extraUserGroupIds): self
    {
        $this->extraUserGroupIds = $extraUserGroupIds;

        return $this;
    }

    public function getIsEditable(): ?bool
    {
        return $this->isEditable;
    }

    public function setIsEditable(bool $isEditable): self
    {
        $this->isEditable = $isEditable;

        return $this;
    }


}
