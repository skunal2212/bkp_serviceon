<style>
<!--
.margin-bottom-5 {
	margin-bottom: 5px;
}
-->
</style>
<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h3>Add Reason</h3>
		</div>
	</div>
	<form id="addcuisine" name="addcuisine" action="" method="post">
		<div id="basic" class="tab-pane fade in active">
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="row">
								<div class="col-lg-12 margin-bottom-5">
									<div class="form-group" id="error-name">
										<label class="control-label col-sm-3">Reason Name <span class='text-danger'>*</span></label>
										<div class="col-sm-8">
											<input type="text" class="form-control" id="name" name="name" />
										</div>
										<div class="messageContainer col-sm-4"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		 <div id="response"></div>
		 <div class="text-center">
		   <button type="submit" class="btn btn-success">Submit</button>
		 </div>
		 <br> <br>
		</div>
		
	</form>
</div>
<script src="<?php echo asset_url();?>js/bootstrapValidator.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.form.js"></script>
<script>
$('#addcuisine').bootstrapValidator({
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
                    message: 'Reason is required and cannot be empty'
                }
            }
        }
    }
}).on('success.form.bv', function(event,data) {
	// Prevent form submission
	event.preventDefault();
	addCuisine();
});

function addCuisine() {
	var options = {
	 		target : '#response', 
	 		beforeSubmit : showAddRequest,
	 		success :  showAddResponse,
	 		url : base_url+'admin/general/addreason',
	 		semantic : true,
	 		dataType : 'json'
	 	};
   	$('#addcuisine').ajaxSubmit(options);
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
  	} else {
  		$("#response").removeClass('alert-danger');
        $("#response").addClass('alert-success');
        $("#response").html(resp.msg);
        $("#response").show();
        alert(resp.msg);
        window.location.href = base_url+"admin/general/reasonlist";
  	}
}


</script>