<?php
/**
  * @copyright   Copyright (C) 2017 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
 
// No direct access
defined('_JEXEC') or die;

$layout = $params->get('layout', 'default');
require JModuleHelper::getLayoutPath('mod_contact_detail', $layout);
