<?php

/**
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
declare(strict_types=1);

namespace EzSystems\EzPlatformRest\Server\Input\Parser\Criterion;

use EzSystems\EzPlatformRest\Input\BaseParser;
use EzSystems\EzPlatformRest\Input\ParsingDispatcher;
use EzSystems\EzPlatformRest\Exceptions;
use eZ\Publish\API\Repository\Values\Content\Query\Criterion\ObjectStateIdentifier as ObjectStateIdentifierCriterion;

class ObjectStateIdentifier extends BaseParser
{
    public function parse(array $data, ParsingDispatcher $parsingDispatcher): ObjectStateIdentifierCriterion
    {
        if (
            !array_key_exists('ObjectStateIdentifierCriterion', $data)
            || !array_key_exists('value', $data['ObjectStateIdentifierCriterion'])
            || !array_key_exists('target', $data['ObjectStateIdentifierCriterion'])
        ) {
            throw new Exceptions\Parser('Invalid <ObjectStateIdentifierCriterion> format');
        }

        $target = !empty($data['ObjectStateIdentifierCriterion']['target'])
            ? $data['ObjectStateIdentifierCriterion']['target']
            : null;

        return new ObjectStateIdentifierCriterion(
            explode(',', $data['ObjectStateIdentifierCriterion']['value']),
            $target
        );
    }
}
