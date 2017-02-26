<?php 
// No direct access
defined('_JEXEC') or die; ?>
<div>
	<table>
		<tr>
			<th>ID</th>
			<th>Telegram Channel</th>
			<th>Address</th>
			<th>Coordinate</th>
			<th>Name place</th>
			<th>Phone number</th>
		</tr>
		<tr>
			<td><?= $forms[0] ?></td>
			<td><?= $forms[1] ?></td>
			<td><?= $forms[2] ?></td>
			<td><?= $forms[3] ?>,<?= $forms[4] ?></td>
			<td><?= $forms[5] ?></td>
			<td><?= $forms[6] ?></td>
		</tr>
	</table>
</div>

<div>
	<form method="post" name="myform">
		<fieldset>
			<label for="telegram_channel">Telegram Channel:</label>
			<input type="text" id="telegram_channel" name="telegram_channel"/>
			
			<label for="address">Address:</label>
			<input type="text" id="address" name="address"/>
			
			<label for="x_coordinate">X coordinate:</label>
			<input type="text" id="x_coordinate" name="x_coordinate"/>

			<label for="y_coordinate">Y coordinate:</label>
			<input type="text" id="y_coordinate" name="y_coordinate"/>
			
			<label for="name_place">Name place:</label>
			<input type="text" id="name_place" name="name_place"/>

			<label for="phone_number">Phone number:</label>
			<input type="text" id="phone_number" name="phone_number"/>

			<button type="submit">submit</button>
			<input type="hidden" id="check" name="check" value="true" />
		</fieldset>
	</form>
</div>