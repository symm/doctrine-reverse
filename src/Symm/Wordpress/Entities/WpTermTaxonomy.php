<?php

namespace Symm\Wordpress\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * WpTermTaxonomy
 *
 * @Table(name="wp_term_taxonomy", uniqueConstraints={@UniqueConstraint(name="term_id_taxonomy", columns={"term_id", "taxonomy"})}, indexes={@Index(name="taxonomy", columns={"taxonomy"})})
 * @Entity
 */
class WpTermTaxonomy
{
    /**
     * @var integer
     *
     * @Column(name="term_taxonomy_id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $termTaxonomyId;

    /**
     * Set Count
     *
     * @param int $count
     *
     * @return WpTermTaxonomy
     */
    public function setCount($count)
    {
        $this->count = $count;
        return $this;
    }

    /**
     * Get Count
     *
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Set Description
     *
     * @param string $description
     *
     * @return WpTermTaxonomy
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Get Description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set Parent
     *
     * @param int $parent
     *
     * @return WpTermTaxonomy
     */
    public function setParent($parent)
    {
        $this->parent = $parent;
        return $this;
    }

    /**
     * Get Parent
     *
     * @return int
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Set Taxonomy
     *
     * @param string $taxonomy
     *
     * @return WpTermTaxonomy
     */
    public function setTaxonomy($taxonomy)
    {
        $this->taxonomy = $taxonomy;
        return $this;
    }

    /**
     * Get Taxonomy
     *
     * @return string
     */
    public function getTaxonomy()
    {
        return $this->taxonomy;
    }

    /**
     * Set TermId
     *
     * @param int $termId
     *
     * @return WpTermTaxonomy
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
     * Set TermTaxonomyId
     *
     * @param int $termTaxonomyId
     *
     * @return WpTermTaxonomy
     */
    public function setTermTaxonomyId($termTaxonomyId)
    {
        $this->termTaxonomyId = $termTaxonomyId;
        return $this;
    }

    /**
     * Get TermTaxonomyId
     *
     * @return int
     */
    public function getTermTaxonomyId()
    {
        return $this->termTaxonomyId;
    }

    /**
     * @var integer
     *
     * @Column(name="term_id", type="bigint", nullable=false)
     */
    private $termId = '0';

    /**
     * @var string
     *
     * @Column(name="taxonomy", type="string", length=32, nullable=false)
     */
    private $taxonomy = '';

    /**
     * @var string
     *
     * @Column(name="description", type="text", nullable=false)
     */
    private $description;

    /**
     * @var integer
     *
     * @Column(name="parent", type="bigint", nullable=false)
     */
    private $parent = '0';

    /**
     * @var integer
     *
     * @Column(name="count", type="bigint", nullable=false)
     */
    private $count = '0';


}
