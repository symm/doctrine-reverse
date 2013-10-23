<?php

namespace Symm\Wordpress\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * WpCommentmeta
 *
 * @Table(name="wp_commentmeta", indexes={@Index(name="comment_id", columns={"comment_id"}), @Index(name="meta_key", columns={"meta_key"})})
 * @Entity
 */
class WpCommentmeta
{
    /**
     * @var integer
     *
     * @Column(name="meta_id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $metaId;

    /**
     * @var integer
     *
     * @Column(name="comment_id", type="bigint", nullable=false)
     */
    private $commentId = '0';

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
