<?php

/**
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
namespace EzSystems\EzPlatformRest\Server\Values;

use eZ\Publish\API\Repository\Values\User\Limitation\RoleLimitation;
use EzSystems\EzPlatformRest\Value as RestValue;

/**
 * RoleAssignment view model.
 */
class RoleAssignment extends RestValue
{
    /**
     * Role ID.
     *
     * @var mixed
     */
    public $roleId;

    /**
     * Role limitation.
     *
     * @var \eZ\Publish\API\Repository\Values\User\Limitation\RoleLimitation
     */
    public $limitation;

    /**
     * Construct.
     *
     * @param mixed $roleId
     * @param \eZ\Publish\API\Repository\Values\User\Limitation\RoleLimitation $limitation
     */
    public function __construct($roleId, RoleLimitation $limitation = null)
    {
        $this->roleId = $roleId;
        $this->limitation = $limitation;
    }
}
