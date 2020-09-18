<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfUser
 *
 * @ORM\Table(name="xf_user", uniqueConstraints={@ORM\UniqueConstraint(name="username", columns={"username"})}, indexes={@ORM\Index(name="trophy_points", columns={"trophy_points"}), @ORM\Index(name="register_date", columns={"register_date"}), @ORM\Index(name="email", columns={"email"}), @ORM\Index(name="last_activity", columns={"last_activity"}), @ORM\Index(name="message_count", columns={"message_count"}), @ORM\Index(name="reaction_score", columns={"reaction_score"}), @ORM\Index(name="staff_username", columns={"is_staff", "username"}), @ORM\Index(name="user_state", columns={"user_state"})})
 * @ORM\Entity
 */
class XfUser
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
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=50, nullable=false)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=120, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="custom_title", type="string", length=50, nullable=false)
     */
    private $customTitle = '';

    /**
     * @var int
     *
     * @ORM\Column(name="language_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $languageId;

    /**
     * @var int
     *
     * @ORM\Column(name="style_id", type="integer", nullable=false, options={"unsigned"=true,"comment"="0 = use system default"})
     */
    private $styleId;

    /**
     * @var string
     *
     * @ORM\Column(name="timezone", type="string", length=50, nullable=false, options={"comment"="Example: 'Europe/London'"})
     */
    private $timezone;

    /**
     * @var bool
     *
     * @ORM\Column(name="visible", type="boolean", nullable=false, options={"default"="1","comment"="Show browsing activity to others"})
     */
    private $visible = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="activity_visible", type="boolean", nullable=false, options={"default"="1"})
     */
    private $activityVisible = '1';

    /**
     * @var int
     *
     * @ORM\Column(name="user_group_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $userGroupId;

    /**
     * @var binary
     *
     * @ORM\Column(name="secondary_group_ids", type="binary", nullable=false)
     */
    private $secondaryGroupIds;

    /**
     * @var int
     *
     * @ORM\Column(name="display_style_group_id", type="integer", nullable=false, options={"unsigned"=true,"comment"="User group ID that provides user styling"})
     */
    private $displayStyleGroupId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="permission_combination_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $permissionCombinationId;

    /**
     * @var int
     *
     * @ORM\Column(name="message_count", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $messageCount = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="conversations_unread", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $conversationsUnread = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="register_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $registerDate = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="last_activity", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $lastActivity = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="trophy_points", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $trophyPoints = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="alerts_unread", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $alertsUnread = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="avatar_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $avatarDate = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="avatar_width", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $avatarWidth = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="avatar_height", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $avatarHeight = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="avatar_highdpi", type="boolean", nullable=false)
     */
    private $avatarHighdpi = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="gravatar", type="string", length=120, nullable=false, options={"comment"="If specified, this is an email address corresponding to the user's 'Gravatar'"})
     */
    private $gravatar = '';

    /**
     * @var string
     *
     * @ORM\Column(name="user_state", type="string", length=0, nullable=false, options={"default"="valid"})
     */
    private $userState = 'valid';

    /**
     * @var bool
     *
     * @ORM\Column(name="is_moderator", type="boolean", nullable=false)
     */
    private $isModerator = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="is_admin", type="boolean", nullable=false)
     */
    private $isAdmin = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="is_banned", type="boolean", nullable=false)
     */
    private $isBanned = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="reaction_score", type="integer", nullable=false)
     */
    private $reactionScore = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="warning_points", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $warningPoints = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="is_staff", type="boolean", nullable=false)
     */
    private $isStaff = '0';

    /**
     * @var binary
     *
     * @ORM\Column(name="secret_key", type="binary", nullable=false)
     */
    private $secretKey;

    /**
     * @var int
     *
     * @ORM\Column(name="privacy_policy_accepted", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $privacyPolicyAccepted = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="terms_accepted", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $termsAccepted = '0';

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getCustomTitle(): ?string
    {
        return $this->customTitle;
    }

    public function setCustomTitle(string $customTitle): self
    {
        $this->customTitle = $customTitle;

        return $this;
    }

    public function getLanguageId(): ?int
    {
        return $this->languageId;
    }

    public function setLanguageId(int $languageId): self
    {
        $this->languageId = $languageId;

        return $this;
    }

    public function getStyleId(): ?int
    {
        return $this->styleId;
    }

    public function setStyleId(int $styleId): self
    {
        $this->styleId = $styleId;

        return $this;
    }

    public function getTimezone(): ?string
    {
        return $this->timezone;
    }

    public function setTimezone(string $timezone): self
    {
        $this->timezone = $timezone;

        return $this;
    }

    public function getVisible(): ?bool
    {
        return $this->visible;
    }

    public function setVisible(bool $visible): self
    {
        $this->visible = $visible;

        return $this;
    }

    public function getActivityVisible(): ?bool
    {
        return $this->activityVisible;
    }

    public function setActivityVisible(bool $activityVisible): self
    {
        $this->activityVisible = $activityVisible;

        return $this;
    }

    public function getUserGroupId(): ?int
    {
        return $this->userGroupId;
    }

    public function setUserGroupId(int $userGroupId): self
    {
        $this->userGroupId = $userGroupId;

        return $this;
    }

    public function getSecondaryGroupIds()
    {
        return $this->secondaryGroupIds;
    }

    public function setSecondaryGroupIds($secondaryGroupIds): self
    {
        $this->secondaryGroupIds = $secondaryGroupIds;

        return $this;
    }

    public function getDisplayStyleGroupId(): ?int
    {
        return $this->displayStyleGroupId;
    }

    public function setDisplayStyleGroupId(int $displayStyleGroupId): self
    {
        $this->displayStyleGroupId = $displayStyleGroupId;

        return $this;
    }

    public function getPermissionCombinationId(): ?int
    {
        return $this->permissionCombinationId;
    }

    public function setPermissionCombinationId(int $permissionCombinationId): self
    {
        $this->permissionCombinationId = $permissionCombinationId;

        return $this;
    }

    public function getMessageCount(): ?int
    {
        return $this->messageCount;
    }

    public function setMessageCount(int $messageCount): self
    {
        $this->messageCount = $messageCount;

        return $this;
    }

    public function getConversationsUnread(): ?int
    {
        return $this->conversationsUnread;
    }

    public function setConversationsUnread(int $conversationsUnread): self
    {
        $this->conversationsUnread = $conversationsUnread;

        return $this;
    }

    public function getRegisterDate(): ?int
    {
        return $this->registerDate;
    }

    public function setRegisterDate(int $registerDate): self
    {
        $this->registerDate = $registerDate;

        return $this;
    }

    public function getLastActivity(): ?int
    {
        return $this->lastActivity;
    }

    public function setLastActivity(int $lastActivity): self
    {
        $this->lastActivity = $lastActivity;

        return $this;
    }

    public function getTrophyPoints(): ?int
    {
        return $this->trophyPoints;
    }

    public function setTrophyPoints(int $trophyPoints): self
    {
        $this->trophyPoints = $trophyPoints;

        return $this;
    }

    public function getAlertsUnread(): ?int
    {
        return $this->alertsUnread;
    }

    public function setAlertsUnread(int $alertsUnread): self
    {
        $this->alertsUnread = $alertsUnread;

        return $this;
    }

    public function getAvatarDate(): ?int
    {
        return $this->avatarDate;
    }

    public function setAvatarDate(int $avatarDate): self
    {
        $this->avatarDate = $avatarDate;

        return $this;
    }

    public function getAvatarWidth(): ?int
    {
        return $this->avatarWidth;
    }

    public function setAvatarWidth(int $avatarWidth): self
    {
        $this->avatarWidth = $avatarWidth;

        return $this;
    }

    public function getAvatarHeight(): ?int
    {
        return $this->avatarHeight;
    }

    public function setAvatarHeight(int $avatarHeight): self
    {
        $this->avatarHeight = $avatarHeight;

        return $this;
    }

    public function getAvatarHighdpi(): ?bool
    {
        return $this->avatarHighdpi;
    }

    public function setAvatarHighdpi(bool $avatarHighdpi): self
    {
        $this->avatarHighdpi = $avatarHighdpi;

        return $this;
    }

    public function getGravatar(): ?string
    {
        return $this->gravatar;
    }

    public function setGravatar(string $gravatar): self
    {
        $this->gravatar = $gravatar;

        return $this;
    }

    public function getUserState(): ?string
    {
        return $this->userState;
    }

    public function setUserState(string $userState): self
    {
        $this->userState = $userState;

        return $this;
    }

    public function getIsModerator(): ?bool
    {
        return $this->isModerator;
    }

    public function setIsModerator(bool $isModerator): self
    {
        $this->isModerator = $isModerator;

        return $this;
    }

    public function getIsAdmin(): ?bool
    {
        return $this->isAdmin;
    }

    public function setIsAdmin(bool $isAdmin): self
    {
        $this->isAdmin = $isAdmin;

        return $this;
    }

    public function getIsBanned(): ?bool
    {
        return $this->isBanned;
    }

    public function setIsBanned(bool $isBanned): self
    {
        $this->isBanned = $isBanned;

        return $this;
    }

    public function getReactionScore(): ?int
    {
        return $this->reactionScore;
    }

    public function setReactionScore(int $reactionScore): self
    {
        $this->reactionScore = $reactionScore;

        return $this;
    }

    public function getWarningPoints(): ?int
    {
        return $this->warningPoints;
    }

    public function setWarningPoints(int $warningPoints): self
    {
        $this->warningPoints = $warningPoints;

        return $this;
    }

    public function getIsStaff(): ?bool
    {
        return $this->isStaff;
    }

    public function setIsStaff(bool $isStaff): self
    {
        $this->isStaff = $isStaff;

        return $this;
    }

    public function getSecretKey()
    {
        return $this->secretKey;
    }

    public function setSecretKey($secretKey): self
    {
        $this->secretKey = $secretKey;

        return $this;
    }

    public function getPrivacyPolicyAccepted(): ?int
    {
        return $this->privacyPolicyAccepted;
    }

    public function setPrivacyPolicyAccepted(int $privacyPolicyAccepted): self
    {
        $this->privacyPolicyAccepted = $privacyPolicyAccepted;

        return $this;
    }

    public function getTermsAccepted(): ?int
    {
        return $this->termsAccepted;
    }

    public function setTermsAccepted(int $termsAccepted): self
    {
        $this->termsAccepted = $termsAccepted;

        return $this;
    }


}
