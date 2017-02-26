<?php 
// No direct access
defined('_JEXEC') or die; ?>
<div>
	<table>
		<tr>
			<th>ID</th>
			<th>Message</th>
		</tr>
		<tr>
			<td><?= $forms[0] ?></td>
			<td><?= $forms[1] ?></td>
		</tr>
	</table>
</div>

<div>
	<form method="post" name="myform">
		<fieldset>
			<label for="body">Message:</label>
			<textarea  id="body" name="body"></textarea>

			<button type="submit">submit</button>
			<input type="hidden" id="check" name="check" value="true" />
		</fieldset>
	</form>
</div>