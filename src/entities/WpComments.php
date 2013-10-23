<?php



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
