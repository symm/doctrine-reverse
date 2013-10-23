<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * WpLinks
 *
 * @Table(name="wp_links", indexes={@Index(name="link_visible", columns={"link_visible"})})
 * @Entity
 */
class WpLinks
{
    /**
     * @var integer
     *
     * @Column(name="link_id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $linkId;

    /**
     * @var string
     *
     * @Column(name="link_url", type="string", length=255, nullable=false)
     */
    private $linkUrl = '';

    /**
     * @var string
     *
     * @Column(name="link_name", type="string", length=255, nullable=false)
     */
    private $linkName = '';

    /**
     * @var string
     *
     * @Column(name="link_image", type="string", length=255, nullable=false)
     */
    private $linkImage = '';

    /**
     * @var string
     *
     * @Column(name="link_target", type="string", length=25, nullable=false)
     */
    private $linkTarget = '';

    /**
     * @var string
     *
     * @Column(name="link_description", type="string", length=255, nullable=false)
     */
    private $linkDescription = '';

    /**
     * @var string
     *
     * @Column(name="link_visible", type="string", length=20, nullable=false)
     */
    private $linkVisible = 'Y';

    /**
     * @var integer
     *
     * @Column(name="link_owner", type="bigint", nullable=false)
     */
    private $linkOwner = '1';

    /**
     * @var integer
     *
     * @Column(name="link_rating", type="integer", nullable=false)
     */
    private $linkRating = '0';

    /**
     * @var \DateTime
     *
     * @Column(name="link_updated", type="datetime", nullable=false)
     */
    private $linkUpdated = '0000-00-00 00:00:00';

    /**
     * @var string
     *
     * @Column(name="link_rel", type="string", length=255, nullable=false)
     */
    private $linkRel = '';

    /**
     * @var string
     *
     * @Column(name="link_notes", type="text", nullable=false)
     */
    private $linkNotes;

    /**
     * @var string
     *
     * @Column(name="link_rss", type="string", length=255, nullable=false)
     */
    private $linkRss = '';


}
