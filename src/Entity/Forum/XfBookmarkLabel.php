<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfBookmarkLabel
 *
 * @ORM\Table(name="xf_bookmark_label", uniqueConstraints={@ORM\UniqueConstraint(name="label_user_id", columns={"label", "user_id"}), @ORM\UniqueConstraint(name="label_url_user_id", columns={"label_url", "user_id"})}, indexes={@ORM\Index(name="use_count", columns={"use_count"})})
 * @ORM\Entity
 */
class XfBookmarkLabel
{
    /**
     * @var int
     *
     * @ORM\Column(name="label_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $labelId;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=100, nullable=false)
     */
    private $label;

    /**
     * @var string
     *
     * @ORM\Column(name="label_url", type="string", length=100, nullable=false)
     */
    private $labelUrl;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $userId;

    /**
     * @var int
     *
     * @ORM\Column(name="use_count", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $useCount = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="last_use_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $lastUseDate = '0';

    public function getLabelId(): ?int
    {
        return $this->labelId;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(string $label): self
    {
        $this->label = $label;

        return $this;
    }

    public function getLabelUrl(): ?string
    {
        return $this->labelUrl;
    }

    public function setLabelUrl(string $labelUrl): self
    {
        $this->labelUrl = $labelUrl;

        return $this;
    }

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    public function getUseCount(): ?int
    {
        return $this->useCount;
    }

    public function setUseCount(int $useCount): self
    {
        $this->useCount = $useCount;

        return $this;
    }

    public function getLastUseDate(): ?int
    {
        return $this->lastUseDate;
    }

    public function setLastUseDate(int $lastUseDate): self
    {
        $this->lastUseDate = $lastUseDate;

        return $this;
    }


}
