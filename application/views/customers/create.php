<div class="content-body">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Add Customer</h4>

            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
            <div class="heading-elements">
                <ul class="list-inline mb-0">
                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                </ul>
            </div>
            <button class="btn btn-primary add_new_rows" style="float:right; display:none;" data-count="1">Add Multiple Products &nbsp;&nbsp;<i class="fa fa-plus"></i></button>
        </div>
        <div class="card-body">
            <form method="post" id="data_form" class="form-horizontal">
                <div class="default_row">
                    <div class="row">
                        <div class="col-md-4">
                            <h5 class="title text-center">Customer Info</h5>
                            <div class="cus-bor cus-height">
                                <div class="form-group row mt-1">
                                    <label class="col-sm-4 col-form-label" for="name">ORDER/REF NO</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control margin-bottom b_input" name="or_ref_no" id="ref_no" readonly="" value="<?php echo $ref_no?>">
                                    </div>
                                </div>
                                <div class="form-group row mt-1">
                                    <label class="col-sm-4 col-form-label" for="name">Booking Date</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control required margin-bottom" name="booking_date" id="bDate">
                                    </div>
                                </div>
                                <div class="form-group row mt-1">
                                    <label class="col-sm-4 col-form-label" for="name">Trial Date</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control required margin-bottom b_input" name="t_date" id="tDate">
                                    </div>
                                </div>
                                <div class="form-group row mt-1">
                                    <label class="col-sm-4 col-form-label" for="name">Delivery Date</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control required margin-bottom b_input" name="d_date" id="dDate">
                                    </div>
                                </div>
                                <div class="form-group row mt-1">
                                    <label class="col-sm-4 col-form-label" for="name">Customer Name</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control required margin-bottom b_input" name="customer_name" id="customer_name">
                                    </div>
                                </div>
                                <div class="form-group row mt-1">
                                    <label class="col-sm-4 col-form-label"
                                        for="name">Mobile</label>

                                    <div class="col-sm-7">
                                        <input type="text" class="form-control required margin-bottom b_input" name="mobile" id="mobile">
                                    </div>
                                </div>
                                <div class="form-group row  mt-1">
                                    <label class="col-sm-4 col-form-label" for="name">Select Product:</label>
                                    <div class="col-md-7 select_product">
                                        <div class="input-group">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="is_suiting[]" id="suiting" value="suiting">
                                                <label class="custom-control-label" for="suiting">Suiting</label>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="is_shirts[]" id="shirts" value="shirts">
                                                <label class="custom-control-label" for="shirts">Shirt</label>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="is_shalwarqameez[]" id="shalwarqameez" value="shalwarqameez">
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
                        <div class="col-md-4 pl-0 coat_waistCoat" style="display:none;">
                            <h5 class="title text-center">COAT / WAIST COAT</h5>
                            <div class="cus-bor cus-height" style="height: 1130px;">
                                <div class="form-group row mt-1">
                                    <label class="col-sm-4 col-form-label" for="name">Neck</label>
                                    <div class="col-sm-4">
                                    <input type="text" class="form-control margin-bottom b_input" name="cNeck[]" id="cNeck">
                                    </div>
                                </div>
                            
                                <div class="form-group row mt-1">
                                    <label class="col-sm-4 col-form-label" for="name">Chest</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control margin-bottom b_input " name="cChest[]" id="cChest">
                                    </div>
                                </div>

                                <div class="form-group row mt-1">
                                    <label class="col-sm-4 col-form-label" for="name">Belly Waist</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control margin-bottom b_input " name="cWaist[]" id="cWaist">
                                    </div>
                                </div>

                                <div class="form-group row mt-1">
                                    <label class="col-sm-4 col-form-label" for="name">Hip</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control margin-bottom b_input " name="cHips[]" id="cHips">
                                    </div>
                                </div>

                                <div class="form-group row mt-1">
                                    <label class="col-sm-4 col-form-label" for="name">Shoulder</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control margin-bottom b_input " name="cShoulder[]" id="cShoulder">
                                    </div>
                                </div>

                                <div class="form-group row mt-1">
                                    <label class="col-sm-4 col-form-label" for="name">Sleeves Length</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control margin-bottom b_input" name="cSleeve[]" id="cSleev">
                                    </div>
                                </div>

                                <div class="form-group row mt-1">
                                    <label class="col-sm-4 col-form-label" for="name">Bicep</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control margin-bottom b_input" name="cBicep[]" id="cBicep">
                                    </div>
                                </div>

                                <div class="form-group row mt-1">
                                    <label class="col-sm-4 col-form-label" for="name">Forearm</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control margin-bottom b_input" name="cForearm[]" id="cForearm">
                                    </div>
                                </div>

                                <div class="form-group row mt-1">
                                    <label class="col-sm-4 col-form-label" for="name">Half Back</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control margin-bottom b_input " name="cHalfBack[]" id="cHalfBack">
                                    </div>
                                </div>

                                <div class="form-group row mt-1">
                                    <label class="col-sm-4 col-form-label" for="name">Cross Back</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control margin-bottom b_input " name="cCrossBack[]" id="cCrossBack">
                                    </div>
                                </div>

                                <div class="form-group row mt-1">
                                    <label class="col-sm-4 col-form-label" for="name">Coat length</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control margin-bottom b_input" name="cLength[]" id="cLength">
                                    </div>
                                </div>
                                
                                <div class="form-group row mt-1">
                                    <label class="col-sm-4 col-form-label" for="name">3p waistcoat Length</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control margin-bottom b_input" name="3p_waistcoat_length[]" id="Sec_cLength">
                                    </div>
                                </div>

                                <div class="form-group row mt-1">
                                    <label class="col-sm-4 col-form-label" for="name">Waistcoat Length</label>
                                    <div class="col-sm-4">
                                    <input type="text" class="form-control margin-bottom b_input" name="waistcoat_length[]" id="Sec_cLength">
                                    </div>
                                </div>

                                <div class="form-group row mt-1">
                                    <label class="col-sm-4 col-form-label" for="name">Princecoat Length</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control margin-bottom b_input" name="princecoat_length[]" id="Sec_cLength">
                                    </div>
                                </div>
                                
                                <div class="form-group row mt-1">
                                    <label class="col-sm-4 col-form-label" for="name">Sherwani Length</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control margin-bottom b_input" name="sherwani_length[]" id="Sec_cLength">
                                    </div>
                                </div>
                                
                                <div class="form-group row mt-1">
                                    <label class="col-sm-4 col-form-label" for="name">Long coat length</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control margin-bottom b_input" name="longcoat_length[]" id="Sec_cLength">
                                    </div>
                                </div>
                                
                                <div class="form-group row mt-1">
                                    <label class="col-sm-4 col-form-label" for="name">Chester length</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control margin-bottom b_input" name="chester_length[]" id="Sec_cLength">
                                    </div>
                                </div>
                                
                                <div class="form-group row mt-1">
                                    <label class="col-sm-4 col-form-label" for="name">Armhole</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control margin-bottom b_input" name="armhole[]" id="Sec_cLength">
                                    </div>
                                </div>                            
                            
                            </div>   
                        </div>
                        <div class="col-md-4 pl-0 pant"  style="display:none;">
                            <h5 class="title text-center">PANT</h5>
                            <div class="cus-bor cus-height" style="height: 455px;">
                            
                            <div class="form-group row mt-1">
                                    <label class="col-sm-5 col-form-label" for="name">Waist</label>
                                    <div class="col-sm-4">
                                    <input type="text" class="form-control margin-bottom b_input " name="pWaist[]" id="pWaist">
                                    </div>
                            </div>
                            <div class="form-group row mt-1">
                                    <label class="col-sm-5 col-form-label" for="name">Hip</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control margin-bottom b_input " name="pHip[]" id="pHip">
                                    </div>
                            </div>
                            <div class="form-group row mt-1">
                                    <label class="col-sm-5 col-form-label" for="name">Thigh</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control margin-bottom b_input " name="pThigh[]" id="pThigh">
                                    </div>
                            </div>
                            <div class="form-group row mt-1">
                                    <label class="col-sm-5 col-form-label" for="name">Knee</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control margin-bottom b_input " name="pKnee[]" id="pKnee">
                                    </div>
                            </div>

                                <div class="form-group row mt-1">
                                    <label class="col-sm-5 col-form-label" for="name">Inseam / Inside Length</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control margin-bottom b_input " name="pInLength[]" id="pInLength">
                                    </div>
                                </div> 


                                <div class="form-group row mt-1">
                                    <label class="col-sm-5 col-form-label" for="name">Length</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control margin-bottom b_input " name="pLength[]" id="pLength">
                                    </div>
                                </div>                                                     
                            
                            <div class="form-group row mt-1">
                                    <label class="col-sm-5 col-form-label" for="name">Bottom</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control margin-bottom b_input " name="pBottom[]" id="pBottom">
                                    </div>
                            </div>                           
                            </div>
                            
                            <div class="pant"  style="display:none;">
                                <h5 class="title text-center">Checks</h5>
                                <div class="cus-bor cus-height" style="height: 400px;">
                                    <div class="form-group row  mt-1">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" name="is_breasted[]" id="breasted" value="1">
                                                    <label class="custom-control-label" for="breasted">Single breasted</label>
                                                </div>&nbsp;&nbsp;
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" name="is_breasted[]" id="double_breasted" value="2">
                                                    <label class="custom-control-label" for="double_breasted">Double breasted</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row  mt-1">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" name="is_button_suit[]" id="button_suit" value="1">
                                                    <label class="custom-control-label" for="button_suit">One button</label>
                                                </div>&nbsp;&nbsp;
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" name="is_button_suit[]" id="two_button_suit" value="2">
                                                    <label class="custom-control-label" for="two_button_suit">Two button</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row  mt-1">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" name="is_lapel[]" id="lapel" value="1">
                                                    <label class="custom-control-label" for="lapel">Notch lapel</label>
                                                </div>&nbsp;&nbsp;
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" name="is_lapel[]" id="peak_lapel" value="2">
                                                    <label class="custom-control-label" for="peak_lapel">Peak lapel</label>
                                                </div>&nbsp;&nbsp;
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" name="is_lapel[]" id="shawl_lapel" value="3">
                                                    <label class="custom-control-label" for="shawl_lapel">Shawl lapel</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                    <div class="form-group row  mt-1">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" name="is_vent[]" id="vent" value="1">
                                                    <label class="custom-control-label" for="vent">Single vent</label>
                                                </div>&nbsp;&nbsp;
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" name="is_vent[]" id="double_vent" value="2">
                                                    <label class="custom-control-label" for="double_vent">Double vents</label>
                                                </div>&nbsp;&nbsp;
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" name="is_vent[]" id="no_vent" value="3">
                                                    <label class="custom-control-label" for="no_vent">No vent</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row  mt-1">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                            <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" name="is_wear[]" id="wear" value="1">
                                                    <label class="custom-control-label" for="wear">Formal suit</label>
                                                </div>&nbsp;&nbsp;
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" name="is_wear[]" id="casual_wear" value="2">
                                                    <label class="custom-control-label" for="casual_wear"> Casual suit </label>
                                                </div> &nbsp;&nbsp;
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" name="is_wear[]" id="groom_wear" value="3">
                                                    <label class="custom-control-label" for="groom_wear">Grooms wear </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row  mt-1">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" name="is_lined[]" id="lined" value="1">
                                                    <label class="custom-control-label" for="lined">Fully lined </label>
                                                </div>&nbsp;&nbsp;
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" name="is_lined[]" id="half_lined" value="2">
                                                    <label class="custom-control-label" for="half_lined">Half lined</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row  mt-1">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" name="is_ticket[]" id="ticket" value="1">
                                                    <label class="custom-control-label" for="ticket">Ticket pocket </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="form-group row  mt-1">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" name="is_suit_pocket[]" id="regular" value="1">
                                                    <label class="custom-control-label" for="regular">Regular pockets</label>
                                                </div>&nbsp;&nbsp;
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" name="is_suit_pocket[]" id="slant" value="2">
                                                    <label class="custom-control-label" for="slant">Slant pocket </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="form-group row  mt-1">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" name="is_suit_button[]" id="metalic_button" value="1">
                                                    <label class="custom-control-label" for="metalic_button">Metallic buttons </label>
                                                </div>&nbsp;&nbsp;
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" name="is_suit_button[]" id="button" value="2">
                                                    <label class="custom-control-label" for="button">Plain buttons</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 pl-0 shirt_qameez"  style="display:none;">
                            <h5 class="title text-center shalwar">KAMIZ / KURTA</h5>
                            <h5 class="title text-center only_shirt">SHIRT</h5>
                            <div class="cus-bor">
                                <div class="only_shirt">
                                    <div class="form-group row mt-1">
                                        <label class="col-sm-5 col-form-label" for="name">Shirt Length</label>
                                        <div class="col-sm-6">
                                        <input type="text" class="form-control margin-bottom b_input " name="shirtLength[]" id="kmzLength">
                                        </div>
                                    </div>
                                    <div class="form-group row mt-1">
                                        <label class="col-sm-5 col-form-label" for="name">Shoulder</label>
                                        <div class="col-sm-6">
                                        <input type="text" class="form-control margin-bottom b_input " name="shirtShoulder[]" id="kmzShoulder">
                                        </div>
                                    </div>
                                    <div class="form-group row mt-1">
                                        <label class="col-sm-5 col-form-label" for="name">Sleeves Length</label>
                                        <div class="col-sm-6">
                                        <input type="text" class="form-control margin-bottom b_input " name="shirtSleeves[]" id="kmzSleeves">
                                        </div>
                                    </div>
                                    <div class="form-group row mt-1">
                                        <label class="col-sm-5 col-form-label" for="name">Neck</label>
                                        <div class="col-sm-6">
                                        <input type="text" class="form-control margin-bottom b_input " name="shirtNeck[]" id="kmzNeck">
                                        </div>
                                    </div>
                                    <div class="form-group row mt-1">
                                        <label class="col-sm-5 col-form-label" for="name">Chest</label>
                                        <div class="col-sm-6">
                                        <input type="text" class="form-control margin-bottom b_input " name="shirtChest[]" id="kmzChest">
                                        </div>
                                    </div>
                                    <div class="form-group row mt-1">
                                        <label class="col-sm-5 col-form-label" for="name">Waist</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control margin-bottom b_input " name="shirtWaist[]" id="kmzWaist">
                                        </div>
                                    </div>
                                    <div class="form-group row mt-1">
                                        <label class="col-sm-5 col-form-label" for="name">Hip</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control margin-bottom b_input " name="shirtHips[]" id="kmzHips">
                                        </div>
                                    </div>
                                    <div class="form-group row mt-1">
                                        <label class="col-sm-5 col-form-label" for="name">Bicep</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control margin-bottom b_input" name="shirtBicep[]" id="kmzBicep">
                                    </div>
                                    </div>
                                    <div class="form-group row mt-1">
                                        <label class="col-sm-5 col-form-label" for="name">Forearm</label>
                                        <div class="col-sm-6">
                                        <input type="text" class="form-control margin-bottom b_input" name="shirtForearm[]" id="kmzForearm">
                                        </div>
                                    </div>
                                    <div class="form-group row mt-1">
                                        <label class="col-sm-5 col-form-label" for="name">Armhole</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control margin-bottom b_input" name="shirtarmhole[]" id="kmzForearm">
                                        </div>
                                    </div>
                                    <div class="form-group row mt-1">
                                        <label class="col-sm-5 col-form-label" for="name">Cuff</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control margin-bottom b_input" name="shirtcuff[]" id="kmzForearm">
                                        </div>
                                    </div>
                                </div>
                                <div class="shalwar">
                                    <div class="form-group row mt-1">
                                        <label class="col-sm-5 col-form-label" for="name">Kameez Length</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control margin-bottom b_input " name="kmzLength[]" id="kmzLength">
                                        </div>
                                    </div>
                                    <div class="form-group row mt-1">
                                        <label class="col-sm-5 col-form-label" for="name">Kurta Length</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control margin-bottom b_input " name="kurtaLength[]" id="kmzLength">
                                        </div>
                                    </div>
                                    <div class="form-group row mt-1">
                                        <label class="col-sm-5 col-form-label" for="name">Shoulder</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control margin-bottom b_input " name="kmzShoulder[]" id="kmzShoulder">
                                        </div>
                                    </div>
                                    <div class="form-group row mt-1">
                                        <label class="col-sm-5 col-form-label" for="name">Sleeves Length</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control margin-bottom b_input " name="kmzSleeves[]" id="kmzSleeves">
                                        </div>
                                    </div>
                                    <div class="form-group row mt-1">
                                        <label class="col-sm-5 col-form-label" for="name">Neck</label>
                                        <div class="col-sm-6">
                                        <input type="text" class="form-control margin-bottom b_input " name="kmzNeck[]" id="kmzNeck">
                                        </div>
                                    </div>
                                    <div class="form-group row mt-1">
                                        <label class="col-sm-5 col-form-label" for="name">Chest</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control margin-bottom b_input " name="kmzChest[]" id="kmzChest">
                                    </div>
                                    </div>
                                    <div class="form-group row mt-1">
                                        <label class="col-sm-5 col-form-label" for="name">Waist</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control margin-bottom b_input " name="kmzWaist[]" id="kmzWaist">
                                        </div>
                                    </div>
                                    <div class="form-group row mt-1">
                                        <label class="col-sm-5 col-form-label" for="name">Hip</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control margin-bottom b_input " name="kmzHips[]" id="kmzHips">
                                        </div>
                                    </div>
                                    <div class="form-group row mt-1">
                                        <label class="col-sm-5 col-form-label" for="name">Bicep</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control margin-bottom b_input" name="kmzBicep[]" id="kmzBicep">
                                        </div>
                                    </div>
                                    <div class="form-group row mt-1">
                                        <label class="col-sm-5 col-form-label"  for="name">Forearm</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control margin-bottom b_input" name="kmzForearm[]" id="kmzForearm">
                                    </div>
                                    </div>
                                    <div class="form-group row mt-1">
                                        <label class="col-sm-5 col-form-label" for="name">Armhole</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control margin-bottom b_input" name="kmzarmhole[]" id="kmzForearm">
                                    </div>
                                    </div>
                                    <div class="form-group row mt-1">
                                        <label class="col-sm-5 col-form-label" for="name">Cuff</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control margin-bottom b_input" name="kmzcuff[]" id="kmzForearm">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 pl-0 shalwar"  style="display:none;">                    
                            <h5 class="title text-center">SHALWAR / PAJAMA</h5>
                            <div class="cus-bor">
                                <div class="form-group row mt-1">
                                <label class="col-sm-5 col-form-label"
                                    for="name">Shalwar Length</label>

                                <div class="col-sm-6">
                                    <input type="text"
                                            class="form-control margin-bottom b_input " name="shlLength[]"
                                            id="shlLength">
                                </div>
                                </div>
                                <div class="form-group row mt-1">
                                <label class="col-sm-5 col-form-label"
                                    for="name">Shalwar Bottom</label>

                                <div class="col-sm-6">
                                    <input type="text"
                                            class="form-control margin-bottom b_input " name="shlBottom[]"
                                            id="shlBottom">
                                </div>
                                </div>
                            
                                <div class="form-group row mt-1">
                                <label class="col-sm-5 col-form-label"
                                    for="name">Asan Tyar</label>

                                <div class="col-sm-6">
                                    <input type="text"
                                            class="form-control margin-bottom b_input " name="shlAsanTyar[]"
                                            id="shlAsanTyar">
                                </div>
                                </div>
                            
                                <div class="form-group row mt-1">
                                <label class="col-sm-5 col-form-label"
                                    for="name">Shalwar Gaira Tyar</label>

                                <div class="col-sm-6">
                                    <input type="text"
                                            class="form-control margin-bottom b_input " name="shlGairaTyar[]"
                                            id="shlGairaTyar">
                                </div>
                                </div>

                                <div class="form-group row mt-1">
                                    <label class="col-sm-5 col-form-label" for="name">Pajama Length</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control margin-bottom b_input " name="pjamaLength[]" id="shlLength">
                                    </div>
                                </div>
                                <div class="form-group row mt-1">
                                    <label class="col-sm-5 col-form-label" for="name">Pajama Bottom</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control margin-bottom b_input " name="pjamaBottom[]" id="shlBottom">
                                    </div>
                                </div>
                            </div>

                            <div class="shalwar"  style="display:none;">                    
                                <h5 class="title text-center">Checks</h5>
                                <div class="cus-bor">
                                    <div class="form-group row  mt-1">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <div class="custom-control custom-radio form-check-inline">
                                                    <input type="radio" class="custom-control-input" name="is_collar[]" id="is_kamiz_collar" value="1">
                                                    <label class="custom-control-label" for="is_kamiz_collar">Collar</label>
                                                </div> &nbsp;&nbsp;
                                                <div class="custom-control custom-radio form-check-inline">
                                                    <input type="radio" class="custom-control-input" name="is_collar[]" id="is_half_band" value="2">
                                                    <label class="custom-control-label" for="is_half_band">Half Band</label>
                                                </div>&nbsp;&nbsp;
                                                <div class="custom-control custom-radio form-check-inline">
                                                    <input type="radio" class="custom-control-input" name="is_collar[]" id="is_full_band" value="3">
                                                    <label class="custom-control-label" for="is_full_band">Full Band</label>
                                                </div>&nbsp;&nbsp;
                                                <div class="custom-control custom-radio form-check-inline">
                                                    <input type="radio" class="custom-control-input" name="is_collar[]" id="moon_neck" value="4">
                                                    <label class="custom-control-label" for="moon_neck">Moon Neck</label>
                                                </div>
                                                <div class="input-group collar_text" style="display:none;">
                                                    <input type="text" class="form-control" style="margin-right:20px;margin-top:5px;" name="collar_ins[]" id="collar_ins" placeholder="Write instructions..."> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row  mt-1">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" name="is_front[]" id="is_round_front" value="1">
                                                    <label class="custom-control-label" for="is_round_front">Round Front</label>
                                                </div>&nbsp;&nbsp;
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" name="is_front[]" id="straight_front" value="2">
                                                    <label class="custom-control-label" for="straight_front">Straight Front</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row  mt-1">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" name="is_front_pocket[]" id="is_front_pocket" value="1">
                                                    <label class="custom-control-label" for="is_front_pocket">Front Pocket</label>
                                                </div>
                                                <div class="input-group front_pocket_text" style="display:none;">
                                                    <input type="text" class="form-control" style="margin-right:20px; margin-top:5px;" name="front_pocket_ins[]" id="front_pocket_ins" placeholder="Write instructions..."> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row  mt-1">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" name="is_shalwar_pocket[]" id="is_shalwar_pocket" value="1">
                                                    <label class="custom-control-label" for="is_shalwar_pocket">Shalwar Pocket</label>
                                                </div>
                                                <div class="input-group shalwar_pocket_text" style="display:none;">
                                                    <input type="text" class="form-control" style="margin-right:20px;margin-top:5px;" name="shalwar_pocket_ins[]" id="shalwar_pocket_ins" placeholder="Write instructions..."> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row  mt-1">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" name="is_pocket[]" id="1side_pocket" value="1">
                                                    <label class="custom-control-label" for="1side_pocket">1 side pocket</label>
                                                </div>&nbsp;&nbsp;
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" name="is_pocket[]" id="2side_pocket" value="2">
                                                    <label class="custom-control-label" for="2side_pocket">2 side pocket</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row  mt-1">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" name="is_sleeve_placket[]" id="is_sleeve_placket" value="1">
                                                    <label class="custom-control-label" for="is_sleeve_placket">Sleeve Placket Button</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row  mt-1">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" name="is_button[]" id="is_plain_button" value="1">
                                                    <label class="custom-control-label" for="is_plain_button">Plain Button</label>
                                                </div>&nbsp;&nbsp;
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" name="is_button[]" id="fancy_button" value="2">
                                                    <label class="custom-control-label" for="fancy_button">Fancy Button</label>
                                                </div>&nbsp;&nbsp;
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" name="is_button[]" id="loop_button" value="3">
                                                    <label class="custom-control-label" for="loop_button">Loop Button</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row  mt-1">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" name="is_cuff[]" id="is_button_cuff" value="1">
                                                    <label class="custom-control-label" for="is_button_cuff">Button Cuff</label>
                                                </div>&nbsp;&nbsp;
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" name="is_cuff[]" id="is_french_cuff" value="2">
                                                    <label class="custom-control-label" for="is_french_cuff">French Cuff</label>
                                                </div>&nbsp;&nbsp;
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" name="is_cuff[]" id="is_open_sleeves" value="3">
                                                    <label class="custom-control-label" for="is_open_sleeves">Open Sleeves</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row  mt-1">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" name="is_design[]" id="is_half_design" value="1">
                                                    <label class="custom-control-label" for="is_half_design">Half design</label>
                                                </div>&nbsp;&nbsp;
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" name="is_design[]" id="is_full_design" value="2">
                                                    <label class="custom-control-label" for="is_full_design">Full design</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row  mt-1">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" name="is_kanta[]" id="is__kanta" value="1">
                                                    <label class="custom-control-label" for="is__kanta">Kanta</label>
                                                </div>&nbsp;&nbsp;
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" name="is_kanta[]" id="is_jali_kanta" value="2">
                                                    <label class="custom-control-label" for="is_jali_kanta">Jali Kanta</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row  mt-1">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" name="is_stitch[]" id="is_single_stitch" value="1">
                                                    <label class="custom-control-label" for="is_single_stitch">Single stitch</label>
                                                </div>&nbsp;&nbsp;
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" name="is_stitch[]" id="is_double_stitch" value="2">
                                                    <label class="custom-control-label" for="is_double_stitch">Full double stitch</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row  mt-1">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" name="is_thread[]" id="is_shin_thread" value="1">
                                                    <label class="custom-control-label" for="is_shin_thread">Shining thread</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row  mt-1">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" name="is_bookrum[]" id="is_hard_bookrum" value="1">
                                                    <label class="custom-control-label" for="is_hard_bookrum">Hard bookrum</label>
                                                </div>&nbsp;&nbsp;
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" name="is_bookrum[]" id="is_soft_bookrum" value="2">
                                                    <label class="custom-control-label" for="is_soft_bookrum">Soft bookrum</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-4 pl-0 only_shirt"  style="display:none;">
                            <h5 class="title text-center">Checks</h5>
                            <div class="cus-bor">
                                <div class="form-group row  mt-1">
                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <div class="custom-control custom-radio form-check-inline">
                                                <input type="checkbox" class="custom-control-input" name="is_placket[]" id="front_placket" value="1">
                                                <label class="custom-control-label" for="front_placket">Front placket</label>
                                            </div> &nbsp;&nbsp;
                                            <div class="custom-control custom-radio form-check-inline">
                                                <input type="checkbox" class="custom-control-input" name="is_placket[]" id="plane_placket" value="2">
                                                <label class="custom-control-label" for="plane_placket"> Plain Front</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row  mt-1">
                                    <div class="col-md-12">
                                        <div class="input-group">
                                        <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="is_shirt_cuff[]" id="is_shirt_button_cuff" value="1">
                                                <label class="custom-control-label" for="is_shirt_button_cuff">Button Cuff </label>
                                            </div> &nbsp;&nbsp;
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="is_shirt_cuff[]" id="is_shirt_double_cuff" value="2">
                                                <label class="custom-control-label" for="is_shirt_double_cuff">Double Cuff</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row  mt-1">
                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <div class="custom-control custom-radio form-check-inline">
                                                <input type="radio" class="custom-control-input" name="is_shirt_collar[]" id="is__shirt_collar" value="1">
                                                <label class="custom-control-label" for="is__shirt_collar">Collar</label>
                                            </div> &nbsp;&nbsp;
                                            <div class="custom-control custom-radio form-check-inline">
                                                <input type="radio" class="custom-control-input" name="is_shirt_collar[]" id="is_shirt_half_band" value="2">
                                                <label class="custom-control-label" for="is_shirt_half_band">Half Band</label>
                                            </div>&nbsp;&nbsp;
                                            <div class="custom-control custom-radio form-check-inline">
                                                <input type="radio" class="custom-control-input" name="is_shirt_collar[]" id="is_shirt_full_band" value="3">
                                                <label class="custom-control-label" for="is_shirt_full_band">Full Band</label>
                                            </div><br><br>
                                        </div>
                                    </div>
                                    <div class="col-md-12 shirt_collar_text" style="display:none;">
                                        <div class="custom-control custom-radio form-check-inline">
                                            <input type="radio" class="custom-control-input" name="is_shirt_collar_type[]" id="tie_collar" value="1">
                                            <label class="custom-control-label" for="tie_collar">Tie Collar</label>
                                        </div><br>
                                        <div class="custom-control custom-radio form-check-inline">
                                            <input type="radio" class="custom-control-input" name="is_shirt_collar_type[]" id="button_down" value="2">
                                            <label class="custom-control-label" for="button_down">Button Down</label>
                                        </div><br>
                                        <div class="custom-control custom-radio form-check-inline">
                                            <input type="radio" class="custom-control-input" name="is_shirt_collar_type[]" id="vintage_clud" value="3">
                                            <label class="custom-control-label" for="vintage_clud">Vintage club</label>
                                        </div><br>
                                        <div class="custom-control custom-radio form-check-inline">
                                            <input type="radio" class="custom-control-input" name="is_shirt_collar_type[]" id="half_french" value="4">
                                            <label class="custom-control-label" for="half_french">Half French</label>
                                        </div><br>
                                        <div class="custom-control custom-radio form-check-inline">
                                            <input type="radio" class="custom-control-input" name="is_shirt_collar_type[]" id="full_french" value="5">
                                            <label class="custom-control-label" for="full_french">Full French</label>
                                        </div><br>
                                        <div class="custom-control custom-radio form-check-inline">
                                            <input type="radio" class="custom-control-input" name="is_shirt_collar_type[]" id="tuxedo" value="6">
                                            <label class="custom-control-label" for="tuxedo">Tuxedo</label>
                                        </div>                                        
                                        <div class="input-group">
                                            <input type="text" class="form-control" style="margin-right:20px;margin-top:5px;" name="shirt_collar_ins[]" id="shirt_collar_ins" placeholder="Write instructions..."> 
                                        </div>
                                    </div>
                                </div>                         
                            </div>
                        </div>
                    </div> 
                    <div class="row mt-1 coat_waistCoat" style="display: none;">
                    <div class="col-md-12">
                        <div class="form-group">
                        <label for="email" class="col-form-label">Suiting Instructions:</label>
                        <textarea class="form-control" name="inst[]" rows="7" id="comment"></textarea>
                        </div>
                    </div>
                    </div> 
                    
                    <div class="row mt-1 only_shirt" style="display: none;">
                    <div class="col-md-12">
                        <div class="form-group">
                        <label for="email" class="col-form-label">Shirts Instructions:</label>
                        <textarea class="form-control" name="shirt_inst[]" rows="7" id="comment"></textarea>
                        </div>
                    </div>
                    </div> 
                    
                    <div class="row mt-1 shalwar" style="display: none;">
                    <div class="col-md-12">
                        <div class="form-group">
                        <label for="email" class="col-form-label">Shalwar Kameez Instructions:</label>
                        <textarea class="form-control" name="shalwar_inst[]" rows="7" id="comment"></textarea>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="append_new_size_article"></div>
                <div id="mybutton" class="mt-1">
                    <input type="submit" id="submit-data"
                           class="btn btn-lg btn btn-primary margin-bottom round float-xs-right mr-2"
                           value="<?php echo $this->lang->line('Add customer') ?>"
                           data-loading-text="Adding...">
                </div>
               <input type="hidden" value="customers/colthingCustomer" id="action-url">
            </form>
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
    $( "#tDate" ).datepicker();
    $( "#dDate" ).datepicker();

    $(document).ready(function(){
        $('input[type="checkbox"]').click(function(){
            if($(this).is(":checked") && $(this).val() == 'suiting'){
                $('.default_row #shirts').prop('checked', false);
                $('.default_row #shalwarqameez').prop('checked', false);

                $(".default_row .coat_waistCoat").show();
                $(".default_row .pant").show();
                $(".default_row .shirt_qameez").hide();  
                $(".default_row .shalwar").hide();
                $(".default_row .only_shirt").hide();                
            }else if($(this).is(":checked") && $(this).val() == 'shirts'){

                $('.default_row #suiting').prop('checked', false);
                $('.default_row #shalwarqameez').prop('checked', false);

                $(".default_row .coat_waistCoat").hide();
                $(".default_row .pant").hide();
                $(".default_row .shirt_qameez").show();  
                $(".default_row .only_shirt").show();  
                $(".default_row .shalwar").hide(); 
            }else if($(this).is(":checked") && $(this).val() == 'shalwarqameez'){
                
                $('.default_row #shirts').prop('checked', false);
                $('.default_row #suiting').prop('checked', false);

                $(".default_row .coat_waistCoat").hide();
                $(".default_row .pant").hide();
                $(".default_row .only_shirt").hide();
                $(".default_row .shirt_qameez").show();  
                $(".default_row .shalwar").show();
            }
            if($(this).is(":checked") && $(this).val() == 'english'){
                $('#urdu').prop('checked', false);
            }else if($(this).is(":checked") && $(this).val() == 'urdu'){
                $('#english').prop('checked', false);
            }

            $('.add_new_rows').show();
        }); 

        $( "input[name='is_collar[]']" ).change(function() {
            $(".default_row .collar_text").show();
        });

        $( "input[name='is_front_pocket[]']" ).change(function() {
            $(".default_row .front_pocket_text").show();
        });

        $( "input[name='is_shalwar_pocket[]']" ).change(function() {
            $(".default_row .shalwar_pocket_text").show();
        });

        $( "input[name='is_shirt_collar[]']" ).change(function() {
            $(".default_row .shirt_collar_text").show();
        });

        $(document).on('click', 'input[name="is_shirt_collar[]"]', function () {
            var count = $(this).attr('data-count');
            $(".append_row_for_article_"+count+" .shirt_collar_text_"+count).show();
        });

        $(document).on('click', 'input[name="is_shalwar_pocket[]"]', function () {
            var count = $(this).attr('data-count');
            $(".append_row_for_article_"+count+" .shalwar_pocket_text_"+count).show();
        });

        $(document).on('click', 'input[name="is_front_pocket[]"]', function () {
            var count = $(this).attr('data-count');
            $(".append_row_for_article_"+count+" .front_pocket_text_"+count).show();
        });

        $(document).on('click', 'input[name="is_collar[]"]', function () {
            var count = $(this).attr('data-count');
            $(".append_row_for_article_"+count+" .collar_text_"+count).show();
        });

        $('.add_new_rows').click(function(){
            var count = $(this).attr('data-count');
            count = count == 0 ? 1 : count;
            $(this).attr('data-count',parseInt(count)+1);
            $.ajax({
                url: "<?php echo base_url('customers/new_articles_append')?>",
                type: "POST",
                data: "count=" + count+ '&' + crsf_token + '=' + crsf_hash,
                dataType: "html",
                success: function(data) { 
                    $(".append_new_size_article").append(data);
                }
            });
        });

        $(document).on('click', '.remove_new_rows', function () {
            var count = $(this).attr('data-count');
            count = count == 0 ? 1 : count;
            $('.append_row_for_article_'+count).remove();
            $('.add_new_rows').attr('data-count',parseInt(count)-1);
        });

        $(document).on('click', '.Spro', function () {
            var val = $(this).val();
            var counter = $(this).attr('data-counter');
            if($(this).is(":checked") && $(this).val() == 'suiting'){

                $('.append_row_for_article_'+counter+' #shirts_'+counter).prop('checked', false);
                $('.append_row_for_article_'+counter+' #shalwarqameez_'+counter).prop('checked', false);

                $(".append_row_for_article_"+counter+" .coat_waistCoat").show();
                $(".append_row_for_article_"+counter+" .pant").show();
                $(".append_row_for_article_"+counter+" .shirt_qameez").hide();  
                $(".append_row_for_article_"+counter+" .shalwar").hide();
                $(".append_row_for_article_"+counter+" .only_shirt").hide();                
            }else if($(this).is(":checked") && $(this).val() == 'shirts'){

                $('.append_row_for_article_'+counter+' #suiting_'+counter).prop('checked', false);
                $('.append_row_for_article_'+counter+' #shalwarqameez_'+counter).prop('checked', false);

                $(".append_row_for_article_"+counter+" .coat_waistCoat").hide();
                $(".append_row_for_article_"+counter+" .pant").hide();
                $(".append_row_for_article_"+counter+" .shirt_qameez").show();  
                $(".append_row_for_article_"+counter+" .only_shirt").show();  
                $(".append_row_for_article_"+counter+" .shalwar").hide(); 
            }else if($(this).is(":checked") && $(this).val() == 'shalwarqameez'){
                
                $('.append_row_for_article_'+counter+' #shirts_'+counter).prop('checked', false);
                $('.append_row_for_article_'+counter+' #suiting_'+counter).prop('checked', false);

                $(".append_row_for_article_"+counter+" .coat_waistCoat").hide();
                $(".append_row_for_article_"+counter+" .pant").hide();
                $(".append_row_for_article_"+counter+" .only_shirt").hide();
                $(".append_row_for_article_"+counter+" .shirt_qameez").show();  
                $(".append_row_for_article_"+counter+" .shalwar").show();
            }
        });

    });

    
</script>

