<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfForum
 *
 * @ORM\Table(name="xf_forum")
 * @ORM\Entity
 */
class XfForum
{
    /**
     * @var int
     *
     * @ORM\Column(name="node_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $nodeId;

    /**
     * @var int
     *
     * @ORM\Column(name="discussion_count", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $discussionCount = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="message_count", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $messageCount = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="last_post_id", type="integer", nullable=false, options={"unsigned"=true,"comment"="Most recent post_id"})
     */
    private $lastPostId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="last_post_date", type="integer", nullable=false, options={"unsigned"=true,"comment"="Date of most recent post"})
     */
    private $lastPostDate = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="last_post_user_id", type="integer", nullable=false, options={"unsigned"=true,"comment"="User_id of user posting most recently"})
     */
    private $lastPostUserId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="last_post_username", type="string", length=50, nullable=false, options={"comment"="Username of most recently-posting user"})
     */
    private $lastPostUsername = '';

    /**
     * @var int
     *
     * @ORM\Column(name="last_thread_id", type="integer", nullable=false, options={"unsigned"=true,"comment"="Most recent thread_id"})
     */
    private $lastThreadId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="last_thread_title", type="string", length=150, nullable=false, options={"comment"="Title of thread most recent post is in"})
     */
    private $lastThreadTitle = '';

    /**
     * @var int
     *
     * @ORM\Column(name="last_thread_prefix_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $lastThreadPrefixId = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="moderate_threads", type="boolean", nullable=false)
     */
    private $moderateThreads = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="moderate_replies", type="boolean", nullable=false)
     */
    private $moderateReplies = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="allow_posting", type="boolean", nullable=false, options={"default"="1"})
     */
    private $allowPosting = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="allow_poll", type="boolean", nullable=false, options={"default"="1"})
     */
    private $allowPoll = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="count_messages", type="boolean", nullable=false, options={"default"="1","comment"="If not set, messages posted (directly) within this forum will not contribute to user message totals."})
     */
    private $countMessages = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="find_new", type="boolean", nullable=false, options={"default"="1","comment"="Include posts from this forum when running /find-new/threads"})
     */
    private $findNew = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="field_cache", type="blob", length=16777215, nullable=false, options={"comment"="Serialized data from xf_thread_field"})
     */
    private $fieldCache;

    /**
     * @var string
     *
     * @ORM\Column(name="prefix_cache", type="blob", length=16777215, nullable=false, options={"comment"="Serialized data from xf_forum_prefix, [group_id][prefix_id] => prefix_id"})
     */
    private $prefixCache;

    /**
     * @var string
     *
     * @ORM\Column(name="prompt_cache", type="blob", length=16777215, nullable=false, options={"comment"="JSON data from xf_forum_prompt"})
     */
    private $promptCache;

    /**
     * @var int
     *
     * @ORM\Column(name="default_prefix_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $defaultPrefixId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="default_sort_order", type="string", length=25, nullable=false, options={"default"="last_post_date"})
     */
    private $defaultSortOrder = 'last_post_date';

    /**
     * @var string
     *
     * @ORM\Column(name="default_sort_direction", type="string", length=5, nullable=false, options={"default"="desc"})
     */
    private $defaultSortDirection = 'desc';

    /**
     * @var int
     *
     * @ORM\Column(name="list_date_limit_days", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $listDateLimitDays = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="require_prefix", type="boolean", nullable=false)
     */
    private $requirePrefix = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="allowed_watch_notifications", type="string", length=10, nullable=false, options={"default"="all"})
     */
    private $allowedWatchNotifications = 'all';

    /**
     * @var int
     *
     * @ORM\Column(name="min_tags", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $minTags = '0';

    public function getNodeId(): ?int
    {
        return $this->nodeId;
    }

    public function getDiscussionCount(): ?int
    {
        return $this->discussionCount;
    }

    public function setDiscussionCount(int $discussionCount): self
    {
        $this->discussionCount = $discussionCount;

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

    public function getLastPostId(): ?int
    {
        return $this->lastPostId;
    }

    public function setLastPostId(int $lastPostId): self
    {
        $this->lastPostId = $lastPostId;

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

    public function getLastThreadId(): ?int
    {
        return $this->lastThreadId;
    }

    public function setLastThreadId(int $lastThreadId): self
    {
        $this->lastThreadId = $lastThreadId;

        return $this;
    }

    public function getLastThreadTitle(): ?string
    {
        return $this->lastThreadTitle;
    }

    public function setLastThreadTitle(string $lastThreadTitle): self
    {
        $this->lastThreadTitle = $lastThreadTitle;

        return $this;
    }

    public function getLastThreadPrefixId(): ?int
    {
        return $this->lastThreadPrefixId;
    }

    public function setLastThreadPrefixId(int $lastThreadPrefixId): self
    {
        $this->lastThreadPrefixId = $lastThreadPrefixId;

        return $this;
    }

    public function getModerateThreads(): ?bool
    {
        return $this->moderateThreads;
    }

    public function setModerateThreads(bool $moderateThreads): self
    {
        $this->moderateThreads = $moderateThreads;

        return $this;
    }

    public function getModerateReplies(): ?bool
    {
        return $this->moderateReplies;
    }

    public function setModerateReplies(bool $moderateReplies): self
    {
        $this->moderateReplies = $moderateReplies;

        return $this;
    }

    public function getAllowPosting(): ?bool
    {
        return $this->allowPosting;
    }

    public function setAllowPosting(bool $allowPosting): self
    {
        $this->allowPosting = $allowPosting;

        return $this;
    }

    public function getAllowPoll(): ?bool
    {
        return $this->allowPoll;
    }

    public function setAllowPoll(bool $allowPoll): self
    {
        $this->allowPoll = $allowPoll;

        return $this;
    }

    public function getCountMessages(): ?bool
    {
        return $this->countMessages;
    }

    public function setCountMessages(bool $countMessages): self
    {
        $this->countMessages = $countMessages;

        return $this;
    }

    public function getFindNew(): ?bool
    {
        return $this->findNew;
    }

    public function setFindNew(bool $findNew): self
    {
        $this->findNew = $findNew;

        return $this;
    }

    public function getFieldCache()
    {
        return $this->fieldCache;
    }

    public function setFieldCache($fieldCache): self
    {
        $this->fieldCache = $fieldCache;

        return $this;
    }

    public function getPrefixCache()
    {
        return $this->prefixCache;
    }

    public function setPrefixCache($prefixCache): self
    {
        $this->prefixCache = $prefixCache;

        return $this;
    }

    public function getPromptCache()
    {
        return $this->promptCache;
    }

    public function setPromptCache($promptCache): self
    {
        $this->promptCache = $promptCache;

        return $this;
    }

    public function getDefaultPrefixId(): ?int
    {
        return $this->defaultPrefixId;
    }

    public function setDefaultPrefixId(int $defaultPrefixId): self
    {
        $this->defaultPrefixId = $defaultPrefixId;

        return $this;
    }

    public function getDefaultSortOrder(): ?string
    {
        return $this->defaultSortOrder;
    }

    public function setDefaultSortOrder(string $defaultSortOrder): self
    {
        $this->defaultSortOrder = $defaultSortOrder;

        return $this;
    }

    public function getDefaultSortDirection(): ?string
    {
        return $this->defaultSortDirection;
    }

    public function setDefaultSortDirection(string $defaultSortDirection): self
    {
        $this->defaultSortDirection = $defaultSortDirection;

        return $this;
    }

    public function getListDateLimitDays(): ?int
    {
        return $this->listDateLimitDays;
    }

    public function setListDateLimitDays(int $listDateLimitDays): self
    {
        $this->listDateLimitDays = $listDateLimitDays;

        return $this;
    }

    public function getRequirePrefix(): ?bool
    {
        return $this->requirePrefix;
    }

    public function setRequirePrefix(bool $requirePrefix): self
    {
        $this->requirePrefix = $requirePrefix;

        return $this;
    }

    public function getAllowedWatchNotifications(): ?string
    {
        return $this->allowedWatchNotifications;
    }

    public function setAllowedWatchNotifications(string $allowedWatchNotifications): self
    {
        $this->allowedWatchNotifications = $allowedWatchNotifications;

        return $this;
    }

    public function getMinTags(): ?int
    {
        return $this->minTags;
    }

    public function setMinTags(int $minTags): self
    {
        $this->minTags = $minTags;

        return $this;
    }


}
