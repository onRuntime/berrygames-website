<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfProfilePost
 *
 * @ORM\Table(name="xf_profile_post", indexes={@ORM\Index(name="post_date", columns={"post_date"}), @ORM\Index(name="profile_user_id_post_date", columns={"profile_user_id", "post_date"}), @ORM\Index(name="user_id", columns={"user_id"})})
 * @ORM\Entity
 */
class XfProfilePost
{
    /**
     * @var int
     *
     * @ORM\Column(name="profile_post_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $profilePostId;

    /**
     * @var int
     *
     * @ORM\Column(name="profile_user_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $profileUserId;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=50, nullable=false)
     */
    private $username;

    /**
     * @var int
     *
     * @ORM\Column(name="post_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $postDate;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text", length=16777215, nullable=false)
     */
    private $message;

    /**
     * @var int
     *
     * @ORM\Column(name="ip_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $ipId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="message_state", type="string", length=0, nullable=false, options={"default"="visible"})
     */
    private $messageState = 'visible';

    /**
     * @var int
     *
     * @ORM\Column(name="attach_count", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $attachCount = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="reaction_score", type="integer", nullable=false)
     */
    private $reactionScore = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="reactions", type="blob", length=65535, nullable=true)
     */
    private $reactions;

    /**
     * @var string
     *
     * @ORM\Column(name="reaction_users", type="blob", length=65535, nullable=false)
     */
    private $reactionUsers;

    /**
     * @var int
     *
     * @ORM\Column(name="comment_count", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $commentCount = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="first_comment_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $firstCommentDate = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="last_comment_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $lastCommentDate = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="latest_comment_ids", type="blob", length=65535, nullable=false)
     */
    private $latestCommentIds;

    /**
     * @var int
     *
     * @ORM\Column(name="warning_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $warningId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="warning_message", type="string", length=255, nullable=false)
     */
    private $warningMessage = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="embed_metadata", type="blob", length=65535, nullable=true)
     */
    private $embedMetadata;

    public function getProfilePostId(): ?int
    {
        return $this->profilePostId;
    }

    public function getProfileUserId(): ?int
    {
        return $this->profileUserId;
    }

    public function setProfileUserId(int $profileUserId): self
    {
        $this->profileUserId = $profileUserId;

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

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getPostDate(): ?int
    {
        return $this->postDate;
    }

    public function setPostDate(int $postDate): self
    {
        $this->postDate = $postDate;

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

    public function getIpId(): ?int
    {
        return $this->ipId;
    }

    public function setIpId(int $ipId): self
    {
        $this->ipId = $ipId;

        return $this;
    }

    public function getMessageState(): ?string
    {
        return $this->messageState;
    }

    public function setMessageState(string $messageState): self
    {
        $this->messageState = $messageState;

        return $this;
    }

    public function getAttachCount(): ?int
    {
        return $this->attachCount;
    }

    public function setAttachCount(int $attachCount): self
    {
        $this->attachCount = $attachCount;

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

    public function getReactions()
    {
        return $this->reactions;
    }

    public function setReactions($reactions): self
    {
        $this->reactions = $reactions;

        return $this;
    }

    public function getReactionUsers()
    {
        return $this->reactionUsers;
    }

    public function setReactionUsers($reactionUsers): self
    {
        $this->reactionUsers = $reactionUsers;

        return $this;
    }

    public function getCommentCount(): ?int
    {
        return $this->commentCount;
    }

    public function setCommentCount(int $commentCount): self
    {
        $this->commentCount = $commentCount;

        return $this;
    }

    public function getFirstCommentDate(): ?int
    {
        return $this->firstCommentDate;
    }

    public function setFirstCommentDate(int $firstCommentDate): self
    {
        $this->firstCommentDate = $firstCommentDate;

        return $this;
    }

    public function getLastCommentDate(): ?int
    {
        return $this->lastCommentDate;
    }

    public function setLastCommentDate(int $lastCommentDate): self
    {
        $this->lastCommentDate = $lastCommentDate;

        return $this;
    }

    public function getLatestCommentIds()
    {
        return $this->latestCommentIds;
    }

    public function setLatestCommentIds($latestCommentIds): self
    {
        $this->latestCommentIds = $latestCommentIds;

        return $this;
    }

    public function getWarningId(): ?int
    {
        return $this->warningId;
    }

    public function setWarningId(int $warningId): self
    {
        $this->warningId = $warningId;

        return $this;
    }

    public function getWarningMessage(): ?string
    {
        return $this->warningMessage;
    }

    public function setWarningMessage(string $warningMessage): self
    {
        $this->warningMessage = $warningMessage;

        return $this;
    }

    public function getEmbedMetadata()
    {
        return $this->embedMetadata;
    }

    public function setEmbedMetadata($embedMetadata): self
    {
        $this->embedMetadata = $embedMetadata;

        return $this;
    }


}
