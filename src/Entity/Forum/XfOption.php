<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfOption
 *
 * @ORM\Table(name="xf_option")
 * @ORM\Entity
 */
class XfOption
{
    /**
     * @var binary
     *
     * @ORM\Column(name="option_id", type="binary", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $optionId;

    /**
     * @var string
     *
     * @ORM\Column(name="option_value", type="blob", length=16777215, nullable=false)
     */
    private $optionValue;

    /**
     * @var string
     *
     * @ORM\Column(name="default_value", type="blob", length=16777215, nullable=false)
     */
    private $defaultValue;

    /**
     * @var string
     *
     * @ORM\Column(name="edit_format", type="string", length=0, nullable=false)
     */
    private $editFormat;

    /**
     * @var string
     *
     * @ORM\Column(name="edit_format_params", type="text", length=16777215, nullable=false)
     */
    private $editFormatParams;

    /**
     * @var string
     *
     * @ORM\Column(name="data_type", type="string", length=0, nullable=false)
     */
    private $dataType;

    /**
     * @var string
     *
     * @ORM\Column(name="sub_options", type="text", length=16777215, nullable=false)
     */
    private $subOptions;

    /**
     * @var string
     *
     * @ORM\Column(name="validation_class", type="string", length=100, nullable=false)
     */
    private $validationClass;

    /**
     * @var string
     *
     * @ORM\Column(name="validation_method", type="string", length=75, nullable=false)
     */
    private $validationMethod;

    /**
     * @var binary
     *
     * @ORM\Column(name="addon_id", type="binary", nullable=false)
     */
    private $addonId = '';

    public function getOptionId()
    {
        return $this->optionId;
    }

    public function getOptionValue()
    {
        return $this->optionValue;
    }

    public function setOptionValue($optionValue): self
    {
        $this->optionValue = $optionValue;

        return $this;
    }

    public function getDefaultValue()
    {
        return $this->defaultValue;
    }

    public function setDefaultValue($defaultValue): self
    {
        $this->defaultValue = $defaultValue;

        return $this;
    }

    public function getEditFormat(): ?string
    {
        return $this->editFormat;
    }

    public function setEditFormat(string $editFormat): self
    {
        $this->editFormat = $editFormat;

        return $this;
    }

    public function getEditFormatParams(): ?string
    {
        return $this->editFormatParams;
    }

    public function setEditFormatParams(string $editFormatParams): self
    {
        $this->editFormatParams = $editFormatParams;

        return $this;
    }

    public function getDataType(): ?string
    {
        return $this->dataType;
    }

    public function setDataType(string $dataType): self
    {
        $this->dataType = $dataType;

        return $this;
    }

    public function getSubOptions(): ?string
    {
        return $this->subOptions;
    }

    public function setSubOptions(string $subOptions): self
    {
        $this->subOptions = $subOptions;

        return $this;
    }

    public function getValidationClass(): ?string
    {
        return $this->validationClass;
    }

    public function setValidationClass(string $validationClass): self
    {
        $this->validationClass = $validationClass;

        return $this;
    }

    public function getValidationMethod(): ?string
    {
        return $this->validationMethod;
    }

    public function setValidationMethod(string $validationMethod): self
    {
        $this->validationMethod = $validationMethod;

        return $this;
    }

    public function getAddonId()
    {
        return $this->addonId;
    }

    public function setAddonId($addonId): self
    {
        $this->addonId = $addonId;

        return $this;
    }


}
