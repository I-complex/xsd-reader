<?php

declare(strict_types=1);

namespace GoetasWebservices\XML\XSDReader\Schema\Type;

use GoetasWebservices\XML\XSDReader\Schema\Element\ElementContainer;
use GoetasWebservices\XML\XSDReader\Schema\Element\ElementContainerTrait;
use GoetasWebservices\XML\XSDReader\Schema\Schema;

class ComplexType extends BaseComplexType implements ElementContainer
{
    use ElementContainerTrait;

    /**
     * @var bool
     */
    private $isMixed;

    public function __construct(Schema $schema, bool $isMixed, string $name = null)
    {
        parent::__construct($schema, $name);
        $this->isMixed = $isMixed;
    }

    public function isMixed(): bool
    {
        return $this->isMixed;
    }
}
