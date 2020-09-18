<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfPage
 *
 * @ORM\Table(name="xf_page")
 * @ORM\Entity
 */
class XfPage
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
     * @ORM\Column(name="publish_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $publishDate;

    /**
     * @var int
     *
     * @ORM\Column(name="modified_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $modifiedDate = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="view_count", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $viewCount = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="log_visits", type="boolean", nullable=false)
     */
    private $logVisits = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="list_siblings", type="boolean", nullable=false)
     */
    private $listSiblings = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="list_children", type="boolean", nullable=false)
     */
    private $listChildren = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="callback_class", type="string", length=100, nullable=false)
     */
    private $callbackClass = '';

    /**
     * @var string
     *
     * @ORM\Column(name="callback_method", type="string", length=75, nullable=false)
     */
    private $callbackMethod = '';

    /**
     * @var bool
     *
     * @ORM\Column(name="advanced_mode", type="boolean", nullable=false)
     */
    private $advancedMode = '0';

    public function getNodeId(): ?int
    {
        return $this->nodeId;
    }

    public function getPublishDate(): ?int
    {
        return $this->publishDate;
    }

    public function setPublishDate(int $publishDate): self
    {
        $this->publishDate = $publishDate;

        return $this;
    }

    public function getModifiedDate(): ?int
    {
        return $this->modifiedDate;
    }

    public function setModifiedDate(int $modifiedDate): self
    {
        $this->modifiedDate = $modifiedDate;

        return $this;
    }

    public function getViewCount(): ?int
    {
        return $this->viewCount;
    }

    public function setViewCount(int $viewCount): self
    {
        $this->viewCount = $viewCount;

        return $this;
    }

    public function getLogVisits(): ?bool
    {
        return $this->logVisits;
    }

    public function setLogVisits(bool $logVisits): self
    {
        $this->logVisits = $logVisits;

        return $this;
    }

    public function getListSiblings(): ?bool
    {
        return $this->listSiblings;
    }

    public function setListSiblings(bool $listSiblings): self
    {
        $this->listSiblings = $listSiblings;

        return $this;
    }

    public function getListChildren(): ?bool
    {
        return $this->listChildren;
    }

    public function setListChildren(bool $listChildren): self
    {
        $this->listChildren = $listChildren;

        return $this;
    }

    public function getCallbackClass(): ?string
    {
        return $this->callbackClass;
    }

    public function setCallbackClass(string $callbackClass): self
    {
        $this->callbackClass = $callbackClass;

        return $this;
    }

    public function getCallbackMethod(): ?string
    {
        return $this->callbackMethod;
    }

    public function setCallbackMethod(string $callbackMethod): self
    {
        $this->callbackMethod = $callbackMethod;

        return $this;
    }

    public function getAdvancedMode(): ?bool
    {
        return $this->advancedMode;
    }

    public function setAdvancedMode(bool $advancedMode): self
    {
        $this->advancedMode = $advancedMode;

        return $this;
    }


}
