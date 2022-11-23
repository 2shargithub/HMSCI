<div class="box">

	<div class="box-header">

    

    	<!------CONTROL TABS START------->

		<ul class="nav nav-tabs nav-tabs-left">

        	<?php if(isset($edit_profile)):?>

			<li class="active">

            	<a href="#edit" data-toggle="tab"><i class="icon-wrench"></i> 

					<?php echo ('Edit Patient');?>

                    	</a></li>

            <?php endif;?>

			<li class="<?php if(!isset($edit_profile))echo 'active';?>">

            	<a href="#list" data-toggle="tab"><i class="icon-align-justify"></i> 

					<?php echo ('Patient List');?>

                    	</a></li>

			<li>

            	<a href="#add" data-toggle="tab"><i class="icon-plus"></i>

					<?php echo ('Add Patient');?>

                    	</a></li>
                        <li>

                <a href="#vitals" data-toggle="tab"><i class="icon-plus"></i>

                    <?php echo ('Record Vitals');?>

                        </a></li>

		</ul>

    	<!------CONTROL TABS END------->

        

	</div>

	<div class="box-content padded">

		<div class="tab-content">

        	<!----EDITING FORM STARTS---->

        	<?php if(isset($edit_profile)):?>

			<div class="tab-pane box active" id="edit" style="padding: 5px">

                <div class="box-content">

                	<?php foreach($edit_profile as $row):?>

                    <?php echo form_open('nurse/manage_patient/edit/do_update/'.$row['patient_id'] , array('class' => 'form-horizontal validatable'));?>

                        <div class="padded">

                            <div class="control-group">

                                <label class="control-label"><?php echo ('Name');?></label>

                                <div class="controls">

                                    <input type="text" class="validate[required]" name="name" value="<?php echo $row['name'];?>"/>

                                </div>

                            </div>

                            <div class="control-group">

                                <label class="control-label"><?php echo ('Email');?></label>

                                <div class="controls">

                                    <input type="text" class="validate[required]" name="email" value="<?php echo $row['email'];?>"/>

                                </div>

                            </div>

                            <div class="control-group">

                                <label class="control-label"><?php echo ('Password');?></label>

                                <div class="controls">

                                    <input type="password" class="validate[required]" name="password" value="<?php echo $row['password'];?>"/>

                                </div>

                            </div>

                            <div class="control-group">

                                <label class="control-label"><?php echo ('Address');?></label>

                                <div class="controls">

                                    <input type="text" class="validate[required]" name="address" value="<?php echo $row['address'];?>"/>

                                </div>

                            </div>

                            <div class="control-group">

                                <label class="control-label"><?php echo ('Phone');?></label>

                                <div class="controls">

                                    <input type="text" class="validate[required]" name="phone" value="<?php echo $row['phone'];?>"/>

                                </div>

                            </div>

                            <div class="control-group">

                                <label class="control-label"><?php echo ('Sex');?></label>

                                <div class="controls">

                                    <select name="sex" class="uniform" style="width:100%;">

                                    	<option value="male" <?php if($row['sex']=='male')echo 'selected';?>><?php echo ('Male');?></option>

                                    	<option value="female" <?php if($row['sex']=='female')echo 'selected';?>><?php echo ('Female');?></option>

                                    </select>

                                </div>

                            </div>

                            <div class="control-group">

                                <label class="control-label"><?php echo ('Birth Date');?></label>

                                <div class="controls">

                                    <input type="text"   class="datepicker fill-up validate[required]"  name="birth_date" value="<?php echo $row['birth_date'];?>"/>

                                </div>

                            </div>

                            <div class="control-group">

                                <label class="control-label"><?php echo ('Age');?></label>

                                <div class="controls">

                                    <input type="text" class="validate[required]" name="age" value="<?php echo $row['age'];?>"/>

                                </div>

                            </div>

                            <div class="control-group">

                                <label class="control-label"><?php echo ('Blood Group');?></label>

                                <div class="controls">

                                    <select name="blood_group" class="uniform" style="width:100%;">

                                    	<option value="A+" <?php if($row['blood_group']=='A+')echo 'selected';?>>A+</option>

                                        <option value="A-" <?php if($row['blood_group']=='A-')echo 'selected';?>>A-</option>

                                        <option value="B+" <?php if($row['blood_group']=='B+')echo 'selected';?>>B+</option>

                                        <option value="B-" <?php if($row['blood_group']=='B-')echo 'selected';?>>B-</option>

                                        <option value="AB+" <?php if($row['blood_group']=='AB+')echo 'selected';?>>AB+</option>

                                        <option value="AB-" <?php if($row['blood_group']=='AB-')echo 'selected';?>>AB-</option>

                                        <option value="O+" <?php if($row['blood_group']=='O+')echo 'selected';?>>O+</option>

                                        <option value="O-" <?php if($row['blood_group']=='O-')echo 'selected';?>>O-</option>

                                    </select>

                                </div>

                            </div>

                        </div>

                        <div class="form-actions">

                            <button type="submit" class="btn btn-primary"><?php echo ('Save Patient');?></button>

                        </div>

                    <?php echo form_close();?>

                    <!---------Patient Vitals REPORTS----------->

                    <hr />

                    <div class="box">

                    <div class="box-header"><span class="title"><?php echo ('Patient Vitals');?></span></div>

                    <div class="box-content">

                        <table cellpadding="0" cellspacing="0" border="0" class="table table-normal ">

                            <thead>

                                <tr>

                                    <td><div>#</div></td>

                                    <td><div><?php echo ('Date');?></div></td>

                                    <td><div><?php echo ('Height');?></div></td>

                                    <td><div><?php echo ('Weight');?></div></td>

                                    <td><div><?php echo ('Calculated BMI');?></div></td>

                                    <td><div><?php echo ('Temperature');?></div></td>

                                    <td><div><?php echo ('Pulse');?></div></td>

                                    <td><div><?php echo ('Respiratory Rate');?></div></td>

                                    <td><div><?php echo ('Blood Pressure');?></div></td>

                                    <td><div><?php echo ('Blood Oxygen Saturation');?></div></td>

                                </tr>

                            </thead>

                            <tbody>

                                <?php 

                                $count = 1;

                                $vitals_reports =   $this->db->get_where('vitals' , array('Patient_Id' => $row['patient_id']))->result_array();

                                foreach($vitals_reports as $row2):?>

                                <tr>
                                    <td><?php echo $count++;?></td>

                                    <td><?php echo date('d M,Y', $row2['Date']);?></td>

                                    <td><?php echo $row2['Height'];?></td>

                                    <td><?php echo $row2['Weight'];?></td>

                                    <td> <?php echo $row2['Calculated_BMI'];?>                                   

                                    </td>

                                    <td><?php echo $row2['Temperature'];?></td>

                                    <td><?php echo $row2['Pulse'];?></td>
                                    <td><?php echo $row2['Respiratory_Rate'];?></td>
                                    <td><?php echo $row2['Blood_Pressure'];?></td>
                                    <td><?php echo $row2['Blood_Oxygen_Saturation'];?></td>

                                    

                                </tr>

                                <?php endforeach;?>

                            </tbody>

                        </table>

                     </div>

                     </div> 

                    <!-------Patient vitals REPORTS ENDS------->

                    <?php endforeach;?>

                </div>

			</div>

            <?php endif;?>

            <!----EDITING FORM ENDS--->

            

            <!----TABLE LISTING STARTS--->

            <div class="tab-pane box <?php if(!isset($edit_profile))echo 'active';?>" id="list">

				

                <table cellpadding="0" cellspacing="0" border="0" class="dTable responsive table-hover">

                	<thead>

                		<tr>

                    		<th><div>#</div></th>

                    		<th><div><?php echo ('Patient Name');?></div></th>

                    		<th><div><?php echo ('Age');?></div></th>

                    		<th><div><?php echo ('Sex');?></div></th>

                    		<th><div><?php echo ('Blood Group');?></div></th>

                    		<th><div><?php echo ('Birth Date');?></div></th>

                    		<th><div><?php echo ('Options');?></div></th>

						</tr>

					</thead>

                    <tbody>

                    	<?php $count = 1;foreach($patients as $row):?>

                        <tr>

                            <td><?php echo $count++;?></td>

							<td><?php echo $row['name'];?></td>

							<td><?php echo $row['age'];?></td>

							<td><?php echo $row['sex'];?></td>

							<td><?php echo $row['blood_group'];?></td>

							<td><?php echo $row['birth_date'];?></td>

							<td align="center">

                            	<a href="<?php echo base_url();?>index.php?nurse/manage_patient/edit/<?php echo $row['patient_id'];?>"

                                	rel="tooltip" data-placement="top" data-original-title="<?php echo ('Edit');?>" class="btn btn-primary">

                                		<i class="icon-wrench"></i>

                                </a>

                            	<a href="<?php echo base_url();?>index.php?nurse/manage_patient/delete/<?php echo $row['patient_id'];?>" onclick="return confirm('delete?')"

                                	rel="tooltip" data-placement="top" data-original-title="<?php echo ('Delete');?>" class="btn btn-danger">

                                		<i class="icon-trash"></i>

                                </a>

        					</td>

                        </tr>

                        <?php endforeach;?>

                    </tbody>

                </table>

			</div>

            <!----TABLE LISTING ENDS--->

            

            

			<!----CREATION FORM STARTS---->

			<div class="tab-pane box" id="add" style="padding: 5px">

                <div class="box-content">

                    <?php echo form_open('nurse/manage_patient/create/' , array('class' => 'form-horizontal validatable'));?>

                        <div class="padded">

                            <div class="control-group">

                                <label class="control-label"><?php echo ('Name');?></label>

                                <div class="controls">

                                    <input type="text" class="validate[required]" name="name"/>

                                </div>

                            </div>

                            <div class="control-group">

                                <label class="control-label"><?php echo ('Email');?></label>

                                <div class="controls">

                                    <input type="text" class="validate[required]" name="email"/>

                                </div>

                            </div>

                            <div class="control-group">

                                <label class="control-label"><?php echo ('Password');?></label>

                                <div class="controls">

                                    <input type="password" class="validate[required]" name="password"/>

                                </div>

                            </div>

                            <div class="control-group">

                                <label class="control-label"><?php echo ('Address');?></label>

                                <div class="controls">

                                    <input type="text" class="validate[required]" name="address"/>

                                </div>

                            </div>

                            <div class="control-group">

                                <label class="control-label"><?php echo ('Phone');?></label>

                                <div class="controls">

                                    <input type="text" class="validate[required]" name="phone"/>

                                </div>

                            </div>

                            <div class="control-group">

                                <label class="control-label"><?php echo ('Sex');?></label>

                                <div class="controls">

                                    <select name="sex" class="uniform" style="width:100%;">

                                    	<option value="male"><?php echo ('Male');?></option>

                                    	<option value="female"><?php echo ('Female');?></option>

                                    </select>

                                </div>

                            </div>

                            <div class="control-group">

                                <label class="control-label"><?php echo ('Birth Date');?></label>

                                <div class="controls">

                                    <input type="text"  class="datepicker fill-up validate[required]" name="birth_date"/>

                                </div>

                            </div>

                            <div class="control-group">

                                <label class="control-label"><?php echo ('Age');?></label>

                                <div class="controls">

                                    <input type="text" class="validate[required]" name="age"/>

                                </div>

                            </div>

                            <div class="control-group">

                                <label class="control-label"><?php echo ('Blood Group');?></label>

                                <div class="controls">

                                    <select name="blood_group" class="uniform" style="width:100%;">

                                    	<option value="A+">A+</option>

                                        <option value="A-">A-</option>

                                        <option value="B+">B+</option>

                                        <option value="B-">B-</option>

                                        <option value="AB+">AB+</option>

                                        <option value="AB-">AB-</option>

                                        <option value="O+">O+</option>

                                        <option value="O-">O-</option>

                                    </select>

                                </div>

                            </div>

                        </div>

                        <div class="form-actions">

                            <button type="submit" class="btn btn-success"><?php echo ('Add Patient');?></button>

                        </div>

                    <?php echo form_close();?>                

                </div>                

			</div>

			<!----CREATION FORM ENDS--->
             <!---- Record Vitals STARTS---->
            <div class="tab-pane box" id="vitals" style="padding: 5px">

                <div class="box-content">

                    <?php echo form_open('nurse/manage_patient/recordvitals/' , array('class' => 'form-horizontal validatable'));?>

                        <div class="padded">

                            <div class="control-group">

                                <label class="control-label"><?php echo ('Patient');?></label>

                                <div class="controls">

                                    <select class="chzn-select" name="patient_id">

                                        <?php 

                                        $this->db->order_by('account_opening_timestamp' , 'asc');

                                        $patients   =   $this->db->get('patient')->result_array();

                                        foreach($patients as $row2):

                                        ?>

                                            <option value="<?php echo $row2['patient_id'];?>" <?php if($row2['patient_id'] == $row['patient_id'])echo 'selected';?>>

                                                <?php echo $row2['name'];?></option>

                                        <?php

                                        endforeach;

                                        ?>

                                    </select>

                                </div>

                            </div>

                            
                            <div class="control-group">

                                <label class="control-label"><?php echo ('Height(CM)');?></label>

                                <div class="controls">

                                    <input type="text" class="validate[required]" name="Height"/>

                                </div>

                            </div>

                            <div class="control-group">

                                <label class="control-label"><?php echo ('Weight(KG)');?></label>

                                <div class="controls">

                                    <input type="text" class="validate[required]" name="Weight"/>

                                </div>

                            </div>

                            <div class="control-group">

                                <label class="control-label"><?php echo ('Calculated BMI');?></label>

                                <div class="controls">

                                    <input type="text" class="validate[required]" name="Calculated_BMI"/>

                                </div>

                            </div>

                            <div class="control-group">

                                <label class="control-label"><?php echo ('Temperature(C)');?></label>

                                <div class="controls">

                                    <input type="text" class="validate[required]" name="Temperature"/>

                                </div>

                            </div>

                            <div class="control-group">

                                <label class="control-label"><?php echo ('Pulse/Min');?></label>

                                <div class="controls">

                                    <input type="text" class="validate[required]" name="Pulse"/>

                                </div>

                            </div>

                            <div class="control-group">

                                <label class="control-label"><?php echo ('Respiratory Rate/min');?></label>

                                <div class="controls">

                                    <input type="text" class="validate[required]" name="Respiratory_Rate"/>

                                </div>

                            </div>
                            <div class="control-group">

                                <label class="control-label"><?php echo ('Blood Pressure');?></label>

                                <div class="controls">

                                    <input type="text" class="validate[required]" name="Blood_Pressure"/> 

                                </div>

                            </div>
                            <div class="control-group">

                                <label class="control-label"><?php echo ('Blood Oxygen Saturation');?></label>

                                <div class="controls">

                                    <input type="text" class="validate[required]" 
                                    name="Blood_Oxygen_Saturation"/>

                                </div>

                                </div>

                        </div>

                        <div class="form-actions">

                            <button type="submit" class="btn btn-success"><?php echo ('Add Vitals');?></button>

                        </div>

                    <?php echo form_close();?>                

                </div>                

            </div>

            <!----Record Vitals ENDS--->
            

		</div>

	</div>

</div>
