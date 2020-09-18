<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfReport
 *
 * @ORM\Table(name="xf_report", uniqueConstraints={@ORM\UniqueConstraint(name="content_type_content_id", columns={"content_type", "content_id"})}, indexes={@ORM\Index(name="last_modified_date", columns={"last_modified_date"}), @ORM\Index(name="assigned_user_id_state", columns={"assigned_user_id", "report_state"}), @ORM\Index(name="content_user_id_modified", columns={"content_user_id", "last_modified_date"}), @ORM\Index(name="report_state", columns={"report_state"})})
 * @ORM\Entity
 */
class XfReport
{
    /**
     * @var int
     *
     * @ORM\Column(name="report_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $reportId;

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
     * @var int
     *
     * @ORM\Column(name="content_user_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $contentUserId;

    /**
     * @var string
     *
     * @ORM\Column(name="content_info", type="blob", length=16777215, nullable=false)
     */
    private $contentInfo;

    /**
     * @var int
     *
     * @ORM\Column(name="first_report_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $firstReportDate;

    /**
     * @var string
     *
     * @ORM\Column(name="report_state", type="string", length=0, nullable=false)
     */
    private $reportState;

    /**
     * @var int
     *
     * @ORM\Column(name="assigned_user_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $assignedUserId;

    /**
     * @var int
     *
     * @ORM\Column(name="comment_count", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $commentCount = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="last_modified_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $lastModifiedDate;

    /**
     * @var int
     *
     * @ORM\Column(name="last_modified_user_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $lastModifiedUserId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="last_modified_username", type="string", length=50, nullable=false)
     */
    private $lastModifiedUsername = '';

    /**
     * @var int
     *
     * @ORM\Column(name="report_count", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $reportCount = '0';

    public function getReportId(): ?int
    {
        return $this->reportId;
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

    public function getContentUserId(): ?int
    {
        return $this->contentUserId;
    }

    public function setContentUserId(int $contentUserId): self
    {
        $this->contentUserId = $contentUserId;

        return $this;
    }

    public function getContentInfo()
    {
        return $this->contentInfo;
    }

    public function setContentInfo($contentInfo): self
    {
        $this->contentInfo = $contentInfo;

        return $this;
    }

    public function getFirstReportDate(): ?int
    {
        return $this->firstReportDate;
    }

    public function setFirstReportDate(int $firstReportDate): self
    {
        $this->firstReportDate = $firstReportDate;

        return $this;
    }

    public function getReportState(): ?string
    {
        return $this->reportState;
    }

    public function setReportState(string $reportState): self
    {
        $this->reportState = $reportState;

        return $this;
    }

    public function getAssignedUserId(): ?int
    {
        return $this->assignedUserId;
    }

    public function setAssignedUserId(int $assignedUserId): self
    {
        $this->assignedUserId = $assignedUserId;

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

    public function getLastModifiedDate(): ?int
    {
        return $this->lastModifiedDate;
    }

    public function setLastModifiedDate(int $lastModifiedDate): self
    {
        $this->lastModifiedDate = $lastModifiedDate;

        return $this;
    }

    public function getLastModifiedUserId(): ?int
    {
        return $this->lastModifiedUserId;
    }

    public function setLastModifiedUserId(int $lastModifiedUserId): self
    {
        $this->lastModifiedUserId = $lastModifiedUserId;

        return $this;
    }

    public function getLastModifiedUsername(): ?string
    {
        return $this->lastModifiedUsername;
    }

    public function setLastModifiedUsername(string $lastModifiedUsername): self
    {
        $this->lastModifiedUsername = $lastModifiedUsername;

        return $this;
    }

    public function getReportCount(): ?int
    {
        return $this->reportCount;
    }

    public function setReportCount(int $reportCount): self
    {
        $this->reportCount = $reportCount;

        return $this;
    }


}
