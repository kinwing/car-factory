<?php
/**
 * Created by PhpStorm.
 * User: hujianrong
 * Date: 2019/8/12
 * Time: 16:31
 */

namespace car\bmw;

class Bmw3
{
    /**
     * Bmw3 constructor.
     */
    public function __construct()
    {
        $this->fix();
        $this->sprayPaint();
        $this->other();
        $this->other();
        echo "流水线" . PHP_EOL;
    }

    public function fix()
    {
        echo "组装" . PHP_EOL;
    }

    public function sprayPaint()
    {
        echo "喷漆" . PHP_EOL;
    }

    public function other()
    {
        echo "其他" . PHP_EOL;
    }

    public function sell()
    {
        echo "出售" . PHP_EOL;
    }
}