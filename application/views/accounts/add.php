<article class="content">
    <div class="card card-block">
        <div id="notify" class="alert alert-success" style="display:none;">
            <a href="#" class="close" data-dismiss="alert">&times;</a>

            <div class="message"></div>
        </div>
        <div class="card card-block">
            <?php
            $attributes = array('class' => 'card-body', 'id' => 'data_form');
            echo form_open('', $attributes);
            ?>


            <h5><?php echo $this->lang->line('Add New Account') ?></h5>
            <hr>

            <div class="form-group row">

                <label class="col-sm-2 col-form-label"
                       for="accno"><?php echo $this->lang->line('Account No') ?></label>

                <div class="col-sm-6">
                    <input type="text" placeholder="Account Number"
                           class="form-control margin-bottom required" name="accno">
                </div>
            </div>
            <div class="form-group row">

                <label class="col-sm-2 col-form-label" for="holder"><?php echo $this->lang->line('Name') ?></label>

                <div class="col-sm-6">
                    <input type="text" placeholder="Name"
                           class="form-control margin-bottom required" name="holder">
                </div>
            </div>

            <div class="form-group row">

                <label class="col-sm-2 col-form-label"
                       for="intbal"><?php echo $this->lang->line('Intial Balance') ?></label>

                <div class="col-sm-6">
                    <input type="number" placeholder="Intial Balance"
                           class="form-control margin-bottom required" name="intbal">
                </div>
            </div>
            <div class="form-group row">

                <label class="col-sm-2 col-form-label" for="acode"><?php echo $this->lang->line('Note') ?></label>

                <div class="col-sm-6">
                    <input type="text" placeholder="Note"
                           class="form-control margin-bottom" name="acode">
                </div>
            </div>
            <div class="form-group row">

                <label class="col-sm-2 col-form-label"
                       for="lid"><?php echo $this->lang->line('Business Locations') ?></label>

                <div class="col-sm-6">
                    <select name="lid" class="form-control">
                        <?php
                        if (!$this->aauth->get_user()->loc) echo "<option value='0'>" . $this->lang->line('All') . "</option>";
                        foreach ($locations as $row) {
                            $cid = $row['id'];
                            $acn = $row['cname'];
                            $holder = $row['address'];
                            echo "<option value='$cid'>$acn - $holder</option>";
                        }
                        ?>
                    </select>


                </div>
            </div>
            <div class="form-group row">

                <label class="col-sm-2 col-form-label"></label>

                <div class="col-sm-4">
                    <input type="submit" id="submit-data" class="btn btn-success margin-bottom"
                           value="<?php echo $this->lang->line('Add Account') ?>" data-loading-text="Adding...">
                    <input type="hidden" value="accounts/addacc" id="action-url">
                </div>
            </div>


            </form>
        </div>
    </div>
</article>