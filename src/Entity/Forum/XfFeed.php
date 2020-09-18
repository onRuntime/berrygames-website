<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfFeed
 *
 * @ORM\Table(name="xf_feed", indexes={@ORM\Index(name="active", columns={"active"})})
 * @ORM\Entity
 */
class XfFeed
{
    /**
     * @var int
     *
     * @ORM\Column(name="feed_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $feedId;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=250, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=2083, nullable=false)
     */
    private $url;

    /**
     * @var int
     *
     * @ORM\Column(name="frequency", type="integer", nullable=false, options={"default"="1800","unsigned"=true})
     */
    private $frequency = '1800';

    /**
     * @var int
     *
     * @ORM\Column(name="node_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $nodeId;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $userId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="prefix_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $prefixId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="title_template", type="string", length=250, nullable=false)
     */
    private $titleTemplate = '';

    /**
     * @var string
     *
     * @ORM\Column(name="message_template", type="text", length=16777215, nullable=false)
     */
    private $messageTemplate;

    /**
     * @var bool
     *
     * @ORM\Column(name="discussion_visible", type="boolean", nullable=false, options={"default"="1"})
     */
    private $discussionVisible = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="discussion_open", type="boolean", nullable=false, options={"default"="1"})
     */
    private $discussionOpen = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="discussion_sticky", type="boolean", nullable=false)
     */
    private $discussionSticky = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="last_fetch", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $lastFetch = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="active", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $active = '0';

    public function getFeedId(): ?int
    {
        return $this->feedId;
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

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function getFrequency(): ?int
    {
        return $this->frequency;
    }

    public function setFrequency(int $frequency): self
    {
        $this->frequency = $frequency;

        return $this;
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

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

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

    public function getTitleTemplate(): ?string
    {
        return $this->titleTemplate;
    }

    public function setTitleTemplate(string $titleTemplate): self
    {
        $this->titleTemplate = $titleTemplate;

        return $this;
    }

    public function getMessageTemplate(): ?string
    {
        return $this->messageTemplate;
    }

    public function setMessageTemplate(string $messageTemplate): self
    {
        $this->messageTemplate = $messageTemplate;

        return $this;
    }

    public function getDiscussionVisible(): ?bool
    {
        return $this->discussionVisible;
    }

    public function setDiscussionVisible(bool $discussionVisible): self
    {
        $this->discussionVisible = $discussionVisible;

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

    public function getDiscussionSticky(): ?bool
    {
        return $this->discussionSticky;
    }

    public function setDiscussionSticky(bool $discussionSticky): self
    {
        $this->discussionSticky = $discussionSticky;

        return $this;
    }

    public function getLastFetch(): ?int
    {
        return $this->lastFetch;
    }

    public function setLastFetch(int $lastFetch): self
    {
        $this->lastFetch = $lastFetch;

        return $this;
    }

    public function getActive(): ?int
    {
        return $this->active;
    }

    public function setActive(int $active): self
    {
        $this->active = $active;

        return $this;
    }


}
