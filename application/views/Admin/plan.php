<div class="col-lg-12">

    <div class="card card-primary card-outline">
        <div class="card-header">
            <div class="card-title"> <?= $tittle ?></div>
            <div class="card-tools">
                <?php
                $s_id = $this->db->get_where('subgoal', ['id_subgoal' => ($id_subgoal)])->row_array();
                if ($s_id['status_subgoal'] == 'Finish') {
                ?>
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#add">
                        <i class=" fa fa-plus"></i>
                        Add
                    </button>
                <?php } else { ?>
                    <button type="button" class="btn btn-primary btn-sm disabled">
                        <i class=" fa fa-plus"></i>
                        Add
                    </button>
                <?php } ?>
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
                    foreach ($plan as $key => $value) {
                        if ($value->id_subgoal == $id_subgoal) {
                    ?>

                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $value->nama_plan ?></td>
                                <td><?php if ($value->status_plan == "Proses") { ?>
                                        <p class="text-warning">Proses</p>
                                    <?php } else { ?>
                                        <p class="text-success">Finish</p>
                                    <?php } ?>
                                </td>
                                <td>
                                    <a href="<?= base_url('plan/view/' . $value->id_plan) ?>" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i></a>


                                </td>
                            </tr>
                        <?php } else { ?>
                    <?php }
                    } ?>
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
                    <?php echo form_open('plan/add'); ?>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text " value="<?= $id_subgoal ?>" name="id_subgoal" hidden>
                        <input type="text" class="form-control" name="nama_plan" placeholder="Nama">
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

<div class="col-lg-12">
    <div class="card card-primary card-outline">
        <div class="card-header">
            <div class="card-title">
                <h4>success criteria</h4>
            </div>
        </div>
        <div class="card-body">
            <?php echo form_open_multipart('subgoal/criteria/' . $id_subgoal) ?>
            <div class="form-group">
                <textarea class="form-control" rows="3" placeholder="Text...." name="success_criteria"><?= $crit ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>

            <?php echo form_close() ?>
        </div>

    </div>
</div>