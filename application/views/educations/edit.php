<div class="container">
    <div class="card">
        <div class=" h2 card-header">Edit Educations</div>
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
            <form method="post" action="<?php echo base_url('educations/update'); ?>">
                <input type="hidden" name="id" id="id" value="<?php echo $educations->id; ?>" />
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo $educations->name ?>">
                </div>
                <div class="form-group">
                    <label for="start_date">Start Date</label>
                    <input type="date" class="form-control" id="start_date" name="start_date" value="<?php echo $educations->start_date ?>">
                </div>
                <br>
                <div class="form-group">
                    <label for="graduated_date">Graduated Date</label>
                    <input type="date" class="form-control" id="graduated_date" name="graduated_date" value="<?php echo $educations->graduated_date ?>">
                </div>
                <br>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" id="description" name="description" value="<?php echo $educations->description ?>">
                </div>
                <br>
                <button type=" submit" class="btn btn-dark">Update</button>
            </form>
        </div>
    </div>
</div>