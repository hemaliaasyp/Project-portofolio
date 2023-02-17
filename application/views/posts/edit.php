<div class="container">
    <div class="card">
        <div class=" h2 card-header">Edit Post</div>
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
            <form method="post" action="<?php echo base_url('posts/update'); ?>">

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="hidden" name="id" id="id" value="<?php echo $posts->id; ?>" />
                    <input type="text" class="form-control" id="title" name="title" value="<?php echo $posts->title ?>">
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea class="summernote" id="content" name="content" value="<?php echo $posts->content ?>"></textarea>
                </div>

                <div class="form-group">
                    <label for="featured_image">Featured Image</label>
                    <input type="file" class="form-control" id="featured_image" name="featured_image" value="<?php echo $posts->featured_image ?>" enctype="multipart/form-data">
                </div>
                <div class="form-group">
                    <select class="form-select" name="category_id[]" multiple aria-label="multiple select example">
                        <label for="category">Category</label>
                        <?php
                        foreach ($categories as $row) : ?>
                            <option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
                        <?php endforeach; ?>
                    </select>
                    </select>
                </div>
                <br>
                <button type=" submit" class="btn btn-dark">Update</button>
            </form>
        </div>
    </div>
</div>