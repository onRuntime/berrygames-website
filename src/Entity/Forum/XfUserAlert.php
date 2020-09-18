<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfUserAlert
 *
 * @ORM\Table(name="xf_user_alert", indexes={@ORM\Index(name="viewDate_eventDate", columns={"view_date", "event_date"}), @ORM\Index(name="user_id", columns={"user_id"}), @ORM\Index(name="alertedUserId_eventDate", columns={"alerted_user_id", "event_date"}), @ORM\Index(name="contentType_contentId", columns={"content_type", "content_id"})})
 * @ORM\Entity
 */
class XfUserAlert
{
    /**
     * @var int
     *
     * @ORM\Column(name="alert_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $alertId;

    /**
     * @var int
     *
     * @ORM\Column(name="alerted_user_id", type="integer", nullable=false, options={"unsigned"=true,"comment"="User being alerted"})
     */
    private $alertedUserId;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false, options={"unsigned"=true,"comment"="User who did the action that caused the alert"})
     */
    private $userId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=50, nullable=false, options={"comment"="Corresponds to user_id"})
     */
    private $username = '';

    /**
     * @var binary
     *
     * @ORM\Column(name="content_type", type="binary", nullable=false, options={"comment"="eg: trophy"})
     */
    private $contentType;

    /**
     * @var int
     *
     * @ORM\Column(name="content_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $contentId = '0';

    /**
     * @var binary
     *
     * @ORM\Column(name="action", type="binary", nullable=false, options={"comment"="eg: edit"})
     */
    private $action;

    /**
     * @var int
     *
     * @ORM\Column(name="event_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $eventDate;

    /**
     * @var int
     *
     * @ORM\Column(name="view_date", type="integer", nullable=false, options={"unsigned"=true,"comment"="Time when this was viewed by the alerted user"})
     */
    private $viewDate = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="extra_data", type="blob", length=16777215, nullable=false, options={"comment"="Serialized. Stores any extra data relevant to the alert"})
     */
    private $extraData;

    /**
     * @var binary
     *
     * @ORM\Column(name="depends_on_addon_id", type="binary", nullable=false)
     */
    private $dependsOnAddonId = '';

    public function getAlertId(): ?int
    {
        return $this->alertId;
    }

    public function getAlertedUserId(): ?int
    {
        return $this->alertedUserId;
    }

    public function setAlertedUserId(int $alertedUserId): self
    {
        $this->alertedUserId = $alertedUserId;

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

    public function getAction()
    {
        return $this->action;
    }

    public function setAction($action): self
    {
        $this->action = $action;

        return $this;
    }

    public function getEventDate(): ?int
    {
        return $this->eventDate;
    }

    public function setEventDate(int $eventDate): self
    {
        $this->eventDate = $eventDate;

        return $this;
    }

    public function getViewDate(): ?int
    {
        return $this->viewDate;
    }

    public function setViewDate(int $viewDate): self
    {
        $this->viewDate = $viewDate;

        return $this;
    }

    public function getExtraData()
    {
        return $this->extraData;
    }

    public function setExtraData($extraData): self
    {
        $this->extraData = $extraData;

        return $this;
    }

    public function getDependsOnAddonId()
    {
        return $this->dependsOnAddonId;
    }

    public function setDependsOnAddonId($dependsOnAddonId): self
    {
        $this->dependsOnAddonId = $dependsOnAddonId;

        return $this;
    }


}
