<div class="box">

	<div class="box-header">

    

    	<!------CONTROL TABS START------->

		<ul class="nav nav-tabs nav-tabs-left">

			<li class="active">

            	<a href="#Vitals" data-toggle="tab"><i class="icon-align-justify"></i> 

					<?php echo ('Vitals');?>

                    	</a></li>

			<li>

            	<a href="#Diagonis_History" data-toggle="tab"><i class="icon-align-justify"></i> 

					<?php echo ('Diagonis History');?>

                    	</a></li>

			<li>

            	<a href="#Records" data-toggle="tab"><i class="icon-align-justify"></i> 

					<?php echo ('Records');?>

                    	</a></li>

		</ul>

    	<!------CONTROL TABS END------->

        

	</div>

	<div class="box-content padded">

		<div class="tab-content">            

            <!----OPERATION LISTING STARTS--->

            <div class="tab-pane box active" id="Vitals">

				

                <table cellpadding="0" cellspacing="0" border="0" class="dTable responsive table-hover">

                	<thead>
						<tr>
							<th><div><?php echo ('Patient_Id');?></div></th>
							<td> 23/10/2022</td>
						</tr>     

						<tr>
							<th><div><?php echo ('Name');?></div></th>
							<td> 23/10/2022</td>
						</tr>

                		<tr>
							<th><div><?php echo ('Date');?></div></th>
							<td> 23/10/2022</td>
						</tr>
						
						<tr>
							<th><div><?php echo ('Height(CM)');?></div></th>
							<td> 179</td>
						</tr>

						<tr>
							<th><div><?php echo ('Weight(KG)');?></div></th>
							<td> 70</td>
						</tr>

						<tr>
							<th><div><?php echo ('Calculated BMI');?></div></th>
							<td> 25</td>
						</tr>

						<tr>
							<th><div><?php echo ('Temperature(C)');?></div></th>
							<td> 98</td>
						</tr>

						<tr>
							<th><div><?php echo ('Pulse/min');?></div></th>
							<td> 120</td>
						</tr>

						<tr>
							<th><div><?php echo ('Respiratory Rate/min');?></div></th>
							<td> 10</td>
						</tr>

						<tr>
							<th><div><?php echo ('Blood Pressure');?></div></th>
							<td> 80/130</td>
						</tr>

						<tr>
							<th><div><?php echo ('Blood Oxygen Saturation');?></div></th>
							<td> 98</td>
						</tr>


					</thead>

                    <tbody>

                    	<?php 

						$count = 1;

						$birth_reports	=	$this->db->get_where('report' , array('type'=>'operation','patient_id'=>$this->session->userdata('patient_id')))->result_array();

						foreach($birth_reports as $row):?>

                        <tr>

                            <td><?php echo $count++;?></td>

                            <td><?php echo $row['description'];?></td>

                            <td><?php echo date('d M,Y', $row['timestamp']);?></td>

							<td><?php echo $this->crud_model->get_type_name_by_id('patient',$row['patient_id'],'name');?></td>

							<td><?php echo $this->crud_model->get_type_name_by_id('patient',$row['patient_id'],'name');?></td>

							<td align="center">



        					</td>

                        </tr>

                        <?php endforeach;?>

                    </tbody>

                </table>

			</div>

            <!----OPERATION LISTING ENDS--->

            

            <!----BIRTH LISTING STARTS--->

            <div class="tab-pane box" id="birth">

				

                <table cellpadding="0" cellspacing="0" border="0" class="dTable responsive table-hover">

                	<thead>

                		<tr>

                    		<th><div>#</div></th>

                    		<th><div><?php echo ('Description');?></div></th>

                    		<th><div><?php echo ('Date');?></div></th>

                    		<th><div><?php echo ('Patient');?></div></th>

                    		<th><div><?php echo ('Patient');?></div></th>

                    		<th><div><?php echo ('Options');?></div></th>

						</tr>

					</thead>

                    <tbody>

                    	<?php 

						$count = 1;

						$birth_reports	=	$this->db->get_where('report' , array('type'=>'birth','patient_id'=>$this->session->userdata('patient_id')))->result_array();

						foreach($birth_reports as $row):?>

                        <tr>

                            <td><?php echo $count++;?></td>

                            <td><?php echo $row['description'];?></td>

                            <td><?php echo date('d M,Y', $row['timestamp']);?></td>

							<td><?php echo $this->crud_model->get_type_name_by_id('patient',$row['patient_id'],'name');?></td>

							<td><?php echo $this->crud_model->get_type_name_by_id('patient',$row['patient_id'],'name');?></td>

							<td align="center">



        					</td>

                        </tr>

                        <?php endforeach;?>

                    </tbody>

                </table>

			</div>

            <!----BIRTH LISTING ENDS--->

            

            <!----OTHER LISTING STARTS--->

            <div class="tab-pane box" id="other">

				

                <table cellpadding="0" cellspacing="0" border="0" class="dTable responsive table-hover">

                	<thead>

                		<tr>

                    		<th><div>#</div></th>

                    		<th><div><?php echo ('Description');?></div></th>

                    		<th><div><?php echo ('Date');?></div></th>

                    		<th><div><?php echo ('Patient');?></div></th>

                    		<th><div><?php echo ('Patient');?></div></th>

                    		<th><div><?php echo ('Options');?></div></th>

						</tr>

					</thead>

                    <tbody>

                    	<?php 

						$count = 1;

						$birth_reports	=	$this->db->get_where('report' , array('type'=>'other','patient_id'=>$this->session->userdata('patient_id')))->result_array();

						foreach($birth_reports as $row):?>

                        <tr>

                            <td><?php echo $count++;?></td>

                            <td><?php echo $row['description'];?></td>

                            <td><?php echo date('d M,Y', $row['timestamp']);?></td>

							<td><?php echo $this->crud_model->get_type_name_by_id('patient',$row['patient_id'],'name');?></td>

							<td><?php echo $this->crud_model->get_type_name_by_id('patient',$row['patient_id'],'name');?></td>

							<td align="center">



        					</td>

                        </tr>

                        <?php endforeach;?>

                    </tbody>

                </table>

			</div>

            <!----OTHER LISTING ENDS--->

            

		</div>

	</div>

</div>