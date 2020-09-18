<?php

namespace App\Entity\Forum;

use Doctrine\ORM\Mapping as ORM;

/**
 * XfUserAlertOptout
 *
 * @ORM\Table(name="xf_user_alert_optout")
 * @ORM\Entity
 */
class XfUserAlertOptout
{
    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $userId;

    /**
     * @var binary
     *
     * @ORM\Column(name="alert", type="binary", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $alert;

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function getAlert()
    {
        return $this->alert;
    }


}
