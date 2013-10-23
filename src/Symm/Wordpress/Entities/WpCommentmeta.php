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
     * Set CommentId
     *
     * @param int $commentId
     *
     * @return WpCommentmeta
     */
    public function setCommentId($commentId)
    {
        $this->commentId = $commentId;
        return $this;
    }

    /**
     * Get CommentId
     *
     * @return int
     */
    public function getCommentId()
    {
        return $this->commentId;
    }

    /**
     * Set MetaId
     *
     * @param int $metaId
     *
     * @return WpCommentmeta
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
     * @return WpCommentmeta
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
     * @return WpCommentmeta
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
