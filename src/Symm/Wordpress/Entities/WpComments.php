<?php

namespace Symm\Wordpress\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * WpComments
 *
 * @Table(name="wp_comments", indexes={@Index(name="comment_post_ID", columns={"comment_post_ID"}), @Index(name="comment_approved_date_gmt", columns={"comment_approved", "comment_date_gmt"}), @Index(name="comment_date_gmt", columns={"comment_date_gmt"}), @Index(name="comment_parent", columns={"comment_parent"})})
 * @Entity
 */
class WpComments
{
    /**
     * @var integer
     *
     * @Column(name="comment_ID", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $commentId;

    /**
     * Set CommentContent
     *
     * @param string $commentContent
     *
     * @return WpComments
     */
    public function setCommentContent($commentContent)
    {
        $this->commentContent = $commentContent;
        return $this;
    }

    /**
     * Get CommentContent
     *
     * @return string
     */
    public function getCommentContent()
    {
        return $this->commentContent;
    }

    /**
     * Set CommentAgent
     *
     * @param string $commentAgent
     *
     * @return WpComments
     */
    public function setCommentAgent($commentAgent)
    {
        $this->commentAgent = $commentAgent;
        return $this;
    }

    /**
     * Get CommentAgent
     *
     * @return string
     */
    public function getCommentAgent()
    {
        return $this->commentAgent;
    }

    /**
     * Set CommentApproved
     *
     * @param string $commentApproved
     *
     * @return WpComments
     */
    public function setCommentApproved($commentApproved)
    {
        $this->commentApproved = $commentApproved;
        return $this;
    }

    /**
     * Get CommentApproved
     *
     * @return string
     */
    public function getCommentApproved()
    {
        return $this->commentApproved;
    }

    /**
     * Set CommentAuthor
     *
     * @param string $commentAuthor
     *
     * @return WpComments
     */
    public function setCommentAuthor($commentAuthor)
    {
        $this->commentAuthor = $commentAuthor;
        return $this;
    }

    /**
     * Get CommentAuthor
     *
     * @return string
     */
    public function getCommentAuthor()
    {
        return $this->commentAuthor;
    }

    /**
     * Set CommentAuthorEmail
     *
     * @param string $commentAuthorEmail
     *
     * @return WpComments
     */
    public function setCommentAuthorEmail($commentAuthorEmail)
    {
        $this->commentAuthorEmail = $commentAuthorEmail;
        return $this;
    }

    /**
     * Get CommentAuthorEmail
     *
     * @return string
     */
    public function getCommentAuthorEmail()
    {
        return $this->commentAuthorEmail;
    }

    /**
     * Set CommentAuthorIp
     *
     * @param string $commentAuthorIp
     *
     * @return WpComments
     */
    public function setCommentAuthorIp($commentAuthorIp)
    {
        $this->commentAuthorIp = $commentAuthorIp;
        return $this;
    }

    /**
     * Get CommentAuthorIp
     *
     * @return string
     */
    public function getCommentAuthorIp()
    {
        return $this->commentAuthorIp;
    }

    /**
     * Set CommentAuthorUrl
     *
     * @param string $commentAuthorUrl
     *
     * @return WpComments
     */
    public function setCommentAuthorUrl($commentAuthorUrl)
    {
        $this->commentAuthorUrl = $commentAuthorUrl;
        return $this;
    }

    /**
     * Get CommentAuthorUrl
     *
     * @return string
     */
    public function getCommentAuthorUrl()
    {
        return $this->commentAuthorUrl;
    }

    /**
     * Set CommentDate
     *
     * @param \DateTime $commentDate
     *
     * @return WpComments
     */
    public function setCommentDate($commentDate)
    {
        $this->commentDate = $commentDate;
        return $this;
    }

    /**
     * Get CommentDate
     *
     * @return \DateTime
     */
    public function getCommentDate()
    {
        return $this->commentDate;
    }

