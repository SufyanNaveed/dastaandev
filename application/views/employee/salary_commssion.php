<div class="content-body">
    <div class="card">
        <div class="card-header">
            <h5 class="title">
                    <h5><?php echo 'Salary & Commission List' ?></h5>
                </a>
            </h5>
            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
            <div class="heading-elements">
                <ul class="list-inline mb-0">
                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="card-content">
            <div id="notify" class="alert alert-success" style="display:none;">
                <a href="#" class="close" data-dismiss="alert">&times;</a>

                <div class="message"></div>
            </div>
            <div class="card-body">

                <table id="emptable" class="table table-striped table-bordered zero-configuration" cellspacing="0"
                       width="100%">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th><?php echo $this->lang->line('Month').'-'.$this->lang->line('Year') ?></th>
                        <th><?php echo $this->lang->line('Salary') ?></th>
                        <th><?php echo 'Commission'; ?></th>
                        <th><?php echo $this->lang->line('Status') ?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1;

                    foreach ($employee_commission as $row) {
                        
                        $month_year = date("F", mktime(0, 0, 0, $row['month'], 10)).' - '.$row['year'];                        
                        $salary = amountExchange($row['salary']);
                        $commission = amountExchange($row['commission']);
                        $status = $row['comission_status'];

                        if ($status == 'unpaid') {
                            $url = base_url().'employee/commission_status_update/'.$row['id'].'/'.$row['emp_id'];
                            $status = "<a href='$url' class='btn btn-primary btn-xs'>Unpaid</a>";
                        } else {
                            $status = "<label class='label label-success'> Paid </label>";
                        }

                    echo "<tr>
                        <td>$i</td>
                        <td>$month_year</td>
                        <td>$salary</td>
                        <td>$commission</td>
                        <td>$status</td> 
                    </tr>";
                        $i++;
                    }
                    ?>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>#</th>
                        <th><?php echo $this->lang->line('Month').'-'.$this->lang->line('Year') ?></th>
                        <th><?php echo $this->lang->line('Salary') ?></th>
                        <th><?php echo 'Commission'; ?></th> 
                        <th><?php echo $this->lang->line('Status') ?></th> 
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {

        //datatables
        $('#emptable').DataTable({responsive: true});


    });

    $('.delemp').click(function (e) {
        e.preventDefault();
        $('#empid').val($(this).attr('data-object-id'));

    });
</script>