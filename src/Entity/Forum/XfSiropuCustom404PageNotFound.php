<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfSiropuCustom404PageNotFound
 *
 * @ORM\Table(name="xf_siropu_custom_404_page_not_found", indexes={@ORM\Index(name="url", columns={"url"}), @ORM\Index(name="entry_date", columns={"entry_date"})})
 * @ORM\Entity
 */
class XfSiropuCustom404PageNotFound
{
    /**
     * @var int
     *
     * @ORM\Column(name="entry_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $entryId;

    /**
     * @var int
     *
     * @ORM\Column(name="entry_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $entryDate = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="text", length=65535, nullable=false)
     */
    private $url;

    /**
     * @var int
     *
     * @ORM\Column(name="last_view_date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $lastViewDate = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="redirect_url", type="text", length=65535, nullable=false)
     */
    private $redirectUrl;

    /**
     * @var int
     *
     * @ORM\Column(name="view_count", type="integer", nullable=false, options={"default"="1","unsigned"=true})
     */
    private $viewCount = '1';

    public function getEntryId(): ?int
    {
        return $this->entryId;
    }

    public function getEntryDate(): ?int
    {
        return $this->entryDate;
    }

    public function setEntryDate(int $entryDate): self
    {
        $this->entryDate = $entryDate;

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

    public function getLastViewDate(): ?int
    {
        return $this->lastViewDate;
    }

    public function setLastViewDate(int $lastViewDate): self
    {
        $this->lastViewDate = $lastViewDate;

        return $this;
    }

    public function getRedirectUrl(): ?string
    {
        return $this->redirectUrl;
    }

    public function setRedirectUrl(string $redirectUrl): self
    {
        $this->redirectUrl = $redirectUrl;

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


}
