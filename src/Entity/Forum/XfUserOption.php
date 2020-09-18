<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfUserOption
 *
 * @ORM\Table(name="xf_user_option")
 * @ORM\Entity
 */
class XfUserOption
{
    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userId;

    /**
     * @var bool
     *
     * @ORM\Column(name="show_dob_year", type="boolean", nullable=false, options={"default"="1","comment"="Show date of month year (thus: age)"})
     */
    private $showDobYear = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="show_dob_date", type="boolean", nullable=false, options={"default"="1","comment"="Show date of birth day and month"})
     */
    private $showDobDate = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="content_show_signature", type="boolean", nullable=false, options={"default"="1","comment"="Show user's signatures with content"})
     */
    private $contentShowSignature = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="receive_admin_email", type="boolean", nullable=false, options={"default"="1"})
     */
    private $receiveAdminEmail = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="email_on_conversation", type="boolean", nullable=false, options={"default"="1","comment"="Receive an email upon receiving a conversation message"})
     */
    private $emailOnConversation = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="push_on_conversation", type="boolean", nullable=false, options={"default"="1"})
     */
    private $pushOnConversation = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="is_discouraged", type="boolean", nullable=false, options={"comment"="If non-zero, this user will be subjected to annoying random system failures."})
     */
    private $isDiscouraged = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="creation_watch_state", type="string", length=0, nullable=false)
     */
    private $creationWatchState = '';

    /**
     * @var string
     *
     * @ORM\Column(name="interaction_watch_state", type="string", length=0, nullable=false)
     */
    private $interactionWatchState = '';

    /**
     * @var string
     *
     * @ORM\Column(name="alert_optout", type="text", length=65535, nullable=false, options={"comment"="Comma-separated list of alerts from which the user has opted out. Example: 'post_like,user_trophy'"})
     */
    private $alertOptout;

    /**
     * @var string
     *
     * @ORM\Column(name="push_optout", type="text", length=65535, nullable=false, options={"comment"="Comma-separated list of alerts from which the user has opted out for push notifications. Example: 'post_like,user_trophy'"})
     */
    private $pushOptout;

    /**
     * @var bool
     *
     * @ORM\Column(name="use_tfa", type="boolean", nullable=false)
     */
    private $useTfa = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="thuix_collapse_postbit", type="boolean", nullable=false, options={"default"="1"})
     */
    private $thuixCollapsePostbit = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="thuix_collapse_sidebar", type="boolean", nullable=false)
     */
    private $thuixCollapseSidebar = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="thuix_collapse_sidebar_nav", type="boolean", nullable=false)
     */
    private $thuixCollapseSidebarNav = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="thuix_font_size", type="boolean", nullable=false)
     */
    private $thuixFontSize = '0';

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function getShowDobYear(): ?bool
    {
        return $this->showDobYear;
    }

    public function setShowDobYear(bool $showDobYear): self
    {
        $this->showDobYear = $showDobYear;

        return $this;
    }

    public function getShowDobDate(): ?bool
    {
        return $this->showDobDate;
    }

    public function setShowDobDate(bool $showDobDate): self
    {
        $this->showDobDate = $showDobDate;

        return $this;
    }

    public function getContentShowSignature(): ?bool
    {
        return $this->contentShowSignature;
    }

    public function setContentShowSignature(bool $contentShowSignature): self
    {
        $this->contentShowSignature = $contentShowSignature;

        return $this;
    }

    public function getReceiveAdminEmail(): ?bool
    {
        return $this->receiveAdminEmail;
    }

    public function setReceiveAdminEmail(bool $receiveAdminEmail): self
    {
        $this->receiveAdminEmail = $receiveAdminEmail;

        return $this;
    }

    public function getEmailOnConversation(): ?bool
    {
        return $this->emailOnConversation;
    }

    public function setEmailOnConversation(bool $emailOnConversation): self
    {
        $this->emailOnConversation = $emailOnConversation;

        return $this;
    }

    public function getPushOnConversation(): ?bool
    {
        return $this->pushOnConversation;
    }

    public function setPushOnConversation(bool $pushOnConversation): self
    {
        $this->pushOnConversation = $pushOnConversation;

        return $this;
    }

    public function getIsDiscouraged(): ?bool
    {
        return $this->isDiscouraged;
    }

    public function setIsDiscouraged(bool $isDiscouraged): self
    {
        $this->isDiscouraged = $isDiscouraged;

        return $this;
    }

    public function getCreationWatchState(): ?string
    {
        return $this->creationWatchState;
    }

    public function setCreationWatchState(string $creationWatchState): self
    {
        $this->creationWatchState = $creationWatchState;

        return $this;
    }

    public function getInteractionWatchState(): ?string
    {
        return $this->interactionWatchState;
    }

    public function setInteractionWatchState(string $interactionWatchState): self
    {
        $this->interactionWatchState = $interactionWatchState;

        return $this;
    }

    public function getAlertOptout(): ?string
    {
        return $this->alertOptout;
    }

    public function setAlertOptout(string $alertOptout): self
    {
        $this->alertOptout = $alertOptout;

        return $this;
    }

    public function getPushOptout(): ?string
    {
        return $this->pushOptout;
    }

    public function setPushOptout(string $pushOptout): self
    {
        $this->pushOptout = $pushOptout;

        return $this;
    }

    public function getUseTfa(): ?bool
    {
        return $this->useTfa;
    }

    public function setUseTfa(bool $useTfa): self
    {
        $this->useTfa = $useTfa;

        return $this;
    }

    public function getThuixCollapsePostbit(): ?bool
    {
        return $this->thuixCollapsePostbit;
    }

    public function setThuixCollapsePostbit(bool $thuixCollapsePostbit): self
    {
        $this->thuixCollapsePostbit = $thuixCollapsePostbit;

        return $this;
    }

    public function getThuixCollapseSidebar(): ?bool
    {
        return $this->thuixCollapseSidebar;
    }

    public function setThuixCollapseSidebar(bool $thuixCollapseSidebar): self
    {
        $this->thuixCollapseSidebar = $thuixCollapseSidebar;

        return $this;
    }

    public function getThuixCollapseSidebarNav(): ?bool
    {
        return $this->thuixCollapseSidebarNav;
    }

    public function setThuixCollapseSidebarNav(bool $thuixCollapseSidebarNav): self
    {
        $this->thuixCollapseSidebarNav = $thuixCollapseSidebarNav;

        return $this;
    }

    public function getThuixFontSize(): ?bool
    {
        return $this->thuixFontSize;
    }

    public function setThuixFontSize(bool $thuixFontSize): self
    {
        $this->thuixFontSize = $thuixFontSize;

        return $this;
    }


}
