<?php
// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die('Restricted access');

use Joomla\CMS\HTML\HTMLHelper;

class JFormFieldMyjavascript extends Joomla\CMS\Form\FormField
{

    protected $type = 'Myjavascript';

    protected function getLabel()
    {
        return;
    }

    protected function getInput()
    {
        // Custom JS
        HTMLHelper::_('script', 'mod_joomla4_module_custom_form_fields/mod_joomla4_module_custom_form_fields_backend.js', ['version' => 'auto', 'relative' => true]);

        // Custom CSS
        HTMLHelper::_('stylesheet', 'mod_joomla4_module_custom_form_fields/mod_joomla4_module_custom_form_fields_backend.css', ['version' => 'auto', 'relative' => true]);

        // Custom HTML
        $html = '<p>Hello, is it me you\'re waiting for</p>';

        return $html;
    }
}