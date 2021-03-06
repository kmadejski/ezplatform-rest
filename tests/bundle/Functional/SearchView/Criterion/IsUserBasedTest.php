<?php

/**
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
declare(strict_types=1);

namespace EzSystems\EzPlatformRestBundle\Tests\Functional\SearchView\Criterion;

use EzSystems\EzPlatformRestBundle\Tests\Functional\SearchView\SearchCriterionTestCase;

final class IsUserBasedTest extends SearchCriterionTestCase
{
    public function getCriteriaPayloads(): iterable
    {
        return [
            'is user based' => [
                'json',
                $this->buildJsonCriterionQuery('"IsUserBasedCriterion": true'),
                2,
            ],
            'is not user based' => [
                'json',
                $this->buildJsonCriterionQuery('"IsUserBasedCriterion": false'),
                10,
            ],
        ];
    }
}
