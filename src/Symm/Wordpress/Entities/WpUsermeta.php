<?php

namespace Symm\Wordpress\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * WpUsermeta
 *
 * @Table(name="wp_usermeta", indexes={@Index(name="user_id", columns={"user_id"}), @Index(name="meta_key", columns={"meta_key"})})
 * @Entity
 */
class WpUsermeta
{
    /**
     * @var integer
     *
     * @Column(name="umeta_id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $umetaId;

    /**
     * @var integer
     *
     * @Column(name="user_id", type="bigint", nullable=false)
     */
    private $userId = '0';

    /**
     * @var string
     *
     * @Column(name="meta_key", type="string", length=255, nullable=true)
     */
    private $metaKey;

    /**
     * @var string
     *
     * @Column(name="meta_value", type="text", nullable=true)
     */
    private $metaValue;


}
