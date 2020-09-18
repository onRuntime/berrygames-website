<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfAddon
 *
 * @ORM\Table(name="xf_addon", indexes={@ORM\Index(name="title", columns={"title"})})
 * @ORM\Entity
 */
class XfAddon
{
    /**
     * @var binary
     *
     * @ORM\Column(name="addon_id", type="binary", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $addonId;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=75, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="version_string", type="string", length=30, nullable=false)
     */
    private $versionString = '';

    /**
     * @var int
     *
     * @ORM\Column(name="version_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $versionId = '0';

    /**
     * @var binary
     *
     * @ORM\Column(name="json_hash", type="binary", nullable=false)
     */
    private $jsonHash = '';

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_legacy", type="boolean", nullable=false)
     */
    private $isLegacy = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="is_processing", type="boolean", nullable=false)
     */
    private $isProcessing = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="last_pending_action", type="string", length=50, nullable=true)
     */
    private $lastPendingAction;

    public function getAddonId()
    {
        return $this->addonId;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getVersionString(): ?string
    {
        return $this->versionString;
    }

    public function setVersionString(string $versionString): self
    {
        $this->versionString = $versionString;

        return $this;
    }

    public function getVersionId(): ?int
    {
        return $this->versionId;
    }

    public function setVersionId(int $versionId): self
    {
        $this->versionId = $versionId;

        return $this;
    }

    public function getJsonHash()
    {
        return $this->jsonHash;
    }

    public function setJsonHash($jsonHash): self
    {
        $this->jsonHash = $jsonHash;

        return $this;
    }

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function getIsLegacy(): ?bool
    {
        return $this->isLegacy;
    }

    public function setIsLegacy(bool $isLegacy): self
    {
        $this->isLegacy = $isLegacy;

        return $this;
    }

    public function getIsProcessing(): ?bool
    {
        return $this->isProcessing;
    }

    public function setIsProcessing(bool $isProcessing): self
    {
        $this->isProcessing = $isProcessing;

        return $this;
    }

    public function getLastPendingAction(): ?string
    {
        return $this->lastPendingAction;
    }

    public function setLastPendingAction(?string $lastPendingAction): self
    {
        $this->lastPendingAction = $lastPendingAction;

        return $this;
    }


}
