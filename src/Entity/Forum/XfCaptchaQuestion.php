<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfCaptchaQuestion
 *
 * @ORM\Table(name="xf_captcha_question", indexes={@ORM\Index(name="active", columns={"active"})})
 * @ORM\Entity
 */
class XfCaptchaQuestion
{
    /**
     * @var int
     *
     * @ORM\Column(name="captcha_question_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $captchaQuestionId;

    /**
     * @var string
     *
     * @ORM\Column(name="question", type="string", length=250, nullable=false)
     */
    private $question;

    /**
     * @var string
     *
     * @ORM\Column(name="answers", type="blob", length=65535, nullable=false, options={"comment"="Serialized array of possible correct answers."})
     */
    private $answers;

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $active = '1';

    public function getCaptchaQuestionId(): ?int
    {
        return $this->captchaQuestionId;
    }

    public function getQuestion(): ?string
    {
        return $this->question;
    }

    public function setQuestion(string $question): self
    {
        $this->question = $question;

        return $this;
    }

    public function getAnswers()
    {
        return $this->answers;
    }

    public function setAnswers($answers): self
    {
        $this->answers = $answers;

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


}
