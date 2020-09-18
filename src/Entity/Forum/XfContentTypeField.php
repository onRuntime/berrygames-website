<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfContentTypeField
 *
 * @ORM\Table(name="xf_content_type_field", indexes={@ORM\Index(name="field_name", columns={"field_name"})})
 * @ORM\Entity
 */
class XfContentTypeField
{
    /**
     * @var binary
     *
     * @ORM\Column(name="content_type", type="binary", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $contentType;

    /**
     * @var binary
     *
     * @ORM\Column(name="field_name", type="binary", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $fieldName;

    /**
     * @var string
     *
     * @ORM\Column(name="field_value", type="string", length=75, nullable=false)
     */
    private $fieldValue;

    /**
     * @var binary
     *
     * @ORM\Column(name="addon_id", type="binary", nullable=false)
     */
    private $addonId = '';

    public function getContentType()
    {
        return $this->contentType;
    }

    public function getFieldName()
    {
        return $this->fieldName;
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
