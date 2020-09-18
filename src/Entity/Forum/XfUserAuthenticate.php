<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfUserAuthenticate
 *
 * @ORM\Table(name="xf_user_authenticate")
 * @ORM\Entity
 */
class XfUserAuthenticate
{
    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="scheme_class", type="string", length=100, nullable=false)
     */
    private $schemeClass;

    /**
     * @var string
     *
     * @ORM\Column(name="data", type="blob", length=16777215, nullable=false)
     */
    private $data;

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function getSchemeClass(): ?string
    {
        return $this->schemeClass;
    }

    public function setSchemeClass(string $schemeClass): self
    {
        $this->schemeClass = $schemeClass;

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


}
