<form id="editcategory" name="editcategory" action="" method="post" enctype="multipart/form-data">
		<?php //print_r($categories);?>
		<input type="hidden" name="id" value="<?php echo $subcategories[0]['id'];?>"/>
			<div id="basic" class="tab-pane fade in active">
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default">
							<div class="panel-body">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group" id="error-name">
											<label class="control-label">Vehical Type<span class='text-danger'>*</span></label>
											<select name="category_id" id="category_id" class="form-control">
													<option value=""> Select Vehical Type </option>
													<?php foreach ($categories as $category) { ?>
													<option value="<?php echo $category['id'];?>" <?php if($subcategories[0]['category_id'] == $category['id']) {?>selected<?php }?>><?php echo $category['name'];?></option>
													<?php } ?>
												</select>
										</div>
										<div class="messageContainer"></div>
									</div>
									<div class="col-md-6">
										<div class="form-group" id="error-name">
											<label class="control-label">Brand<span class='text-danger'>*</span></label>
											<select name="brand_id" id="brand_id" class="form-control">
													<option value=""> Select Brand </option>		
													<?php foreach ($brands as $brand) : ?>
													<option value="<?php echo $brand['id'];?>" <?php if($subcategories[0]['brand_id'] == $brand['id']) {?>selected<?php }?>><?php echo $brand['name'];?></option>
													<?php endforeach;?>											
													</select>
										</div>
										<div class="messageContainer"></div>
									</div>
								
                                </div>
                                <div class="row">
									<div class="col-md-6">
										<div class="form-group" id="error-name">
											<label class="control-label">Model<span class='text-danger'>*</span></label>
											<select name="model_id" id="model_id" class="form-control">
													<option value=""> Select Model</option>	
													<?php foreach ($models as $model) : ?>
													<option value="<?php echo $model['id'];?>" <?php if($subcategories[0]['model_id'] == $model['id']) {?>selected<?php }?>><?php echo $model['name'];?></option>
													<?php endforeach;?>
												</select>
										</div>
										<div class="messageContainer"></div>
									</div>
									<div class="col-md-6">
												<div class="form-group" id="error-name">
											<label class="control-label">Service Type Name <span class='text-danger'>*</span></label>
											<!--<input type="text" class="form-control" id="name" name="name"  value="<?php echo $subcategories[0]['name'];?>"/>-->											<select name="name" id="name" class="form-control">													<option value=""> Select Type Name </option>													<?php foreach ($sub_categories as $subcategory) { ?>   <option value="<?php echo $subcategory['id'];?>,<?php echo $subcategory['name'];?>" <?php if($subcategories[0]['sub_id'] == $subcategory['id']) {?>selected<?php }?>><?php echo $subcategory['name'];?></option>													<?php } ?>												</select>
										</div>
										<div class="messageContainer"></div>
									</div>
								
                                </div>
								<div class="row">
									<div class="col-md-6">
		                              	<div class="form-group" id="error-image">
	                                       	<label class="control-label ">Upload Image (80 X 80 px) <span class='text-danger'>*</span></label>
	                                       	<input type="file" value="" name="image" id="image" value="<?php echo $subcategories[0]['image'];?>" class="form-control " >
										</div>
										<span>
											<img src="<?php echo asset_url();?><?php echo $subcategories[0]['image'];?>" width="160px" height="80px" />
										</span>
										<div class="messageContainer col-sm-4"></div>
	                                </div>
	                                
	                                <div class="col-md-6">
										<div class="form-group" id="error-name">
											<label class="control-label">Status <span class='text-danger'>*</span></label>
											<select id="status" class="form-control" name="status">
												<option value="1" <?php if(isset($subcategories[0]['status']) && $subcategories[0]['status'] == 1) {?>selected<?php }?>>Enable</option>
												<option value="0" <?php if(isset($subcategories[0]['status']) && $subcategories[0]['status'] == 0) {?>selected<?php }?>>Disable</option>
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
                    message: 'Service Type Name is required and cannot be empty'
                }
            }
        },
        category_id: {
            validators: {
                notEmpty: {
                    message: 'Vehical Type Name is required and cannot be empty'
                }
            }
        },
       brand_id: {
            validators: {
                notEmpty: {
                    message: 'Brand Name is required and cannot be empty'
                }
            }
        },
        model_id: {
            validators: {
                notEmpty: {
                    message: 'Model Name is required and cannot be empty'
                }
            }
        },
        status: {
            validators: {
                notEmpty: {
                    message: 'Status is required and cannot be empty'
                }
            }
        }
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
	 		url : base_url+'admin/subcategory/update',
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
		$("#response").html(resp.msg.name);
		$("#response").show();
		alert(resp.msg);
  	} else {
  		$("#response").removeClass('alert-danger');
        $("#response").addClass('alert-success');
        $("#response").html(resp.msg);
        $("#response").show();
        alert(resp.msg);
        window.location.href = base_url+"admin/mainservice";
  	}
}

$(document).ready(function(){    
	$("#category_id").change(function() 
			{
		var cat_id =  $('#category_id').val();       
			console.log(cat_id);	    
			  $.post(base_url+"admin/brandbycatid/", {cat_id : cat_id}, function(data)
					  {
				  $('#brand_id').empty();$('#brand_id').append("<option value=''>"+'Select Brand'+"</option>");		    
			   if(data.length > 0)
				   {		    
				     for( var i=0; i < data.length; i++)
					     {		   			    
					           $('#brand_id').append("<option value='"+data[i].id+"'>"+data[i].name+"</option>");			
					            }	    
			              }	   
	               },'json');   
               });

	$("#brand_id").change(function() 
			{
		var brand_id =  $('#brand_id').val();       
			console.log(brand_id);	    
			  $.post(base_url+"admin/modelbybrandid/", {brand_id : brand_id}, function(data)
					  {
				  $('#model_id').empty();$('#model_id').append("<option value=''>"+'Select Model'+"</option>");		    
			   if(data.length > 0)
				   {		    
				     for( var i=0; i < data.length; i++)
					     {		   			    
					           $('#model_id').append("<option value='"+data[i].id+"'>"+data[i].name+"</option>");			
					            }	    
			              }	   
	               },'json');   
               });
    }); 
</script>