<?php
/**
 * @package    mod_bearscards
 *
 * @author     Bear <your@email.com>
 * @copyright  A copyright
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       http://your.url.com
 */

defined('_JEXEC') or die;

use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Factory;
/** @var string $params */

// Load CSS
HTMLHelper::_('stylesheet', 'mod_bearscards/default.css', array('version' => 'auto', 'relative' => true));
// Used with HTMLHelper::
/**
 * ==================================================
 * Joomla Variables
 * ==================================================
 */
$app             = Factory::getApplication();
$doc             = Factory::getDocument();

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

?>
<div class = "<?php echo $moduleclass_sfx; ?>">
	<h4 class="card-header"><?php echo $params->get('header'); ?></h4>
	<div class = "card card-price">
		<div class = "card-img">
			<?php if($params->get('image')){?>
			<a href = "<?php echo $params->get('link'); ?>">
				<img src = "<?php echo $params->get('image'); ?>" class = "img-responsive"
				     alt = "<?php echo $params->get('imageAlt'); ?>">
				<div class = "card-caption">
					<span class = "<?php echo $params->get('captionSize'); ?>"><?php echo $params->get('caption'); ?></span>
				</div>
			</a>
			<?php } ?>
		</div>
		<div class = "card-body">
			<div class = "details">
				<?php echo $params->get('body'); ?>
			</div>
			<?php
			if ( $params->get('button') )
			{ ?>
				<a href = "<?php echo $params->get('link'); ?>"
				   class = "btn btn-<?php echo $params->get('buttonType'); ?> btn-lg btn-block buy-now">
					<?php echo $params->get('buttonText'); ?>
				</a>
			<?php } ?>
		</div>
		<?php if ( $params->get('footer')){?>
		<div class="card-footer"><?php echo $params->get('footer'); ?></div>
		<?php } ?>
	</div>
</div>

