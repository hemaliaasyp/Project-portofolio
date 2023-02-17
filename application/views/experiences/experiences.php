<div class="card">
    <div class=" h1 card-header">Experiences Data</div>
    <div class="card-body">
        <div class="col-auto">
            <a href="<?= "experiences/create" ?>" class="text" style="background-color: #222e3c; padding : 10px; color:white;border-radius: 5px; text-decoration:none;">
                Add Experiences
            </a>
            <br>
            <br>
            <?php echo $this->session->flashdata("pesan"); ?>
            <div class=" table-responsive">
                <table id="datatable" class="display" style="width:100%;font-size:12px;">
                    <thead>
                        <tr>
                            <th width="30">No.</th>
                            <th>Name</th>
                            <th>Start Date</th>
                            <th>Resign Date</th>
                            <th>Description</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($experiences as $row) {
                        ?>
                            <tr>
                                <td widtd="5%"><?php echo $no++; ?></td>
                                <td><?php echo $row->name; ?></td>
                                <td><?php echo $row->start_date; ?></td>
                                <td><?php echo $row->resign_date; ?></td>
                                <td><?php echo $row->description; ?></td>

                                <td>
                                    <a href=" <?php echo base_url('experiences/edit/' . $row->id); ?>" class="btn btn-dark"><i class="fa-sharp fa-solid fa-pen-to-square"></i></a>
                                    <a href="<?php echo base_url('experiences/delete/' . $row->id); ?>" class="btn btn-dark"><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>