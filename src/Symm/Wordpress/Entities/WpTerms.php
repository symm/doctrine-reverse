<?php

namespace Symm\Wordpress\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * WpTerms
 *
 * @Table(name="wp_terms", uniqueConstraints={@UniqueConstraint(name="slug", columns={"slug"})}, indexes={@Index(name="name", columns={"name"})})
 * @Entity
 */
class WpTerms
{
    /**
     * @var integer
     *
     * @Column(name="term_id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $termId;

    /**
     * Set Name
     *
     * @param string $name
     *
     * @return WpTerms
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Get Name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set Slug
     *
     * @param string $slug
     *
     * @return WpTerms
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
        return $this;
    }

    /**
     * Get Slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set TermGroup
     *
     * @param int $termGroup
     *
     * @return WpTerms
     */
    public function setTermGroup($termGroup)
    {
        $this->termGroup = $termGroup;
        return $this;
    }

    /**
     * Get TermGroup
     *
     * @return int
     */
    public function getTermGroup()
    {
        return $this->termGroup;
    }

    /**
     * Set TermId
     *
     * @param int $termId
     *
     * @return WpTerms
     */
    public function setTermId($termId)
    {
        $this->termId = $termId;
        return $this;
    }

    /**
     * Get TermId
     *
     * @return int
     */
    public function getTermId()
    {
        return $this->termId;
    }

    /**
     * @var string
     *
     * @Column(name="name", type="string", length=200, nullable=false)
     */
    private $name = '';

    /**
     * @var string
     *
     * @Column(name="slug", type="string", length=200, nullable=false)
     */
    private $slug = '';

    /**
     * @var integer
     *
     * @Column(name="term_group", type="bigint", nullable=false)
     */
    private $termGroup = '0';


}
