<?php
/**
 * phpDocumentor
 *
 * PHP Version 5.5
 *
 * @copyright 2010-2015 Mike van Riel / Naenius (http://www.naenius.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\Reflection;

/**
 * implemented by value objects that hold something that may be the name
 * of a class
 */
interface ClassLikeName
{
    /**
     * return the contained name as a string
     *
     * @return string
     */
    public function __toString();

    /**
     * Returns the name of the element without path.
     *
     * @return string
     */
    public function getName();
}
