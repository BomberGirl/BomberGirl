<?php
/**
 * Created by PhpStorm.
 * User: dryka
 * Date: 18.09.2018
 * Time: 10:43
 */

namespace ch;

class Bomb
{
    public $range;
    public $timeToExplosion;
    public $positionX;
    public $positionY;
    /**
     * @return mixed
     */
    public function getRange()
    {
        return $this->range;
    }
    /**
     * @param mixed $range
     */
    public function setRange($range)
    {
        $this->range = $range;
    }
    /**
     * @return mixed
     */
    public function getTime()
    {
        return $this->time;
    }
    /**
     * @param mixed $time
     */
    public function setTime($time)
    {
        $this->time = $time;
    }
    /**
     * @return mixed
     */
    public function getPositionX()
    {
        return $this->positionX;
    }
    /**
     * @param mixed $positionX
     */
    public function setPositionX($positionX)
    {
        $this->positionX = $positionX;
    }
    /**
     * @return mixed
     */
    public function getPositionY()
    {
        return $this->positionY;
    }
    /**
     * @param mixed $positionY
     */
    public function setPositionY($positionY)
    {
        $this->positionY = $positionY;
    }
}