<div class="container">
    <div class="card">
        <div class=" h2 card-header">Edit Category</div>
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
            <form method="post" action="<?php echo base_url(); ?>category/update">
                <input type="hidden" name="id" id="id" value="<?php echo $categories->id; ?>" />
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" value="<?php echo $categories->name; ?>" class="form-control" id="name" name="name">
                </div>
                <br>
                <button type=" submit" class="btn btn-dark">Update</button>
            </form>
        </div>
    </div>