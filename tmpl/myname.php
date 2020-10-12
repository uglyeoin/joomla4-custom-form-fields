<?php
/**
 * @package    [PACKAGE_NAME]
 *
 * @author     [AUTHOR] <[AUTHOR_EMAIL]>
 * @copyright  [COPYRIGHT]
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       [AUTHOR_URL]
 */

// No direct access to this file
defined('_JEXEC') or die;

use Joomla\CMS\Factory;
$document = Factory::getDocument();

$mediaUrl = 'media/' . $module->module;
$document->addStyleSheet($mediaUrl . '/css/' . $module->module . '.css', array('version' => 'auto'));
$document->addStyleSheet($mediaUrl . '/css/' . 'styles.css', array('version' => 'auto'));

$name           = $params->get('myName', 'fredbloggs', 'string');
$salutation     = $params->get('salutation');
$specialOffers  = $params->get('repeatable_fields');

if($salutation == 0)
{
    $salutation = "Mr";
}
else
{
    $salutation = "Mrs";
}

?>

<div class="<?php echo $module->module; ?>">
    <p>Hello <?php echo $salutation . " " . $name; ?></p>
    <p>Look at <?php echo $salutation . " " . $name; ?>'s beautiful offers</p>
    <?php
        foreach($specialOffers as $offer)
        { ?>
            <h2><?php echo $offer->offerName; ?></h2>
            <img src="<?php echo $offer->offerImages;?>" alt="offers">
        <?php
        }

    ?>

</div>