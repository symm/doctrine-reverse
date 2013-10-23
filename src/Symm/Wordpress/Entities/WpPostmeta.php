<?php

namespace Symm\Wordpress\Entities;

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
     * Set MetaId
     *
     * @param int $metaId
     *
     * @return WpPostmeta
     */
    public function setMetaId($metaId)
    {
        $this->metaId = $metaId;
        return $this;
    }

    /**
     * Get MetaId
     *
     * @return int
     */
    public function getMetaId()
    {
        return $this->metaId;
    }

    /**
     * Set MetaKey
     *
     * @param string $metaKey
     *
     * @return WpPostmeta
     */
    public function setMetaKey($metaKey)
    {
        $this->metaKey = $metaKey;
        return $this;
    }

    /**
     * Get MetaKey
     *
     * @return string
     */
    public function getMetaKey()
    {
        return $this->metaKey;
    }

    /**
     * Set MetaValue
     *
     * @param string $metaValue
     *
     * @return WpPostmeta
     */
    public function setMetaValue($metaValue)
    {
        $this->metaValue = $metaValue;
        return $this;
    }

    /**
     * Get MetaValue
     *
     * @return string
     */
    public function getMetaValue()
    {
        return $this->metaValue;
    }

    /**
     * Set PostId
     *
     * @param int $postId
     *
     * @return WpPostmeta
     */
    public function setPostId($postId)
    {
        $this->postId = $postId;
        return $this;
    }

    /**
     * Get PostId
     *
     * @return int
     */
    public function getPostId()
    {
        return $this->postId;
    }

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
