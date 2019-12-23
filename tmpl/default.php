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
/** @var string $theme */
/** @var string $customCSS */

// load J! icon set
HTMLHelper::_('stylesheet', 'mod_bearscards/default.css', array('version' => 'auto', 'relative' => true));
// Used with HTMLHelper::
?>
<h4>Price Card</h4>
<div class = "card card-price">
	<div class = "card-img">
		<a href = "#">
			<img src = "http://placeimg.com/640/320/nature/grayscale" class = "img-responsive">
			<div class = "card-caption">
				<span class = "h2">Big Item</span>
				<p>100% silk</p>
			</div>
		</a>
	</div>
	<div class = "card-body">
		<div class = "price">$20 <small>each</small></div>
		<div class = "lead">Wrap yourself in luxury</div>
		<ul class = "details">
			<li>A stitch in time saves nine.</li>
			<li>All good things come to those who wait.</li>
			<li><b>Shipping:</b> $10 in USA, $15 outside USA</li>
		</ul>
		<a href = "#" class = "btn btn-primary btn-lg btn-block buy-now">
			Buy now <span class = "glyphicon glyphicon-triangle-right"></span>
		</a>
	</div>
</div>

