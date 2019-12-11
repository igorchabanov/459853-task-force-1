<?php

namespace App\Controllers\Action;

use App\Controllers\AvailableActions;

class ActionFailed extends Action
{
    public static function getName()
    {
        return 'Провалено';
    }

    public static function getCode()
    {
        return 'act_failed';
    }

    // check permissions
    public static function checkPermissions(int $init_user, AvailableActions $availableActions)
    {
        return $init_user === $availableActions->getCustomerId() && $availableActions->getCurrentStatus() === AvailableActions::STATUS_STARTED;
    }
}