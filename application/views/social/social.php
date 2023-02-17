<div class="card">
    <div class=" h1 card-header">Social Media Data</div>
    <div class="card-body">
        <div class="col-auto">
            <a href="<?= "social/create" ?>" class="text" style="background-color: #222e3c; padding : 10px; color:white;border-radius: 5px; text-decoration:none;">
                Add Social Media
            </a>
            <br>
            <br>
            <?php

            use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Php;

            echo $this->session->flashdata("pesan"); ?>
            <div class=" table-responsive">
                <table id="datatable" class="display" style="width:100%;font-size:12px;">
                    <thead>
                        <tr>
                            <th width="30">No.</th>
                            <th>Name</th>
                            <th>URL</th>
                            <th>Icon</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($social_medias as $row) {
                        ?>
                            <tr>
                                <td widtd="5%"><?php echo $no++; ?></td>
                                <td><?php echo $row->name; ?></td>
                                <td><?php echo $row->url; ?></td>
                                <td><img src="<?php echo base_url('assets/img/photos/'); ?><?php echo $row->icon; ?>" width="70px" height="70px"></td>
                                <td>
                                    <a href="<?php echo base_url(); ?>social/edit/<?php echo $row->id; ?>" class="btn btn-dark">Edit</a>
                                    <a href="<?php echo base_url(); ?>social/delete/<?php echo $row->id; ?>" class="btn btn-dark">Hapus</a>
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