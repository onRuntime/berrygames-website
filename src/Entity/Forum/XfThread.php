<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfThread
 *
 * @ORM\Table(name="xf_thread", indexes={@ORM\Index(name="post_date", columns={"post_date"}), @ORM\Index(name="last_post_date", columns={"last_post_date"}), @ORM\Index(name="user_id", columns={"user_id"}), @ORM\Index(name="node_id_last_post_date", columns={"node_id", "last_post_date"}), @ORM\Index(name="node_id_sticky_state_last_post", columns={"node_id", "sticky", "discussion_state", "last_post_date"})})
 * @ORM\Entity
 */
class XfThread
{
    /**
     * @var int
     *
     * @ORM\Column(name="thread_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $threadId;

    /**
     * @var int
     *
     * @ORM\Column(name="node_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $nodeId;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=150, nullable=false)
     */
    private $title;

    /**
     * @var int
     *
     * @ORM\Column(name="reply_count", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $replyCount = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="view_count", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $viewCount = '0';

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
     * @var bool
     *
     * @ORM\Column(name="sticky", type="boolean", nullable=false)
     */
    private $sticky = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="discussion_state", type="string", length=0, nullable=false, options={"default"="visible"})
     */
    private $discussionState = 'visible';

    /**
     * @var bool
     *
     * @ORM\Column(name="discussion_open", type="boolean", nullable=false, options={"default"="1"})
     */
    private $discussionOpen = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="discussion_type", type="string", length=25, nullable=false)
     */
    private $discussionType = '';

    /**
     * @var int
     *
     * @ORM\Column(name="first_post_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $firstPostId;

    /**
     * @var int
     *
     * @ORM\Column(name="first_post_reaction_score", type="integer", nullable=false)
     */
    private $firstPostReactionScore = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="first_post_reactions", type="blob", length=65535, nullable=true)
     */
    private $firstPostReactions;

    /**
     * @var int
     *
     * @ORM\Column(name="last_post_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $lastPostDate;

    /**
     * @var int
     *
     * @ORM\Column(name="last_post_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $lastPostId;

    /**
     * @var int
     *
     * @ORM\Column(name="last_post_user_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $lastPostUserId;

    /**
     * @var string
     *
     * @ORM\Column(name="last_post_username", type="string", length=50, nullable=false)
     */
    private $lastPostUsername;

    /**
     * @var int
     *
     * @ORM\Column(name="prefix_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $prefixId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="tags", type="blob", length=16777215, nullable=false)
     */
    private $tags;

    /**
     * @var string
     *
     * @ORM\Column(name="custom_fields", type="blob", length=16777215, nullable=false)
     */
    private $customFields;

    public function getThreadId(): ?int
    {
        return $this->threadId;
    }

    public function getNodeId(): ?int
    {
        return $this->nodeId;
    }

    public function setNodeId(int $nodeId): self
    {
        $this->nodeId = $nodeId;

        return $this;
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

    public function getReplyCount(): ?int
    {
        return $this->replyCount;
    }

    public function setReplyCount(int $replyCount): self
    {
        $this->replyCount = $replyCount;

        return $this;
    }

    public function getViewCount(): ?int
    {
        return $this->viewCount;
    }

    public function setViewCount(int $viewCount): self
    {
        $this->viewCount = $viewCount;

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

    public function getSticky(): ?bool
    {
        return $this->sticky;
    }

    public function setSticky(bool $sticky): self
    {
        $this->sticky = $sticky;

        return $this;
    }

    public function getDiscussionState(): ?string
    {
        return $this->discussionState;
    }

    public function setDiscussionState(string $discussionState): self
    {
        $this->discussionState = $discussionState;

        return $this;
    }

    public function getDiscussionOpen(): ?bool
    {
        return $this->discussionOpen;
    }

    public function setDiscussionOpen(bool $discussionOpen): self
    {
        $this->discussionOpen = $discussionOpen;

        return $this;
    }

    public function getDiscussionType(): ?string
    {
        return $this->discussionType;
    }

    public function setDiscussionType(string $discussionType): self
    {
        $this->discussionType = $discussionType;

        return $this;
    }

    public function getFirstPostId(): ?int
    {
        return $this->firstPostId;
    }

    public function setFirstPostId(int $firstPostId): self
    {
        $this->firstPostId = $firstPostId;

        return $this;
    }

    public function getFirstPostReactionScore(): ?int
    {
        return $this->firstPostReactionScore;
    }

    public function setFirstPostReactionScore(int $firstPostReactionScore): self
    {
        $this->firstPostReactionScore = $firstPostReactionScore;

        return $this;
    }

    public function getFirstPostReactions()
    {
        return $this->firstPostReactions;
    }

    public function setFirstPostReactions($firstPostReactions): self
    {
        $this->firstPostReactions = $firstPostReactions;

        return $this;
    }

    public function getLastPostDate(): ?int
    {
        return $this->lastPostDate;
    }

    public function setLastPostDate(int $lastPostDate): self
    {
        $this->lastPostDate = $lastPostDate;

        return $this;
    }

    public function getLastPostId(): ?int
    {
        return $this->lastPostId;
    }

    public function setLastPostId(int $lastPostId): self
    {
        $this->lastPostId = $lastPostId;

        return $this;
    }

    public function getLastPostUserId(): ?int
    {
        return $this->lastPostUserId;
    }

    public function setLastPostUserId(int $lastPostUserId): self
    {
        $this->lastPostUserId = $lastPostUserId;

        return $this;
    }

    public function getLastPostUsername(): ?string
    {
        return $this->lastPostUsername;
    }

    public function setLastPostUsername(string $lastPostUsername): self
    {
        $this->lastPostUsername = $lastPostUsername;

        return $this;
    }

    public function getPrefixId(): ?int
    {
        return $this->prefixId;
    }

    public function setPrefixId(int $prefixId): self
    {
        $this->prefixId = $prefixId;

        return $this;
    }

    public function getTags()
    {
        return $this->tags;
    }

    public function setTags($tags): self
    {
        $this->tags = $tags;

        return $this;
    }

    public function getCustomFields()
    {
        return $this->customFields;
    }

    public function setCustomFields($customFields): self
    {
        $this->customFields = $customFields;

        return $this;
    }


}
