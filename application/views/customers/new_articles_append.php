 <?php
                    $vToken = rand(10, 1000);
                    ?>            
<div class="append_row_article append_row_for_article_<?php echo $count; ?>" data-appendNewSize="<?php echo $count; ?>"><hr>
                 <button type="button"  class="btn btn-primary" onclick="previewModal(<?php echo $vToken; ?>)">Preview &nbsp;&nbsp;<i class="fa fa-eye"></i></button>
                                        &nbsp;&nbsp;&nbsp;
            <button type="button" class="btn btn-danger remove_new_rows" style="float:right;" data-count="<?php echo $count; ?>">Remove Multiple &nbsp;&nbsp;<i class="fa fa-times"></i></button><br><br>
                <div class="row ">
                    <div class="col-md-4">
                        <h5 class="title text-center">Customer Info</h5>
                        <div class="cus-bor cus-height">
                            <div class="form-group row  mt-1">
                                <label class="col-sm-4 col-form-label" for="name">Select Product:</label>
                                <div class="col-md-7">
                                    <div class="input-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input Spro" name="is_suiting[<?php echo $count; ?>]" id="suiting_<?php echo $count; ?>" value="suiting" data-counter="<?php echo $count; ?>">
                                            <label class="custom-control-label" for="suiting_<?php echo $count; ?>">Suiting</label>
                                        </div>
                                    </div>
                                    <div class="input-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input Spro" name="is_shirts[<?php echo $count; ?>]" id="shirts_<?php echo $count; ?>" value="shirts" data-counter="<?php echo $count; ?>">
                                            <label class="custom-control-label" for="shirts_<?php echo $count; ?>">Shirt</label>
                                        </div>
                                    </div>
                                    <div class="input-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input Spro" name="is_shalwarqameez[<?php echo $count; ?>]" id="shalwarqameez_<?php echo $count; ?>" value="shalwarqameez" data-counter="<?php echo $count; ?>">
                                            <label class="custom-control-label" for="shalwarqameez_<?php echo $count; ?>"> Shalwar Kamiz</label>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div> 
                    </div>
                    <div class="col-md-4 pl-0 coat_waistCoat" style="display:none;">

                        <h5 class="title text-center">COAT / WAIST COAT</h5>
                        <div class="cus-bor cus-height" style="height: 1130px;">
                            <div class="form-group row mt-1">
                                <label class="col-sm-4 col-form-label" for="name">Neck</label>
                                <div class="col-sm-4">
                                   <input type="text" class="form-control margin-bottom b_input" name="cNeck[<?php echo $count; ?>]" id="cNeck">
                                </div>
                            </div>
                           
                            <div class="form-group row mt-1">
                              <label class="col-sm-4 col-form-label" for="name">Chest</label>
                              <div class="col-sm-4">
                                 <input type="text" class="form-control margin-bottom b_input " name="cChest[<?php echo $count; ?>]" id="cChest">
                              </div>
                            </div>

                           <div class="form-group row mt-1">
                              <label class="col-sm-4 col-form-label" for="name">Belly Waist</label>
                              <div class="col-sm-4">
                                 <input type="text" class="form-control margin-bottom b_input " name="cWaist[<?php echo $count; ?>]" id="cWaist">
                              </div>
                           </div>

                           <div class="form-group row mt-1">
                              <label class="col-sm-4 col-form-label" for="name">Hip</label>
                              <div class="col-sm-4">
                                 <input type="text" class="form-control margin-bottom b_input " name="cHips[<?php echo $count; ?>]" id="cHips">
                              </div>
                           </div>

                           <div class="form-group row mt-1">
                              <label class="col-sm-4 col-form-label" for="name">Shoulder</label>
                              <div class="col-sm-4">
                                 <input type="text" class="form-control margin-bottom b_input " name="cShoulder[<?php echo $count; ?>]" id="cShoulder">
                              </div>
                           </div>

                           <div class="form-group row mt-1">
                              <label class="col-sm-4 col-form-label" for="name">Sleeves Length</label>
                              <div class="col-sm-4">
                                    <input type="hidden" name ="cSleeve_form[<?php echo $count; ?>]" value="<?php echo $vToken; ?>">
                                 <input type="text" class="form-control margin-bottom b_input" name="cSleeve[<?php echo $count; ?>]" id="cSleev">
                              </div>
                           </div>

                           <div class="form-group row mt-1">
                              <label class="col-sm-4 col-form-label" for="name">Bicep</label>
                               <div class="col-sm-4">
                                   <input type="text" class="form-control margin-bottom b_input" name="cBicep[<?php echo $count; ?>]" id="cBicep">
                               </div>
                            </div>

                            <div class="form-group row mt-1">
                              <label class="col-sm-4 col-form-label" for="name">Forearm</label>
                               <div class="col-sm-4">
                                   <input type="text" class="form-control margin-bottom b_input" name="cForearm[<?php echo $count; ?>]" id="cForearm">
                               </div>
                            </div>

                            <div class="form-group row mt-1">
                              <label class="col-sm-4 col-form-label" for="name">Half Back</label>
                               <div class="col-sm-4">
                                   <input type="text" class="form-control margin-bottom b_input " name="cHalfBack[<?php echo $count; ?>]" id="cHalfBack">
                               </div>
                           </div>

                           <div class="form-group row mt-1">
                              <label class="col-sm-4 col-form-label" for="name">Cross Back</label>
                               <div class="col-sm-4">
                                   <input type="text" class="form-control margin-bottom b_input " name="cCrossBack[<?php echo $count; ?>]" id="cCrossBack">
                               </div>
                           </div>

                           <div class="form-group row mt-1">
                              <label class="col-sm-4 col-form-label" for="name">Coat length</label>
                               <div class="col-sm-4">
                                   <input type="text" class="form-control margin-bottom b_input" name="cLength[<?php echo $count; ?>]" id="cLength">
                               </div>
                           </div>
                            
                            <div class="form-group row mt-1">
                                <label class="col-sm-4 col-form-label" for="name">3p waistcoat Length</label>
                                <div class="col-sm-4">
                                   <input type="text" class="form-control margin-bottom b_input" name="3p_waistcoat_length[<?php echo $count; ?>]" id="Sec_cLength">
                               </div>
                            </div>

                            <div class="form-group row mt-1">
                                <label class="col-sm-4 col-form-label" for="name">Waistcoat Length</label>
                                <div class="col-sm-4">
                                   <input type="text" class="form-control margin-bottom b_input" name="waistcoat_length[<?php echo $count; ?>]" id="Sec_cLength">
                                </div>
                            </div>

                            <div class="form-group row mt-1">
                                <label class="col-sm-4 col-form-label" for="name">Princecoat Length</label>
                                <div class="col-sm-4">
                                   <input type="text" class="form-control margin-bottom b_input" name="princecoat_length[<?php echo $count; ?>]" id="Sec_cLength">
                               </div>
                            </div>
                            
                            <div class="form-group row mt-1">
                                <label class="col-sm-4 col-form-label" for="name">Sherwani Length</label>
                               <div class="col-sm-4">
                                    <input type="text" class="form-control margin-bottom b_input" name="sherwani_length[<?php echo $count; ?>]" id="Sec_cLength">
                               </div>
                            </div>
                            
                            <div class="form-group row mt-1">
                                <label class="col-sm-4 col-form-label" for="name">Long coat length</label>
                                <div class="col-sm-4">
                                   <input type="text" class="form-control margin-bottom b_input" name="longcoat_length[<?php echo $count; ?>]" id="Sec_cLength">
                                </div>
                            </div>
                            
                             <div class="form-group row mt-1">
                                <label class="col-sm-4 col-form-label" for="name">Chester length</label>
                                <div class="col-sm-4">
                                   <input type="text" class="form-control margin-bottom b_input" name="chester_length[<?php echo $count; ?>]" id="Sec_cLength">
                               </div>
                            </div>
                            
                             <div class="form-group row mt-1">
                                <label class="col-sm-4 col-form-label" for="name">Armhole</label>
                               <div class="col-sm-4">
                                   <input type="text" class="form-control margin-bottom b_input" name="armhole[<?php echo $count; ?>]" id="Sec_cLength">
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
                                   <input type="text" class="form-control margin-bottom b_input " name="pWaist[<?php echo $count; ?>]" id="pWaist">
                                </div>
                           </div>
                           <div class="form-group row mt-1">
                                <label class="col-sm-5 col-form-label" for="name">Hip</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control margin-bottom b_input " name="pHip[<?php echo $count; ?>]" id="pHip">
                                </div>
                           </div>
                           <div class="form-group row mt-1">
                                <label class="col-sm-5 col-form-label" for="name">Thigh</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control margin-bottom b_input " name="pThigh[<?php echo $count; ?>]" id="pThigh">
                                </div>
                           </div>
                           <div class="form-group row mt-1">
                                <label class="col-sm-5 col-form-label" for="name">Knee</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control margin-bottom b_input " name="pKnee[<?php echo $count; ?>]" id="pKnee">
                                </div>
                           </div>

                            <div class="form-group row mt-1">
                                <label class="col-sm-5 col-form-label" for="name">Inseam / Inside Length</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control margin-bottom b_input " name="pInLength[<?php echo $count; ?>]" id="pInLength">
                                </div>
                            </div> 


                            <div class="form-group row mt-1">
                                <label class="col-sm-5 col-form-label" for="name">Length</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control margin-bottom b_input " name="pLength[<?php echo $count; ?>]" id="pLength">
                                </div>
                            </div>                                                     
                           
                           <div class="form-group row mt-1">
                                <label class="col-sm-5 col-form-label" for="name">Bottom</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control margin-bottom b_input " name="pBottom[<?php echo $count; ?>]" id="pBottom">
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
                                                <input type="radio" class="custom-control-input" name="is_breasted[<?php echo $count; ?>]" id="breasted_<?php echo $count; ?>" value="1">
                                                <label class="custom-control-label" for="breasted_<?php echo $count; ?>">Single breasted</label>
                                            </div>&nbsp;&nbsp;
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="is_breasted[<?php echo $count; ?>]" id="double_breasted_<?php echo $count; ?>" value="2">
                                                <label class="custom-control-label" for="double_breasted_<?php echo $count; ?>">Double breasted</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row  mt-1">
                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="is_button_suit[<?php echo $count; ?>]" id="button_suit_<?php echo $count; ?>" value="1">
                                                <label class="custom-control-label" for="button_suit_<?php echo $count; ?>">One button</label>
                                            </div>&nbsp;&nbsp;
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="is_button_suit[<?php echo $count; ?>]" id="two_button_suit_<?php echo $count; ?>" value="2">
                                                <label class="custom-control-label" for="two_button_suit_<?php echo $count; ?>">Two button</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row  mt-1">
                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="is_lapel[<?php echo $count; ?>]" id="lapel_<?php echo $count; ?>" value="1">
                                                <label class="custom-control-label" for="lapel_<?php echo $count; ?>">Notch lapel</label>
                                            </div>&nbsp;&nbsp;
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="is_lapel[<?php echo $count; ?>]" id="peak_lapel_<?php echo $count; ?>" value="2">
                                                <label class="custom-control-label" for="peak_lapel_<?php echo $count; ?>">Peak lapel</label>
                                            </div>&nbsp;&nbsp;
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="is_lapel[<?php echo $count; ?>]" id="shawl_lapel_<?php echo $count; ?>" value="3">
                                                <label class="custom-control-label" for="shawl_lapel_<?php echo $count; ?>">Shawl lapel</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>  
                                <div class="form-group row  mt-1">
                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="is_vent[<?php echo $count; ?>]" id="vent_<?php echo $count; ?>" value="1">
                                                <label class="custom-control-label" for="vent_<?php echo $count; ?>">Single vent</label>
                                            </div>&nbsp;&nbsp;
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="is_vent[<?php echo $count; ?>]" id="double_vent_<?php echo $count; ?>" value="2">
                                                <label class="custom-control-label" for="double_vent_<?php echo $count; ?>">Double vents</label>
                                            </div>&nbsp;&nbsp;
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="is_vent[<?php echo $count; ?>]" id="no_vent_<?php echo $count; ?>" value="3">
                                                <label class="custom-control-label" for="no_vent_<?php echo $count; ?>">No vent</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row  mt-1">
                                    <div class="col-md-12">
                                        <div class="input-group">
                                        <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="is_wear[<?php echo $count; ?>]" id="wear_<?php echo $count; ?>" value="1">
                                                <label class="custom-control-label" for="wear_<?php echo $count; ?>">Formal suit</label>
                                            </div>&nbsp;&nbsp;
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="is_wear[<?php echo $count; ?>]" id="casual_wear_<?php echo $count; ?>" value="2">
                                                <label class="custom-control-label" for="casual_wear_<?php echo $count; ?>"> Casual suit </label>
                                            </div> &nbsp;&nbsp;
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="is_wear[<?php echo $count; ?>]" id="groom_wear_<?php echo $count; ?>" value="3">
                                                <label class="custom-control-label" for="groom_wear_<?php echo $count; ?>">Grooms wear </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row  mt-1">
                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="is_lined[<?php echo $count; ?>]" id="lined_<?php echo $count; ?>" value="1">
                                                <label class="custom-control-label" for="lined_<?php echo $count; ?>">Fully lined </label>
                                            </div>&nbsp;&nbsp;
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="is_lined[<?php echo $count; ?>]" id="half_lined_<?php echo $count; ?>" value="2">
                                                <label class="custom-control-label" for="half_lined_<?php echo $count; ?>">Half lined</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row  mt-1">
                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="is_ticket[<?php echo $count; ?>]" id="ticket_<?php echo $count; ?>" value="1">
                                                <label class="custom-control-label" for="ticket_<?php echo $count; ?>">Ticket pocket </label>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                <div class="form-group row  mt-1">
                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="is_suit_pocket[<?php echo $count; ?>]" id="regular_<?php echo $count; ?>" value="1">
                                                <label class="custom-control-label" for="regular_<?php echo $count; ?>">Regular pockets</label>
                                            </div>&nbsp;&nbsp;
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="is_suit_pocket[<?php echo $count; ?>]" id="slant_<?php echo $count; ?>" value="2">
                                                <label class="custom-control-label" for="slant_<?php echo $count; ?>">Slant pocket </label>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                <div class="form-group row  mt-1">
                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="is_suit_button[<?php echo $count; ?>]" id="metalic_button_<?php echo $count; ?>" value="1">
                                                <label class="custom-control-label" for="metalic_button_<?php echo $count; ?>">Metallic buttons </label>
                                            </div>&nbsp;&nbsp;
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="is_suit_button[<?php echo $count; ?>]" id="button_<?php echo $count; ?>" value="2">
                                                <label class="custom-control-label" for="button_<?php echo $count; ?>">Plain buttons</label>
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
                                         <input type="hidden" name ="shirtLength_form[<?php echo $count; ?>]" value="<?php echo $vToken; ?>">
                                       <input type="text" class="form-control margin-bottom b_input " name="shirtLength[<?php echo $count; ?>]" id="kmzLength">
                                    </div>
                                </div>
                                <div class="form-group row mt-1">
                                    <label class="col-sm-5 col-form-label" for="name">Shoulder</label>
                                    <div class="col-sm-6">
                                       <input type="text" class="form-control margin-bottom b_input " name="shirtShoulder[<?php echo $count; ?>]" id="kmzShoulder">
                                    </div>
                                </div>
                                <div class="form-group row mt-1">
                                    <label class="col-sm-5 col-form-label" for="name">Sleeves Length</label>
                                    <div class="col-sm-6">
                                       <input type="text" class="form-control margin-bottom b_input " name="shirtSleeves[<?php echo $count; ?>]" id="kmzSleeves">
                                    </div>
                                </div>
                                <div class="form-group row mt-1">
                                    <label class="col-sm-5 col-form-label" for="name">Neck</label>
                                    <div class="col-sm-6">
                                       <input type="text" class="form-control margin-bottom b_input " name="shirtNeck[<?php echo $count; ?>]" id="kmzNeck">
                                    </div>
                                </div>
                                <div class="form-group row mt-1">
                                    <label class="col-sm-5 col-form-label" for="name">Chest</label>
                                    <div class="col-sm-6">
                                       <input type="text" class="form-control margin-bottom b_input " name="shirtChest[<?php echo $count; ?>]" id="kmzChest">
                                    </div>
                                </div>
                                <div class="form-group row mt-1">
                                    <label class="col-sm-5 col-form-label" for="name">Waist</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control margin-bottom b_input " name="shirtWaist[<?php echo $count; ?>]" id="kmzWaist">
                                    </div>
                                </div>
                                <div class="form-group row mt-1">
                                    <label class="col-sm-5 col-form-label" for="name">Hip</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control margin-bottom b_input " name="shirtHips[<?php echo $count; ?>]" id="kmzHips">
                                    </div>
                                </div>
                                <div class="form-group row mt-1">
                                    <label class="col-sm-5 col-form-label" for="name">Bicep</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control margin-bottom b_input" name="shirtBicep[<?php echo $count; ?>]" id="kmzBicep">
                                   </div>
                                </div>
                                <div class="form-group row mt-1">
                                    <label class="col-sm-5 col-form-label" for="name">Forearm</label>
                                    <div class="col-sm-6">
                                       <input type="text" class="form-control margin-bottom b_input" name="shirtForearm[<?php echo $count; ?>]" id="kmzForearm">
                                    </div>
                                </div>
                                <div class="form-group row mt-1">
                                    <label class="col-sm-5 col-form-label" for="name">Armhole</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control margin-bottom b_input" name="shirtarmhole[<?php echo $count; ?>]" id="kmzForearm">
                                    </div>
                                </div>
                                <div class="form-group row mt-1">
                                    <label class="col-sm-5 col-form-label" for="name">Cuff</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control margin-bottom b_input" name="shirtcuff[<?php echo $count; ?>]" id="kmzForearm">
                                    </div>
                                </div>
                            </div>
                            <div class="shalwar">
                                <div class="form-group row mt-1">
                                    <label class="col-sm-5 col-form-label" for="name">Kameez Length</label>
                                    <div class="col-sm-6">
                                        <input type="hidden" name ="kmzLength_form[<?php echo $count; ?>]" value="<?php echo $vToken; ?>">
                                        <input type="text" class="form-control margin-bottom b_input " name="kmzLength[<?php echo $count; ?>]" id="kmzLength">
                                    </div>
                                </div>
                                <div class="form-group row mt-1">
                                    <label class="col-sm-5 col-form-label" for="name">Kurta Length</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control margin-bottom b_input " name="kurtaLength[<?php echo $count; ?>]" id="kmzLength">
                                    </div>
                                </div>
                                <div class="form-group row mt-1">
                                    <label class="col-sm-5 col-form-label" for="name">Shoulder</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control margin-bottom b_input " name="kmzShoulder[<?php echo $count; ?>]" id="kmzShoulder">
                                    </div>
                                </div>
                                <div class="form-group row mt-1">
                                    <label class="col-sm-5 col-form-label" for="name">Sleeves Length</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control margin-bottom b_input " name="kmzSleeves[<?php echo $count; ?>]" id="kmzSleeves">
                                    </div>
                                </div>
                                <div class="form-group row mt-1">
                                    <label class="col-sm-5 col-form-label" for="name">Neck</label>
                                    <div class="col-sm-6">
                                       <input type="text" class="form-control margin-bottom b_input " name="kmzNeck[<?php echo $count; ?>]" id="kmzNeck">
                                    </div>
                                </div>
                                <div class="form-group row mt-1">
                                    <label class="col-sm-5 col-form-label" for="name">Chest</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control margin-bottom b_input " name="kmzChest[<?php echo $count; ?>]" id="kmzChest">
                                   </div>
                                </div>
                                <div class="form-group row mt-1">
                                    <label class="col-sm-5 col-form-label" for="name">Waist</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control margin-bottom b_input " name="kmzWaist[<?php echo $count; ?>]" id="kmzWaist">
                                    </div>
                                </div>
                                <div class="form-group row mt-1">
                                    <label class="col-sm-5 col-form-label" for="name">Hip</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control margin-bottom b_input " name="kmzHips[<?php echo $count; ?>]" id="kmzHips">
                                    </div>
                                </div>
                                <div class="form-group row mt-1">
                                    <label class="col-sm-5 col-form-label" for="name">Bicep</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control margin-bottom b_input" name="kmzBicep[<?php echo $count; ?>]" id="kmzBicep">
                                    </div>
                                </div>
                                <div class="form-group row mt-1">
                                    <label class="col-sm-5 col-form-label"  for="name">Forearm</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control margin-bottom b_input" name="kmzForearm[<?php echo $count; ?>]" id="kmzForearm">
                                   </div>
                                </div>
                                <div class="form-group row mt-1">
                                    <label class="col-sm-5 col-form-label" for="name">Armhole</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control margin-bottom b_input" name="kmzarmhole[<?php echo $count; ?>]" id="kmzForearm">
                                   </div>
                                </div>
                                <div class="form-group row mt-1">
                                    <label class="col-sm-5 col-form-label" for="name">Cuff</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control margin-bottom b_input" name="kmzcuff[<?php echo $count; ?>]" id="kmzForearm">
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
                                          class="form-control margin-bottom b_input " name="shlLength[<?php echo $count; ?>]"
                                          id="shlLength">
                               </div>
                            </div>
                            <div class="form-group row mt-1">
                              <label class="col-sm-5 col-form-label"
                                for="name">Shalwar Bottom</label>

                               <div class="col-sm-6">
                                   <input type="text"
                                          class="form-control margin-bottom b_input " name="shlBottom[<?php echo $count; ?>]"
                                          id="shlBottom">
                               </div>
                            </div>
                         
                            <div class="form-group row mt-1">
                              <label class="col-sm-5 col-form-label"
                                for="name">Asan Tyar</label>

                               <div class="col-sm-6">
                                   <input type="text"
                                          class="form-control margin-bottom b_input " name="shlAsanTyar[<?php echo $count; ?>]"
                                          id="shlAsanTyar">
                               </div>
                            </div>
                          
                            <div class="form-group row mt-1">
                              <label class="col-sm-5 col-form-label"
                                for="name">Shalwar Gaira Tyar</label>

                               <div class="col-sm-6">
                                   <input type="text"
                                          class="form-control margin-bottom b_input " name="shlGairaTyar[<?php echo $count; ?>]"
                                          id="shlGairaTyar">
                               </div>
                            </div>

                            <div class="form-group row mt-1">
                              <label class="col-sm-5 col-form-label"
                                for="name">Pajama Length</label>

                               <div class="col-sm-6">
                                   <input type="text"
                                          class="form-control margin-bottom b_input " name="pjamaLength[<?php echo $count; ?>]"
                                          id="shlLength">
                               </div>
                            </div>
                            <div class="form-group row mt-1">
                              <label class="col-sm-5 col-form-label"
                                for="name">Pajama Bottom</label>

                               <div class="col-sm-6">
                                   <input type="text"
                                          class="form-control margin-bottom b_input " name="pjamaBottom[<?php echo $count; ?>]"
                                          id="shlBottom">
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
                                                <input type="radio" class="custom-control-input" name="is_collar[<?php echo $count; ?>]" id="is_kamiz_collar_<?php echo $count; ?>" value="1" data-count="<?php echo $count; ?>">
                                                <label class="custom-control-label" for="is_kamiz_collar_<?php echo $count; ?>">Collar</label>
                                            </div> &nbsp;&nbsp;
                                            <div class="custom-control custom-radio form-check-inline">
                                                <input type="radio" class="custom-control-input" name="is_collar[<?php echo $count; ?>]" id="is_half_band_<?php echo $count; ?>" value="2" data-count="<?php echo $count; ?>">
                                                <label class="custom-control-label" for="is_half_band_<?php echo $count; ?>">Half Band</label>
                                            </div>&nbsp;&nbsp;
                                            <div class="custom-control custom-radio form-check-inline">
                                                <input type="radio" class="custom-control-input" name="is_collar[<?php echo $count; ?>]" id="is_full_band_<?php echo $count; ?>" value="3" data-count="<?php echo $count; ?>">
                                                <label class="custom-control-label" for="is_full_band_<?php echo $count; ?>">Full Band</label>
                                            </div>&nbsp;&nbsp;
                                            <div class="custom-control custom-radio form-check-inline">
                                                <input type="radio" class="custom-control-input" name="is_collar[<?php echo $count; ?>]" id="moon_neck_<?php echo $count; ?>" value="4" data-count="<?php echo $count; ?>">
                                                <label class="custom-control-label" for="moon_neck_<?php echo $count; ?>">Moon Neck</label>
                                            </div>
                                            <div class="input-group collar_text_<?php echo $count; ?>" style="display:none;">
                                                <input type="text" class="form-control" style="margin-right:20px;margin-top:5px;" name="collar_ins[<?php echo $count; ?>]" id="collar_ins_<?php echo $count; ?>" placeholder="Write instructions..."> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row  mt-1">
                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="is_front[<?php echo $count; ?>]" id="is_round_front_<?php echo $count; ?>" value="1">
                                                <label class="custom-control-label" for="is_round_front_<?php echo $count; ?>">Round Front</label>
                                            </div>&nbsp;&nbsp;
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="is_front[<?php echo $count; ?>]" id="straight_front_<?php echo $count; ?>" value="2">
                                                <label class="custom-control-label" for="straight_front_<?php echo $count; ?>">Straight Front</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row  mt-1">
                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="is_front_pocket[<?php echo $count; ?>]" id="is_front_pocket_<?php echo $count; ?>" value="1" data-count="<?php echo $count; ?>">
                                                <label class="custom-control-label" for="is_front_pocket_<?php echo $count; ?>">Front Pocket</label>
                                            </div>
                                            <div class="input-group front_pocket_text_<?php echo $count; ?>" style="display:none;">
                                                <input type="text" class="form-control" style="margin-right:20px; margin-top:5px;" name="front_pocket_ins[<?php echo $count; ?>]" id="front_pocket_ins_<?php echo $count; ?>" placeholder="Write instructions..."> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row  mt-1">
                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="is_shalwar_pocket[<?php echo $count; ?>]" id="is_shalwar_pocket_<?php echo $count; ?>" data-count="<?php echo $count; ?>" value="1">
                                                <label class="custom-control-label" for="is_shalwar_pocket_<?php echo $count; ?>">Shalwar Pocket</label>
                                            </div>
                                            <div class="input-group shalwar_pocket_text_<?php echo $count; ?>" style="display:none;">
                                                <input type="text" class="form-control" style="margin-right:20px;margin-top:5px;" name="shalwar_pocket_ins[<?php echo $count; ?>]" id="shalwar_pocket_ins_<?php echo $count; ?>" placeholder="Write instructions..."> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row  mt-1">
                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="is_pocket[<?php echo $count; ?>]" id="1side_pocket_<?php echo $count; ?>" value="1">
                                                <label class="custom-control-label" for="1side_pocket_<?php echo $count; ?>">1 side pocket</label>
                                            </div>&nbsp;&nbsp;
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="is_pocket[<?php echo $count; ?>]" id="2side_pocket_<?php echo $count; ?>" value="2">
                                                <label class="custom-control-label" for="2side_pocket_<?php echo $count; ?>">2 side pocket</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row  mt-1">
                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="is_sleeve_placket[<?php echo $count; ?>]" id="is_sleeve_placket_<?php echo $count; ?>" value="1">
                                                <label class="custom-control-label" for="is_sleeve_placket_<?php echo $count; ?>">Sleeve Placket Button</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row  mt-1">
                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="is_button[<?php echo $count; ?>]" id="is_plain_button_<?php echo $count; ?>" value="1">
                                                <label class="custom-control-label" for="is_plain_button_<?php echo $count; ?>">Plain Button</label>
                                            </div>&nbsp;&nbsp;
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="is_button[<?php echo $count; ?>]" id="fancy_button_<?php echo $count; ?>" value="2">
                                                <label class="custom-control-label" for="fancy_button_<?php echo $count; ?>">Fancy Button</label>
                                            </div>&nbsp;&nbsp;
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="is_button[<?php echo $count; ?>]" id="loop_button_<?php echo $count; ?>" value="3">
                                                <label class="custom-control-label" for="loop_button_<?php echo $count; ?>">Loop Button</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row  mt-1">
                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="is_cuff[<?php echo $count; ?>]" id="is_button_cuff_<?php echo $count; ?>" value="1">
                                                <label class="custom-control-label" for="is_button_cuff_<?php echo $count; ?>">Button Cuff</label>
                                            </div>&nbsp;&nbsp;
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="is_cuff[<?php echo $count; ?>]" id="is_french_cuff_<?php echo $count; ?>" value="2">
                                                <label class="custom-control-label" for="is_french_cuff_<?php echo $count; ?>">French Cuff</label>
                                            </div>&nbsp;&nbsp;
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="is_cuff[<?php echo $count; ?>]" id="is_open_sleeves_<?php echo $count; ?>" value="3">
                                                <label class="custom-control-label" for="is_open_sleeves_<?php echo $count; ?>">Open Sleeves</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row  mt-1">
                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="is_design[<?php echo $count; ?>]" id="is_half_design_<?php echo $count; ?>" value="1">
                                                <label class="custom-control-label" for="is_half_design_<?php echo $count; ?>">Half design</label>
                                            </div>&nbsp;&nbsp;
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="is_design[<?php echo $count; ?>]" id="is_full_design_<?php echo $count; ?>" value="2">
                                                <label class="custom-control-label" for="is_full_design_<?php echo $count; ?>">Full design</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row  mt-1">
                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="is_kanta[<?php echo $count; ?>]" id="is__kanta_<?php echo $count; ?>" value="1">
                                                <label class="custom-control-label" for="is__kanta_<?php echo $count; ?>">Kanta</label>
                                            </div>&nbsp;&nbsp;
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="is_kanta[<?php echo $count; ?>]" id="is_jali_kanta_<?php echo $count; ?>" value="2">
                                                <label class="custom-control-label" for="is_jali_kanta_<?php echo $count; ?>">Jali Kanta</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row  mt-1">
                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="is_stitch[<?php echo $count; ?>]" id="is_single_stitch_<?php echo $count; ?>" value="1">
                                                <label class="custom-control-label" for="is_single_stitch_<?php echo $count; ?>">Single stitch</label>
                                            </div>&nbsp;&nbsp;
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="is_stitch[<?php echo $count; ?>]" id="is_double_stitch_<?php echo $count; ?>" value="2">
                                                <label class="custom-control-label" for="is_double_stitch_<?php echo $count; ?>">Full double stitch</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row  mt-1">
                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="is_thread[<?php echo $count; ?>]" id="is_shin_thread_<?php echo $count; ?>" value="1">
                                                <label class="custom-control-label" for="is_shin_thread_<?php echo $count; ?>">Shining thread</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row  mt-1">
                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="is_bookrum[<?php echo $count; ?>]" id="is_hard_bookrum_<?php echo $count; ?>" value="1">
                                                <label class="custom-control-label" for="is_hard_bookrum_<?php echo $count; ?>">Hard bookrum</label>
                                            </div>&nbsp;&nbsp;
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="is_bookrum[<?php echo $count; ?>]" id="is_soft_bookrum_<?php echo $count; ?>" value="2">
                                                <label class="custom-control-label" for="is_soft_bookrum_<?php echo $count; ?>">Soft bookrum</label>
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
                                            <input type="radio" class="custom-control-input" name="is_placket[<?php echo $count; ?>]" id="front_placket_<?php echo $count; ?>" value="1">
                                            <label class="custom-control-label" for="front_placket_<?php echo $count; ?>">Front placket</label>
                                        </div> &nbsp;&nbsp;
                                        <div class="custom-control custom-radio form-check-inline">
                                            <input type="radio" class="custom-control-input" name="is_placket[<?php echo $count; ?>]" id="plane_placket_<?php echo $count; ?>" value="2">
                                            <label class="custom-control-label" for="plane_placket_<?php echo $count; ?>"> Plain Front</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row  mt-1">
                                <div class="col-md-12">
                                    <div class="input-group">
                                    <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="is_shirt_cuff[<?php echo $count; ?>]" id="is_shirt_button_cuff_<?php echo $count; ?>" value="1">
                                            <label class="custom-control-label" for="is_shirt_button_cuff_<?php echo $count; ?>">Button Cuff </label>
                                        </div> &nbsp;&nbsp;
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="is_shirt_cuff[<?php echo $count; ?>]" id="is_shirt_double_cuff_<?php echo $count; ?>" value="2">
                                            <label class="custom-control-label" for="is_shirt_double_cuff_<?php echo $count; ?>">Double Cuff</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row  mt-1">
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <div class="custom-control custom-radio form-check-inline">
                                            <input type="radio" class="custom-control-input" name="is_shirt_collar[<?php echo $count; ?>]" id="is__shirt_collar_<?php echo $count; ?>" data-count="<?php echo $count; ?>" value="1">
                                            <label class="custom-control-label" for="is__shirt_collar_<?php echo $count; ?>">Collar</label>
                                        </div> &nbsp;&nbsp;
                                        <div class="custom-control custom-radio form-check-inline">
                                            <input type="radio" class="custom-control-input" name="is_shirt_collar[<?php echo $count; ?>]" id="is_shirt_half_band_<?php echo $count; ?>" data-count="<?php echo $count; ?>" value="2">
                                            <label class="custom-control-label" for="is_shirt_half_band_<?php echo $count; ?>">Half Band</label>
                                        </div>&nbsp;&nbsp;
                                        <div class="custom-control custom-radio form-check-inline">
                                            <input type="radio" class="custom-control-input" name="is_shirt_collar[<?php echo $count; ?>]" id="is_shirt_full_band_<?php echo $count; ?>" data-count="<?php echo $count; ?>" value="3">
                                            <label class="custom-control-label" for="is_shirt_full_band_<?php echo $count; ?>">Full Band</label>
                                        </div><br><br>
                                    </div>
                                </div>
                                <div class="col-md-12 shirt_collar_text_<?php echo $count; ?>" style="display:none;">
                                    <div class="custom-control custom-radio form-check-inline">
                                        <input type="radio" class="custom-control-input" name="is_shirt_collar_type[<?php echo $count; ?>]" id="tie_collar_<?php echo $count; ?>" value="1">
                                        <label class="custom-control-label" for="tie_collar_<?php echo $count; ?>">Tie Collar</label>
                                    </div><br>
                                    <div class="custom-control custom-radio form-check-inline">
                                        <input type="radio" class="custom-control-input" name="is_shirt_collar_type[<?php echo $count; ?>]" id="button_down_<?php echo $count; ?>" value="2">
                                        <label class="custom-control-label" for="button_down_<?php echo $count; ?>">Button Down</label>
                                    </div><br>
                                    <div class="custom-control custom-radio form-check-inline">
                                        <input type="radio" class="custom-control-input" name="is_shirt_collar_type[<?php echo $count; ?>]" id="vintage_clud_<?php echo $count; ?>" value="3">
                                        <label class="custom-control-label" for="vintage_clud_<?php echo $count; ?>">Vintage club</label>
                                    </div><br>
                                    <div class="custom-control custom-radio form-check-inline">
                                        <input type="radio" class="custom-control-input" name="is_shirt_collar_type[<?php echo $count; ?>]" id="half_french_<?php echo $count; ?>" value="4">
                                        <label class="custom-control-label" for="half_french_<?php echo $count; ?>">Half French</label>
                                    </div><br>
                                    <div class="custom-control custom-radio form-check-inline">
                                        <input type="radio" class="custom-control-input" name="is_shirt_collar_type[<?php echo $count; ?>]" id="full_french_<?php echo $count; ?>" value="5">
                                        <label class="custom-control-label" for="full_french_<?php echo $count; ?>">Full French</label>
                                    </div><br>
                                    <div class="custom-control custom-radio form-check-inline">
                                        <input type="radio" class="custom-control-input" name="is_shirt_collar_type[<?php echo $count; ?>]" id="tuxedo_<?php echo $count; ?>" value="6">
                                        <label class="custom-control-label" for="tuxedo_<?php echo $count; ?>">Tuxedo</label>
                                    </div>                                        
                                    <div class="input-group">
                                        <input type="text" class="form-control" style="margin-right:20px;margin-top:5px;" name="shirt_collar_ins[<?php echo $count; ?>]" id="shirt_collar_ins_<?php echo $count; ?>" placeholder="Write instructions..."> 
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
                      <textarea class="form-control" name="inst[<?php echo $count; ?>]" rows="7" id="comment"></textarea>
                    </div>
                  </div>
                </div> 
                
                <div class="row mt-1 only_shirt" style="display: none;">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="email" class="col-form-label">Shirts Instructions:</label>
                      <textarea class="form-control" name="shirt_inst[<?php echo $count; ?>]" rows="7" id="comment"></textarea>
                    </div>
                  </div>
                </div> 
                
                <div class="row mt-1 shalwar" style="display: none;">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="email" class="col-form-label">Shalwar Kameez Instructions:</label>
                      <textarea class="form-control" name="shalwar_inst[<?php echo $count; ?>]" rows="7" id="comment"></textarea>
                    </div>
                  </div>
                </div>
            </div>
