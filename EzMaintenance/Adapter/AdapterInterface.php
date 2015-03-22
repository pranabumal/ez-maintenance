<?php

/*
 * This file is part of the ez-maintenance package.
 *
 * (c) Xiidea <http://www.xiidea.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace EzMaintenance\Adapter;

interface AdapterInterface
{
    public static function isMaintenanceModeEnabled(array $options = array());
}