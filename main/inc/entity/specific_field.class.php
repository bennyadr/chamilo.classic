<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @license see /license.txt
 * @author autogenerated
 */
class SpecificField extends \Entity
{
    /**
     * @return \Entity\Repository\SpecificFieldRepository
     */
     public static function repository(){
        return \Entity\Repository\SpecificFieldRepository::instance();
    }

    /**
     * @return \Entity\SpecificField
     */
     public static function create(){
        return new self();
    }

    /**
     * @var integer $id
     */
    protected $id;

    /**
     * @var string $code
     */
    protected $code;

    /**
     * @var string $name
     */
    protected $name;


    /**
     * Get id
     *
     * @return integer 
     */
    public function get_id()
    {
        return $this->id;
    }

    /**
     * Set code
     *
     * @param string $value
     * @return SpecificField
     */
    public function set_code($value)
    {
        $this->code = $value;
        return $this;
    }

    /**
     * Get code
     *
     * @return string 
     */
    public function get_code()
    {
        return $this->code;
    }

    /**
     * Set name
     *
     * @param string $value
     * @return SpecificField
     */
    public function set_name($value)
    {
        $this->name = $value;
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function get_name()
    {
        return $this->name;
    }
}