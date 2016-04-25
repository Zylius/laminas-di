<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace ZendTest\Di\TestAsset\ConstructorInjection;

class C
{
    public $a = null;
    public $params = array();
    public function __construct(A $a, array $params = array())
    {
        $this->a = $a;
        $this->params = $params;
    }
}
