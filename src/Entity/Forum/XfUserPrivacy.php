<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfUserPrivacy
 *
 * @ORM\Table(name="xf_user_privacy")
 * @ORM\Entity
 */
class XfUserPrivacy
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
     * @ORM\Column(name="allow_view_profile", type="string", length=0, nullable=false, options={"default"="everyone"})
     */
    private $allowViewProfile = 'everyone';

    /**
     * @var string
     *
     * @ORM\Column(name="allow_post_profile", type="string", length=0, nullable=false, options={"default"="everyone"})
     */
    private $allowPostProfile = 'everyone';

    /**
     * @var string
     *
     * @ORM\Column(name="allow_send_personal_conversation", type="string", length=0, nullable=false, options={"default"="everyone"})
     */
    private $allowSendPersonalConversation = 'everyone';

    /**
     * @var string
     *
     * @ORM\Column(name="allow_view_identities", type="string", length=0, nullable=false, options={"default"="everyone"})
     */
    private $allowViewIdentities = 'everyone';

    /**
     * @var string
     *
     * @ORM\Column(name="allow_receive_news_feed", type="string", length=0, nullable=false, options={"default"="everyone"})
     */
    private $allowReceiveNewsFeed = 'everyone';

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function getAllowViewProfile(): ?string
    {
        return $this->allowViewProfile;
    }

    public function setAllowViewProfile(string $allowViewProfile): self
    {
        $this->allowViewProfile = $allowViewProfile;

        return $this;
    }

    public function getAllowPostProfile(): ?string
    {
        return $this->allowPostProfile;
    }

    public function setAllowPostProfile(string $allowPostProfile): self
    {
        $this->allowPostProfile = $allowPostProfile;

        return $this;
    }

    public function getAllowSendPersonalConversation(): ?string
    {
        return $this->allowSendPersonalConversation;
    }

    public function setAllowSendPersonalConversation(string $allowSendPersonalConversation): self
    {
        $this->allowSendPersonalConversation = $allowSendPersonalConversation;

        return $this;
    }

    public function getAllowViewIdentities(): ?string
    {
        return $this->allowViewIdentities;
    }

    public function setAllowViewIdentities(string $allowViewIdentities): self
    {
        $this->allowViewIdentities = $allowViewIdentities;

        return $this;
    }

    public function getAllowReceiveNewsFeed(): ?string
    {
        return $this->allowReceiveNewsFeed;
    }

    public function setAllowReceiveNewsFeed(string $allowReceiveNewsFeed): self
    {
        $this->allowReceiveNewsFeed = $allowReceiveNewsFeed;

        return $this;
    }


}
