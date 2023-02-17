<div class="card border-0 bg-white-9 rounded-xl p-0 mb-3">
    <div class="card-body">
        <div class="table-responsive">
            <?php
            // foreach ($works as $row) : 
            ?>
            <table class="table">
                <?php
                foreach ($works as $row) : ?>
                    <tr>

                        <th>Title</th>
                        <th>:</th>
                        <td>
                            <?php echo $row->title; ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Content</th>
                        <th>:</th>
                        <td>
                            <?php echo $row->content; ?>
                        </td>

                    </tr>
                <?php endforeach; ?>
            </table>
            <?php // endforeach; 
            ?>
        </div>
    </div>
</div>