<?php

/**
 * @see       https://github.com/laminas/laminas-di for the canonical source repository
 * @copyright https://github.com/laminas/laminas-di/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-di/blob/master/LICENSE.md New BSD License
 */

namespace Laminas\Di\Definition;

interface DefinitionInterface
{
    /**
     * Retrieves classes in this definition
     *
     * @abstract
     * @return string[]
     */
    public function getClasses();

    /**
     * Return whether the class exists in this definition
     *
     * @abstract
     * @param  string $class
     * @return bool
     */
    public function hasClass($class);

    /**
     * Return the supertypes for this class
     *
     * @abstract
     * @param  string   $class
     * @return string[]
     */
    public function getClassSupertypes($class);

    /**
     * @abstract
     * @param  string       $class
     * @return string|array
     */
    public function getInstantiator($class);

    /**
     * Return if there are injection methods
     *
     * @abstract
     * @param  string $class
     * @return bool
     */
    public function hasMethods($class);

    /**
     * Return an array of the injection methods for a given class
     *
     * @abstract
     * @param  string   $class
     * @return string[]
     */
    public function getMethods($class);

    /**
     * @abstract
     * @param  string $class
     * @param  string $method
     * @return bool
     */
    public function hasMethod($class, $method);

    /**
     * @abstract
     * @param $class
     * @param $method
     * @return bool
     */
    public function hasMethodParameters($class, $method);

    /**
     * getMethodParameters() return information about a methods parameters.
     *
     * Should return an ordered named array of parameters for a given method.
     * Each value should be an array, of length 4 with the following information:
     *
     * array(
     *     0, // string|null: Type Name (if it exists)
     *     1, // bool: whether this param is required
     *     2, // string: fully qualified path to this parameter
     *     3, // mixed: default value
     * );
     *
     *
     * @abstract
     * @param  string $class
     * @param  string $method
     * @return array
     */
    public function getMethodParameters($class, $method);
}
