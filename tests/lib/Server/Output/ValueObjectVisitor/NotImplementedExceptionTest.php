<?php

/**
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
namespace EzSystems\EzPlatformRest\Tests\Server\Output\ValueObjectVisitor;

use eZ\Publish\API\Repository\Exceptions\NotImplementedException;
use EzSystems\EzPlatformRest\Server\Output\ValueObjectVisitor;

class NotImplementedExceptionTest extends ExceptionTest
{
    /**
     * Get expected status code.
     *
     * @return int
     */
    protected function getExpectedStatusCode()
    {
        return 501;
    }

    /**
     * Get expected message.
     *
     * @return string
     */
    protected function getExpectedMessage()
    {
        return 'Not Implemented';
    }

    /**
     * Gets the exception.
     *
     * @return \Exception
     */
    protected function getException()
    {
        return new NotImplementedException('Test');
    }

    /**
     * Gets the exception visitor.
     *
     * @return \EzSystems\EzPlatformRest\Server\Output\ValueObjectVisitor\NotImplementedException
     */
    protected function internalGetVisitor()
    {
        return new ValueObjectVisitor\NotImplementedException();
    }
}
