<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfBbCode
 *
 * @ORM\Table(name="xf_bb_code")
 * @ORM\Entity
 */
class XfBbCode
{
    /**
     * @var binary
     *
     * @ORM\Column(name="bb_code_id", type="binary", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $bbCodeId;

    /**
     * @var string
     *
     * @ORM\Column(name="bb_code_mode", type="string", length=25, nullable=false)
     */
    private $bbCodeMode;

    /**
     * @var string
     *
     * @ORM\Column(name="has_option", type="string", length=25, nullable=false)
     */
    private $hasOption;

    /**
     * @var string
     *
     * @ORM\Column(name="replace_html", type="text", length=65535, nullable=false)
     */
    private $replaceHtml;

    /**
     * @var string
     *
     * @ORM\Column(name="replace_html_email", type="text", length=65535, nullable=false)
     */
    private $replaceHtmlEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="replace_text", type="text", length=65535, nullable=false)
     */
    private $replaceText;

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
     * @var string
     *
     * @ORM\Column(name="option_regex", type="text", length=65535, nullable=false)
     */
    private $optionRegex;

    /**
     * @var bool
     *
     * @ORM\Column(name="trim_lines_after", type="boolean", nullable=false)
     */
    private $trimLinesAfter = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="plain_children", type="boolean", nullable=false)
     */
    private $plainChildren = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="disable_smilies", type="boolean", nullable=false)
     */
    private $disableSmilies = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="disable_nl2br", type="boolean", nullable=false)
     */
    private $disableNl2br = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="disable_autolink", type="boolean", nullable=false)
     */
    private $disableAutolink = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="allow_empty", type="boolean", nullable=false)
     */
    private $allowEmpty = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="allow_signature", type="boolean", nullable=false, options={"default"="1"})
     */
    private $allowSignature = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="editor_icon_type", type="string", length=25, nullable=false)
     */
    private $editorIconType = '';

    /**
     * @var string
     *
     * @ORM\Column(name="editor_icon_value", type="string", length=150, nullable=false)
     */
    private $editorIconValue = '';

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

    public function getBbCodeId()
    {
        return $this->bbCodeId;
    }

    public function getBbCodeMode(): ?string
    {
        return $this->bbCodeMode;
    }

    public function setBbCodeMode(string $bbCodeMode): self
    {
        $this->bbCodeMode = $bbCodeMode;

        return $this;
    }

    public function getHasOption(): ?string
    {
        return $this->hasOption;
    }

    public function setHasOption(string $hasOption): self
    {
        $this->hasOption = $hasOption;

        return $this;
    }

    public function getReplaceHtml(): ?string
    {
        return $this->replaceHtml;
    }

    public function setReplaceHtml(string $replaceHtml): self
    {
        $this->replaceHtml = $replaceHtml;

        return $this;
    }

    public function getReplaceHtmlEmail(): ?string
    {
        return $this->replaceHtmlEmail;
    }

    public function setReplaceHtmlEmail(string $replaceHtmlEmail): self
    {
        $this->replaceHtmlEmail = $replaceHtmlEmail;

        return $this;
    }

    public function getReplaceText(): ?string
    {
        return $this->replaceText;
    }

    public function setReplaceText(string $replaceText): self
    {
        $this->replaceText = $replaceText;

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

    public function getOptionRegex(): ?string
    {
        return $this->optionRegex;
    }

    public function setOptionRegex(string $optionRegex): self
    {
        $this->optionRegex = $optionRegex;

        return $this;
    }

    public function getTrimLinesAfter(): ?bool
    {
        return $this->trimLinesAfter;
    }

    public function setTrimLinesAfter(bool $trimLinesAfter): self
    {
        $this->trimLinesAfter = $trimLinesAfter;

        return $this;
    }

    public function getPlainChildren(): ?bool
    {
        return $this->plainChildren;
    }

    public function setPlainChildren(bool $plainChildren): self
    {
        $this->plainChildren = $plainChildren;

        return $this;
    }

    public function getDisableSmilies(): ?bool
    {
        return $this->disableSmilies;
    }

    public function setDisableSmilies(bool $disableSmilies): self
    {
        $this->disableSmilies = $disableSmilies;

        return $this;
    }

    public function getDisableNl2br(): ?bool
    {
        return $this->disableNl2br;
    }

    public function setDisableNl2br(bool $disableNl2br): self
    {
        $this->disableNl2br = $disableNl2br;

        return $this;
    }

    public function getDisableAutolink(): ?bool
    {
        return $this->disableAutolink;
    }

    public function setDisableAutolink(bool $disableAutolink): self
    {
        $this->disableAutolink = $disableAutolink;

        return $this;
    }

    public function getAllowEmpty(): ?bool
    {
        return $this->allowEmpty;
    }

    public function setAllowEmpty(bool $allowEmpty): self
    {
        $this->allowEmpty = $allowEmpty;

        return $this;
    }

    public function getAllowSignature(): ?bool
    {
        return $this->allowSignature;
    }

    public function setAllowSignature(bool $allowSignature): self
    {
        $this->allowSignature = $allowSignature;

        return $this;
    }

    public function getEditorIconType(): ?string
    {
        return $this->editorIconType;
    }

    public function setEditorIconType(string $editorIconType): self
    {
        $this->editorIconType = $editorIconType;

        return $this;
    }

    public function getEditorIconValue(): ?string
    {
        return $this->editorIconValue;
    }

    public function setEditorIconValue(string $editorIconValue): self
    {
        $this->editorIconValue = $editorIconValue;

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
