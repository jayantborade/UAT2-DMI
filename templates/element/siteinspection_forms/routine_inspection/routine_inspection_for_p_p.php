<!--    Comment:This file updated as per change and suggestions for UAT module after test run
	    Reason: updated as per change and suggestions for UAT module after test run
	    Name of person : shankhpal shende
	    Date: 19-05-2023
*/ -->
<?php //pr($section_form_details);die; ?>
<?php echo $this->Form->create(null, array('type'=>'file', 'enctype'=>'multipart/form-data', 'id'=>$section)); ?>
<section id="form_outer_main" class="content form-middle">
    <div class="container-fluid">
        <h5 class="mt-1 mb-2">Routine Inspection Report (Printing Press)</h5>
            <div id='form_inner_main'>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-success" id="form_outer_main">
                        <!-- Initial Details -->
                        <div class="card-header sub-card-header-firm"><h3 class="card-title">Initial Details</h3></div>
                        <div class="form-horizontal">
                            <div class="card-body border">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm col-form-label">Date of Last Inspection <span class="cRed">*</span></label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <?php echo $this->Form->control('date_last_inspection', array('type'=>'text', 'id'=>'date_last_inspection', 'value'=>$section_form_details[0]['date_last_inspection'], 'class'=>'form-control input-field', 'placeholder'=>'Enter DD/MM/YYYY', 'label'=>false)); ?>
                                        <span id="error_date_last_inspection" class="error invalid-feedback"></span>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        <div class="form-horizontal">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm col-form-label">Date & Time of present Inspection <span class="cRed">*</span></label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <?php echo $this->Form->control('date_p_inspection', array('type'=>'text', 'id'=>'date_p_inspection', 'value'=>$section_form_details[0]['date_p_inspection'], 'class'=>'form-control input-field', 'placeholder'=>'Enter DD/MM/YYYY', 'label'=>false)); ?>
                                    <span id="error_date_p_inspection" class="error invalid-feedback"></span>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <!-- 1. Name of the Printing Press -->
                        <div class="card-header sub-card-header-firm"><h3 class="card-title">1. Name of the Printing Press</h3></div>
                            <div class="form-horizontal">
                                <div class="card-body border">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                    <label for="inputEmail3" class="col-sm col-form-label">Name of the Printing Press <span class="cRed">*</span></label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                        <?php echo $this->Form->control('printing_press', array('type'=>'text', 'id'=>'printing_press','value'=>$firm_details['firm_name'],'readonly'=>true, 'placeholder'=>'Enter Name of the Printing Press', 'label'=>false, 'class'=>'form-control')); ?>
                                            <span id="error_printing_press" class="error invalid-feedback"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 2. Full address with Telephone nos. and e-mail etc.     -->
                            <div class="card-header sub-card-header-firm"><h3 class="card-title">2. Full address with Telephone nos. and e-mail etc.</h3></div>
                                <div class="form-horizontal">
                                    <!-- card body start -->
                                    <div class="card-body border">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                        <label for="inputEmail3" class="col-sm col-form-label">Full Address <span class="cRed">*</span></label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <?php echo $this->Form->control('street_address', array('type'=>'textarea', 'id'=>'street_address','value'=>$section_form_details[0]['street_address'], 'placeholder'=>'Enter street address', 'class'=>'form-control input-field', 'label'=>false)); ?>
                                                <span id="error_street_address" class="error invalid-feedback"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- card body start -->
                                    <div class="card-body border">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group row">
                                                        <label for="inputEmail3" class="col-sm col-form-label">Telephone nos. <span class="cRed">*</span></label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <?php echo $this->Form->control('mobile_no', array('type'=>'text','value'=>base64_decode($firm_details['mobile_no']),'id'=>'mobile_no', 'class'=>'form-control', 'label'=>false)); ?>
                                                <span id="error_mobile_no" class="error invalid-feedback"></span>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group row">
                                                    <label for="inputEmail3" class="col-sm col-form-label">Email <span class="cRed">*</span></label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                            <?php echo $this->Form->control('email', array('type'=>'email', 'placeholder'=>'Enter firm email id','value'=>$section_form_details[0]['email'], 'id'=>'email', 'class'=>'form-control input-field', 'label'=>false)); ?>
                                                <span id="error_email" class="error invalid-feedback"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- card body start -->
                                    <div class="card-body border">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group row">
                                                    <label for="inputEmail3" class="col-sm col-form-label">a) Registered Office </span></label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                            <?php echo $this->Form->control('registered_office', array('type'=>'textarea','value'=>$section_form_details[4], 'id'=>'registered_office','disabled'=>'disabled', 'class'=>'form-control input-field', 'label'=>false)); ?>
                                                <span id="error_registered_office" class="error invalid-feedback"></span>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group row">
                                                    <label for="inputEmail3" class="col-sm col-form-label">b) Printing Press premises.</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                            <?php echo $this->Form->control('press_premises', array('type'=>'textarea','value'=>$section_form_details[5], 'class'=>'form-control input-field','disabled'=>'disabled', 'label'=>false)); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- 3. Permission valid upto -->
                                <div class="card-header sub-card-header-firm"><h3 class="card-title">3. Permission valid upto</h3></div>
                                    <div class="form-horizontal">
                                        <!-- card body start -->
                                        <div class="card-body border">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                            <label for="inputEmail3" class="col-sm col-form-label">Permission valid upto <span class="cRed">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                <?php echo $this->Form->control('valid_upto', array('type'=>'text', 'id'=>'valid_upto', 'escape'=>false,'maxlength'=>'10', 'minlength'=>'10','value'=>$section_form_details[6], 'class'=>'cvOn cvReq cvDate form-control', 'disabled'=>'disabled', 'label'=>false)); ?>
                                                    <span id="error_valid_upto" class="error invalid-feedback"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                    <!-- 4. Permitted packaging material -->
                                    <div class="card-header sub-card-header-firm"><h3 class="card-title">4. Permitted packaging material</h3></div>
                                        <div class="form-horizontal">
                                            <!-- card body start -->
                                            <div class="card-body border">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                                <label for="inputEmail3" class="col-sm col-form-label">Permitted packaging material <span class="cRed">*</span></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                          <?php echo $this->Form->control('sub_commodity', array('type'=>'select', 'options'=>$section_form_details[7], 'multiple'=>'multiple', 'label'=>false, 'disabled'=>'disabled', 'class'=>'form-control')); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                        <!-- 5. List of packers granted permission to print Agmark Replica by the printing press -->
                                    <div class="card-header sub-card-header-firm"><h3 class="card-title">5. List of packers granted permission to print Agmark Replica by the printing press</h3></div>
                                    <?php echo $this->element('rti_addmore_element/rti_list_of_packers_granted_element'); ?>
                                    <!--6.Available stock of printed packaging material with Agmark replica (packer wise) -->
                                    <div class="card-header sub-card-header-firm"><h3 class="card-title">6. Available stock of printed packaging material with Agmark replica (packer wise)</h3></div>
                                        <?php echo $this->element('rti_addmore_element/rti_addmore_element_pp'); ?>

                                <!-- 7. Whether the printed material as in column 6 above is in order as per physical check -->
                                <div class="card-header sub-card-header-firm"><h3 class="card-title">7. Whether the printed material as in column 6 above is in order as per physical check</h3></div>
                                    <div class="form-horizontal">
                                        <!-- card body start -->
                                        <div class="card-body border">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                            <label for="inputEmail3" class="col-sm col-form-label">Whether the printed material as in column 6 above is in order as per physical check <span class="cRed">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <?php
                                                    $i=1;
                                                    $physical_check = $section_form_details[0]['physical_check'];
                                                    
                                                        if($physical_check == 'yes'){
                                                            $checked_yes = 'checked';
                                                            $checked_no = '';
                                                        } else {

                                                            $checked_yes = '';
                                                            $checked_no = 'checked';
                                                        }
                                                        $i++;
                                                    ?>
                                                <div class="col-sm-6">
                                                    <div class=" d-inline">
                                                        <input type="radio" name="physical_check" checked="" id="physical_check-yes" value="yes" <?php echo $checked_yes; ?>>
                                                        <label for="physical_check-yes">Yes
                                                        </label>
                                                    </div>
                                                    <div class=" d-inline">
                                                        <input type="radio" name="physical_check" id="physical_check-no" value="no" <?php echo $checked_no; ?>>
                                                        <label for="physical_check-no">No
                                                        </label>
                                                    </div>
                                                    <span id="error_physical_check" class="error invalid-feedback"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                    <!-- 8. Whether the printing press is printing -->
                                    <div class="card-header sub-card-header-firm"><h3 class="card-title">8. Whether the printing press is printing</h3></div>
                                        <div class="form-horizontal">
                                            <!-- card body start -->
                                            <div class="card-body border">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group row">
                                                                <label for="inputEmail3" class="col-sm col-form-label">Whether the printing press is printing<span class="cRed">*</span></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <?php
                                                        $i=1;
                                                        $is_printing = $section_form_details[0]['is_printing'];
                                                        
                                                            if($is_printing == 'Bar code'){
                                                                $checked_yes = 'checked';
                                                                $checked_no = '';
                                                            } else {

                                                                $checked_yes = '';
                                                                $checked_no = 'checked';
                                                            }
                                                            $i++;
                                                        ?>
                                                    <div class="col-sm-12">
                                                        <div class=" d-inline">
                                                            <input type="radio" name="is_printing" checked="" id="is_printing-bc" value="Bar code" <?php echo $checked_yes; ?>>
                                                            <label for="is_printing-bc">Bar code
                                                            </label>
                                                        </div>
                                                        <div class=" d-inline">
                                                            <input type="radio" name="is_printing" id="is_printing-rn" value="Agmark replica serial number" <?php echo $checked_no; ?>>
                                                            <label for="is_printing-rn">Agmark replica serial number.
                                                            </label>
                                                        </div>
                                                        <span id="error_is_printing-rn" class="error invalid-feedback"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                    <!-- 9. Details of in - house storage facilities for security and safe custody of printing and printed material. -->
                                    <div class="card-header sub-card-header-firm"><h3 class="card-title">9. Details of in - house storage facilities for security and safe custody of printing and printed material.</h3></div>
                                        <div class="form-horizontal">
                                            <!-- card body start -->
                                            <div class="card-body border">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                                <label for="inputEmail3" class="col-sm col-form-label">Details of in - house storage facilities for security and safe custody of printing and printed material. <span class="cRed">*</span></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <?php
                                                        $i=1;
                                                        $storage_facilities = $section_form_details[0]['storage_facilities'];
                                                        
                                                            if($storage_facilities == 'yes'){
                                                                $checked_yes = 'checked';
                                                                $checked_no = '';
                                                            } else {

                                                                $checked_yes = '';
                                                                $checked_no = 'checked';
                                                            }
                                                            $i++;
                                                        ?>
                                                    <div class=" d-inline">
                                                            <input type="radio" name="storage_facilities" checked="" id="storage_facilities-yes" value="yes" <?php echo $checked_yes; ?>>
                                                            <label for="storage_facilities-yes">Yes
                                                            </label>
                                                        </div>
                                                        <div class=" d-inline">
                                                            <input type="radio" name="storage_facilities" id="storage_facilities-no" value="no" <?php echo $checked_no; ?>>
                                                            <label for="storage_facilities-no">No
                                                            </label>
                                                        </div>
                                                        <span id="error_storage_facilities" class="error invalid-feedback"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                        <!-- 10. Whether the printing press maintanins proper accounts for printing orders received, excuted and send monthly invoice records to concerned RO/SO. -->
                                    <div class="card-header sub-card-header-firm"><h3 class="card-title">10. Whether the printing press maintanins proper accounts for printing orders received, excuted and send monthly invoice records to concerned RO/SO.</h3></div>
                                        <div class="form-horizontal">
                                            <!-- card body start -->
                                            <div class="card-body border">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                                <label for="inputEmail3" class="col-sm col-form-label">Whether the printing press maintanins proper accounts for printing orders received, excuted and send monthly invoice records to concerned RO/SO. <span class="cRed">*</span></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <?php
                                                                $i=1;
                                                                $maintains_proper = $section_form_details[0]['maintains_proper'];
                                                                
                                                                    if($maintains_proper == 'yes'){
                                                                        $checked_yes = 'checked';
                                                                        $checked_no = '';
                                                                    } else {

                                                                        $checked_yes = '';
                                                                        $checked_no = 'checked';
                                                                    }
                                                                    $i++;
                                                                ?>
                                                            <div class=" d-inline">
                                                                <input type="radio" name="maintains_proper" checked="" id="maintains_proper-yes" value="yes" <?php echo $checked_yes; ?>>
                                                                <label for="maintains_proper-yes">Yes
                                                                </label>
                                                            </div>
                                                            <div class=" d-inline">
                                                                <input type="radio" name="maintains_proper" id="maintains_proper-no" value="no" <?php echo $checked_no; ?>>
                                                                <label for="maintains_proper-no">No
                                                                </label>
                                                            </div>
                                                        <span id="error_maintains_proper" class="error invalid-feedback"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                    <!-- 11. Whether press is using right quality of printing ink and food grade packaging material. (Check Certificates) -->
                                    <div class="card-header sub-card-header-firm"><h3 class="card-title">11. Whether press is using right quality of printing ink and food grade packaging material. (Check Certificates)</h3></div>
                                        <div class="form-horizontal">
                                            <!-- card body start -->
                                            <div class="card-body border">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                                <label for="inputEmail3" class="col-sm col-form-label">Whether press is using right quality of printing ink and food grade packaging material. (Check Certificates)<span class="cRed">*</span></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                    
                                                <?php $i=1;
                                                        $right_quality_of_printing = $section_form_details[0]['right_quality_of_printing'];
                                                        
                                                            if($right_quality_of_printing == 'yes'){
                                                                $checked_yes = 'checked';
                                                                $checked_no = '';
                                                            } else {

                                                                $checked_yes = '';
                                                                $checked_no = 'checked';
                                                            }
                                                            $i++; 
                                                    ?>
                                                        
                                                            <div class=" d-inline">
                                                                <input type="radio" name="right_quality_of_printing" checked="" id="right_quality_of_printing-yes" value="yes" <?php echo $checked_yes; ?>>
                                                                <label for="right_quality_of_printing-yes">Yes
                                                                </label>
                                                            </div>
                                                            <div class=" d-inline">
                                                                <input type="radio" name="right_quality_of_printing" id="right_quality_of_printing-no" value="no" <?php echo $checked_no; ?>>
                                                                <label for="right_quality_of_printing-no">No
                                                                </label>
                                                            </div>
                                                        <span id="error_right_quality_of_printing" class="error invalid-feedback"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                        <!-- 12. Whether the printing press is making logo of printing unit on packaging material. -->
                                        <div class="card-header sub-card-header-firm"><h3 class="card-title">12. Whether the printing press is making logo of printing unit on packaging material.</h3></div>
                                            <div class="form-horizontal">
                                                <!-- card body start -->
                                                <div class="card-body border">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                    <label for="inputEmail3" class="col-sm col-form-label">Whether press is using right quality of printing ink and food grade packaging material. (Check Certificates)<span class="cRed">*</span></label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                        
                                                    <?php
                                                                $i=1;
                                                                $press_is_marking_logo = $section_form_details[0]['press_is_marking_logo'];
                                                                
                                                                    if($press_is_marking_logo == 'yes'){
                                                                        $checked_yes = 'checked';
                                                                        $checked_no = '';
                                                                    } else {

                                                                        $checked_yes = '';
                                                                        $checked_no = 'checked';
                                                                    }
                                                                    $i++;
                                                                ?>
                                                            <div class=" d-inline">
                                                                <input type="radio" name="press_is_marking_logo" checked="" id="press_is_marking_logo-yes" value="yes" <?php echo $checked_yes; ?>>
                                                                <label for="press_is_marking_logo-yes">Yes
                                                                </label>
                                                            </div>
                                                            <div class=" d-inline">
                                                                <input type="radio" name="press_is_marking_logo" id="press_is_marking_logo-no" value="no" <?php echo $checked_no; ?>>
                                                                <label for="press_is_marking_logo-no">No
                                                                </label>
                                                            </div>
                                                            <span id="error_press_is_marking_logo" class="error invalid-feedback"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 
                                            <!-- 13. Suggestions given during the last inspection, if any & whether corrective action taken -->
                                            <div class="card-header sub-card-header-firm"><h3 class="card-title">13. Suggestions given during the last inspection, if any & whether corrective action taken</h3></div>
                                                <div class="form-horizontal">
                                                    <!-- card body start -->
                                                    <div class="card-body border">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group row">
                                                                        <label for="inputEmail3" class="col-sm col-form-label">Suggestions given during the last inspection, if any & whether corrective action taken <span class="cRed">*</span></label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <?php echo $this->Form->control('last_insp_suggestion', array('type'=>'textarea', 'id'=>'last_insp_suggestion', 'class'=>'form-control input-field', 'placeholder'=>'Enter Suggestions given during the last inspection','value'=>$section_form_details[0]['last_insp_suggestion'],  'label'=>false)); ?>
                                                                        <span id="error_last_insp_suggestion" class="error invalid-feedback"></span>
                                                                    </div>
                                                                <span id="error_concerned_offices" class="error invalid-feedback"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> 
                                            <!-- 14. Shortcomings observed during the present Inspection. -->
                                            <div class="card-header sub-card-header-firm"><h3 class="card-title">14. Shortcomings observed during the present Inspection.</h3></div>
                                                <div class="form-horizontal">
                                                    <!-- card body start -->
                                                    <div class="card-body border">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group row">
                                                                        <label for="inputEmail3" class="col-sm col-form-label">Shortcomings observed during the present Inspection.<span class="cRed">*</span></label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                            
                                                        <?php
                                                                $i=1;
                                                                $short_obserd = $section_form_details[0]['short_obserd'];
                                                                
                                                                    if($short_obserd == 'yes'){
                                                                        $checked_yes = 'checked';
                                                                        $checked_no = '';
                                                                    } else {

                                                                        $checked_yes = '';
                                                                        $checked_no = 'checked';
                                                                    }
                                                                    $i++;
                                                                ?>
                                                                <div class=" d-inline">
                                                                    <input type="radio" name="short_obserd" checked="" id="short_obserd-yes" value="yes" <?php echo $checked_yes; ?>>
                                                                    <label for="short_obserd-yes">Yes
                                                                    </label>
                                                                </div>
                                                                <div class=" d-inline">
                                                                    <input type="radio" name="short_obserd" id="short_obserd-no" value="no" <?php echo $checked_no; ?>>
                                                                    <label for="short_obserd-no">No
                                                                    </label>
                                                                </div>
                                                                <span id="error_short_obserd" class="error invalid-feedback"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>                              
                                            <!-- 15. Suggestions, if any -->
                                            <div class="card-header sub-card-header-firm"><h3 class="card-title">15. Suggestions, if any</h3></div>
                                                <div class="form-horizontal">
                                                    <!-- card body start -->
                                                    <div class="card-body border">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group row">
                                                                        <label for="inputEmail3" class="col-sm col-form-label">Suggestions, if any <span class="cRed">*</span></label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <?php echo $this->Form->control('if_any_sugg', array('type'=>'textarea', 'id'=>'if_any_sugg','value'=>$section_form_details[0]['if_any_sugg'], 'class'=>'form-control input-field', 'placeholder'=>'Enter Suggestions, if any', 'label'=>false)); ?>
                                                                <span id="error_if_any_sugg" class="error invalid-feedback"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>                                          
                                        <!-- Signnature and Name of the Inspecting Officer -->     
                                        <div class="card-header sub-card-header-firm"><h3 class="card-title">Signature and name of the authorized person Officer of the printing press or any representative</h3></div>
                                            <div class="form-horizontal">
                                                <div class="form-horizontal">
                                                    <div class="card-body border">
                                                        <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label for="inputEmail3" class="col-sm col-form-label">Name of the authorized person Officer of the printing press or any representative<span class="cRed"> * </span></label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <div class="col-sm">
                                                                    <?php echo $this->Form->control('name_of_inspecting_officer', array('type'=>'text', 'id'=>'name_of_inspecting_officer','placeholder'=>'Enter Name of the Inspecting Officer', 'class'=>'form-control', 'label'=>false,'value'=>isset($section_form_details[0]['name_of_inspecting_officer'])?$section_form_details[0]['name_of_inspecting_officer']:"")); ?>
                                                                        <span id="error_name_of_inspecting_officer" class="error invalid-feedback"></span>
                                                                </div> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                    <div class="form-horizontal">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group row">
                                                                            <label for="field3" class="col-sm col-form-label"><span><?php if ($current_level == 'level_2' && $application_mode == 'edit' ) { echo 'Signature of Inspection with official Stamp'; } else { echo 'Signature of Inspection with official Stamp'; } ?></span></label>

                                                                            <span class="float-left"><?php if ($current_level == 'level_2' && $application_mode == 'edit' && empty($section_form_details[0]['signnature_of_inspecting_officer_docs'])) { echo 'Attach docs'; }else{ echo 'Attached docs'; } ?> :
                                                                            <?php if (!empty($section_form_details[0]['signnature_of_inspecting_officer_docs'])) { ?>
                                                                                <a id="signnature_of_inspecting_officer_docs_value" target="blank" href="<?php echo str_replace("D:/xampp/htdocs","",$section_form_details[0]['signnature_of_inspecting_officer_docs']); ?>"><?=$str2 = substr(array_values(array_slice((explode("/",$section_form_details[0]['signnature_of_inspecting_officer_docs'])), -1))[0],23);?></a>
                                                                            <?php }else{ echo "No Document Provided" ;} ?>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group row">
                                                                            <div class="custom-file col-sm">
                                                                                    <input type="file" name="signnature_of_inspecting_officer_docs" class="form-control" id="signnature_of_inspecting_officer_docs" multiple='multiple'>
                                                                                    <span id="error_signnature_of_inspecting_officer_docs" class="error invalid-feedback"></span>
                                                                                    <span id="error_type_signnature_of_inspecting_officer_docs" class="error invalid-feedback"></span>
                                                                                    <span id="error_size_signnature_of_inspecting_officer_docs" class="error invalid-feedback"></span>
                                                                                    </div>
                                                                            </div> 
                                    <p class="lab_form_note float-right mt-3"><i class="fa fa-info-circle"></i> File type: PDF, jpg &amp; max size upto 2 MB</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>                          
                                    
<input type="hidden" id="final_submit_status_id" value="<?php echo $final_submit_status; ?>">
<input type="hidden" id="application_mode" value="<?php echo $_SESSION['application_mode']; ?>">
<input type="hidden" id="application_type_id" value="<?php echo $_SESSION['application_type']; ?>">
<?php
	echo $this->Html->css('multiselect/jquery.multiselect');
	echo $this->Html->script('multiselect/jquery.multiselect');
	echo $this->Html->script('routininspection/routin_inspection');
    echo $this->Html->script('routininspection/routine_inspection_add_more_pp');
    
?>

