<?php
// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die('Restricted access');

use Joomla\CMS\Uri\Uri;

JFormHelper::loadFieldClass('hidden');

// The class name must always be the same as the filename (in camel case)
class JFormFieldMyjavascript extends JFormFieldHidden
{
    //The field class must know its own type through the variable $type.
    protected $type = 'Myjavascript';

    public function getInput() {
        // code that returns HTML that will be shown as the form field
        $document = JFactory::getDocument();
        $document->addScriptDeclaration('
            window.event("domready", function() {
                alert("An inline JavaScript Declaration");
            });
        ');
    }
}
