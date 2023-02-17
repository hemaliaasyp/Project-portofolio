<div class="card">
    <div class=" h1 card-header">Works Data</div>
    <div class="card-body">
        <div class="col-auto">
            <a href="<?= "works/create" ?>" class="text" style="background-color: #222e3c; padding : 10px; color:white;border-radius: 5px; text-decoration:none;">
                Add Works
            </a>
            <br>
            <br>
            <?php echo $this->session->flashdata("pesan"); ?>
            <div class="year">
                <label class="text-muted">Filter Tahun</label>
                <br>
                <select class="js-example-basic-single " id="year" style="padding: 10px 100px 10px 10px;" name="state">
                    <option value="">Select Year</option>
                    <?php
                    foreach ($works as $row) : ?>
                        <option><?php echo $row->year; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <br>
            <label class="text-muted">Filter Kategori</label>
            <br>
            <select class="js-example-basic-multiple" style="padding: 10px 60px 0px 10px;" name="states[]" multiple="multiple">
                <?php
                foreach ($categories as $row) : ?>
                    <option><?php echo $row->name; ?></option>
                <?php endforeach; ?>
            </select>
            <button type="submit" class="text" id="btn-filter" style=" background-color: #222e3c; padding : 5px; color:white;border-radius: 5px; text-decoration:none;">
                Filter
            </button>
            <hr>
            <div class=" table-responsive">
                <table id="datatable" class="display" style="width:100%;font-size:12px;">
                    <thead>
                        <tr>
                            <th width="30">No.</th>
                            <th>Title</th>
                            <th>Year</th>
                            <th>Featured Image</th>
                            <th>Created At</th>
                            <th>Created By</th>
                            <th>Updated At</th>
                            <th>Updated By</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    $(document).ready(function() {
        var tabel = $('#datatable').DataTable({
            processing: true,
            serverSide: true,
            ordering: true,
            ajax: {
                "url": "<?= base_url('works/datatable') ?>",
                "type": "POST",
                "data": function(d) {
                    // ambil data dari select
                    d.year = $("#year").val();
                    d.category = $("#category").val();
                    console.log(d);
                }
            },
            columns: [{
                    data: 'no'
                },
                {
                    data: 'title'
                },
                {
                    data: 'year'
                },
                {
                    data: 'featured_image',
                    render: function(data, type, row, meta) {
                        var img = '<img src = "<?php echo base_url('assets/img/'); ?>' + data + '" class="img" style="heigth:50%" alt="' + data + '">';
                        return img;
                    }
                },
                {
                    data: 'created_at'
                },
                {
                    data: 'created_by'
                },
                {
                    data: 'updated_at'
                },
                {
                    data: 'updated_by'
                },
            ],
            "columnDefs": [{
                "targets": 8,
                "row": "id",
                "render": function(data, type, row, meta) {
                    return '<div class="action-button mx-auto text-end">' +
                        '<a href="<?= base_url('works/edit/') ?>' + row.id + '" class="btn btn-dark"><i class="fa-sharp fa-solid fa-pen-to-square""></i></a>' +
                        '<a href="<?php echo base_url('works/delete/') ?>' + row.id + '" class="btn btn-dark"><i class="fa-solid fa-trash"></i></a>' +
                        '<a href="<?php echo base_url('works/detail/') ?>' + row.id + '" class="btn btn-dark"><i class="fa-solid fa-eye"></i></a>'
                    '</div>';
                }
            }, ]
        });


        $("#btn-filter").click(function(e) {
            e.preventDefault();
            // let tahun = $("#year").val();
            // console.log(tahun);
            tabel.draw();
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('#year').select2({});
    });
</script>

<script>
    $(document).ready(function() {
        $('.js-example-basic-multiple').select2();
    });
</script>