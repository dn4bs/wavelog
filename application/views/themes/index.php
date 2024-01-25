<div class="container">

	<br>
	<?php if($this->session->flashdata('danger')) { ?>
		<!-- Display Message -->
		<div class="alert alert-danger">
			<p><?php echo $this->session->flashdata('danger'); ?></p>
		</div>
	<?php } ?>

	<?php if($this->session->flashdata('success')) { ?>
		<!-- Display Message -->
		<div class="alert alert-success">
			<p><?php echo $this->session->flashdata('success'); ?></p>
		</div>
	<?php } ?>

	<h2><?php echo $page_title; ?></h2>

	<div class="card">
		<div class="card-header">
			Themes list
		</div>
		<div class="card-body">
			<p class="card-text">
				Using the theme list, you can control which Themes are shown in the account settings. Deleting a theme here, does not delete the css theme folder.
			</p>
			<div class="table-responsive">
				<table style="width:100%" class="contesttable table table-sm table-striped">
					<thead>
					<tr>
						<th scope="col">Name</th>
						<th scope="col">Foldername</th>
						<th scope="col">Theme Mode</th>
						<th scope="col">Header Logo</th>
						<th scope="col">Main Logo</th>
						<th scope="col"></th>
						<th scope="col"></th>
					</tr>
					</thead>
					<tbody>
					<?php foreach ($themes as $theme) { ?>
						<tr>
							<td><?php echo $theme->name;?></td>
							<td><?php echo $theme->foldername;?></td>
							<td><?php if($theme->theme_mode != "") {
								echo $theme->theme_mode;
							} else {
								echo "<span class=\"text-danger\">Theme-Mode undefined! Please edit</span>";
							} ?></td>
							<td><?php echo $theme->header_logo;?></td>
							<td><?php echo $theme->main_logo;?></td>
							<td>
								<a onclick="editThemeDialog('<?php echo $theme->id; ?>')" class="btn btn-outline-primary btn-sm"><i class="fas fa-edit"></i> Edit</a>
							</td>
							<td class='theme_<?php echo $theme->id ?>'>
								<a href="javascript:deleteTheme('<?php echo $theme->id; ?>', '<?php echo $theme->name; ?>');" class="btn btn-danger btn-sm" ><i class="fas fa-trash-alt"></i> Delete</a>
							</td>
						</tr>

					<?php } ?>
					</tbody>
					<table>
			</div>
			<br/>
			<p><button onclick="addThemeDialog();" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Add a Theme</button></p>
		</div>
	</div>
