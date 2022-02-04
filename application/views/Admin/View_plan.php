<div class="col-lg-12">
    <div class="row">
        <div class="col-4">

            <div class="card card-primary card-outline">
                <div class="card-header">
                    <div class="card-title"></div>
                </div>
                <div class="card-body">
                    <p>Action Plan : <?= $plan->nama_plan ?></p>
                    <p>Status : <?= $plan->status_plan ?></p>

                </div>
            </div>

        </div>

        <div class="col-7">

            <div class="card card-primary card-outline">
                <div class="card-header">
                    <div class="card-title"></div>

                </div>
                <div class="card-body">
                    <div class="col-log-12">
                        <?= form_open("plan/edit/" . $plan->id_plan) ?>
                        <div class="col-md-12">
                            <textarea class="form-control" id="komentar" rows="3" placeholder="Komentar .." name="catatan_plan"><?= $catatan ?></textarea>
                        </div>


                        <div class="col-sm-12">
                            <!-- select -->
                            <div class="form-group">
                                <label>Status</label>
                                <select class="custom-select" name="status_plan">
                                    <option value="<?= $plan->status_plan ?>"><?= $plan->status_plan ?></option>
                                    <option value="Proses">Proses</option>
                                    <option value="Butuh Waktu"> Butuh Waktu</option>
                                    <option value="Finish">Finish</option>
                                </select>
                            </div>
                            <input type="text" name="id_plan" value="<?= $plan->id_plan ?>" hidden>
                            <input type="text" name="nama_plan" value="<?= $plan->nama_plan ?>" hidden>
                            <input type="text" name="id_subgoal" value="<?= $plan->id_subgoal ?>" hidden>
                            <div class="modal-footer justify-content-between">
                                <?php if ($plan->status_plan == "Finish") { ?>
                                    <button type="submit" class="btn btn-primary  disabled" disabled>Save</button>
                                <?php } else { ?>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                <?php } ?>
                            </div>
                        </div>

                        <?= form_close() ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>