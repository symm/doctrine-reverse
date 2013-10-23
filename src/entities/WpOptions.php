<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * WpOptions
 *
 * @Table(name="wp_options", uniqueConstraints={@UniqueConstraint(name="option_name", columns={"option_name"})})
 * @Entity
 */
class WpOptions
{
    /**
     * @var integer
     *
     * @Column(name="option_id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $optionId;

    /**
     * @var string
     *
     * @Column(name="option_name", type="string", length=64, nullable=false)
     */
    private $optionName = '';

    /**
     * @var string
     *
     * @Column(name="option_value", type="text", nullable=false)
     */
    private $optionValue;

    /**
     * @var string
     *
     * @Column(name="autoload", type="string", length=20, nullable=false)
     */
    private $autoload = 'yes';


}
