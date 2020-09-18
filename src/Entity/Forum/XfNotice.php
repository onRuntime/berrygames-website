<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfNotice
 *
 * @ORM\Table(name="xf_notice")
 * @ORM\Entity
 */
class XfNotice
{
    /**
     * @var int
     *
     * @ORM\Column(name="notice_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $noticeId;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=150, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text", length=16777215, nullable=false)
     */
    private $message;

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $active = '1';

    /**
     * @var int
     *
     * @ORM\Column(name="display_order", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $displayOrder = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="dismissible", type="boolean", nullable=false, options={"default"="1","comment"="Notice may be hidden when read by users"})
     */
    private $dismissible = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="user_criteria", type="blob", length=16777215, nullable=false)
     */
    private $userCriteria;

    /**
     * @var string
     *
     * @ORM\Column(name="page_criteria", type="blob", length=16777215, nullable=false)
     */
    private $pageCriteria;

    /**
     * @var string
     *
     * @ORM\Column(name="display_image", type="string", length=0, nullable=false)
     */
    private $displayImage = '';

    /**
     * @var string
     *
     * @ORM\Column(name="image_url", type="string", length=200, nullable=false)
     */
    private $imageUrl = '';

    /**
     * @var string
     *
     * @ORM\Column(name="visibility", type="string", length=0, nullable=false)
     */
    private $visibility = '';

    /**
     * @var string
     *
     * @ORM\Column(name="notice_type", type="string", length=25, nullable=false, options={"default"="block"})
     */
    private $noticeType = 'block';

    /**
     * @var string
     *
     * @ORM\Column(name="display_style", type="string", length=25, nullable=false)
     */
    private $displayStyle = '';

    /**
     * @var string
     *
     * @ORM\Column(name="css_class", type="string", length=50, nullable=false)
     */
    private $cssClass = '';

    /**
     * @var int
     *
     * @ORM\Column(name="display_duration", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $displayDuration = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="delay_duration", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $delayDuration = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="auto_dismiss", type="boolean", nullable=false)
     */
    private $autoDismiss = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="thuix_icon", type="string", length=255, nullable=false, options={"default"="mdi mdi-information"})
     */
    private $thuixIcon = 'mdi mdi-information';

    public function getNoticeId(): ?int
    {
        return $this->noticeId;
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

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): self
    {
        $this->message = $message;

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

    public function getDisplayOrder(): ?int
    {
        return $this->displayOrder;
    }

    public function setDisplayOrder(int $displayOrder): self
    {
        $this->displayOrder = $displayOrder;

        return $this;
    }

    public function getDismissible(): ?bool
    {
        return $this->dismissible;
    }

    public function setDismissible(bool $dismissible): self
    {
        $this->dismissible = $dismissible;

        return $this;
    }

    public function getUserCriteria()
    {
        return $this->userCriteria;
    }

    public function setUserCriteria($userCriteria): self
    {
        $this->userCriteria = $userCriteria;

        return $this;
    }

    public function getPageCriteria()
    {
        return $this->pageCriteria;
    }

    public function setPageCriteria($pageCriteria): self
    {
        $this->pageCriteria = $pageCriteria;

        return $this;
    }

    public function getDisplayImage(): ?string
    {
        return $this->displayImage;
    }

    public function setDisplayImage(string $displayImage): self
    {
        $this->displayImage = $displayImage;

        return $this;
    }

    public function getImageUrl(): ?string
    {
        return $this->imageUrl;
    }

    public function setImageUrl(string $imageUrl): self
    {
        $this->imageUrl = $imageUrl;

        return $this;
    }

    public function getVisibility(): ?string
    {
        return $this->visibility;
    }

    public function setVisibility(string $visibility): self
    {
        $this->visibility = $visibility;

        return $this;
    }

    public function getNoticeType(): ?string
    {
        return $this->noticeType;
    }

    public function setNoticeType(string $noticeType): self
    {
        $this->noticeType = $noticeType;

        return $this;
    }

    public function getDisplayStyle(): ?string
    {
        return $this->displayStyle;
    }

    public function setDisplayStyle(string $displayStyle): self
    {
        $this->displayStyle = $displayStyle;

        return $this;
    }

    public function getCssClass(): ?string
    {
        return $this->cssClass;
    }

    public function setCssClass(string $cssClass): self
    {
        $this->cssClass = $cssClass;

        return $this;
    }

    public function getDisplayDuration(): ?int
    {
        return $this->displayDuration;
    }

    public function setDisplayDuration(int $displayDuration): self
    {
        $this->displayDuration = $displayDuration;

        return $this;
    }

    public function getDelayDuration(): ?int
    {
        return $this->delayDuration;
    }

    public function setDelayDuration(int $delayDuration): self
    {
        $this->delayDuration = $delayDuration;

        return $this;
    }

    public function getAutoDismiss(): ?bool
    {
        return $this->autoDismiss;
    }

    public function setAutoDismiss(bool $autoDismiss): self
    {
        $this->autoDismiss = $autoDismiss;

        return $this;
    }

    public function getThuixIcon(): ?string
    {
        return $this->thuixIcon;
    }

    public function setThuixIcon(string $thuixIcon): self
    {
        $this->thuixIcon = $thuixIcon;

        return $this;
    }


}
