<?php

declare(strict_types=1);

namespace Doctrine\ODM\MongoDB\Mapping\Annotations\File;

use Doctrine\ODM\MongoDB\Mapping\Annotations\AbstractField;
use Doctrine\ODM\MongoDB\Mapping\ClassMetadata;

/**
 * @Annotation
 */
final class Metadata extends AbstractField
{
    /** @var string */
    public $name = 'metadata';

    /** @var string */
    public $type = ClassMetadata::ONE;

    /** @var bool */
    public $embedded = true;

    /** @var string|null */
    public $targetDocument;

    /** @var string|null */
    public $discriminatorField;

    /** @var array|null */
    public $discriminatorMap;

    /** @var string|null */
    public $defaultDiscriminatorValue;
}
