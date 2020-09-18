<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfBbCodeMediaSite
 *
 * @ORM\Table(name="xf_bb_code_media_site")
 * @ORM\Entity
 */
class XfBbCodeMediaSite
{
    /**
     * @var binary
     *
     * @ORM\Column(name="media_site_id", type="binary", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $mediaSiteId;

    /**
     * @var string
     *
     * @ORM\Column(name="site_title", type="string", length=50, nullable=false)
     */
    private $siteTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="site_url", type="string", length=100, nullable=false)
     */
    private $siteUrl = '';

    /**
     * @var string
     *
     * @ORM\Column(name="match_urls", type="text", length=65535, nullable=false)
     */
    private $matchUrls;

    /**
     * @var bool
     *
     * @ORM\Column(name="match_is_regex", type="boolean", nullable=false, options={"comment"="If 1, match_urls will be treated as regular expressions rather than simple URL matches."})
     */
    private $matchIsRegex = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="oembed_enabled", type="boolean", nullable=false)
     */
    private $oembedEnabled = '0';

    /**
     * @var binary
     *
     * @ORM\Column(name="oembed_api_endpoint", type="binary", nullable=false)
     */
    private $oembedApiEndpoint = '';

    /**
     * @var binary
     *
     * @ORM\Column(name="oembed_url_scheme", type="binary", nullable=false)
     */
    private $oembedUrlScheme = '';

    /**
     * @var bool
     *
     * @ORM\Column(name="oembed_retain_scripts", type="boolean", nullable=false)
     */
    private $oembedRetainScripts = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="match_callback_class", type="string", length=100, nullable=false)
     */
    private $matchCallbackClass = '';

    /**
     * @var string
     *
     * @ORM\Column(name="match_callback_method", type="string", length=75, nullable=false)
     */
    private $matchCallbackMethod = '';

    /**
     * @var string
     *
     * @ORM\Column(name="embed_html_callback_class", type="string", length=100, nullable=false)
     */
    private $embedHtmlCallbackClass = '';

    /**
     * @var string
     *
     * @ORM\Column(name="embed_html_callback_method", type="string", length=75, nullable=false)
     */
    private $embedHtmlCallbackMethod = '';

    /**
     * @var bool
     *
     * @ORM\Column(name="supported", type="boolean", nullable=false, options={"default"="1","comment"="If 0, this media type will not be listed as available, but will still be usable."})
     */
    private $supported = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $active = '1';

    /**
     * @var binary
     *
     * @ORM\Column(name="addon_id", type="binary", nullable=false)
     */
    private $addonId = '';

    public function getMediaSiteId()
    {
        return $this->mediaSiteId;
    }

    public function getSiteTitle(): ?string
    {
        return $this->siteTitle;
    }

    public function setSiteTitle(string $siteTitle): self
    {
        $this->siteTitle = $siteTitle;

        return $this;
    }

    public function getSiteUrl(): ?string
    {
        return $this->siteUrl;
    }

    public function setSiteUrl(string $siteUrl): self
    {
        $this->siteUrl = $siteUrl;

        return $this;
    }

    public function getMatchUrls(): ?string
    {
        return $this->matchUrls;
    }

    public function setMatchUrls(string $matchUrls): self
    {
        $this->matchUrls = $matchUrls;

        return $this;
    }

    public function getMatchIsRegex(): ?bool
    {
        return $this->matchIsRegex;
    }

    public function setMatchIsRegex(bool $matchIsRegex): self
    {
        $this->matchIsRegex = $matchIsRegex;

        return $this;
    }

    public function getOembedEnabled(): ?bool
    {
        return $this->oembedEnabled;
    }

    public function setOembedEnabled(bool $oembedEnabled): self
    {
        $this->oembedEnabled = $oembedEnabled;

        return $this;
    }

    public function getOembedApiEndpoint()
    {
        return $this->oembedApiEndpoint;
    }

    public function setOembedApiEndpoint($oembedApiEndpoint): self
    {
        $this->oembedApiEndpoint = $oembedApiEndpoint;

        return $this;
    }

    public function getOembedUrlScheme()
    {
        return $this->oembedUrlScheme;
    }

    public function setOembedUrlScheme($oembedUrlScheme): self
    {
        $this->oembedUrlScheme = $oembedUrlScheme;

        return $this;
    }

    public function getOembedRetainScripts(): ?bool
    {
        return $this->oembedRetainScripts;
    }

    public function setOembedRetainScripts(bool $oembedRetainScripts): self
    {
        $this->oembedRetainScripts = $oembedRetainScripts;

        return $this;
    }

    public function getMatchCallbackClass(): ?string
    {
        return $this->matchCallbackClass;
    }

    public function setMatchCallbackClass(string $matchCallbackClass): self
    {
        $this->matchCallbackClass = $matchCallbackClass;

        return $this;
    }

    public function getMatchCallbackMethod(): ?string
    {
        return $this->matchCallbackMethod;
    }

    public function setMatchCallbackMethod(string $matchCallbackMethod): self
    {
        $this->matchCallbackMethod = $matchCallbackMethod;

        return $this;
    }

    public function getEmbedHtmlCallbackClass(): ?string
    {
        return $this->embedHtmlCallbackClass;
    }

    public function setEmbedHtmlCallbackClass(string $embedHtmlCallbackClass): self
    {
        $this->embedHtmlCallbackClass = $embedHtmlCallbackClass;

        return $this;
    }

    public function getEmbedHtmlCallbackMethod(): ?string
    {
        return $this->embedHtmlCallbackMethod;
    }

    public function setEmbedHtmlCallbackMethod(string $embedHtmlCallbackMethod): self
    {
        $this->embedHtmlCallbackMethod = $embedHtmlCallbackMethod;

        return $this;
    }

    public function getSupported(): ?bool
    {
        return $this->supported;
    }

    public function setSupported(bool $supported): self
    {
        $this->supported = $supported;

        return $this;
    }

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function getAddonId()
    {
        return $this->addonId;
    }

    public function setAddonId($addonId): self
    {
        $this->addonId = $addonId;

        return $this;
    }


}
