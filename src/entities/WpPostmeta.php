<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * WpPostmeta
 *
 * @Table(name="wp_postmeta", indexes={@Index(name="post_id", columns={"post_id"}), @Index(name="meta_key", columns={"meta_key"})})
 * @Entity
 */
class WpPostmeta
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
     * @Column(name="post_id", type="bigint", nullable=false)
     */
    private $postId = '0';

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
