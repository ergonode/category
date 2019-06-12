<?php

/**
 * Copyright © Bold Brand Commerce Sp. z o.o. All rights reserved.
 * See license.txt for license details.
 */

declare(strict_types = 1);

namespace Ergonode\Category\Domain\Entity;

use Ergonode\Core\Domain\Entity\AbstractId;
use Ergonode\Category\Domain\ValueObject\CategoryCode;
use Ramsey\Uuid\Uuid;

/**
 */
class CategoryId extends AbstractId
{
    public const NAMESPACE = '4438d266-ec62-473b-9f46-1a767e2060d4';

    /**
     * @param CategoryCode $value
     *
     * @return CategoryId
     *
     * @throws \Exception
     */
    public static function fromCode(CategoryCode $value): CategoryId
    {
        return new static(Uuid::uuid5(self::NAMESPACE, $value->getValue())->toString());
    }
}
