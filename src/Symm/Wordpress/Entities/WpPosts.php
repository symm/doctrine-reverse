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
     * Set CommentCount
     *
     * @param int $commentCount
     *
     * @return WpPosts
     */
    public function setCommentCount($commentCount)
    {
        $this->commentCount = $commentCount;
        return $this;
    }

    /**
     * Get CommentCount
     *
     * @return int
     */
    public function getCommentCount()
    {
        return $this->commentCount;
    }

    /**
     * Set CommentStatus
     *
     * @param string $commentStatus
     *
     * @return WpPosts
     */
    public function setCommentStatus($commentStatus)
    {
        $this->commentStatus = $commentStatus;
        return $this;
    }

    /**
     * Get CommentStatus
     *
     * @return string
     */
    public function getCommentStatus()
    {
        return $this->commentStatus;
    }

    /**
     * Set Guid
     *
     * @param string $guid
     *
     * @return WpPosts
     */
    public function setGuid($guid)
    {
        $this->guid = $guid;
        return $this;
    }

    /**
     * Get Guid
     *
     * @return string
     */
    public function getGuid()
    {
        return $this->guid;
    }

    /**
     * Set Id
     *
     * @param int $id
     *
     * @return WpPosts
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Get Id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set MenuOrder
     *
     * @param int $menuOrder
     *
     * @return WpPosts
     */
    public function setMenuOrder($menuOrder)
    {
        $this->menuOrder = $menuOrder;
        return $this;
    }

    /**
     * Get MenuOrder
     *
     * @return int
     */
    public function getMenuOrder()
    {
        return $this->menuOrder;
    }

    /**
     * Set PingStatus
     *
     * @param string $pingStatus
     *
     * @return WpPosts
     */
    public function setPingStatus($pingStatus)
    {
        $this->pingStatus = $pingStatus;
        return $this;
    }

    /**
     * Get PingStatus
     *
     * @return string
     */
    public function getPingStatus()
    {
        return $this->pingStatus;
    }

    /**
     * Set Pinged
     *
     * @param string $pinged
     *
     * @return WpPosts
     */
    public function setPinged($pinged)
    {
        $this->pinged = $pinged;
        return $this;
    }

    /**
     * Get Pinged
     *
     * @return string
     */
    public function getPinged()
    {
        return $this->pinged;
    }

    /**
     * Set PostAuthor
     *
     * @param int $postAuthor
     *
     * @return WpPosts
     */
    public function setPostAuthor($postAuthor)
    {
        $this->postAuthor = $postAuthor;
        return $this;
    }

    /**
     * Get PostAuthor
     *
     * @return int
     */
    public function getPostAuthor()
    {
        return $this->postAuthor;
    }

    /**
     * Set PostContent
     *
     * @param string $postContent
     *
     * @return WpPosts
     */
    public function setPostContent($postContent)
    {
        $this->postContent = $postContent;
        return $this;
    }

    /**
     * Get PostContent
     *
     * @return string
     */
    public function getPostContent()
    {
        return $this->postContent;
    }

    /**
     * Set PostContentFiltered
     *
     * @param string $postContentFiltered
     *
     * @return WpPosts
     */
    public function setPostContentFiltered($postContentFiltered)
    {
        $this->postContentFiltered = $postContentFiltered;
        return $this;
    }

    /**
     * Get PostContentFiltered
     *
     * @return string
     */
    public function getPostContentFiltered()
    {
        return $this->postContentFiltered;
    }

    /**
     * Set PostDate
     *
     * @param \DateTime $postDate
     *
     * @return WpPosts
     */
    public function setPostDate($postDate)
    {
        $this->postDate = $postDate;
        return $this;
    }

    /**
     * Get PostDate
     *
     * @return \DateTime
     */
    public function getPostDate()
    {
        return $this->postDate;
    }

    /**
     * Set PostDateGmt
     *
     * @param \DateTime $postDateGmt
     *
     * @return WpPosts
     */
    public function setPostDateGmt($postDateGmt)
    {
        $this->postDateGmt = $postDateGmt;
        return $this;
    }

    /**
     * Get PostDateGmt
     *
     * @return \DateTime
     */
    public function getPostDateGmt()
    {
        return $this->postDateGmt;
    }

    /**
     * Set PostExcerpt
     *
     * @param string $postExcerpt
     *
     * @return WpPosts
     */
    public function setPostExcerpt($postExcerpt)
    {
        $this->postExcerpt = $postExcerpt;
        return $this;
    }

    /**
     * Get PostExcerpt
     *
     * @return string
     */
    public function getPostExcerpt()
    {
        return $this->postExcerpt;
    }

    /**
     * Set PostMimeType
     *
     * @param string $postMimeType
     *
     * @return WpPosts
     */
    public function setPostMimeType($postMimeType)
    {
        $this->postMimeType = $postMimeType;
        return $this;
    }

    /**
     * Get PostMimeType
     *
     * @return string
     */
    public function getPostMimeType()
    {
        return $this->postMimeType;
    }

    /**
     * Set PostModified
     *
     * @param \DateTime $postModified
     *
     * @return WpPosts
     */
    public function setPostModified($postModified)
    {
        $this->postModified = $postModified;
        return $this;
    }

    /**
     * Get PostModified
     *
     * @return \DateTime
     */
    public function getPostModified()
    {
        return $this->postModified;
    }

    /**
     * Set PostModifiedGmt
     *
     * @param \DateTime $postModifiedGmt
     *
     * @return WpPosts
     */
    public function setPostModifiedGmt($postModifiedGmt)
    {
        $this->postModifiedGmt = $postModifiedGmt;
        return $this;
    }

    /**
     * Get PostModifiedGmt
     *
     * @return \DateTime
     */
    public function getPostModifiedGmt()
    {
        return $this->postModifiedGmt;
    }

    /**
     * Set PostName
     *
     * @param string $postName
     *
     * @return WpPosts
     */
    public function setPostName($postName)
    {
        $this->postName = $postName;
        return $this;
    }

    /**
     * Get PostName
     *
     * @return string
     */
    public function getPostName()
    {
        return $this->postName;
    }

    /**
     * Set PostParent
     *
     * @param int $postParent
     *
     * @return WpPosts
     */
    public function setPostParent($postParent)
    {
        $this->postParent = $postParent;
        return $this;
    }

    /**
     * Get PostParent
     *
     * @return int
     */
    public function getPostParent()
    {
        return $this->postParent;
    }

    /**
     * Set PostPassword
     *
     * @param string $postPassword
     *
     * @return WpPosts
     */
    public function setPostPassword($postPassword)
    {
        $this->postPassword = $postPassword;
        return $this;
    }

    /**
     * Get PostPassword
     *
     * @return string
     */
    public function getPostPassword()
    {
        return $this->postPassword;
    }

    /**
     * Set PostStatus
     *
     * @param string $postStatus
     *
     * @return WpPosts
     */
    public function setPostStatus($postStatus)
    {
        $this->postStatus = $postStatus;
        return $this;
    }

    /**
     * Get PostStatus
     *
     * @return string
     */
    public function getPostStatus()
    {
        return $this->postStatus;
    }

    /**
     * Set PostTitle
     *
     * @param string $postTitle
     *
     * @return WpPosts
     */
    public function setPostTitle($postTitle)
    {
        $this->postTitle = $postTitle;
        return $this;
    }

    /**
     * Get PostTitle
     *
     * @return string
     */
    public function getPostTitle()
    {
        return $this->postTitle;
    }

    /**
     * Set PostType
     *
     * @param string $postType
     *
     * @return WpPosts
     */
    public function setPostType($postType)
    {
        $this->postType = $postType;
        return $this;
    }

    /**
     * Get PostType
     *
     * @return string
     */
    public function getPostType()
    {
        return $this->postType;
    }

    /**
     * Set ToPing
     *
     * @param string $toPing
     *
     * @return WpPosts
     */
    public function setToPing($toPing)
    {
        $this->toPing = $toPing;
        return $this;
    }

    /**
     * Get ToPing
     *
     * @return string
     */
    public function getToPing()
    {
        return $this->toPing;
    }

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
