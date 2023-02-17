<div class="card">
	<div class=" h1 card-header">Category Data</div>
	<div class="card-body">
		<div class="col-auto">
			<a href="<?= base_url('category/create') ?>">
				<span class="text" style="background-color: #222e3c; padding : 10px; color:white;border-radius: 5px; text-decoration:none;">
					Add Category
				</span>
			</a>
		</div>
		<br />
		<?php echo $this->session->flashdata("pesan"); ?>
		<br />
		<div class="table-responsive">
			<table id="datatable" class="display" style="width:100% ;font-size:12px;">
				<thead>
					<tr>
						<th>No</th>
						<th>Name</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$no = 1;
					foreach ($categories as $row) { ?>
						<tr>
							<td widtd="5%"><?php echo $no++; ?></td>
							<td><?php echo $row->name; ?></td>
							<td>
								<a href="<?php echo base_url('category/edit/' . $row->id); ?>" class="btn btn-dark"><i class="fa-sharp fa-solid fa-pen-to-square"></i></a>

								<a href="<?php echo base_url('category/delete/' . $row->id); ?>" class="btn btn-dark"><i class="fa-solid fa-trash"></i></a>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>