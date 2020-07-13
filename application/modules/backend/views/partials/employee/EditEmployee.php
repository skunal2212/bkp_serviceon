<form id="editcategory" name="editcategory" action="" method="post" enctype="multipart/form-data">
		<?php //print_r($categories);?>
		<input type="hidden" name="id" value="<?php echo $Emps[0]['id'];?>"/>
			<div id="basic" class="tab-pane fade in active">
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default">
							<div class="panel-body">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group" id="error-name">
											<label class="control-label">Name<span class='text-danger'>*</span></label>
											<input type="text" class="form-control" value="<?php echo $Emps[0]['name'];?>" id="name" name="name" />
										</div>
										<div class="messageContainer"></div>
									</div>
									<div class="col-md-6">
										<div class="form-group" id="error-name">
											<label class="control-label">Phone<span class='text-danger'>*</span></label>
											<input type="text" class="form-control" value="<?php echo $Emps[0]['mobile'];?>" id="mobile" name="mobile" />
										</div>
										<div class="messageContainer"></div>
									</div>
									
									
                                </div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group" id="error-name">
											<label class="control-label">Email<span class='text-danger'>*</span></label>
											<input type="text" class="form-control" value="<?php echo $Emps[0]['email'];?>" id="email" name="email" />
										</div>
										<div class="messageContainer"></div>
									</div>
									<div class="col-md-6">
										<div class="form-group" id="error-name">
											<label class="control-label">Password<span class='text-danger'>*</span></label>
											<input type="password" class="form-control" value="<?php echo $Emps[0]['password'];?>" id="password" name="password" />
										</div>
										<div class="messageContainer"></div>
									</div>
									
									 </div> 
									
									<div class="row">
									<div class="col-md-6">
										<div class="form-group" id="error-name">
											<label class="control-label">Emergency Mobile</label>
											<input type="text" class="form-control" value="<?php echo $Emps[0]['emergency_mobile'];?>" id="emobile" name="emobile" />
										</div>
										<div class="messageContainer"></div>
									</div>
									<div class="col-md-6">
										<div class="form-group" id="error-name">
											<label class="control-label">Document</label>
											<input type="file" class="form-control" id="image" name="image[]" multiple="true"/>
											<!--  <a href="<?php echo $Emps[0]['doc'];?>" download><font color="blue"><?php echo asset_url();?><?php echo $Emps[0]['doc'];?></font></a> -->
										</div>
										<div class="messageContainer"></div>
									</div>
									
									<div class="col-md-6">
										<div class="form-group" id="error-name">
											<label class="control-label">Role<span class='text-danger'>*</span></label>
											<select name="role_id" id="role_id" class="form-control">
													<option value=""> Select Role </option>
													<?php foreach ($Roles as $role) { ?>
													<option value="<?php echo $role['id'];?>"  <?php if($Emps[0]['role_id'] == $role['id']) {?>selected<?php }?>><?php echo $role['name'];?></option>
													<?php } ?>
												</select>
										</div>
										<div class="messageContainer"></div>
									</div>
									
									<div class="col-md-6">
										<div class="form-group" id="error-name">
											<label class="control-label">Assign Mechanic<span class='text-danger'>*</span></label>
											<select name="garage_id" id="garage_id" class="form-control">
													<option value=""> Select Mechanic </option>
													<?php foreach ($garagelist as $garage) { ?>
													<option value="<?php echo $garage['id'];?>" <?php if($Emps[0]['garage_id'] == $garage['id']) {?>selected<?php }?>><?php echo $garage['garage_name'];?></option>
													<?php } ?>
												</select>
										</div>
										<div class="messageContainer"></div>
									</div>
									
									<div class="col-md-6">
										<div class="form-group" id="error-name">
											<label class="control-label">Status <span class='text-danger'>*</span></label>
											<select id="status" class="form-control" name="status">
												<option value="1" <?php if(isset($Emps[0]['status']) && $Emps[0]['status'] == 1) {?>selected<?php }?>>Enable</option>
												<option value="0" <?php if(isset($Emps[0]['status']) && $Emps[0]['status'] == 0) {?>selected<?php }?>>Disable</option>
											</select>
										</div>
										<div class="messageContainer"></div>
									</div>
									</div>
                                 
								 <div class="text-center">
									<div id="response"></div>
									<button type="submit" class="btn btn-success">Submit</button>
									<br>
								 </div>
							</div>
						</div>
					</div>
				</div>
			</div>	
		</form>
		<script src="<?php echo asset_url();?>js/bootstrapValidator.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.form.js"></script>
<script>
$('#editcategory').bootstrapValidator({
	container: function($field, validator) {
		return $field.parent().next('.messageContainer');
   	},
    feedbackIcons: {
        validating: 'glyphicon glyphicon-refresh'
    },
    excluded: ':disabled',
    fields: {
    	  name: {
              validators: {
                  notEmpty: {
                      message: 'Employee is required and cannot be empty'
                  }
              }
          },
          mobile: {
              validators: {
                  notEmpty: {
                      message: 'Mobile is required and cannot be empty'
                  }
              }
          },
          email: {
              validators: {
                  notEmpty: {
                      message: 'Email is required and cannot be empty'
                  }
              }
          },
          password: {
              validators: {
                  notEmpty: {
                      message: 'Password is required and cannot be empty'
                  }
              }
          },
          garage_id: {
            validators: {
                notEmpty: {
                    message: 'Mechanic is required and cannot be empty'
                }
            }
        },
           role_id: {
              validators: {
                  notEmpty: {
                      message: 'Role is required and cannot be empty'
                  }
              }
          },
          status: {
              validators: {
                  notEmpty: {
                      message: 'Status is required and cannot be empty'
                  }
              }
          },
    }
}).on('success.form.bv', function(event,data) {
	// Prevent form submission
	event.preventDefault();
	updateCategory();
});

function updateCategory() {
	var options = {
	 		target : '#response', 
	 		beforeSubmit : showAddRequest,
	 		success :  showAddResponse,
	 		url : base_url+'admin/emp/update',
	 		semantic : true,
	 		dataType : 'json'
	 	};
   	$('#editcategory').ajaxSubmit(options);
}

function showAddRequest(formData, jqForm, options){
	$("#response").hide();
   	var queryString = $.param(formData);
	return true;
}
   	
function showAddResponse(resp, statusText, xhr, $form){
	if(resp.status == '0') {
		$("#response").removeClass('alert-success');
       	$("#response").addClass('alert-danger');
		$("#response").html(resp.msg);
		$("#response").show();
		alert(resp.msg);
  	} else {
  		$("#response").removeClass('alert-danger');
        $("#response").addClass('alert-success');
        $("#response").html(resp.msg);
        $("#response").show();
        alert(resp.msg);
        window.location.href = base_url+"admin/mainemp";
  	}
}
</script>