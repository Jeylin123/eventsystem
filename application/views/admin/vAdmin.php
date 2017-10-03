
          <div class="content col-sm-offset-1 col-sm-10">
	       	<hr>
          	<div class="header">
          		<h3>ADMIN
					<a href="<?php echo site_url();?>/admin/cAdmin#event">
					<button type="button" class="btn btn-primary"> EVENTS</button></a>
					<a href="<?php echo site_url();?>/admin/cAdmin#organizer">
					<button type="button" class="btn btn-warning"> ADMIN USERS</button></a>
					<a href="<?php echo site_url();?>/admin/cAdmin#admin">
					<button type="button" class="btn btn-danger"> USERS</button></a>
				</h3>
          	</div>
          	<hr>
          	<div id="event">
          		<h3><center>Event Management<center></h3>
				<table class="table" >
					<thead class="thead-inverse">
					    <tr>
					      <th>#</th>
					      <th>Name</th>
					      <th>Time</th>
					      <th>Tickets Sold</th>
					      <th>Status</th>
					      <th>Options</th>
					    </tr>
					</thead>
					<tbody>
						<?php 
							

                    		if($row!=FALSE){
                    			foreach ($row as $object) {
									echo	"<tr>
				                            	<td>".$object->event_id."</td>
				                            	<td>".$object->event_name."</td>
				                            	<td>".$object->event_date_start." to ".$object->event_date_end."</td>
												<td>".$object->no_tickets_total."</td>
												<td>".$object->event_status."</td>";
									if($object->event_status == "Pending"){
										echo " <td><a href='".site_url()."/admin/cAdmin/approveEvent/".$object->event_id."'>
												<button  type='button' class='btn btn-success'>APPROVE</button></a>
												<a href='".site_url()."/admin/cAdmin/rejectEvent/".$object->event_id."'>
												<button  type='button' class='btn btn-danger'>REJECT</button></a>
												</td>
				                           </tr>";	
									}else {
										echo " <td>
												You have ".$object->event_status." this event.
												</td>
				                           </tr>";	
									}
								}	
                    		}
                    	?>
					</tbody>
				</table>
				</div>
				<br>
				<br>
				<br>
				<div id="organizer">
				<h3><center>Organizers Account Management<center></h3>
				<table class="table" >
					<thead class="thead-inverse">
					    <tr>
					      <th>#</th>
					      <th>User Name</th>
					      <th>Full Name</th>
					      <th>Email</th>
					      <th>Birthdate</th>
					      <th>Gender</th>
					      <th>Contact Number</th>
					      <th>Load Amount</th>
					      <th>Date Created</th>
					      <th>Status</th>
					      <th>Action</th>
					    </tr>
					</thead>
					<tbody>
						<?php 
                    		if($users!=FALSE){
                    			foreach ($users as $object) {
									$num = ($object->contact_no != NULL)? $object->contact_no : "N/A";
									$date = date("m-d-Y", strtotime($object->birthdate));
									echo	"<tr>
				                            	<td id='accountId'>".$object->account_id."</td>
				                            	<td>".$object->user_name."</td>
				                            	<td>".$object->first_name." ".$object->middle_initial." ".$object->last_name."</td>
				                            	<td>".$object->email."</td>
												<td>".$date."</td>
												<td>".$object->gender."</td>
												<td>".$num."</td>
												<td>".$object->load_amt."</td>
												<td>".$object->date_account_created."</td>
												<td>".$object->user_status."</td>
												<td>";												
											if($object->user_status == "Active"){
												echo "<a  href='".site_url()."/admin/cAdmin/Ban/".$object->account_id."'>
													<button  type='button' class='btn btn-primary'>Update Status</button></a>";
											}else{
												echo "<a  href='".site_url()."/admin/cAdmin/Unban/".$object->account_id."'>
													<button  type='button' class='btn btn-primary'>Update Status</button></a>";
											}
											echo "</td></tr>";
										   
								}	
                    		}
                    	?>
					</tbody>
				</table>
			</div>
			<br>
			<br>
			<br>
			<div id="admin">
				<h3><center>Admin Account Management<center></h3>
				<!-- <a><button  type='button' class='btn btn-success'  data-toggle="modal" data-target="#addAdminModal">Add new Admin</button></a> -->
				<table class="table" >
					<thead class="thead-inverse">
					    <tr>
					      <th>#</th>
					      <th>User Name</th>
					      <th>Full Name</th>
					      <th>Email</th>
					      <th>Birthdate</th>
					      <th>Gender</th>
					      <th>Contact Number</th>
					      <th>Date Created</th>
					      <th>Type</th>
					      <th>Status</th>
					      <th>Action</th>
					    </tr>
					</thead>
					<tbody>
						<?php 
                    		if($admin!=FALSE){
                    			foreach ($admin as $object) {
									$num = ($object->contact_no != NULL)? $object->contact_no : "N/A";
									$date = date("m-d-Y", strtotime($object->birthdate));
									echo	"<tr>
				                            	<td id='accountId'>".$object->account_id."</td>
				                            	<td>".$object->user_name."</td>
				                            	<td>".$object->first_name." ".$object->middle_initial." ".$object->last_name."</td>
				                            	<td>".$object->email."</td>
												<td>".$date."</td>
												<td>".$object->gender."</td>
												<td>".$num."</td>
												<td>".$object->date_account_created."</td>
												<td>".$object->user_type."</td>
												<td>".$object->user_status."</td>
												<td>";
												
											if($object->user_type == "Admin"){
												echo "<a  href='".site_url()."/admin/cAdmin/SuperAdmin/".$object->account_id."'>
													<button  type='button' class='btn btn-warning'>Update Type</button></a>";
											}else{
												echo "<a  href='".site_url()."/admin/cAdmin/Admin/".$object->account_id."'>
													<button  type='button' class='btn btn-warning'>Update Type</button></a>";
											}
											
											if($object->user_status == "Active"){
												echo "<a  href='".site_url()."/admin/cAdmin/Ban/".$object->account_id."'>
													<button  type='button' class='btn btn-primary'>Update Status</button></a>";
											}else{
												echo "<a  href='".site_url()."/admin/cAdmin/Unban/".$object->account_id."'>
													<button  type='button' class='btn btn-primary'>Update Status</button></a>";
											}
											echo "</td></tr>";
								}
                    		}
                    	?>
					</tbody>
				</table>
			</div>
			 <!-- class="modal fade" role="dialog" -->	
			<div id="addAdminModal" data-backdrop="false">
				  <div class="modal-dialog">

				    <!-- Modal content-->
				    <div class="modal-content" id="addSkillModalContent">
				      	<div class='modal-header'>
				      		<button type='button' class='close' data-dismiss='modal'>&times;</button>				
							<h2 class='modal-title'>ADD A NEW ADMIN USER</h2>				
						</div>
						
					      <div  class='modal-body'>
					        	<form method="POST" action="<?php echo site_url()?>/admin/cAdmin/addAdmin">
								  	first name: <br>
								  	<input type="text" name="fname" required=""> <br>
								  	middle initial: <br>
								  	<input type="text" name="miname" required=""> <br>
								  	last name: <br>
								  	<input type="text" name="lname" required=""> <br>
								  	email: <br>
								  	<input type="email" name="email" required=""> <br>
								  	birthdate: <br>
								  	<input type="text" name="bdate" required=""> <br>
								  	gender: <br>
								  	<select name="gender" required=""> <br>
								  		<option selected="" value="Male">Select Gender</option>
								  		<option value="Male">male</option>
								  		<option value="Female">female</option>
								  		<option value="Other">other</option>
								  	</select> <br>
								  	User Type: <br>
								  	<select name="userType" required=""> <br>
								  		<option selected="" value="Admin">Select User Type</option>
								  		<option value="Admin">Admin</option>
								  		<option value="Superadmin">Super Admin</option>
								  	</select> <br>
								  	contact no.: <br>
								  	<input type="text" name="contact" required=""> <br>
								  	username: <br>
								  	<input type="text" name="uname" required=""> <br>
								  	password: <br>
								  	<input type="password" name="password" required=""> <br>
								  	<br>
								  	<button class="btn btn-success" type="button submit">SIGN UP</button>
							  	</form>						
					      </div>
				    </div>

				  </div>
				</div>
          </div>
