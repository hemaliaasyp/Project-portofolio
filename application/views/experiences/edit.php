<div class="container">
    <div class="card">
        <div class=" h2 card-header">Edit Experiences</div>
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
            <form method="post" action="<?php echo base_url('experiences/update'); ?>">
                <input type="hidden" name="id" id="id" value="<?php echo $experiences->id; ?>" />
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo $experiences->name ?>">
                </div>
                <div class="form-group">
                    <label for="start_date">Start Date</label>
                    <input type="date" class="form-control" id="start_date" name="start_date" value="<?php echo $experiences->start_date ?>">
                </div>
                <br>
                <div class="form-group">
                    <label for="resign_date">Resign Date</label>
                    <input type="date" class="form-control" id="resign_date" name="resign_date" value="<?php echo $experiences->resign_date ?>">
                </div>
                <br>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" id="description" name="description" value="<?php echo $experiences->description ?>">
                </div>
                <br>
                <button type=" submit" class="btn btn-dark">Update</button>
            </form>
        </div>
    </div>
</div>