<?php

namespace Symm\Wordpress\Entities;

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
     * Set DisplayName
     *
     * @param string $displayName
     *
     * @return WpUsers
     */
    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
        return $this;
    }

    /**
     * Get DisplayName
     *
     * @return string
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * Set Id
     *
     * @param int $id
     *
     * @return WpUsers
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Get Id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set UserActivationKey
     *
     * @param string $userActivationKey
     *
     * @return WpUsers
     */
    public function setUserActivationKey($userActivationKey)
    {
        $this->userActivationKey = $userActivationKey;
        return $this;
    }

    /**
     * Get UserActivationKey
     *
     * @return string
     */
    public function getUserActivationKey()
    {
        return $this->userActivationKey;
    }

    /**
     * Set UserEmail
     *
     * @param string $userEmail
     *
     * @return WpUsers
     */
    public function setUserEmail($userEmail)
    {
        $this->userEmail = $userEmail;
        return $this;
    }

    /**
     * Get UserEmail
     *
     * @return string
     */
    public function getUserEmail()
    {
        return $this->userEmail;
    }

    /**
     * Set UserLogin
     *
     * @param string $userLogin
     *
     * @return WpUsers
     */
    public function setUserLogin($userLogin)
    {
        $this->userLogin = $userLogin;
        return $this;
    }

    /**
     * Get UserLogin
     *
     * @return string
     */
    public function getUserLogin()
    {
        return $this->userLogin;
    }

    /**
     * Set UserNicename
     *
     * @param string $userNicename
     *
     * @return WpUsers
     */
    public function setUserNicename($userNicename)
    {
        $this->userNicename = $userNicename;
        return $this;
    }

    /**
     * Get UserNicename
     *
     * @return string
     */
    public function getUserNicename()
    {
        return $this->userNicename;
    }

    /**
     * Set UserPass
     *
     * @param string $userPass
     *
     * @return WpUsers
     */
    public function setUserPass($userPass)
    {
        $this->userPass = $userPass;
        return $this;
    }

    /**
     * Get UserPass
     *
     * @return string
     */
    public function getUserPass()
    {
        return $this->userPass;
    }

    /**
     * Set UserRegistered
     *
     * @param \DateTime $userRegistered
     *
     * @return WpUsers
     */
    public function setUserRegistered($userRegistered)
    {
        $this->userRegistered = $userRegistered;
        return $this;
    }

    /**
     * Get UserRegistered
     *
     * @return \DateTime
     */
    public function getUserRegistered()
    {
        return $this->userRegistered;
    }

    /**
     * Set UserStatus
     *
     * @param int $userStatus
     *
     * @return WpUsers
     */
    public function setUserStatus($userStatus)
    {
        $this->userStatus = $userStatus;
        return $this;
    }

    /**
     * Get UserStatus
     *
     * @return int
     */
    public function getUserStatus()
    {
        return $this->userStatus;
    }

    /**
     * Set UserUrl
     *
     * @param string $userUrl
     *
     * @return WpUsers
     */
    public function setUserUrl($userUrl)
    {
        $this->userUrl = $userUrl;
        return $this;
    }

    /**
     * Get UserUrl
     *
     * @return string
     */
    public function getUserUrl()
    {
        return $this->userUrl;
    }

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
