<?php

/**
 * @see       https://github.com/laminas/laminas-di for the canonical source repository
 * @copyright https://github.com/laminas/laminas-di/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-di/blob/master/LICENSE.md New BSD License
 */

namespace LaminasTest\Di\TestAsset\PreferredImplClasses;

class E implements AAwareInterface
{
    public $a = null;
    public function foo(A $a)
    {
        $this->a = $a;
    }
}
