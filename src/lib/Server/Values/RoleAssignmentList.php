<?php

/**
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
namespace EzSystems\EzPlatformRest\Server\Values;

use EzSystems\EzPlatformRest\Value as RestValue;

/**
 * RoleAssignment list view model.
 */
class RoleAssignmentList extends RestValue
{
    /**
     * Role assignments.
     *
     * @var \eZ\Publish\API\Repository\Values\User\RoleAssignment[]
     */
    public $roleAssignments;

    /**
     * User or user group ID to which the roles are assigned.
     *
     * @var mixed
     */
    public $id;

    /**
     * Indicator if the role assignment is for user group.
     *
     * @var bool
     */
    public $isGroupAssignment;

    /**
     * Construct.
     *
     * @param \eZ\Publish\API\Repository\Values\User\RoleAssignment[] $roleAssignments
     * @param mixed $id
     * @param bool $isGroupAssignment
     */
    public function __construct(array $roleAssignments, $id, $isGroupAssignment = false)
    {
        $this->roleAssignments = $roleAssignments;
        $this->id = $id;
        $this->isGroupAssignment = $isGroupAssignment;
    }
}