<input type="hidden" name ="alag1"  value="MYBAD">

<script>
    $(document).ready(function () {
$("input[name='is_collar[<?php echo $count; ?>]']").change(function () {
            $(".default_row .collar_text").show();
        });

        $("input[name='is_front_pocket[<?php echo $count; ?>]']").change(function () {
            $(".default_row .front_pocket_text").show();
        });

        $("input[name='is_shalwar_pocket[<?php echo $count; ?>]']").change(function () {
            $(".default_row .shalwar_pocket_text").show();
        });

        $("input[name='is_shirt_collar[<?php echo $count; ?>]']").change(function () {
            $(".default_row .shirt_collar_text").show();
        });

        $(document).on('click', 'input[name="is_shirt_collar[<?php echo $count; ?>]"]', function () {
            var count = $(this).attr('data-count');
            $(".append_row_for_article_" + count + " .shirt_collar_text_" + count).show();
        });

        $(document).on('click', 'input[name="is_shalwar_pocket[<?php echo $count; ?>]"]', function () {
            var count = $(this).attr('data-count');
            $(".append_row_for_article_" + count + " .shalwar_pocket_text_" + count).show();
        });

        $(document).on('click', 'input[name="is_front_pocket[<?php echo $count; ?>]"]', function () {
            var count = $(this).attr('data-count');
            $(".append_row_for_article_" + count + " .front_pocket_text_" + count).show();
        });

        $(document).on('click', 'input[name="is_collar[<?php echo $count; ?>]"]', function () {
            var count = $(this).attr('data-count');
            $(".append_row_for_article_" + count + " .collar_text_" + count).show();
        });
    });
</script>