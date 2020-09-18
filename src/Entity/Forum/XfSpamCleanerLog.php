<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfSpamCleanerLog
 *
 * @ORM\Table(name="xf_spam_cleaner_log", indexes={@ORM\Index(name="user_id", columns={"user_id"}), @ORM\Index(name="application_date", columns={"application_date"}), @ORM\Index(name="applying_user_id", columns={"applying_user_id"})})
 * @ORM\Entity
 */
class XfSpamCleanerLog
{
    /**
     * @var int
     *
     * @ORM\Column(name="spam_cleaner_log_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $spamCleanerLogId;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $userId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=50, nullable=false)
     */
    private $username = '';

    /**
     * @var int
     *
     * @ORM\Column(name="applying_user_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $applyingUserId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="applying_username", type="string", length=50, nullable=false)
     */
    private $applyingUsername = '';

    /**
     * @var int
     *
     * @ORM\Column(name="application_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $applicationDate = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="data", type="blob", length=16777215, nullable=false, options={"comment"="Serialized array containing log data for undo purposes"})
     */
    private $data;

    /**
     * @var int
     *
     * @ORM\Column(name="restored_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $restoredDate = '0';

    public function getSpamCleanerLogId(): ?int
    {
        return $this->spamCleanerLogId;
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

    public function getApplyingUserId(): ?int
    {
        return $this->applyingUserId;
    }

    public function setApplyingUserId(int $applyingUserId): self
    {
        $this->applyingUserId = $applyingUserId;

        return $this;
    }

    public function getApplyingUsername(): ?string
    {
        return $this->applyingUsername;
    }

    public function setApplyingUsername(string $applyingUsername): self
    {
        $this->applyingUsername = $applyingUsername;

        return $this;
    }

    public function getApplicationDate(): ?int
    {
        return $this->applicationDate;
    }

    public function setApplicationDate(int $applicationDate): self
    {
        $this->applicationDate = $applicationDate;

        return $this;
    }

    public function getData()
    {
        return $this->data;
    }

    public function setData($data): self
    {
        $this->data = $data;

        return $this;
    }

    public function getRestoredDate(): ?int
    {
        return $this->restoredDate;
    }

    public function setRestoredDate(int $restoredDate): self
    {
        $this->restoredDate = $restoredDate;

        return $this;
    }


}