    /**
     * Set CommentDateGmt
     *
     * @param \DateTime $commentDateGmt
     *
     * @return WpComments
     */
    public function setCommentDateGmt($commentDateGmt)
    {
        $this->commentDateGmt = $commentDateGmt;
        return $this;
    }

    /**
     * Get CommentDateGmt
     *
     * @return \DateTime
     */
    public function getCommentDateGmt()
    {
        return $this->commentDateGmt;
    }

    /**
     * Set CommentId
     *
     * @param int $commentId
     *
     * @return WpComments
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
     * Set CommentKarma
     *
     * @param int $commentKarma
     *
     * @return WpComments
     */
    public function setCommentKarma($commentKarma)
    {
        $this->commentKarma = $commentKarma;
        return $this;
    }

    /**
     * Get CommentKarma
     *
     * @return int
     */
    public function getCommentKarma()
    {
        return $this->commentKarma;
    }

    /**
     * Set CommentParent
     *
     * @param int $commentParent
     *
     * @return WpComments
     */
    public function setCommentParent($commentParent)
    {
        $this->commentParent = $commentParent;
        return $this;
    }

    /**
     * Get CommentParent
     *
     * @return int
     */
    public function getCommentParent()
    {
        return $this->commentParent;
    }

    /**
     * Set CommentPostId
     *
     * @param int $commentPostId
     *
     * @return WpComments
     */
    public function setCommentPostId($commentPostId)
    {
        $this->commentPostId = $commentPostId;
        return $this;
    }

    /**
     * Get CommentPostId
     *
     * @return int
     */
    public function getCommentPostId()
    {
        return $this->commentPostId;
    }

    /**
     * Set CommentType
     *
     * @param string $commentType
     *
     * @return WpComments
     */
    public function setCommentType($commentType)
    {
        $this->commentType = $commentType;
        return $this;
    }

    /**
     * Get CommentType
     *
     * @return string
     */
    public function getCommentType()
    {
        return $this->commentType;
    }

    /**
     * Set UserId
     *
     * @param int $userId
     *
     * @return WpComments
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * Get UserId
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @var integer
     *
     * @Column(name="comment_post_ID", type="bigint", nullable=false)
     */
    private $commentPostId = '0';

    /**
     * @var string
     *
     * @Column(name="comment_author", type="text", nullable=false)
     */
    private $commentAuthor;

    /**
     * @var string
     *
     * @Column(name="comment_author_email", type="string", length=100, nullable=false)
     */
    private $commentAuthorEmail = '';

    /**
     * @var string
     *
     * @Column(name="comment_author_url", type="string", length=200, nullable=false)
     */
    private $commentAuthorUrl = '';

    /**
     * @var string
     *
     * @Column(name="comment_author_IP", type="string", length=100, nullable=false)
     */
    private $commentAuthorIp = '';

    /**
     * @var \DateTime
     *
     * @Column(name="comment_date", type="datetime", nullable=false)
     */
    private $commentDate = '0000-00-00 00:00:00';

    /**
     * @var \DateTime
     *
     * @Column(name="comment_date_gmt", type="datetime", nullable=false)
     */
    private $commentDateGmt = '0000-00-00 00:00:00';

    /**
     * @var string
     *
     * @Column(name="comment_content", type="text", nullable=false)
     */
    private $commentContent;

    /**
     * @var integer
     *
     * @Column(name="comment_karma", type="integer", nullable=false)
     */
    private $commentKarma = '0';

    /**
     * @var string
     *
     * @Column(name="comment_approved", type="string", length=20, nullable=false)
     */
    private $commentApproved = '1';

    /**
     * @var string
     *
     * @Column(name="comment_agent", type="string", length=255, nullable=false)
     */
    private $commentAgent = '';

    /**
     * @var string
     *
     * @Column(name="comment_type", type="string", length=20, nullable=false)
     */
    private $commentType = '';

    /**
     * @var integer
     *
     * @Column(name="comment_parent", type="bigint", nullable=false)
     */
    private $commentParent = '0';

    /**
     * @var integer
     *
     * @Column(name="user_id", type="bigint", nullable=false)
     */
    private $userId = '0';


}
