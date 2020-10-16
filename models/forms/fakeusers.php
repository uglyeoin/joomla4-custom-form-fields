<?php
// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die('Restricted access');

use Joomla\CMS\Uri\Uri;

JFormHelper::loadFieldClass('list');

// The class name must always be the same as the filename (in camel case)
class JFormFieldFakeusers extends JFormFieldList
{

    //The field class must know its own type through the variable $type.
    protected $type = 'Fakeusers';

    public function getOptions()
    {

        $results    =   $params->get('results');

        if($results)
        {
            $results = "results=" . $results;
        }

        $gender = "";
        if ($gender != 0)
        {
            $gender = "gender=" . $params->get('gender');
        }

        $seed = "";
        if(!empty($gender))
        {
            $seed = $params->get('seed');;
        }


        $json = "https://randomuser.me/api/" . $results . $gender . $seed;
        $json = file_get_contents($json);

        $people = json_decode($json, true);

        $i = 0;
        foreach($people['results'[$i]] as $person)
        {
            $personName = $person['name']['title'] . " " . $person['name']['first'] . " " . $person['name']['last'];
            $fakeUsersOptions[] = array("value" => $personName, "text" => $personName);
            $i++;
        }
        // Merge any additional options in the XML definition.
        $options = array_merge(parent::getOptions(), $fakeUsersOptions);
        return $options;
    }
}
