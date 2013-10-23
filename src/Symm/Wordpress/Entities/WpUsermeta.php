<?php

namespace Symm\Wordpress\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * WpUsermeta
 *
 * @Table(name="wp_usermeta", indexes={@Index(name="user_id", columns={"user_id"}), @Index(name="meta_key", columns={"meta_key"})})
 * @Entity
 */
class WpUsermeta
{
    /**
     * @var integer
     *
     * @Column(name="umeta_id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $umetaId;

    /**
     * Set MetaKey
     *
     * @param string $metaKey
     *
     * @return WpUsermeta
     */
    public function setMetaKey($metaKey)
    {
        $this->metaKey = $metaKey;
        return $this;
    }

    /**
     * Get MetaKey
     *
     * @return string
     */
    public function getMetaKey()
    {
        return $this->metaKey;
    }

    /**
     * Set MetaValue
     *
     * @param string $metaValue
     *
     * @return WpUsermeta
     */
    public function setMetaValue($metaValue)
    {
        $this->metaValue = $metaValue;
        return $this;
    }

    /**
     * Get MetaValue
     *
     * @return string
     */
    public function getMetaValue()
    {
        return $this->metaValue;
    }

    /**
     * Set UmetaId
     *
     * @param int $umetaId
     *
     * @return WpUsermeta
     */
    public function setUmetaId($umetaId)
    {
        $this->umetaId = $umetaId;
        return $this;
    }

    /**
     * Get UmetaId
     *
     * @return int
     */
    public function getUmetaId()
    {
        return $this->umetaId;
    }

    /**
     * Set UserId
     *
     * @param int $userId
     *
     * @return WpUsermeta
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * Get UserId
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @var integer
     *
     * @Column(name="user_id", type="bigint", nullable=false)
     */
    private $userId = '0';

    /**
     * @var string
     *
     * @Column(name="meta_key", type="string", length=255, nullable=true)
     */
    private $metaKey;

    /**
     * @var string
     *
     * @Column(name="meta_value", type="text", nullable=true)
     */
    private $metaValue;


}
