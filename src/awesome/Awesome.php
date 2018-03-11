<?php
/**
 * Created by PhpStorm.
 * User: Ali
 * Date: 3/11/2018
 * Time: 8:22 PM
 */

namespace Awesome;


class Awesome
{
    protected $id;
    protected $type;
    protected $_serial;

    protected static $serial = 1;
    public function __construct(string $type, int $id)
    {
        $this->id = $id;
        $this->type = $type;
        $this->_serial = ++self::$serial;
    }

    public function sayAwesome()
    {
        return 'This is awesome';
    }

    /**
     * @return int
     */
    public function getSerial(): int
    {
        return $this->_serial;
    }
}