<div class="container">
    <div class="card">
        <div class=" h2 card-header">Edit Social Media</div>
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
            <form method="post" action="<?php echo base_url('social/update'); ?>">
                <input type="hidden" name="id" id="id" value="<?php echo $social_medias->id; ?>" />
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo $social_medias->name ?>">
                </div>
                <div class="form-group">
                    <label for="url">URL</label>
                    <input type="url" class="form-control" id="url" name="url" value="<?php echo $social_medias->url ?>">
                </div>

                <div class="form-group">
                    <label for="icon">Icon</label>
                    <input type="file" class="form-control" id="icon" name="icon" enctype="multipart/form-data">
                </div>
                <br>
                <button type=" submit" class="btn btn-dark">Update</button>
            </form>
        </div>
    </div>
</div>