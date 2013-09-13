<?php

namespace Doctrine\ODM\PHPCR\Query\Builder;

class OperandDynamicUpperCase extends OperandDynamicFactory
{
    public function getCardinalityMap()
    {
        return array(
            self::NT_OPERAND_DYNAMIC => array(1, 1),    // 1..*
        );
    }

    public function getNodeType()
    {
        return self::NT_OPERAND_DYNAMIC;
    }
}
