<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="sessions")
 */
class Session extends AbstractEntity {
    /**
     * @ORM\Id
     * @ORM\Column(type="varchar", name="id")
     */
    /*
    ORM\GeneratedValue strategy types:
    http://doctrine-orm.readthedocs.org/en/latest/reference/basic-mapping.html#identifier-generation-strategies
    */
    protected $_id;

    /**
     * @ORM\Column(type="integer")
     */
    protected $user_id;

    /**
     * @ORM\Column(type="integer")
     */
    protected $time;

    /**
     * @ORM\Column(type="text")
     */
    protected $data;
}
