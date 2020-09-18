<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfPoll
 *
 * @ORM\Table(name="xf_poll", uniqueConstraints={@ORM\UniqueConstraint(name="content_type_content_id", columns={"content_type", "content_id"})})
 * @ORM\Entity
 */
class XfPoll
{
    /**
     * @var int
     *
     * @ORM\Column(name="poll_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pollId;

    /**
     * @var binary
     *
     * @ORM\Column(name="content_type", type="binary", nullable=false)
     */
    private $contentType;

    /**
     * @var int
     *
     * @ORM\Column(name="content_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $contentId;

    /**
     * @var string
     *
     * @ORM\Column(name="question", type="string", length=100, nullable=false)
     */
    private $question;

    /**
     * @var string
     *
     * @ORM\Column(name="responses", type="blob", length=16777215, nullable=false)
     */
    private $responses;

    /**
     * @var int
     *
     * @ORM\Column(name="voter_count", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $voterCount = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="public_votes", type="boolean", nullable=false)
     */
    private $publicVotes = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="max_votes", type="boolean", nullable=false, options={"default"="1"})
     */
    private $maxVotes = '1';

    /**
     * @var int
     *
     * @ORM\Column(name="close_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $closeDate = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="change_vote", type="boolean", nullable=false)
     */
    private $changeVote = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="view_results_unvoted", type="boolean", nullable=false, options={"default"="1"})
     */
    private $viewResultsUnvoted = '1';

    public function getPollId(): ?int
    {
        return $this->pollId;
    }

    public function getContentType()
    {
        return $this->contentType;
    }

    public function setContentType($contentType): self
    {
        $this->contentType = $contentType;

        return $this;
    }

    public function getContentId(): ?int
    {
        return $this->contentId;
    }

    public function setContentId(int $contentId): self
    {
        $this->contentId = $contentId;

        return $this;
    }

    public function getQuestion(): ?string
    {
        return $this->question;
    }

    public function setQuestion(string $question): self
    {
        $this->question = $question;

        return $this;
    }

    public function getResponses()
    {
        return $this->responses;
    }

    public function setResponses($responses): self
    {
        $this->responses = $responses;

        return $this;
    }

    public function getVoterCount(): ?int
    {
        return $this->voterCount;
    }

    public function setVoterCount(int $voterCount): self
    {
        $this->voterCount = $voterCount;

        return $this;
    }

    public function getPublicVotes(): ?bool
    {
        return $this->publicVotes;
    }

    public function setPublicVotes(bool $publicVotes): self
    {
        $this->publicVotes = $publicVotes;

        return $this;
    }

    public function getMaxVotes(): ?bool
    {
        return $this->maxVotes;
    }

    public function setMaxVotes(bool $maxVotes): self
    {
        $this->maxVotes = $maxVotes;

        return $this;
    }

    public function getCloseDate(): ?int
    {
        return $this->closeDate;
    }

    public function setCloseDate(int $closeDate): self
    {
        $this->closeDate = $closeDate;

        return $this;
    }

    public function getChangeVote(): ?bool
    {
        return $this->changeVote;
    }

    public function setChangeVote(bool $changeVote): self
    {
        $this->changeVote = $changeVote;

        return $this;
    }

    public function getViewResultsUnvoted(): ?bool
    {
        return $this->viewResultsUnvoted;
    }

    public function setViewResultsUnvoted(bool $viewResultsUnvoted): self
    {
        $this->viewResultsUnvoted = $viewResultsUnvoted;

        return $this;
    }


}
