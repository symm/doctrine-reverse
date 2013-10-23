<?php



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
