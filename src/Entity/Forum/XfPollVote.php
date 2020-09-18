<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfPollVote
 *
 * @ORM\Table(name="xf_poll_vote", indexes={@ORM\Index(name="poll_id_user_id", columns={"poll_id", "user_id"}), @ORM\Index(name="user_id", columns={"user_id"})})
 * @ORM\Entity
 */
class XfPollVote
{
    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $userId;

    /**
     * @var int
     *
     * @ORM\Column(name="poll_response_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $pollResponseId;

    /**
     * @var int
     *
     * @ORM\Column(name="poll_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $pollId;

    /**
     * @var int
     *
     * @ORM\Column(name="vote_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $voteDate = '0';

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function getPollResponseId(): ?int
    {
        return $this->pollResponseId;
    }

    public function getPollId(): ?int
    {
        return $this->pollId;
    }

    public function setPollId(int $pollId): self
    {
        $this->pollId = $pollId;

        return $this;
    }

    public function getVoteDate(): ?int
    {
        return $this->voteDate;
    }

    public function setVoteDate(int $voteDate): self
    {
        $this->voteDate = $voteDate;

        return $this;
    }


}
