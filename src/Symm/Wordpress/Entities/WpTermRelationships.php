<?php

namespace Symm\Wordpress\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * WpTermRelationships
 *
 * @Table(name="wp_term_relationships", indexes={@Index(name="term_taxonomy_id", columns={"term_taxonomy_id"})})
 * @Entity
 */
class WpTermRelationships
{
    /**
     * @var integer
     *
     * @Column(name="object_id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="NONE")
     */
    private $objectId = '0';

    /**
     * Set ObjectId
     *
     * @param int $objectId
     *
     * @return WpTermRelationships
     */
    public function setObjectId($objectId)
    {
        $this->objectId = $objectId;
        return $this;
    }

    /**
     * Get ObjectId
     *
     * @return int
     */
    public function getObjectId()
    {
        return $this->objectId;
    }

    /**
     * Set TermOrder
     *
     * @param int $termOrder
     *
     * @return WpTermRelationships
     */
    public function setTermOrder($termOrder)
    {
        $this->termOrder = $termOrder;
        return $this;
    }

    /**
     * Get TermOrder
     *
     * @return int
     */
    public function getTermOrder()
    {
        return $this->termOrder;
    }

    /**
     * Set TermTaxonomyId
     *
     * @param int $termTaxonomyId
     *
     * @return WpTermRelationships
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
     * @Column(name="term_taxonomy_id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="NONE")
     */
    private $termTaxonomyId = '0';

    /**
     * @var integer
     *
     * @Column(name="term_order", type="integer", nullable=false)
     */
    private $termOrder = '0';


}
