<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfUserGroup
 *
 * @ORM\Table(name="xf_user_group", indexes={@ORM\Index(name="title", columns={"title"})})
 * @ORM\Entity
 */
class XfUserGroup
{
    /**
     * @var int
     *
     * @ORM\Column(name="user_group_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userGroupId;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=50, nullable=false)
     */
    private $title;

    /**
     * @var int
     *
     * @ORM\Column(name="display_style_priority", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $displayStylePriority = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="username_css", type="text", length=65535, nullable=false)
     */
    private $usernameCss;

    /**
     * @var string
     *
     * @ORM\Column(name="user_title", type="string", length=100, nullable=false)
     */
    private $userTitle = '';

    /**
     * @var string
     *
     * @ORM\Column(name="banner_css_class", type="string", length=75, nullable=false)
     */
    private $bannerCssClass = '';

    /**
     * @var string
     *
     * @ORM\Column(name="banner_text", type="string", length=100, nullable=false)
     */
    private $bannerText = '';

    public function getUserGroupId(): ?int
    {
        return $this->userGroupId;
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

    public function getDisplayStylePriority(): ?int
    {
        return $this->displayStylePriority;
    }

    public function setDisplayStylePriority(int $displayStylePriority): self
    {
        $this->displayStylePriority = $displayStylePriority;

        return $this;
    }

    public function getUsernameCss(): ?string
    {
        return $this->usernameCss;
    }

    public function setUsernameCss(string $usernameCss): self
    {
        $this->usernameCss = $usernameCss;

        return $this;
    }

    public function getUserTitle(): ?string
    {
        return $this->userTitle;
    }

    public function setUserTitle(string $userTitle): self
    {
        $this->userTitle = $userTitle;

        return $this;
    }

    public function getBannerCssClass(): ?string
    {
        return $this->bannerCssClass;
    }

    public function setBannerCssClass(string $bannerCssClass): self
    {
        $this->bannerCssClass = $bannerCssClass;

        return $this;
    }

    public function getBannerText(): ?string
    {
        return $this->bannerText;
    }

    public function setBannerText(string $bannerText): self
    {
        $this->bannerText = $bannerText;

        return $this;
    }


}
