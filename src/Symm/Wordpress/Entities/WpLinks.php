<?php

namespace Symm\Wordpress\Entities;

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
     * Set LinkDescription
     *
     * @param string $linkDescription
     *
     * @return WpLinks
     */
    public function setLinkDescription($linkDescription)
    {
        $this->linkDescription = $linkDescription;
        return $this;
    }

    /**
     * Get LinkDescription
     *
     * @return string
     */
    public function getLinkDescription()
    {
        return $this->linkDescription;
    }

    /**
     * Set LinkId
     *
     * @param int $linkId
     *
     * @return WpLinks
     */
    public function setLinkId($linkId)
    {
        $this->linkId = $linkId;
        return $this;
    }

    /**
     * Get LinkId
     *
     * @return int
     */
    public function getLinkId()
    {
        return $this->linkId;
    }

    /**
     * Set LinkImage
     *
     * @param string $linkImage
     *
     * @return WpLinks
     */
    public function setLinkImage($linkImage)
    {
        $this->linkImage = $linkImage;
        return $this;
    }

    /**
     * Get LinkImage
     *
     * @return string
     */
    public function getLinkImage()
    {
        return $this->linkImage;
    }

    /**
     * Set LinkName
     *
     * @param string $linkName
     *
     * @return WpLinks
     */
    public function setLinkName($linkName)
    {
        $this->linkName = $linkName;
        return $this;
    }

    /**
     * Get LinkName
     *
     * @return string
     */
    public function getLinkName()
    {
        return $this->linkName;
    }

    /**
     * Set LinkNotes
     *
     * @param string $linkNotes
     *
     * @return WpLinks
     */
    public function setLinkNotes($linkNotes)
    {
        $this->linkNotes = $linkNotes;
        return $this;
    }

    /**
     * Get LinkNotes
     *
     * @return string
     */
    public function getLinkNotes()
    {
        return $this->linkNotes;
    }

    /**
     * Set LinkOwner
     *
     * @param int $linkOwner
     *
     * @return WpLinks
     */
    public function setLinkOwner($linkOwner)
    {
        $this->linkOwner = $linkOwner;
        return $this;
    }

    /**
     * Get LinkOwner
     *
     * @return int
     */
    public function getLinkOwner()
    {
        return $this->linkOwner;
    }

    /**
     * Set LinkRating
     *
     * @param int $linkRating
     *
     * @return WpLinks
     */
    public function setLinkRating($linkRating)
    {
        $this->linkRating = $linkRating;
        return $this;
    }

    /**
     * Get LinkRating
     *
     * @return int
     */
    public function getLinkRating()
    {
        return $this->linkRating;
    }

    /**
     * Set LinkRel
     *
     * @param string $linkRel
     *
     * @return WpLinks
     */
    public function setLinkRel($linkRel)
    {
        $this->linkRel = $linkRel;
        return $this;
    }

    /**
     * Get LinkRel
     *
     * @return string
     */
    public function getLinkRel()
    {
        return $this->linkRel;
    }

    /**
     * Set LinkRss
     *
     * @param string $linkRss
     *
     * @return WpLinks
     */
    public function setLinkRss($linkRss)
    {
        $this->linkRss = $linkRss;
        return $this;
    }

    /**
     * Get LinkRss
     *
     * @return string
     */
    public function getLinkRss()
    {
        return $this->linkRss;
    }

    /**
     * Set LinkTarget
     *
     * @param string $linkTarget
     *
     * @return WpLinks
     */
    public function setLinkTarget($linkTarget)
    {
        $this->linkTarget = $linkTarget;
        return $this;
    }

    /**
     * Get LinkTarget
     *
     * @return string
     */
    public function getLinkTarget()
    {
        return $this->linkTarget;
    }

    /**
     * Set LinkUpdated
     *
     * @param \DateTime $linkUpdated
     *
     * @return WpLinks
     */
    public function setLinkUpdated($linkUpdated)
    {
        $this->linkUpdated = $linkUpdated;
        return $this;
    }

    /**
     * Get LinkUpdated
     *
     * @return \DateTime
     */
    public function getLinkUpdated()
    {
        return $this->linkUpdated;
    }

    /**
     * Set LinkUrl
     *
     * @param string $linkUrl
     *
     * @return WpLinks
     */
    public function setLinkUrl($linkUrl)
    {
        $this->linkUrl = $linkUrl;
        return $this;
    }

    /**
     * Get LinkUrl
     *
     * @return string
     */
    public function getLinkUrl()
    {
        return $this->linkUrl;
    }

    /**
     * Set LinkVisible
     *
     * @param string $linkVisible
     *
     * @return WpLinks
     */
    public function setLinkVisible($linkVisible)
    {
        $this->linkVisible = $linkVisible;
        return $this;
    }

    /**
     * Get LinkVisible
     *
     * @return string
     */
    public function getLinkVisible()
    {
        return $this->linkVisible;
    }

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
