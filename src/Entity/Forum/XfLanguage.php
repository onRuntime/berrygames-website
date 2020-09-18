<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfLanguage
 *
 * @ORM\Table(name="xf_language")
 * @ORM\Entity
 */
class XfLanguage
{
    /**
     * @var int
     *
     * @ORM\Column(name="language_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $languageId;

    /**
     * @var int
     *
     * @ORM\Column(name="parent_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $parentId;

    /**
     * @var binary
     *
     * @ORM\Column(name="parent_list", type="binary", nullable=false)
     */
    private $parentList;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=50, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="date_format", type="string", length=30, nullable=false)
     */
    private $dateFormat;

    /**
     * @var string
     *
     * @ORM\Column(name="time_format", type="string", length=15, nullable=false)
     */
    private $timeFormat;

    /**
     * @var string
     *
     * @ORM\Column(name="currency_format", type="string", length=30, nullable=false)
     */
    private $currencyFormat;

    /**
     * @var string
     *
     * @ORM\Column(name="decimal_point", type="string", length=1, nullable=false)
     */
    private $decimalPoint;

    /**
     * @var string
     *
     * @ORM\Column(name="thousands_separator", type="string", length=1, nullable=false)
     */
    private $thousandsSeparator;

    /**
     * @var string
     *
     * @ORM\Column(name="phrase_cache", type="blob", length=16777215, nullable=false)
     */
    private $phraseCache;

    /**
     * @var string
     *
     * @ORM\Column(name="language_code", type="string", length=25, nullable=false)
     */
    private $languageCode = '';

    /**
     * @var string
     *
     * @ORM\Column(name="text_direction", type="string", length=0, nullable=false, options={"default"="LTR"})
     */
    private $textDirection = 'LTR';

    /**
     * @var bool
     *
     * @ORM\Column(name="week_start", type="boolean", nullable=false, options={"comment"="Week start day. 0 = Sunday, 6 = Saturday"})
     */
    private $weekStart = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="label_separator", type="string", length=15, nullable=false, options={"default"=":"})
     */
    private $labelSeparator = ':';

    /**
     * @var string
     *
     * @ORM\Column(name="comma_separator", type="string", length=15, nullable=false, options={"default"=", "})
     */
    private $commaSeparator = ', ';

    /**
     * @var string
     *
     * @ORM\Column(name="ellipsis", type="string", length=15, nullable=false, options={"default"="..."})
     */
    private $ellipsis = '...';

    /**
     * @var string
     *
     * @ORM\Column(name="parenthesis_open", type="string", length=15, nullable=false, options={"default"="("})
     */
    private $parenthesisOpen = '(';

    /**
     * @var string
     *
     * @ORM\Column(name="parenthesis_close", type="string", length=15, nullable=false, options={"default"=")"})
     */
    private $parenthesisClose = ')';

    public function getLanguageId(): ?int
    {
        return $this->languageId;
    }

    public function getParentId(): ?int
    {
        return $this->parentId;
    }

    public function setParentId(int $parentId): self
    {
        $this->parentId = $parentId;

        return $this;
    }

    public function getParentList()
    {
        return $this->parentList;
    }

    public function setParentList($parentList): self
    {
        $this->parentList = $parentList;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getDateFormat(): ?string
    {
        return $this->dateFormat;
    }

    public function setDateFormat(string $dateFormat): self
    {
        $this->dateFormat = $dateFormat;

        return $this;
    }

    public function getTimeFormat(): ?string
    {
        return $this->timeFormat;
    }

    public function setTimeFormat(string $timeFormat): self
    {
        $this->timeFormat = $timeFormat;

        return $this;
    }

    public function getCurrencyFormat(): ?string
    {
        return $this->currencyFormat;
    }

    public function setCurrencyFormat(string $currencyFormat): self
    {
        $this->currencyFormat = $currencyFormat;

        return $this;
    }

    public function getDecimalPoint(): ?string
    {
        return $this->decimalPoint;
    }

    public function setDecimalPoint(string $decimalPoint): self
    {
        $this->decimalPoint = $decimalPoint;

        return $this;
    }

    public function getThousandsSeparator(): ?string
    {
        return $this->thousandsSeparator;
    }

    public function setThousandsSeparator(string $thousandsSeparator): self
    {
        $this->thousandsSeparator = $thousandsSeparator;

        return $this;
    }

    public function getPhraseCache()
    {
        return $this->phraseCache;
    }

    public function setPhraseCache($phraseCache): self
    {
        $this->phraseCache = $phraseCache;

        return $this;
    }

    public function getLanguageCode(): ?string
    {
        return $this->languageCode;
    }

    public function setLanguageCode(string $languageCode): self
    {
        $this->languageCode = $languageCode;

        return $this;
    }

    public function getTextDirection(): ?string
    {
        return $this->textDirection;
    }

    public function setTextDirection(string $textDirection): self
    {
        $this->textDirection = $textDirection;

        return $this;
    }

    public function getWeekStart(): ?bool
    {
        return $this->weekStart;
    }

    public function setWeekStart(bool $weekStart): self
    {
        $this->weekStart = $weekStart;

        return $this;
    }

    public function getLabelSeparator(): ?string
    {
        return $this->labelSeparator;
    }

    public function setLabelSeparator(string $labelSeparator): self
    {
        $this->labelSeparator = $labelSeparator;

        return $this;
    }

    public function getCommaSeparator(): ?string
    {
        return $this->commaSeparator;
    }

    public function setCommaSeparator(string $commaSeparator): self
    {
        $this->commaSeparator = $commaSeparator;

        return $this;
    }

    public function getEllipsis(): ?string
    {
        return $this->ellipsis;
    }

    public function setEllipsis(string $ellipsis): self
    {
        $this->ellipsis = $ellipsis;

        return $this;
    }

    public function getParenthesisOpen(): ?string
    {
        return $this->parenthesisOpen;
    }

    public function setParenthesisOpen(string $parenthesisOpen): self
    {
        $this->parenthesisOpen = $parenthesisOpen;

        return $this;
    }

    public function getParenthesisClose(): ?string
    {
        return $this->parenthesisClose;
    }

    public function setParenthesisClose(string $parenthesisClose): self
    {
        $this->parenthesisClose = $parenthesisClose;

        return $this;
    }


}
