<?php

namespace Symm\Wordpress\Entities;

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
     * Set Autoload
     *
     * @param string $autoload
     *
     * @return WpOptions
     */
    public function setAutoload($autoload)
    {
        $this->autoload = $autoload;
        return $this;
    }

    /**
     * Get Autoload
     *
     * @return string
     */
    public function getAutoload()
    {
        return $this->autoload;
    }

    /**
     * Set OptionId
     *
     * @param int $optionId
     *
     * @return WpOptions
     */
    public function setOptionId($optionId)
    {
        $this->optionId = $optionId;
        return $this;
    }

    /**
     * Get OptionId
     *
     * @return int
     */
    public function getOptionId()
    {
        return $this->optionId;
    }

    /**
     * Set OptionName
     *
     * @param string $optionName
     *
     * @return WpOptions
     */
    public function setOptionName($optionName)
    {
        $this->optionName = $optionName;
        return $this;
    }

    /**
     * Get OptionName
     *
     * @return string
     */
    public function getOptionName()
    {
        return $this->optionName;
    }

    /**
     * Set OptionValue
     *
     * @param string $optionValue
     *
     * @return WpOptions
     */
    public function setOptionValue($optionValue)
    {
        $this->optionValue = $optionValue;
        return $this;
    }

    /**
     * Get OptionValue
     *
     * @return string
     */
    public function getOptionValue()
    {
        return $this->optionValue;
    }

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
