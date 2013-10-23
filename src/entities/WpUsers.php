<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * WpUsers
 *
 * @Table(name="wp_users", indexes={@Index(name="user_login_key", columns={"user_login"}), @Index(name="user_nicename", columns={"user_nicename"})})
 * @Entity
 */
class WpUsers
{
    /**
     * @var integer
     *
     * @Column(name="ID", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @Column(name="user_login", type="string", length=60, nullable=false)
     */
    private $userLogin = '';

    /**
     * @var string
     *
     * @Column(name="user_pass", type="string", length=64, nullable=false)
     */
    private $userPass = '';

    /**
     * @var string
     *
     * @Column(name="user_nicename", type="string", length=50, nullable=false)
     */
    private $userNicename = '';

    /**
     * @var string
     *
     * @Column(name="user_email", type="string", length=100, nullable=false)
     */
    private $userEmail = '';

    /**
     * @var string
     *
     * @Column(name="user_url", type="string", length=100, nullable=false)
     */
    private $userUrl = '';

    /**
     * @var \DateTime
     *
     * @Column(name="user_registered", type="datetime", nullable=false)
     */
    private $userRegistered = '0000-00-00 00:00:00';

    /**
     * @var string
     *
     * @Column(name="user_activation_key", type="string", length=60, nullable=false)
     */
    private $userActivationKey = '';

    /**
     * @var integer
     *
     * @Column(name="user_status", type="integer", nullable=false)
     */
    private $userStatus = '0';

    /**
     * @var string
     *
     * @Column(name="display_name", type="string", length=250, nullable=false)
     */
    private $displayName = '';


}
