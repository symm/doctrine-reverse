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
