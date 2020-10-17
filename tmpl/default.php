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

$moduleName = $module->module;
$repeatable_fields = $params->get('repeatable_fields_1');

//echo "<pre>";
//    print_r($repeatable_fields);
//echo "</pre>";

?>

<div class="<?php echo $moduleName ?>">
    <section>
        <h1>Team Members</h1>
        <?php
            foreach($repeatable_fields as $person)
            {
                $authorName     = $person->fakeusers;
                $authorPhone    = $person->fakeusersphone;
                $authorPicture  = $person->fakeuserspicture;
        ?>
          <div class="authors">
            <div class="detail">
                <h2><?php echo $authorName; ?></h2>
                <h3><?php echo $authorPhone; ?></h3>
            </div>
            <div class="photo">
                <img src="<?php echo $authorPicture; ?>" alt="Picture of <?php echo $authorName; ?>">
            </div>
          </div>
        <?php
            }
        ?>
    </section>
</div>

