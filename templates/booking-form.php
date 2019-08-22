<div class="b-container">
	<form action="<?php echo $data->url . $data->customer; ?>" method="post" class="b-form group">
		<div class="arrival group">
			<input type="text" id="arrive" name="arrive" class="b-input" required="required"
				placeholder="<?php _e("Arrival", "bebetterhotels"); ?>">
			<?php echo bbh_generate_sels_date("check_in_day", "check_in_month"); ?>
		</div>

		<div class="departure group">
			<input type="text" id="depart" name="depart" class="b-input" required="required"
				placeholder="<?php _e("Departure", "bebetterhotels"); ?>">
			<?php echo bbh_generate_sels_date("check_out_day", "check_out_month"); ?>
		</div>

		<div class="adults group">
			<select id="adults" name="cmb_adults" class="b-select" <?php echo $data->adults_field?>>
				<?php echo bbh_dropdown_numeric_options("Adults", 1, 10); ?>
			</select>
		</div>

		<?php if ($data->show_childrens === "yes"): ?>
		<div class="childrens group">
			<select id="children" name="cmb_children" class="b-select" <?php echo $data->childrens_field?>>
				<?php echo bbh_dropdown_numeric_options("Childrens", 0, 9); ?>
			</select>
		</div>
		<?php endif ?>

		<div class="bookbtn group">
			<button type="submit" name="btn_next"
				style="border-color:<?=$data->button_border_color;?>;background-color:<?=$data->button_background_color;?>;color:<?=$data->button_text_color;?>">
				<?php _e("Book Now", "bebetterhotels"); ?>
			</button>
		</div>
	</form>
</div>