<?php

namespace Doctrine\Tests\ODM\PHPCR\Mapping\Model;

use Doctrine\ODM\PHPCR\Mapping\Annotations as PHPCRODM;

/**
 * A class that contains mapped children via properties
 *
 * @PHPCRODM\Document(isLeaf=true)
 */
class IsLeafObject
{
    /** @PHPCRODM\Id */
    public $id;
}
