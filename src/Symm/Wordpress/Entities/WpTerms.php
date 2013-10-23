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
