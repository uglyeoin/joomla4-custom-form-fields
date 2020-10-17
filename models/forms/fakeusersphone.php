<?php
// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die('Restricted access');

JFormHelper::loadFieldClass('list');

// The class name must always be the same as the filename (in camel case)
class JFormFieldFakeusersphone extends JFormFieldList
{

    //The field class must know its own type through the variable $type.
    protected $type = 'Fakeusersphone';

    public function getOptions()
    {
        $json = "https://randomuser.me/api/?results=8&seed=joomla";
        $json = file_get_contents($json);
        $people = json_decode($json, true);

        foreach($people['results'] as $person)
        {
            $personName = $person['phone'];
            $personDetail = $person['phone'];
            $fakeUsersOptions[] = array("value" => $personDetail, "text" => $personName);
        }
        // Merge any additional options in the XML definition.
        $options = array_merge(parent::getOptions(), $fakeUsersOptions);
        return $options;
    }
}
