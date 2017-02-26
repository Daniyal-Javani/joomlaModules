<?php
/**
  * @copyright   Copyright (C) 2017 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
 
// No direct access
defined('_JEXEC') or die;

if ($check === null) {
	$layout = $params->get('layout', 'default');
	require JModuleHelper::getLayoutPath('mod_share', $layout);
} else {
	$status = modlearningdHelper::setForm($params);
    if ($status === true) {
        echo '<div> Thanks for your submission. <br> You will be connected soon. </div>';
    }
}
