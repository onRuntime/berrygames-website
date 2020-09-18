<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfPollResponse
 *
 * @ORM\Table(name="xf_poll_response", indexes={@ORM\Index(name="poll_id_response_id", columns={"poll_id", "poll_response_id"})})
 * @ORM\Entity
 */
class XfPollResponse
{
    /**
     * @var int
     *
     * @ORM\Column(name="poll_response_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pollResponseId;

    /**
     * @var int
     *
     * @ORM\Column(name="poll_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $pollId;

    /**
     * @var string
     *
     * @ORM\Column(name="response", type="string", length=100, nullable=false)
     */
    private $response;

    /**
     * @var int
     *
     * @ORM\Column(name="response_vote_count", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $responseVoteCount = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="voters", type="blob", length=16777215, nullable=false)
     */
    private $voters;

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

    public function getResponse(): ?string
    {
        return $this->response;
    }

    public function setResponse(string $response): self
    {
        $this->response = $response;

        return $this;
    }

    public function getResponseVoteCount(): ?int
    {
        return $this->responseVoteCount;
    }

    public function setResponseVoteCount(int $responseVoteCount): self
    {
        $this->responseVoteCount = $responseVoteCount;

        return $this;
    }

    public function getVoters()
    {
        return $this->voters;
    }

    public function setVoters($voters): self
    {
        $this->voters = $voters;

        return $this;
    }


}
