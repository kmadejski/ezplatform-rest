<?php

/**
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
namespace EzSystems\EzPlatformRest\Server\Output\ValueObjectVisitor;

use EzSystems\EzPlatformRest\Output\Generator;
use EzSystems\EzPlatformRest\Output\ValueObjectVisitor;
use EzSystems\EzPlatformRest\Output\Visitor;

class JWTToken extends ValueObjectVisitor
{
    public function visit(Visitor $visitor, Generator $generator, $data)
    {
        $visitor->setStatus(200);
        $visitor->setHeader('Content-Type', $generator->getMediaType('JWTToken'));

        $generator->startObjectElement('JWTToken');
        $generator->startAttribute('token', $data->token);
        $generator->endAttribute('token');
        $generator->endObjectElement('JWTToken');
    }
}
