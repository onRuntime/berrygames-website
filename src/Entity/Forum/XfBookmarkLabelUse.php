<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfBookmarkLabelUse
 *
 * @ORM\Table(name="xf_bookmark_label_use")
 * @ORM\Entity
 */
class XfBookmarkLabelUse
{
    /**
     * @var int
     *
     * @ORM\Column(name="label_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $labelId;

    /**
     * @var int
     *
     * @ORM\Column(name="bookmark_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $bookmarkId;

    /**
     * @var int
     *
     * @ORM\Column(name="use_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $useDate = '0';

    public function getLabelId(): ?int
    {
        return $this->labelId;
    }

    public function getBookmarkId(): ?int
    {
        return $this->bookmarkId;
    }

    public function getUseDate(): ?int
    {
        return $this->useDate;
    }

    public function setUseDate(int $useDate): self
    {
        $this->useDate = $useDate;

        return $this;
    }


}
