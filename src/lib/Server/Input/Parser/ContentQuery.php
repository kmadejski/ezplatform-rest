<?php

/**
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
namespace EzSystems\EzPlatformRest\Server\Input\Parser;

use eZ\Publish\API\Repository\Values\Content\Query;
use EzSystems\EzPlatformRest\Server\Input\Parser\Query as QueryParser;

/**
 * Parser for ViewInput.
 */
class ContentQuery extends QueryParser
{
    protected function buildQuery()
    {
        return new Query();
    }
}
