<div class="col-lg-12">

    <div class="card card-primary card-outline">
        <div class="card-header">
            <div class="card-title"> <?= $tittle ?></div>
            <div class="card-tools">
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#add">
                    <i class=" fa fa-plus"></i>
                    Add
                </button>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered text-center" id="example1">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $no = 1;
                    foreach ($goal as $key => $value) { ?>
                        <tr>

                            <td><?= $no++; ?></td>
                            <td><?= $value->nama_goal ?></td>
                            <td><?php if ($value->status_goal == "Proses") { ?>
                                    <p class="text-warning">Proses</p>
                                <?php } else { ?>
                                    <p class="text-success">Finish</p>
                                <?php } ?>
                            </td>
                            <td>
                                <a href="<?= base_url('goal/subgoal/' . $value->id_goal) ?>" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i></a>

                                <?php if ($value->status_goal == "Proses") { ?>

                                    <?php echo form_open('goal/finish/' . $value->id_goal) ?>
                                    <input type="text" value="<?= $value->id_goal ?>" hidden name="id_goal">
                                    <input value="Finish" name="status_goal" type="submit" class="btn btn-outline-success"></input>
                                    <?php form_close() ?>

                                <?php } else { ?>
                                    <input value="Finish" name="status_goal" type="submit" class="btn btn-outline-success" disabled></input>

                                <?php } ?>

                            </td>
                        </tr>
                    <?php }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- model add-->
    <div class="modal fade" id="add">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah <?= $tittle ?></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php echo form_open("goal/add"); ?>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="nama_goal" placeholder="Nama">
                    </div>

                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
            <?php echo form_close(); ?>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
</div>