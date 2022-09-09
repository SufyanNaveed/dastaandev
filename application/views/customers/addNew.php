<?php
//print_r($thiscustomer);exit;
//$customer=$customer[0];
?>
<div class="content-body">

    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Edit Customer</h4>

            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
            <div class="heading-elements">
                <ul class="list-inline mb-0">
                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                </ul>
            </div>
            <button class="btn btn-primary" id="open_preview" data-toggle="modal" data-target="#pre_preview_model" style="float:right;" >Preview &nbsp;&nbsp;<i class="fa fa-eye"></i></button>
            <button class="btn btn-primary add_new_rows" style="float:right;" data-count="<?php echo count($customer); ?>">Add Multiple Products &nbsp;&nbsp;<i class="fa fa-plus"></i></button>
        </div>

        <div class="card-body">
            <form method="post" id="data_form" class="form-horizontal">
                <?php foreach ($customer as $thisIndex => $thiscustomer) { ?>
                    <div class="card">
                        <div class="card-body">
                            <div class="default_row">
                                <?php if ($thisIndex) { ?>
                                    <div class="append_row_article append_row_for_article_<?php echo $thisIndex + 1; ?>" data-appendNewSize="<?php echo $thisIndex + 1; ?>"><hr> 
                                        <button type="button" class="btn btn-danger remove_new_rows" style="float:right;" data-count="<?php echo $thisIndex + 1; ?>">Remove Multiple &nbsp;&nbsp;<i class="fa fa-times"></i></button><br><br>
                                    <?php } ?>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h5 class="title text-center">Customer Info</h5>
                                            <div class="cus-bor cus-height">
                                                <?php if ($thisIndex == 0) { ?>
                                                    <div class="form-group row mt-1">
                                                        <label class="col-sm-4 col-form-label" for="name">ORDER/REF NO</label>
                                                        <div class="col-sm-7">
                                                            <input type="text" class="form-control margin-bottom b_input" name="or_ref_no" id="ref_no" readonly="" value="<?php echo $thiscustomer['reference_id'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mt-1">
                                                        <label class="col-sm-4 col-form-label" for="name">Booking Date</label>
                                                        <div class="col-sm-7">
                                                            <input type="text" class="form-control required margin-bottom" name="booking_date" value="<?php echo $thiscustomer['booking_date'] ?>" id="bDate">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mt-1">
                                                        <label class="col-sm-4 col-form-label" for="name">Trial Date</label>
                                                        <div class="col-sm-7">
                                                            <input type="text" class="form-control required margin-bottom b_input" name="t_date" value="<?php echo $thiscustomer['trial_date'] ?>" id="tDate">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mt-1">
                                                        <label class="col-sm-4 col-form-label" for="name">Delivery Date</label>
                                                        <div class="col-sm-7">
                                                            <input type="text" class="form-control required margin-bottom b_input" name="d_date" value="<?php echo $thiscustomer['d_date'] ?>" id="dDate">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mt-1">
                                                        <label class="col-sm-4 col-form-label" for="name">Customer Name</label>
                                                        <div class="col-sm-7">
                                                            <input type="text" class="form-control required margin-bottom b_input" name="customer_name" value="<?php echo $thiscustomer['name'] ?>" id="customer_name">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mt-1">
                                                        <label class="col-sm-4 col-form-label"
                                                               for="name">Mobile</label>

                                                        <div class="col-sm-7">
                                                            <input type="text" class="form-control required margin-bottom b_input" name="mobile" value="<?php echo $thiscustomer['phone'] ?>" id="mobile">
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                                <div class="form-group row  mt-1">
                                                    <label class="col-sm-4 col-form-label" for="name">Select Product:</label>
                                                    <div class="col-md-7 select_product">
                                                        <div class="input-group">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" name="is_suiting[]" id="suiting" value="suiting" <?php echo ($thiscustomer['is_suiting']) ? "checked" : ''; ?>>
                                                                <label class="custom-control-label" for="suiting">Suiting</label>
                                                            </div>
                                                        </div>
                                                        <div class="input-group">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" name="is_shirts[]" id="shirts" value="shirts" <?php echo ($thiscustomer['is_shirts']) ? "checked" : ''; ?>>
                                                                <label class="custom-control-label" for="shirts">Shirt</label>
                                                            </div>
                                                        </div>
                                                        <div class="input-group">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" name="is_shalwarqameez[]" id="shalwarqameez" value="shalwarqameez" <?php echo ($thiscustomer['is_shalwarqameez']) ? "checked" : ''; ?>>
                                                                <label class="custom-control-label" for="shalwarqameez"> Shalwar Kamiz</label>
                                                            </div>
                                                        </div> 
                                                    </div>
                                                </div>
                                                <!-- <div class="form-group row  mt-1">
                                                    <label class="col-sm-4 col-form-label" for="name">Select Language:</label>
                                                    <div class="col-md-7 select_product">
                                                        <div class="input-group">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" name="is_english" id="english" value="english">
                                                                <label class="custom-control-label" for="english">English</label>
                                                            </div>
                                                        </div>
                                                        <div class="input-group">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" name="is_urdu" id="urdu" value="urdu">
                                                                <label class="custom-control-label" for="urdu">Urdu</label>
                                                            </div>
                                                        </div> 
                                                    </div>
                                                </div>
                                                <div class="form-group row mt-1">
                                                    <label class="col-sm-4 col-form-label" for="name"><strong>TOTAL</strong></label>
                                                    <div class="col-sm-7">
                                                        <input type="text" class="form-control required margin-bottom b_input cal_blanc" name="total" id="total" onfocusout="cal_blace()">
                                                    </div>
                                                </div>
                                                <div class="form-group row mt-1">
                                                    <label class="col-sm-4 col-form-label"for="name"><strong>ADVANCE</strong></label>
                                                    <div class="col-sm-7">
                                                        <input type="text" class="form-control required margin-bottom b_input cal_blanc" name="advance" id="adv" onfocusout="cal_blace()">
                                                    </div>
                                                </div>
                                                <div class="form-group row mt-1">
                                                    <label class="col-sm-4 col-form-label" for="name"><strong>BALANCE</strong></label>
                                                    <div class="col-sm-7">
                                                        <input type="text" class="form-control margin-bottom b_input" name="BLANCE" id="blance" readonly="">
                                                    </div>
                                                </div> -->
                                            </div> 
                                        </div>
                                        <div class="col-md-4 pl-0 coat_waistCoat" <?php echo ($thiscustomer['is_suiting'] == 1) ? '' : 'style="display:none;"' ?> >
                                            <h5 class="title text-center">COAT / WAIST COAT</h5>
                                            <div class="cus-bor cus-height" style="height: 1130px;">
                                                <div class="form-group row mt-1">
                                                    <label class="col-sm-4 col-form-label" for="name">Neck</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control margin-bottom b_input" name="cNeck[]" id="cNeck" value="<?php echo $thiscustomer['coat_neck'] ?>">
                                                    </div>
                                                </div>

                                                <div class="form-group row mt-1">
                                                    <label class="col-sm-4 col-form-label" for="name">Chest</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control margin-bottom b_input " name="cChest[]" id="cChest" value="<?php echo $thiscustomer['coat_chest'] ?>">
                                                    </div>
                                                </div>

                                                <div class="form-group row mt-1">
                                                    <label class="col-sm-4 col-form-label" for="name">Belly Waist</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control margin-bottom b_input " name="cWaist[]" id="cWaist" value="<?php echo $thiscustomer['coat_waist'] ?>">
                                                    </div>
                                                </div>

                                                <div class="form-group row mt-1">
                                                    <label class="col-sm-4 col-form-label" for="name">Hip</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control margin-bottom b_input " name="cHips[]" id="cHips" value="<?php echo $thiscustomer['coat_hip'] ?>">
                                                    </div>
                                                </div>

                                                <div class="form-group row mt-1">
                                                    <label class="col-sm-4 col-form-label" for="name">Shoulder</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control margin-bottom b_input " name="cShoulder[]" id="cShoulder" value="<?php echo $thiscustomer['coat_shoulder'] ?>">
                                                    </div>
                                                </div>

                                                <div class="form-group row mt-1">
                                                    <label class="col-sm-4 col-form-label" for="name">Sleeves Length</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control margin-bottom b_input" name="cSleeve[]" id="cSleev" value="<?php echo $thiscustomer['coat_length'] ?>">
                                                    </div>
                                                </div>

                                                <div class="form-group row mt-1">
                                                    <label class="col-sm-4 col-form-label" for="name">Bicep</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control margin-bottom b_input" name="cBicep[]" id="cBicep" value="<?php echo $thiscustomer['coat_bicep'] ?>">
                                                    </div>
                                                </div>

                                                <div class="form-group row mt-1">
                                                    <label class="col-sm-4 col-form-label" for="name">Forearm</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control margin-bottom b_input" name="cForearm[]" id="cForearm" value="<?php echo $thiscustomer['coat_forearm'] ?>">
                                                    </div>
                                                </div>

                                                <div class="form-group row mt-1">
                                                    <label class="col-sm-4 col-form-label" for="name">Half Back</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control margin-bottom b_input " name="cHalfBack[]" id="cHalfBack" value="<?php echo $thiscustomer['coat_half_back'] ?>">
                                                    </div>
                                                </div>

                                                <div class="form-group row mt-1">
                                                    <label class="col-sm-4 col-form-label" for="name">Cross Back</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control margin-bottom b_input " name="cCrossBack[]" id="cCrossBack" value="<?php echo $thiscustomer['coat_cross_back'] ?>">
                                                    </div>
                                                </div>

                                                <div class="form-group row mt-1">
                                                    <label class="col-sm-4 col-form-label" for="name">Coat length</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control margin-bottom b_input" name="cLength[]" id="cLength" value="<?php echo $thiscustomer['coat_length'] ?>">
                                                    </div>
                                                </div>

                                                <div class="form-group row mt-1">
                                                    <label class="col-sm-4 col-form-label" for="name">3p waistcoat Length</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control margin-bottom b_input" name="3p_waistcoat_length[]" id="Sec_cLength" value="<?php echo $thiscustomer['p3_waistcoat_length'] ?>">
                                                    </div>
                                                </div>

                                                <div class="form-group row mt-1">
                                                    <label class="col-sm-4 col-form-label" for="name">Waistcoat Length</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control margin-bottom b_input" name="waistcoat_length[]" id="Sec_cLength" value="<?php echo $thiscustomer['waistcoat_length'] ?>">
                                                    </div>
                                                </div>

                                                <div class="form-group row mt-1">
                                                    <label class="col-sm-4 col-form-label" for="name">Princecoat Length</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control margin-bottom b_input" name="princecoat_length[]" id="Sec_cLength" value="<?php echo $thiscustomer['princecoat_length'] ?>">
                                                    </div>
                                                </div>

                                                <div class="form-group row mt-1">
                                                    <label class="col-sm-4 col-form-label" for="name">Sherwani Length</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control margin-bottom b_input" name="sherwani_length[]" id="Sec_cLength" value="<?php echo $thiscustomer['sherwani_length'] ?>">
                                                    </div>
                                                </div>

                                                <div class="form-group row mt-1">
                                                    <label class="col-sm-4 col-form-label" for="name">Long coat length</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control margin-bottom b_input" name="longcoat_length[]" id="Sec_cLength" value="<?php echo $thiscustomer['longcoat_length'] ?>">
                                                    </div>
                                                </div>

                                                <div class="form-group row mt-1">
                                                    <label class="col-sm-4 col-form-label" for="name">Chester length</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control margin-bottom b_input" name="chester_length[]" id="Sec_cLength" value="<?php echo $thiscustomer['chester_length'] ?>">
                                                    </div>
                                                </div>

                                                <div class="form-group row mt-1">
                                                    <label class="col-sm-4 col-form-label" for="name">Armhole</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control margin-bottom b_input" name="armhole[]" id="Sec_cLength" value="<?php echo $thiscustomer['armhole'] ?>">
                                                    </div>
                                                </div>                            

                                            </div>   
                                        </div>
                                        <div class="col-md-4 pl-0 pant"  <?php echo ($thiscustomer['is_suiting'] == 1) ? '' : 'style="display:none;"' ?>>
                                            <h5 class="title text-center">PANT</h5>
                                            <div class="cus-bor cus-height" style="height: 455px;">

                                                <div class="form-group row mt-1">
                                                    <label class="col-sm-5 col-form-label" for="name">Waist</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control margin-bottom b_input " name="pWaist[]" id="pWaist" value="<?php echo $thiscustomer['pant_waist'] ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row mt-1">
                                                    <label class="col-sm-5 col-form-label" for="name">Hip</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control margin-bottom b_input " name="pHip[]" id="pHip" value="<?php echo $thiscustomer['pant_hip'] ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row mt-1">
                                                    <label class="col-sm-5 col-form-label" for="name">Thigh</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control margin-bottom b_input " name="pThigh[]" id="pThigh" value="<?php echo $thiscustomer['pant_thigh'] ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row mt-1">
                                                    <label class="col-sm-5 col-form-label" for="name">Knee</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control margin-bottom b_input " name="pKnee[]" id="pKnee" value="<?php echo $thiscustomer['pant_knee'] ?>">
                                                    </div>
                                                </div>

                                                <div class="form-group row mt-1">
                                                    <label class="col-sm-5 col-form-label" for="name">Inseam / Inside Length</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control margin-bottom b_input " name="pInLength[]" id="pInLength" value="<?php echo $thiscustomer['pant_inside_length'] ?>">
                                                    </div>
                                                </div> 


                                                <div class="form-group row mt-1">
                                                    <label class="col-sm-5 col-form-label" for="name">Length</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control margin-bottom b_input " name="pLength[]" id="pLength" value="<?php echo $thiscustomer['pant_length'] ?>">
                                                    </div>
                                                </div>                                                     

                                                <div class="form-group row mt-1">
                                                    <label class="col-sm-5 col-form-label" for="name">Bottom</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control margin-bottom b_input " name="pBottom[]" id="pBottom" value="<?php echo $thiscustomer['pant_bottom'] ?>">
                                                    </div>
                                                </div>                           
                                            </div>

                                            <div class="pant"  <?php echo ($thiscustomer['is_suiting'] == 1) ? '' : 'style="display:none;"' ?>>
                                                <h5 class="title text-center">Checks</h5>
                                                <div class="cus-bor cus-height" style="height: 400px;">
                                                    <div class="form-group row  mt-1">
                                                        <div class="col-md-12">
                                                            <div class="input-group">
                                                                <div class="custom-control custom-radio">
                                                                    <input type="radio" class="custom-control-input" name="is_breasted[]" id="breasted" value="1" <?php echo ($thiscustomer['is_breasted'] == 1) ? "checked" : ''; ?>>
                                                                    <label class="custom-control-label" for="breasted">Single breasted</label>
                                                                </div>&nbsp;&nbsp;
                                                                <div class="custom-control custom-radio">
                                                                    <input type="radio" class="custom-control-input" name="is_breasted[]" id="double_breasted" value="2" <?php echo ($thiscustomer['is_breasted'] == 2) ? "checked" : ''; ?>>
                                                                    <label class="custom-control-label" for="double_breasted">Double breasted</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row  mt-1">
                                                        <div class="col-md-12">
                                                            <div class="input-group">
                                                                <div class="custom-control custom-radio">
                                                                    <input type="radio" class="custom-control-input" name="is_button_suit[]" id="button_suit" value="1"  <?php echo ($thiscustomer['is_button_suit'] == 1) ? "checked" : ''; ?>>
                                                                    <label class="custom-control-label" for="button_suit">One button</label>
                                                                </div>&nbsp;&nbsp;
                                                                <div class="custom-control custom-radio">
                                                                    <input type="radio" class="custom-control-input" name="is_button_suit[]" id="two_button_suit" value="2"  <?php echo ($thiscustomer['is_button_suit'] == 2) ? "checked" : ''; ?>>
                                                                    <label class="custom-control-label" for="two_button_suit">Two button</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row  mt-1">
                                                        <div class="col-md-12">
                                                            <div class="input-group">
                                                                <div class="custom-control custom-radio">
                                                                    <input type="radio" class="custom-control-input" name="is_lapel[]" id="lapel" value="1" <?php echo ($thiscustomer['is_lapel'] == 1) ? "checked" : ''; ?>>
                                                                    <label class="custom-control-label" for="lapel">Notch lapel</label>
                                                                </div>&nbsp;&nbsp;
                                                                <div class="custom-control custom-radio">
                                                                    <input type="radio" class="custom-control-input" name="is_lapel[]" id="peak_lapel" value="2" <?php echo ($thiscustomer['is_lapel'] == 2) ? "checked" : ''; ?>>
                                                                    <label class="custom-control-label" for="peak_lapel">Peak lapel</label>
                                                                </div>&nbsp;&nbsp;
                                                                <div class="custom-control custom-radio">
                                                                    <input type="radio" class="custom-control-input" name="is_lapel[]" id="shawl_lapel" value="3" <?php echo ($thiscustomer['is_lapel'] == 3) ? "checked" : ''; ?>>
                                                                    <label class="custom-control-label" for="shawl_lapel">Shawl lapel</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>  
                                                    <div class="form-group row  mt-1">
                                                        <div class="col-md-12">
                                                            <div class="input-group">
                                                                <div class="custom-control custom-radio">
                                                                    <input type="radio" class="custom-control-input" name="is_vent[]" id="vent" value="1" <?php echo ($thiscustomer['is_vent'] == 1) ? "checked" : ''; ?>>
                                                                    <label class="custom-control-label" for="vent">Single vent</label>
                                                                </div>&nbsp;&nbsp;
                                                                <div class="custom-control custom-radio">
                                                                    <input type="radio" class="custom-control-input" name="is_vent[]" id="double_vent" value="2" <?php echo ($thiscustomer['is_vent'] == 2) ? "checked" : ''; ?>>
                                                                    <label class="custom-control-label" for="double_vent">Double vents</label>
                                                                </div>&nbsp;&nbsp;
                                                                <div class="custom-control custom-radio">
                                                                    <input type="radio" class="custom-control-input" name="is_vent[]" id="no_vent" value="3" <?php echo ($thiscustomer['is_vent'] == 3) ? "checked" : ''; ?>>
                                                                    <label class="custom-control-label" for="no_vent">No vent</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row  mt-1">
                                                        <div class="col-md-12">
                                                            <div class="input-group">
                                                                <div class="custom-control custom-radio">
                                                                    <input type="radio" class="custom-control-input" name="is_wear[]" id="wear" value="1" <?php echo ($thiscustomer['is_wear'] == 1) ? "checked" : ''; ?>>
                                                                    <label class="custom-control-label" for="wear">Formal suit</label>
                                                                </div>&nbsp;&nbsp;
                                                                <div class="custom-control custom-radio">
                                                                    <input type="radio" class="custom-control-input" name="is_wear[]" id="casual_wear" value="2" <?php echo ($thiscustomer['is_wear'] == 2) ? "checked" : ''; ?>>
                                                                    <label class="custom-control-label" for="casual_wear"> Casual suit </label>
                                                                </div> &nbsp;&nbsp;
                                                                <div class="custom-control custom-radio">
                                                                    <input type="radio" class="custom-control-input" name="is_wear[]" id="groom_wear" value="3" <?php echo ($thiscustomer['is_wear'] == 3) ? "checked" : ''; ?>>
                                                                    <label class="custom-control-label" for="groom_wear">Grooms wear </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row  mt-1">
                                                        <div class="col-md-12">
                                                            <div class="input-group">
                                                                <div class="custom-control custom-radio">
                                                                    <input type="radio" class="custom-control-input" name="is_lined[]" id="lined" value="1" <?php echo ($thiscustomer['is_lined'] == 1) ? "checked" : ''; ?>>
                                                                    <label class="custom-control-label" for="lined">Fully lined </label>
                                                                </div>&nbsp;&nbsp;
                                                                <div class="custom-control custom-radio">
                                                                    <input type="radio" class="custom-control-input" name="is_lined[]" id="half_lined" value="2" <?php echo ($thiscustomer['is_lined'] == 2) ? "checked" : ''; ?>>
                                                                    <label class="custom-control-label" for="half_lined">Half lined</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row  mt-1">
                                                        <div class="col-md-12">
                                                            <div class="input-group">
                                                                <div class="custom-control custom-radio">
                                                                    <input type="radio" class="custom-control-input" name="is_ticket[]" id="ticket" value="1" <?php echo ($thiscustomer['is_breasted']) ? "checked" : ''; ?>>
                                                                    <label class="custom-control-label" for="ticket">Ticket pocket </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    <div class="form-group row  mt-1">
                                                        <div class="col-md-12">
                                                            <div class="input-group">
                                                                <div class="custom-control custom-radio">
                                                                    <input type="radio" class="custom-control-input" name="is_suit_pocket[]" id="regular" value="1" <?php echo ($thiscustomer['is_regular']) ? "checked" : ''; ?>>
                                                                    <label class="custom-control-label" for="regular">Regular pockets</label>
                                                                </div>&nbsp;&nbsp;
                                                                <div class="custom-control custom-radio">
                                                                    <input type="radio" class="custom-control-input" name="is_suit_pocket[]" id="slant" value="2" <?php echo ($thiscustomer['is_slant']) ? "checked" : ''; ?>>
                                                                    <label class="custom-control-label" for="slant">Slant pocket </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    <div class="form-group row  mt-1">
                                                        <div class="col-md-12">
                                                            <div class="input-group">
                                                                <div class="custom-control custom-radio">
                                                                    <input type="radio" class="custom-control-input" name="is_suit_button[]" id="metalic_button" value="1" <?php echo ($thiscustomer['is_metalic_button']) ? "checked" : ''; ?>>
                                                                    <label class="custom-control-label" for="metalic_button">Metallic buttons </label>
                                                                </div>&nbsp;&nbsp;
                                                                <div class="custom-control custom-radio">
                                                                    <input type="radio" class="custom-control-input" name="is_suit_button[]" id="button" value="2" <?php echo ($thiscustomer['is_plain_button']) ? "checked" : ''; ?>>
                                                                    <label class="custom-control-label" for="button">Plain buttons</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 pl-0 shirt_qameez" <?php echo ($thiscustomer['is_shirts'] == 1 || $thiscustomer['is_shalwarqameez']) ? '' : 'style="display:none;"' ?>>
                                            <h5 class="title text-center shalwar">KAMIZ / KURTA</h5>
                                            <h5 class="title text-center only_shirt">SHIRT</h5>
                                            <div class="cus-bor">
                                                <div class="only_shirt" <?php echo ($thiscustomer['is_shirts'] == 1) ? '' : 'style="display:none;"' ?>>
                                                    <div class="form-group row mt-1">
                                                        <label class="col-sm-5 col-form-label" for="name">Shirt Length</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" class="form-control margin-bottom b_input " name="shirtLength[]" id="kmzLength" value="<?php echo $thiscustomer['shirtLength'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mt-1">
                                                        <label class="col-sm-5 col-form-label" for="name">Shoulder</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" class="form-control margin-bottom b_input " name="shirtShoulder[]" id="kmzShoulder" value="<?php echo $thiscustomer['shirtShoulder'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mt-1">
                                                        <label class="col-sm-5 col-form-label" for="name">Sleeves Length</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" class="form-control margin-bottom b_input " name="shirtSleeves[]" id="kmzSleeves" value="<?php echo $thiscustomer['shirtSleeves'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mt-1">
                                                        <label class="col-sm-5 col-form-label" for="name">Neck</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" class="form-control margin-bottom b_input " name="shirtNeck[]" id="kmzNeck" value="<?php echo $thiscustomer['shirtNeck'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mt-1">
                                                        <label class="col-sm-5 col-form-label" for="name">Chest</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" class="form-control margin-bottom b_input " name="shirtChest[]" id="kmzChest" value="<?php echo $thiscustomer['shirtChest'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mt-1">
                                                        <label class="col-sm-5 col-form-label" for="name">Waist</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" class="form-control margin-bottom b_input " name="shirtWaist[]" id="kmzWaist" value="<?php echo $thiscustomer['shirtChest'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mt-1">
                                                        <label class="col-sm-5 col-form-label" for="name">Hip</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" class="form-control margin-bottom b_input " name="shirtHips[]" id="kmzHips" value="<?php echo $thiscustomer['shirtHips'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mt-1">
                                                        <label class="col-sm-5 col-form-label" for="name">Bicep</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" class="form-control margin-bottom b_input" name="shirtBicep[]" id="kmzBicep" value="<?php echo $thiscustomer['shirtBicep'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mt-1">
                                                        <label class="col-sm-5 col-form-label" for="name">Forearm</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" class="form-control margin-bottom b_input" name="shirtForearm[]" id="kmzForearm" value="<?php echo $thiscustomer['shirtForearm'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mt-1">
                                                        <label class="col-sm-5 col-form-label" for="name">Armhole</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" class="form-control margin-bottom b_input" name="shirtarmhole[]" id="kmzForearm" value="<?php echo $thiscustomer['shirtarmhole'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mt-1">
                                                        <label class="col-sm-5 col-form-label" for="name">Cuff</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" class="form-control margin-bottom b_input" name="shirtcuff[]" id="kmzForearm" value="<?php echo $thiscustomer['shirtcuff'] ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="shalwar" <?php echo ($thiscustomer['is_shalwarqameez'] == 1) ? '' : 'style="display:none;"' ?>>
                                                    <div class="form-group row mt-1">
                                                        <label class="col-sm-5 col-form-label" for="name">Kameez Length</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" class="form-control margin-bottom b_input " name="kmzLength[]" id="kmzLength" value="<?php echo $thiscustomer['kmz_length'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mt-1">
                                                        <label class="col-sm-5 col-form-label" for="name">Kurta Length</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" class="form-control margin-bottom b_input " name="kurtaLength[]" id="kmzLength" value="<?php echo $thiscustomer['kmz_length'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mt-1">
                                                        <label class="col-sm-5 col-form-label" for="name">Shoulder</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" class="form-control margin-bottom b_input " name="kmzShoulder[]" id="kmzShoulder" value="<?php echo $thiscustomer['kmz_shoulder'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mt-1">
                                                        <label class="col-sm-5 col-form-label" for="name">Sleeves Length</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" class="form-control margin-bottom b_input " name="kmzSleeves[]" id="kmzSleeves" value="<?php echo $thiscustomer['kmz_sleeves'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mt-1">
                                                        <label class="col-sm-5 col-form-label" for="name">Neck</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" class="form-control margin-bottom b_input " name="kmzNeck[]" id="kmzNeck" value="<?php echo $thiscustomer['kmz_neck'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mt-1">
                                                        <label class="col-sm-5 col-form-label" for="name">Chest</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" class="form-control margin-bottom b_input " name="kmzChest[]" id="kmzChest" value="<?php echo $thiscustomer['kmz_chest'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mt-1">
                                                        <label class="col-sm-5 col-form-label" for="name">Waist</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" class="form-control margin-bottom b_input " name="kmzWaist[]" id="kmzWaist" value="<?php echo $thiscustomer['kmz_waist'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mt-1">
                                                        <label class="col-sm-5 col-form-label" for="name">Hip</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" class="form-control margin-bottom b_input " name="kmzHips[]" id="kmzHips"  value="<?php echo $thiscustomer['kmz_hip'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mt-1">
                                                        <label class="col-sm-5 col-form-label" for="name">Bicep</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" class="form-control margin-bottom b_input" name="kmzBicep[]" id="kmzBicep" value="<?php echo $thiscustomer['kmz_bicep'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mt-1">
                                                        <label class="col-sm-5 col-form-label"  for="name">Forearm</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" class="form-control margin-bottom b_input" name="kmzForearm[]" id="kmzForearm" value="<?php echo $thiscustomer['kmz_forearm'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mt-1">
                                                        <label class="col-sm-5 col-form-label" for="name">Armhole</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" class="form-control margin-bottom b_input" name="kmzarmhole[]" id="kmzForearm" value="<?php echo $thiscustomer['kmzarmhole'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mt-1">
                                                        <label class="col-sm-5 col-form-label" for="name">Cuff</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" class="form-control margin-bottom b_input" name="kmzcuff[]" id="kmzForearm" value="<?php echo $thiscustomer['kmzcuff'] ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 pl-0 shalwar" <?php echo ($thiscustomer['is_shalwarqameez'] == 1) ? '' : 'style="display:none;"' ?>>                    
                                            <h5 class="title text-center">SHALWAR / PAJAMA</h5>
                                            <div class="cus-bor">
                                                <div class="form-group row mt-1">
                                                    <label class="col-sm-5 col-form-label"
                                                           for="name">Shalwar Length</label>

                                                    <div class="col-sm-6">
                                                        <input type="text"
                                                               class="form-control margin-bottom b_input " name="shlLength[]" value="<?php echo $thiscustomer['shl_length'] ?>"
                                                               id="shlLength">
                                                    </div>
                                                </div>
                                                <div class="form-group row mt-1">
                                                    <label class="col-sm-5 col-form-label"
                                                           for="name">Shalwar Bottom</label>

                                                    <div class="col-sm-6">
                                                        <input type="text"
                                                               class="form-control margin-bottom b_input " name="shlBottom[]" value="<?php echo $thiscustomer['shl_bottom'] ?>"
                                                               id="shlBottom">
                                                    </div>
                                                </div>

                                                <div class="form-group row mt-1">
                                                    <label class="col-sm-5 col-form-label"
                                                           for="name">Asan Tyar</label>

                                                    <div class="col-sm-6">
                                                        <input type="text"
                                                               class="form-control margin-bottom b_input " name="shlAsanTyar[]" value="<?php echo $thiscustomer['shl_AsanTyar'] ?>"
                                                               id="shlAsanTyar">
                                                    </div>
                                                </div>

                                                <div class="form-group row mt-1">
                                                    <label class="col-sm-5 col-form-label"
                                                           for="name">Shalwar Gaira Tyar</label>

                                                    <div class="col-sm-6">
                                                        <input type="text"
                                                               class="form-control margin-bottom b_input " name="shlGairaTyar[]" value="<?php echo $thiscustomer['shl_GairaTyar'] ?>"
                                                               id="shlGairaTyar">
                                                    </div>
                                                </div>

                                                <div class="form-group row mt-1">
                                                    <label class="col-sm-5 col-form-label" for="name">Pajama Length</label>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control margin-bottom b_input " name="pjamaLength[]" id="shlLength" value="<?php echo $thiscustomer['pjamaLength'] ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row mt-1">
                                                    <label class="col-sm-5 col-form-label" for="name">Pajama Bottom</label>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control margin-bottom b_input " name="pjamaBottom[]" id="shlBottom" value="<?php echo $thiscustomer['pjamaBottom'] ?>">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="shalwar"  <?php echo ($thiscustomer['is_shalwarqameez'] == 1) ? '' : 'style="display:none;"' ?>>                    
                                                <h5 class="title text-center">Checks</h5>
                                                <div class="cus-bor">
                                                    <div class="form-group row  mt-1">
                                                        <div class="col-md-12">
                                                            <div class="input-group">
                                                                <div class="custom-control custom-radio form-check-inline">
                                                                    <input type="radio" class="custom-control-input" name="is_collar[]" id="is_kamiz_collar" value="1" <?php echo ($thiscustomer['is_collar'] == 1) ? "checked" : ''; ?>>
                                                                    <label class="custom-control-label" for="is_kamiz_collar">Collar</label>
                                                                </div> &nbsp;&nbsp;
                                                                <div class="custom-control custom-radio form-check-inline">
                                                                    <input type="radio" class="custom-control-input" name="is_collar[]" id="is_half_band" value="2" <?php echo ($thiscustomer['is_collar'] == 2) ? "checked" : ''; ?>>
                                                                    <label class="custom-control-label" for="is_half_band">Half Band</label>
                                                                </div>&nbsp;&nbsp;
                                                                <div class="custom-control custom-radio form-check-inline">
                                                                    <input type="radio" class="custom-control-input" name="is_collar[]" id="is_full_band" value="3" <?php echo ($thiscustomer['is_collar'] == 3) ? "checked" : ''; ?>>
                                                                    <label class="custom-control-label" for="is_full_band">Full Band</label>
                                                                </div>&nbsp;&nbsp;
                                                                <div class="custom-control custom-radio form-check-inline">
                                                                    <input type="radio" class="custom-control-input" name="is_collar[]" id="moon_neck" value="4" <?php echo ($thiscustomer['is_collar'] == 4) ? "checked" : ''; ?>>
                                                                    <label class="custom-control-label" for="moon_neck">Moon Neck</label>
                                                                </div>
                                                                <div class="input-group collar_text"  <?php echo (!empty($thiscustomer['collar_ins'])) ? '' : 'style="display:none;"' ?>>
                                                                    <input type="text" class="form-control" style="margin-right:20px;margin-top:5px;" name="collar_ins[]" id="collar_ins"
                                                                           alue="4" value=" <?php echo $thiscustomer['collar_ins']; ?>"
                                                                           placeholder="Write instructions..."> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row  mt-1">
                                                        <div class="col-md-12">
                                                            <div class="input-group">
                                                                <div class="custom-control custom-radio">
                                                                    <input type="radio" class="custom-control-input" name="is_front[]" id="is_round_front" <?php echo ($thiscustomer['is_round_front']) ? "checked" : ''; ?> value="1">
                                                                    <label class="custom-control-label" for="is_round_front">Round Front</label>
                                                                </div>&nbsp;&nbsp;
                                                                <div class="custom-control custom-radio">
                                                                    <input type="radio" class="custom-control-input" name="is_front[]" id="straight_front" <?php echo ($thiscustomer['is_straight_front']) ? "checked" : ''; ?>  value="2">
                                                                    <label class="custom-control-label" for="straight_front">Straight Front</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row  mt-1">
                                                        <div class="col-md-12">
                                                            <div class="input-group">
                                                                <div class="custom-control custom-radio">
                                                                    <input type="radio" class="custom-control-input" name="is_front_pocket[]" id="is_front_pocket" value="1" <?php echo ($thiscustomer['is_front_pocket']) ? "checked" : ''; ?>>
                                                                    <label class="custom-control-label" for="is_front_pocket">Front Pocket</label>
                                                                </div>
                                                                <div class="input-group front_pocket_text" >
                                                                    <input type="text" class="form-control" style="margin-right:20px; margin-top:5px;" name="front_pocket_ins[]" id="front_pocket_ins"
                                                                           value="<?php echo $thiscustomer['front_pocket_ins']; ?>"
                                                                           placeholder="Write instructions..."> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row  mt-1">
                                                        <div class="col-md-12">
                                                            <div class="input-group">
                                                                <div class="custom-control custom-radio">
                                                                    <input type="radio" class="custom-control-input" name="is_shalwar_pocket[]" id="is_shalwar_pocket" value="1" <?php echo ($thiscustomer['is_shalwar_pocket']) ? "checked" : ''; ?>>
                                                                    <label class="custom-control-label" for="is_shalwar_pocket">Shalwar Pocket</label>
                                                                </div>
                                                                <div class="input-group shalwar_pocket_text">
                                                                    <input type="text" class="form-control" style="margin-right:20px;margin-top:5px;" name="shalwar_pocket_ins[]" id="shalwar_pocket_ins"
                                                                           value="<?php echo $thiscustomer['shalwar_pocket_ins']; ?>"
                                                                           placeholder="Write instructions..."> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row  mt-1">
                                                        <div class="col-md-12">
                                                            <div class="input-group">
                                                                <div class="custom-control custom-radio">
                                                                    <input type="radio" class="custom-control-input" name="is_pocket[]" id="1side_pocket" value="1" <?php echo ($thiscustomer['is_1side_pocket']) ? "checked" : ''; ?> >
                                                                    <label class="custom-control-label" for="1side_pocket">1 side pocket</label>
                                                                </div>&nbsp;&nbsp;
                                                                <div class="custom-control custom-radio">
                                                                    <input type="radio" class="custom-control-input" name="is_pocket[]" id="2side_pocket" value="2" <?php echo ($thiscustomer['is_2side_pocket']) ? "checked" : ''; ?> >
                                                                    <label class="custom-control-label" for="2side_pocket">2 side pocket</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row  mt-1">
                                                        <div class="col-md-12">
                                                            <div class="input-group">
                                                                <div class="custom-control custom-radio">
                                                                    <input type="radio" class="custom-control-input" name="is_sleeve_placket[]" id="is_sleeve_placket" value="1" <?php echo ($thiscustomer['is_sleeve_placket']) ? "checked" : ''; ?> >
                                                                    <label class="custom-control-label" for="is_sleeve_placket">Sleeve Placket Button</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row  mt-1">
                                                        <div class="col-md-12">
                                                            <div class="input-group">
                                                                <div class="custom-control custom-radio">
                                                                    <input type="radio" class="custom-control-input" name="is_button[]" id="is_plain_button" value="1" <?php echo ($thiscustomer['is_button'] == 1) ? "checked" : ''; ?> >
                                                                    <label class="custom-control-label" for="is_plain_button">Plain Button</label>
                                                                </div>&nbsp;&nbsp;
                                                                <div class="custom-control custom-radio">
                                                                    <input type="radio" class="custom-control-input" name="is_button[]" id="fancy_button" value="2" <?php echo ($thiscustomer['is_button'] == 2) ? "checked" : ''; ?> >
                                                                    <label class="custom-control-label" for="fancy_button">Fancy Button</label>
                                                                </div>&nbsp;&nbsp;
                                                                <div class="custom-control custom-radio">
                                                                    <input type="radio" class="custom-control-input" name="is_button[]" id="loop_button" value="3" <?php echo ($thiscustomer['is_button'] == 3) ? "checked" : ''; ?> >
                                                                    <label class="custom-control-label" for="loop_button">Loop Button</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row  mt-1">
                                                        <div class="col-md-12">
                                                            <div class="input-group">
                                                                <div class="custom-control custom-radio">
                                                                    <input type="radio" class="custom-control-input" name="is_cuff[]" id="is_button_cuff" value="1" <?php echo ($thiscustomer['is_button_cuff'] == 1) ? "checked" : ''; ?>>
                                                                    <label class="custom-control-label" for="is_button_cuff">Button Cuff</label>
                                                                </div>&nbsp;&nbsp;
                                                                <div class="custom-control custom-radio">
                                                                    <input type="radio" class="custom-control-input" name="is_cuff[]" id="is_french_cuff" value="2" <?php echo ($thiscustomer['is_button_cuff'] == 2) ? "checked" : ''; ?>>
                                                                    <label class="custom-control-label" for="is_french_cuff">French Cuff</label>
                                                                </div>&nbsp;&nbsp;
                                                                <div class="custom-control custom-radio">
                                                                    <input type="radio" class="custom-control-input" name="is_cuff[]" id="is_open_sleeves" value="3" <?php echo ($thiscustomer['is_button_cuff'] == 3) ? "checked" : ''; ?>>
                                                                    <label class="custom-control-label" for="is_open_sleeves">Open Sleeves</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row  mt-1">
                                                        <div class="col-md-12">
                                                            <div class="input-group">
                                                                <div class="custom-control custom-radio">
                                                                    <input type="radio" class="custom-control-input" name="is_design[]" id="is_half_design" value="1" <?php echo ($thiscustomer['is_design'] == 1) ? "checked" : ''; ?>>
                                                                    <label class="custom-control-label" for="is_half_design">Half design</label>
                                                                </div>&nbsp;&nbsp;
                                                                <div class="custom-control custom-radio">
                                                                    <input type="radio" class="custom-control-input" name="is_design[]" id="is_full_design" value="2" <?php echo ($thiscustomer['is_design'] == 2) ? "checked" : ''; ?>>
                                                                    <label class="custom-control-label" for="is_full_design">Full design</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row  mt-1">
                                                        <div class="col-md-12">
                                                            <div class="input-group">
                                                                <div class="custom-control custom-radio">
                                                                    <input type="radio" class="custom-control-input" name="is_kanta[]" id="is__kanta" value="1" <?php echo ($thiscustomer['is_kanta'] == 1) ? "checked" : ''; ?>>
                                                                    <label class="custom-control-label" for="is__kanta">Kanta</label>
                                                                </div>&nbsp;&nbsp;
                                                                <div class="custom-control custom-radio">
                                                                    <input type="radio" class="custom-control-input" name="is_kanta[]" id="is_jali_kanta" value="2" <?php echo ($thiscustomer['is_kanta'] == 2) ? "checked" : ''; ?>>
                                                                    <label class="custom-control-label" for="is_jali_kanta">Jali Kanta</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row  mt-1">
                                                        <div class="col-md-12">
                                                            <div class="input-group">
                                                                <div class="custom-control custom-radio">
                                                                    <input type="radio" class="custom-control-input" name="is_stitch[]" id="is_single_stitch" value="1" <?php echo ($thiscustomer['is_stitch'] == 1) ? "checked" : ''; ?>>
                                                                    <label class="custom-control-label" for="is_single_stitch">Single stitch</label>
                                                                </div>&nbsp;&nbsp;
                                                                <div class="custom-control custom-radio">
                                                                    <input type="radio" class="custom-control-input" name="is_stitch[]" id="is_double_stitch" value="2" <?php echo ($thiscustomer['is_stitch'] == 2) ? "checked" : ''; ?>>
                                                                    <label class="custom-control-label" for="is_double_stitch">Full double stitch</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row  mt-1">
                                                        <div class="col-md-12">
                                                            <div class="input-group">
                                                                <div class="custom-control custom-radio">
                                                                    <input type="radio" class="custom-control-input" name="is_thread[]" id="is_shin_thread" value="1" <?php echo ($thiscustomer['is_thread'] == 1) ? "checked" : ''; ?>>
                                                                    <label class="custom-control-label" for="is_shin_thread">Shining thread</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row  mt-1">
                                                        <div class="col-md-12">
                                                            <div class="input-group">
                                                                <div class="custom-control custom-radio">
                                                                    <input type="radio" class="custom-control-input" name="is_bookrum[]" id="is_hard_bookrum" value="1" <?php echo ($thiscustomer['is_bookrum'] == 1) ? "checked" : ''; ?>>
                                                                    <label class="custom-control-label" for="is_hard_bookrum">Hard bookrum</label>
                                                                </div>&nbsp;&nbsp;
                                                                <div class="custom-control custom-radio">
                                                                    <input type="radio" class="custom-control-input" name="is_bookrum[]" id="is_soft_bookrum" value="2" <?php echo ($thiscustomer['is_bookrum'] == 2) ? "checked" : ''; ?>>
                                                                    <label class="custom-control-label" for="is_soft_bookrum">Soft bookrum</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-md-4 pl-0 only_shirt" <?php echo ($thiscustomer['is_shirts'] == 1) ? '' : 'style="display:none;"' ?>>
                                            <h5 class="title text-center">Checks</h5>
                                            <div class="cus-bor">
                                                <div class="form-group row  mt-1">
                                                    <div class="col-md-12">
                                                        <div class="input-group">
                                                            <div class="custom-control custom-radio form-check-inline">
                                                                <input type="checkbox" class="custom-control-input" name="is_placket[]" id="front_placket" value="1" <?php echo ($thiscustomer['is_front_placket']) ? "checked" : ''; ?>>
                                                                <label class="custom-control-label" for="front_placket">Front placket</label>
                                                            </div> &nbsp;&nbsp;
                                                            <div class="custom-control custom-radio form-check-inline">
                                                                <input type="checkbox" class="custom-control-input" name="is_placket[]" id="plane_placket" value="2" <?php echo ($thiscustomer['is_plane_placket']) ? "checked" : ''; ?>>
                                                                <label class="custom-control-label" for="plane_placket"> Plain Front</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row  mt-1">
                                                    <div class="col-md-12">
                                                        <div class="input-group">
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" class="custom-control-input" name="is_shirt_cuff[]" id="is_shirt_button_cuff" value="1" <?php echo ($thiscustomer['is_shirt_cuff'] == 1) ? "checked" : ''; ?>>
                                                                <label class="custom-control-label" for="is_shirt_button_cuff">Button Cuff </label>
                                                            </div> &nbsp;&nbsp;
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" class="custom-control-input" name="is_shirt_cuff[]" id="is_shirt_double_cuff" value="2" <?php echo ($thiscustomer['is_shirt_cuff'] == 2) ? "checked" : ''; ?>>
                                                                <label class="custom-control-label" for="is_shirt_double_cuff">Double Cuff</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row  mt-1">
                                                    <div class="col-md-12">
                                                        <div class="input-group">
                                                            <div class="custom-control custom-radio form-check-inline">
                                                                <input type="radio" class="custom-control-input" name="is_shirt_collar[]" id="is__shirt_collar" value="1" <?php echo ($thiscustomer['is_shirt_collar'] == 1) ? "checked" : ''; ?>>
                                                                <label class="custom-control-label" for="is__shirt_collar">Collar</label>
                                                            </div> &nbsp;&nbsp;
                                                            <div class="custom-control custom-radio form-check-inline">
                                                                <input type="radio" class="custom-control-input" name="is_shirt_collar[]" id="is_shirt_half_band" value="2" <?php echo ($thiscustomer['is_shirt_collar'] == 2) ? "checked" : ''; ?>>
                                                                <label class="custom-control-label" for="is_shirt_half_band">Half Band</label>
                                                            </div>&nbsp;&nbsp;
                                                            <div class="custom-control custom-radio form-check-inline">
                                                                <input type="radio" class="custom-control-input" name="is_shirt_collar[]" id="is_shirt_full_band" value="3" <?php echo ($thiscustomer['is_shirt_collar'] == 3) ? "checked" : ''; ?>>
                                                                <label class="custom-control-label" for="is_shirt_full_band">Full Band</label>
                                                            </div><br><br>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 shirt_collar_text"  <?php echo!empty($thiscustomer['is_shirt_collar']) ? '' : 'style="display:none;"' ?>>
                                                        <div class="custom-control custom-radio form-check-inline">
                                                            <input type="radio" class="custom-control-input" name="is_shirt_collar_type[]" id="tie_collar" value="1" <?php echo ($thiscustomer['is_shirt_collar_type'] == 1) ? "checked" : ''; ?>>
                                                            <label class="custom-control-label" for="tie_collar">Tie Collar</label>
                                                        </div><br>
                                                        <div class="custom-control custom-radio form-check-inline">
                                                            <input type="radio" class="custom-control-input" name="is_shirt_collar_type[]" id="button_down" value="2" <?php echo ($thiscustomer['is_shirt_collar_type'] == 2) ? "checked" : ''; ?>>
                                                            <label class="custom-control-label" for="button_down">Button Down</label>
                                                        </div><br>
                                                        <div class="custom-control custom-radio form-check-inline">
                                                            <input type="radio" class="custom-control-input" name="is_shirt_collar_type[]" id="vintage_clud" value="3" <?php echo ($thiscustomer['is_shirt_collar_type'] == 3) ? "checked" : ''; ?>>
                                                            <label class="custom-control-label" for="vintage_clud">Vintage club</label>
                                                        </div><br>
                                                        <div class="custom-control custom-radio form-check-inline">
                                                            <input type="radio" class="custom-control-input" name="is_shirt_collar_type[]" id="half_french" value="4" <?php echo ($thiscustomer['is_shirt_collar_type'] == 4) ? "checked" : ''; ?>>
                                                            <label class="custom-control-label" for="half_french">Half French</label>
                                                        </div><br>
                                                        <div class="custom-control custom-radio form-check-inline">
                                                            <input type="radio" class="custom-control-input" name="is_shirt_collar_type[]" id="full_french" value="5" <?php echo ($thiscustomer['is_shirt_collar_type'] == 5) ? "checked" : ''; ?>>
                                                            <label class="custom-control-label" for="full_french">Full French</label>
                                                        </div><br>
                                                        <div class="custom-control custom-radio form-check-inline">
                                                            <input type="radio" class="custom-control-input" name="is_shirt_collar_type[]" id="tuxedo" value="6" <?php echo ($thiscustomer['is_shirt_collar_type'] == 6) ? "checked" : ''; ?>>
                                                            <label class="custom-control-label" for="tuxedo">Tuxedo</label>
                                                        </div>                                        
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" style="margin-right:20px;margin-top:5px;" name="shirt_collar_ins[]" id="shirt_collar_ins"
                                                                   value="<?php echo ($thiscustomer['shirt_collar_ins']); ?>"
                                                                   placeholder="Write instructions..."> 
                                                        </div>
                                                    </div>
                                                </div>                         
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="row mt-1 coat_waistCoat" <?php echo ($thiscustomer['instrucations']) ? '' : 'style="display:none;"' ?>>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="email" class="col-form-label">Suiting Instructions:</label>
                                                <textarea class="form-control" name="inst[]" rows="7" id="comment" value="<?php echo ($thiscustomer['instrucations']); ?>"></textarea>
                                            </div>
                                        </div>
                                    </div> 

                                    <div class="row mt-1 only_shirt" <?php echo ($thiscustomer['shirt_inst']) ? '' : 'style="display:none;"' ?>>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="email" class="col-form-label">Shirts Instructions:</label>
                                                <textarea class="form-control" name="shirt_inst[]" rows="7" value="<?php echo ($thiscustomer['shirt_inst']); ?>" id="comment"></textarea>
                                            </div>
                                        </div>
                                    </div> 

                                    <div class="row mt-1 shalwar" <?php echo ($thiscustomer['shalwar_inst']) ? '' : 'style="display:none;"' ?>>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="email" class="col-form-label">Shalwar Kameez Instructions:</label>
                                                <textarea class="form-control" name="shalwar_inst[]" rows="7" value="<?php echo ($thiscustomer['shalwar_inst']); ?>" id="comment"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <input type="hidden" value="" id="product_stack" name="product_stack">
                            <input type="hidden" value="" id="product_stack_list" name="product_stack_list">
                            <input type="hidden" value="<?php echo $thiscustomer["id"]; ?>" name="customer_id">
                        </div></div>
                <?php } ?>
                <div class="append_new_size_article"></div>
                <input type="hidden" value="customers/updatecolthingCustomer" id="action-url">
            </form>
        </div>

    </div>





    <div id="mybutton" class="mt-1">
        <input type="submit" id="submit-data"
               class="btn btn-lg btn btn-primary margin-bottom round float-xs-right mr-2"
               value="Update Customer"
               data-loading-text="Saving...">
    </div>
</div>

<div id="pre_preview_model" class="modal fade ">

    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title">Preview</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <center><form>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" value="0" onclick="changeLamguage()" name="is_english" id="customRadio1" checked>
                            <label class="form-check-label" for="customRadio1">Urdu</label>
                        </div>
                        <div class="form-check form-check-inline ms-4">
                            <input type="radio" class="form-check-input" value="1" onclick="changeLamguage()" name="is_english" id="customRadio2">
                            <label class="form-check-label" for="customRadio2">English</label>
                        </div>
                    </form></center>
                <hr>
                <div id="preview_body"></div>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn">Cancel</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    // function cal_blace(){
    //   var total = $("#total").val();
    //   var adv = $("#adv").val();

    //   $("#blance").val(total - adv);
    // }


    $("#bDate").datepicker();
    $("#tDate").datepicker();
    $("#dDate").datepicker();

    $(document).ready(function () {
        $('input[type="checkbox"]').click(function () {
            if ($(this).is(":checked") && $(this).val() == 'suiting') {
                $('.default_row #shirts').prop('checked', false);
                $('.default_row #shalwarqameez').prop('checked', false);

                $(".default_row .coat_waistCoat").show();
                $(".default_row .pant").show();
                $(".default_row .shirt_qameez").hide();
                $(".default_row .shalwar").hide();
                $(".default_row .only_shirt").hide();
                $("#product_stack").val(1);
                $("#product_stack_list").val(function () {
                    return this.value + '1';
                });
            } else if ($(this).is(":checked") && $(this).val() == 'shirts') {

                $('.default_row #suiting').prop('checked', false);
                $('.default_row #shalwarqameez').prop('checked', false);

                $(".default_row .coat_waistCoat").hide();
                $(".default_row .pant").hide();
                $(".default_row .shirt_qameez").show();
                $(".default_row .only_shirt").show();
                $(".default_row .shalwar").hide();
                $("#product_stack").val(2);
                $("#product_stack_list").val(function () {
                    return this.value + '2';
                });
            } else if ($(this).is(":checked") && $(this).val() == 'shalwarqameez') {

                $('.default_row #shirts').prop('checked', false);
                $('.default_row #suiting').prop('checked', false);

                $(".default_row .coat_waistCoat").hide();
                $(".default_row .pant").hide();
                $(".default_row .only_shirt").hide();
                $(".default_row .shirt_qameez").show();
                $(".default_row .shalwar").show();
                $("#product_stack").val(3);
                $("#product_stack_list").val(function () {
                    return this.value + '3';
                });
            }
            if ($(this).is(":checked") && $(this).val() == 'english') {
                $('#urdu').prop('checked', false);
            } else if ($(this).is(":checked") && $(this).val() == 'urdu') {
                $('#english').prop('checked', false);
            }

            $('.add_new_rows').show();
            $('#open_preview').show();

        });

        $("input[name='is_collar[]']").change(function () {
            $(".default_row .collar_text").show();
        });

        $("input[name='is_front_pocket[]']").change(function () {
            $(".default_row .front_pocket_text").show();
        });

        $("input[name='is_shalwar_pocket[]']").change(function () {
            $(".default_row .shalwar_pocket_text").show();
        });

        $("input[name='is_shirt_collar[]']").change(function () {
            $(".default_row .shirt_collar_text").show();
        });

        $(document).on('click', 'input[name="is_shirt_collar[]"]', function () {
            var count = $(this).attr('data-count');
            $(".append_row_for_article_" + count + " .shirt_collar_text_" + count).show();
        });

        $(document).on('click', 'input[name="is_shalwar_pocket[]"]', function () {
            var count = $(this).attr('data-count');
            $(".append_row_for_article_" + count + " .shalwar_pocket_text_" + count).show();
        });

        $(document).on('click', 'input[name="is_front_pocket[]"]', function () {
            var count = $(this).attr('data-count');
            $(".append_row_for_article_" + count + " .front_pocket_text_" + count).show();
        });

        $(document).on('click', 'input[name="is_collar[]"]', function () {
            var count = $(this).attr('data-count');
            $(".append_row_for_article_" + count + " .collar_text_" + count).show();
        });

        $('.add_new_rows').click(function () {
            var count = $(this).attr('data-count');
            count = count == 0 ? 1 : count;
            $(this).attr('data-count', parseInt(count) + 1);
            $.ajax({
                url: "<?php echo base_url('customers/new_articles_append') ?>",
                type: "POST",
                data: "count=" + count + '&' + crsf_token + '=' + crsf_hash,
                dataType: "html",
                success: function (data) {
                    $(".append_new_size_article").append(data);
                }
            });
        });

        $(document).on('click', '.remove_new_rows', function () {
            var count = $(this).attr('data-count');
            count = count == 0 ? 1 : count;
            $('.append_row_for_article_' + count).remove();
            $('.add_new_rows').attr('data-count', parseInt(count) - 1);
        });

        $(document).on('click', '.Spro', function () {
            var val = $(this).val();
            var counter = $(this).attr('data-counter');
            if ($(this).is(":checked") && $(this).val() == 'suiting') {

                $('.append_row_for_article_' + counter + ' #shirts_' + counter).prop('checked', false);
                $('.append_row_for_article_' + counter + ' #shalwarqameez_' + counter).prop('checked', false);

                $(".append_row_for_article_" + counter + " .coat_waistCoat").show();
                $(".append_row_for_article_" + counter + " .pant").show();
                $(".append_row_for_article_" + counter + " .shirt_qameez").hide();
                $(".append_row_for_article_" + counter + " .shalwar").hide();
                $(".append_row_for_article_" + counter + " .only_shirt").hide();
                $("#product_stack").val(1);
                $("#product_stack_list").val(function () {
                    return this.value + '1';
                });
            } else if ($(this).is(":checked") && $(this).val() == 'shirts') {

                $('.append_row_for_article_' + counter + ' #suiting_' + counter).prop('checked', false);
                $('.append_row_for_article_' + counter + ' #shalwarqameez_' + counter).prop('checked', false);

                $(".append_row_for_article_" + counter + " .coat_waistCoat").hide();
                $(".append_row_for_article_" + counter + " .pant").hide();
                $(".append_row_for_article_" + counter + " .shirt_qameez").show();
                $(".append_row_for_article_" + counter + " .only_shirt").show();
                $(".append_row_for_article_" + counter + " .shalwar").hide();
                $("#product_stack").val(2);
                $("#product_stack_list").val(function () {
                    return this.value + '2';
                });
            } else if ($(this).is(":checked") && $(this).val() == 'shalwarqameez') {

                $('.append_row_for_article_' + counter + ' #shirts_' + counter).prop('checked', false);
                $('.append_row_for_article_' + counter + ' #suiting_' + counter).prop('checked', false);

                $(".append_row_for_article_" + counter + " .coat_waistCoat").hide();
                $(".append_row_for_article_" + counter + " .pant").hide();
                $(".append_row_for_article_" + counter + " .only_shirt").hide();
                $(".append_row_for_article_" + counter + " .shirt_qameez").show();
                $(".append_row_for_article_" + counter + " .shalwar").show();
                $("#product_stack").val(3);
                $("#product_stack_list").val(function () {
                    return this.value + '3';
                });
            }
        });

        //preview
        $('#pre_preview_model').on('show.bs.modal', function (event) {
            var form = $("#data_form");
            $.ajax({
                url: "<?php echo base_url('customers/preview') ?>",
                type: "POST",
                data: form.serialize() + '&' + crsf_token + '=' + crsf_hash + '&ignore_pdf=1',
                dataType: "html",
                success: function (data) {
                    $('#preview_body').html(data)
                }
            });
        });




    });

    function  changeLamguage() {
        var is_english = $('input[name="is_english"]:checked').val();
        var form = $("#data_form");
        $.ajax({
            url: "<?php echo base_url('customers/preview') ?>",
            type: "POST",
            data: form.serialize() + '&' + crsf_token + '=' + crsf_hash + '&ignore_pdf=1&is_english=' + is_english,
            dataType: "html",
            success: function (data) {
                $('#preview_body').html(data)
            }
        });
    }


</script>

