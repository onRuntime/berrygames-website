<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfReportComment
 *
 * @ORM\Table(name="xf_report_comment", indexes={@ORM\Index(name="report_id_date", columns={"report_id", "comment_date"}), @ORM\Index(name="user_id", columns={"user_id"})})
 * @ORM\Entity
 */
class XfReportComment
{
    /**
     * @var int
     *
     * @ORM\Column(name="report_comment_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $reportCommentId;

    /**
     * @var int
     *
     * @ORM\Column(name="report_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $reportId;

    /**
     * @var int
     *
     * @ORM\Column(name="comment_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $commentDate;

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
     * @var string
     *
     * @ORM\Column(name="message", type="text", length=16777215, nullable=false)
     */
    private $message;

    /**
     * @var string
     *
     * @ORM\Column(name="state_change", type="string", length=0, nullable=false)
     */
    private $stateChange = '';

    /**
     * @var bool
     *
     * @ORM\Column(name="is_report", type="boolean", nullable=false, options={"default"="1"})
     */
    private $isReport = '1';

    public function getReportCommentId(): ?int
    {
        return $this->reportCommentId;
    }

    public function getReportId(): ?int
    {
        return $this->reportId;
    }

    public function setReportId(int $reportId): self
    {
        $this->reportId = $reportId;

        return $this;
    }

    public function getCommentDate(): ?int
    {
        return $this->commentDate;
    }

    public function setCommentDate(int $commentDate): self
    {
        $this->commentDate = $commentDate;

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

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }

    public function getStateChange(): ?string
    {
        return $this->stateChange;
    }

    public function setStateChange(string $stateChange): self
    {
        $this->stateChange = $stateChange;

        return $this;
    }

    public function getIsReport(): ?bool
    {
        return $this->isReport;
    }

    public function setIsReport(bool $isReport): self
    {
        $this->isReport = $isReport;

        return $this;
    }


}
