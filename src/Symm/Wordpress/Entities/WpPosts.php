<?php

namespace Symm\Wordpress\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * WpPosts
 *
 * @Table(name="wp_posts", indexes={@Index(name="post_name", columns={"post_name"}), @Index(name="type_status_date", columns={"post_type", "post_status", "post_date", "ID"}), @Index(name="post_parent", columns={"post_parent"}), @Index(name="post_author", columns={"post_author"})})
 * @Entity
 */
class WpPosts
{
    /**
     * @var integer
     *
     * @Column(name="ID", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @Column(name="post_author", type="bigint", nullable=false)
     */
    private $postAuthor = '0';

    /**
     * @var \DateTime
     *
     * @Column(name="post_date", type="datetime", nullable=false)
     */
    private $postDate = '0000-00-00 00:00:00';

    /**
     * @var \DateTime
     *
     * @Column(name="post_date_gmt", type="datetime", nullable=false)
     */
    private $postDateGmt = '0000-00-00 00:00:00';

    /**
     * @var string
     *
     * @Column(name="post_content", type="text", nullable=false)
     */
    private $postContent;

    /**
     * @var string
     *
     * @Column(name="post_title", type="text", nullable=false)
     */
    private $postTitle;

    /**
     * @var string
     *
     * @Column(name="post_excerpt", type="text", nullable=false)
     */
    private $postExcerpt;

    /**
     * @var string
     *
     * @Column(name="post_status", type="string", length=20, nullable=false)
     */
    private $postStatus = 'publish';

    /**
     * @var string
     *
     * @Column(name="comment_status", type="string", length=20, nullable=false)
     */
    private $commentStatus = 'open';

    /**
     * @var string
     *
     * @Column(name="ping_status", type="string", length=20, nullable=false)
     */
    private $pingStatus = 'open';

    /**
     * @var string
     *
     * @Column(name="post_password", type="string", length=20, nullable=false)
     */
    private $postPassword = '';

    /**
     * @var string
     *
     * @Column(name="post_name", type="string", length=200, nullable=false)
     */
    private $postName = '';

    /**
     * @var string
     *
     * @Column(name="to_ping", type="text", nullable=false)
     */
    private $toPing;

    /**
     * @var string
     *
     * @Column(name="pinged", type="text", nullable=false)
     */
    private $pinged;

    /**
     * @var \DateTime
     *
     * @Column(name="post_modified", type="datetime", nullable=false)
     */
    private $postModified = '0000-00-00 00:00:00';

    /**
     * @var \DateTime
     *
     * @Column(name="post_modified_gmt", type="datetime", nullable=false)
     */
    private $postModifiedGmt = '0000-00-00 00:00:00';

    /**
     * @var string
     *
     * @Column(name="post_content_filtered", type="text", nullable=false)
     */
    private $postContentFiltered;

    /**
     * @var integer
     *
     * @Column(name="post_parent", type="bigint", nullable=false)
     */
    private $postParent = '0';

    /**
     * @var string
     *
     * @Column(name="guid", type="string", length=255, nullable=false)
     */
    private $guid = '';

    /**
     * @var integer
     *
     * @Column(name="menu_order", type="integer", nullable=false)
     */
    private $menuOrder = '0';

    /**
     * @var string
     *
     * @Column(name="post_type", type="string", length=20, nullable=false)
     */
    private $postType = 'post';

    /**
     * @var string
     *
     * @Column(name="post_mime_type", type="string", length=100, nullable=false)
     */
    private $postMimeType = '';

    /**
     * @var integer
     *
     * @Column(name="comment_count", type="bigint", nullable=false)
     */
    private $commentCount = '0';


}
