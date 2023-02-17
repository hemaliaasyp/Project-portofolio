<div class="container">
    <div class="card">
        <div class="h2 card-header">Create Works</div>
        <div class="card-body">
            <?php
            if (validation_errors() != false) {
            ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo validation_errors(); ?>
                </div>
            <?php
            }
            ?>
            <form method="post" action="<?php echo base_url('works/save'); ?>">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>
                <div class="form-group">
                    <label for="year">Year</label>
                    <input type="text" class="form-control" name="year">
                </div>
                <br>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea class="summernote" id="content" name="content"></textarea>
                </div>
                <br>
                <div class="form-group">
                    <label for="featured_image">Featured Image</label>
                    <input type="file" class="form-control" size="20" id="featured_image" name="featured_image" enctype="multipart/form-data">

                </div>
                <br>
                <div class="form-group">
                    <select class="form-select" name="category_id[]" multiple aria-label="multiple select example">
                        <label for="category">Category</label>
                        <?php
                        foreach ($categories as $row) : ?>
                            <option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <br>
                <button type="submit" class="btn btn-dark">Submit</button>
        </div>
    </div>
</div>