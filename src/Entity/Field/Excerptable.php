<?php

declare(strict_types=1);

namespace Bolt\Entity\Field;

/**
 * Field that should be included in excerpt must implement this interface
 */
interface Excerptable
{
    public function __toString(): string;

    public function getName(): string;
}
