<div class="container">
	<?php foreach($offerings as $offering){
		?>
		<h1><?php echo $offering['title']; ?></h1>
		<p><?php echo (key_exists('description_blob', $offering))? $offering['description_blob'] : "No Description Available"; ?></p>
		
		<h4>Upcoming Classes</h4>
		<table class="table table-striped">
			<thead>

			</thead>

			<tbody>
				<?php foreach ($offering['schedules'] as $key => $schedule) { ?>
					<tr>
						<td><?php echo $schedule['title']; ?></td>
						<td><?php echo $schedule['description']; ?></td>
						<td><?php echo date('M-d-Y h:i', $schedule['start_time'] / 1000); ?></td>
						<td><a href="<?php echo base_url() . 'instructor/' . $schedule['instructors'][0]['id']; ?>"><?php echo $schedule['instructors'][0]['name']; ?></a></td>
					</tr>
					<?php
				} 
				?>
			</tbody>
		</table>



		<h4>Pricing</h4>
		<table class="table table-striped">
			<thead>

			</thead>

			<tbody>
				<?php foreach ($offering['pricing_options'] as $key => $po) { ?>
					<tr>
						<td><?php echo $po['title']; ?></td>
						<td><?php 
							echo $po['credits']; 
							$bonus = ($po['bonus_credits'])? $po['bonus_credits'] : false;
							if($bonus){
								echo " <span> + " . $bonus . " bonus credits!</span>";
							}
							?>
						</td>
						<td>$<?php echo $po['total_price']/ 100; ?></td>
						
					</tr>
					<?php
				} 
				?>
			</tbody>
		</table>

		<?php
	}
	?>
</div>