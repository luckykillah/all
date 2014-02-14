<?php
/**
 * The default template for displaying workouts
 *
 */
?>
<?php 
$data = get_post_custom();
workoutMeta($data);
?>
<div id="workout" class="workout">
<h2>This Week's Workout</h2>
<table border="0">
	<tbody>
		<?php if ($weekTil !='') : ?>
		<tr>
			<td rowspan="1" colspan="3"><strong>This Week&#8217;s Workouts: <?php echo $weekTil; ?> <?php if ($weekTil == '1'){ echo 'week'; } else{ echo 'weeks'; }?> &#8217;til MIMS</strong></td>
		</tr>
		<?php endif; ?>
		<tr>
			<td>Monday</td>
			<td><?php if($data['mon-km']['0']!='') echo $data['mon-km']['0'].'k'; else echo '-';  ?></td>
			<td width="542"><?php if($data['mon-work']['0']!='') echo $data['mon-work']['0']; else echo '-';  ?></td>
		</tr>
		<tr>
			<td>Tuesday</td>
			<td><?php if($data['tues-km']['0']!='') echo $data['tues-km']['0'].'k'; else echo '-';  ?></td>
			<td><?php if($data['tues-work']['0']!='') echo $data['tues-work']['0']; else echo '-';  ?></td>
		</tr>
		<tr>
			<td>Wednesday</td>
			<td><?php if($data['wed-km']['0']!='') echo $data['wed-km']['0'].'k'; else echo '-';  ?></td>
			<td><?php if($data['wed-work']['0']!='') echo $data['wed-work']['0']; else echo '-';  ?></td>
		</tr>
		<tr>
			<td>Thursday</td>
			<td><?php if($data['thur-km']['0']!='') echo $data['thur-km']['0'].'k'; else echo '-';  ?></td>
			<td><?php if($data['thur-work']['0']!='') echo $data['thur-work']['0']; else echo '-';  ?></td>
		</tr>
		<tr>
			<td>Friday</td>
			<td><?php if($data['fri-km']['0']!='') echo $data['fri-km']['0'].'k'; else echo '-';  ?></td>
			<td><?php if($data['fri-work']['0']!='') echo $data['fri-work']['0']; else echo '-';  ?></td>
		</tr>
		<tr>
			<td>Saturday</td>
			<td><?php if($data['sat-km']['0']!='') echo $data['sat-km']['0'].'k'; else echo '-';  ?></td>
			<td><?php if($data['sat-work']['0']!='') echo $data['sat-work']['0']; else echo '-';  ?></td>
		</tr>
		<tr>
			<td>Sunday</td>
			<td><?php if($data['sun-km']['0']!='') echo $data['sun-km']['0'].'k'; else echo '-';  ?></td>
			<td><?php if($data['sun-work']['0']!='') echo $data['sun-work']['0']; else echo '-';  ?></td>
		</tr>
		<tr>
			<td><strong>TOTAL</strong></td>
			<td><?php echo ($data['mon-km']['0']+
							$data['tues-km']['0']+
							$data['wed-km']['0']+
							$data['thur-km']['0']+
							$data['fri-km']['0']+
							$data['sat-km']['0']+
							$data['sun-km']['0']).'k'; ?></td>
			<td></td>
		</tr>
	</tbody>
</table>
</div>