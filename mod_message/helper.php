    <?php
/**
 * @copyright   Copyright (C) 2017 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/**
 * Helper for mod_learning
 */
class modMessageHelper
{
    /**
     * Set the enroll forms
     *
     * @param   array  $params An object containing the module parameters
     *
     * @access public
     */    
    public static function setForm($params)
    {
        // Get a db connection.
        $db = JFactory::getDbo();
        $input = new JInput();
        $check = $input->get('check', null);
        // Create a new query object.
        $query = $db->getQuery(true);
        
        // Insert columns.
        $columns = array('body');

        // Insert values.
        $values = array($db->quote($input->get('body', null))
            );

        // Prepare the insert query.
        $query
        ->insert($db->quoteName('#__message'))
        ->columns($db->quoteName($columns))
        ->values(implode(',', $values));

        // Set the query using our newly populated query object and execute it.
        $db->setQuery($query);
        return $db->execute();
    }
    /**
     * Get enrolls form to show
     *
     * @param   array  $params An object containing the module parameters
     *
     * @access public
     */  
    public static function getForm($params)
    {
        // Obtain a database connection
        $db = JFactory::getDbo();

        // Retrieve the shout - note we are now retrieving the id not the lang field.
        $query = $db->getQuery(true)
                    ->select($db->quoteName('*'))
                    ->from($db->quoteName('#__message'));
                    
        // Prepare the query
        $db->setQuery($query);

        // Load the row list.
        $result = $db->loadRowList();

        // Return the last submitted form
        return $result[sizeof($result) - 1];
    }
}