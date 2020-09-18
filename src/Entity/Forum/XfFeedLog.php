<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfFeedLog
 *
 * @ORM\Table(name="xf_feed_log")
 * @ORM\Entity
 */
class XfFeedLog
{
    /**
     * @var int
     *
     * @ORM\Column(name="feed_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $feedId;

    /**
     * @var binary
     *
     * @ORM\Column(name="unique_id", type="binary", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $uniqueId;

    /**
     * @var string
     *
     * @ORM\Column(name="hash", type="string", length=32, nullable=false, options={"fixed"=true,"comment"="MD5(title + content)"})
     */
    private $hash;

    /**
     * @var int
     *
     * @ORM\Column(name="thread_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $threadId;

    public function getFeedId(): ?int
    {
        return $this->feedId;
    }

    public function getUniqueId()
    {
        return $this->uniqueId;
    }

    public function getHash(): ?string
    {
        return $this->hash;
    }

    public function setHash(string $hash): self
    {
        $this->hash = $hash;

        return $this;
    }

    public function getThreadId(): ?int
    {
        return $this->threadId;
    }

    public function setThreadId(int $threadId): self
    {
        $this->threadId = $threadId;

        return $this;
    }


}
