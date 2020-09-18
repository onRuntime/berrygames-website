<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfThreadField
 *
 * @ORM\Table(name="xf_thread_field", indexes={@ORM\Index(name="display_group_order", columns={"display_group", "display_order"})})
 * @ORM\Entity
 */
class XfThreadField
{
    /**
     * @var binary
     *
     * @ORM\Column(name="field_id", type="binary", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $fieldId;

    /**
     * @var binary
     *
     * @ORM\Column(name="display_group", type="binary", nullable=false, options={"default"="before"})
     */
    private $displayGroup = 'before';

    /**
     * @var int
     *
     * @ORM\Column(name="display_order", type="integer", nullable=false, options={"default"="1","unsigned"=true})
     */
    private $displayOrder = '1';

    /**
     * @var binary
     *
     * @ORM\Column(name="field_type", type="binary", nullable=false, options={"default"="textbox"})
     */
    private $fieldType = 'textbox';

    /**
     * @var string
     *
     * @ORM\Column(name="field_choices", type="blob", length=65535, nullable=false)
     */
    private $fieldChoices;

    /**
     * @var binary
     *
     * @ORM\Column(name="match_type", type="binary", nullable=false, options={"default"="none"})
     */
    private $matchType = 'none';

    /**
     * @var string
     *
     * @ORM\Column(name="match_params", type="blob", length=65535, nullable=false)
     */
    private $matchParams;

    /**
     * @var int
     *
     * @ORM\Column(name="max_length", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $maxLength = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="required", type="boolean", nullable=false)
     */
    private $required = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="display_template", type="text", length=65535, nullable=false)
     */
    private $displayTemplate;

    /**
     * @var string
     *
     * @ORM\Column(name="editable_user_group_ids", type="blob", length=65535, nullable=false)
     */
    private $editableUserGroupIds;

    public function getFieldId()
    {
        return $this->fieldId;
    }

    public function getDisplayGroup()
    {
        return $this->displayGroup;
    }

    public function setDisplayGroup($displayGroup): self
    {
        $this->displayGroup = $displayGroup;

        return $this;
    }

    public function getDisplayOrder(): ?int
    {
        return $this->displayOrder;
    }

    public function setDisplayOrder(int $displayOrder): self
    {
        $this->displayOrder = $displayOrder;

        return $this;
    }

    public function getFieldType()
    {
        return $this->fieldType;
    }

    public function setFieldType($fieldType): self
    {
        $this->fieldType = $fieldType;

        return $this;
    }

    public function getFieldChoices()
    {
        return $this->fieldChoices;
    }

    public function setFieldChoices($fieldChoices): self
    {
        $this->fieldChoices = $fieldChoices;

        return $this;
    }

    public function getMatchType()
    {
        return $this->matchType;
    }

    public function setMatchType($matchType): self
    {
        $this->matchType = $matchType;

        return $this;
    }

    public function getMatchParams()
    {
        return $this->matchParams;
    }

    public function setMatchParams($matchParams): self
    {
        $this->matchParams = $matchParams;

        return $this;
    }

    public function getMaxLength(): ?int
    {
        return $this->maxLength;
    }

    public function setMaxLength(int $maxLength): self
    {
        $this->maxLength = $maxLength;

        return $this;
    }

    public function getRequired(): ?bool
    {
        return $this->required;
    }

    public function setRequired(bool $required): self
    {
        $this->required = $required;

        return $this;
    }

    public function getDisplayTemplate(): ?string
    {
        return $this->displayTemplate;
    }

    public function setDisplayTemplate(string $displayTemplate): self
    {
        $this->displayTemplate = $displayTemplate;

        return $this;
    }

    public function getEditableUserGroupIds()
    {
        return $this->editableUserGroupIds;
    }

    public function setEditableUserGroupIds($editableUserGroupIds): self
    {
        $this->editableUserGroupIds = $editableUserGroupIds;

        return $this;
    }


}
