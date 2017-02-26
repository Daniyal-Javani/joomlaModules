<?php 
// No direct access
defined('_JEXEC') or die; ?>
<div>
<p>
	<?php
echo '<a href="https://twitter.com/home?status=' . JURI::current() . "\">Share on Twitter</a>";

?>
</p>
<p>
	<?php
echo '<a href="https://www.facebook.com/sharer/sharer.php?u=' . JURI::current() . "\">Share on Facebook</a>";

?>
</p>
</div>