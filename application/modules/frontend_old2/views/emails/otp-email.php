<html>
<body>
	<div class="ii gt m14b7cc3fd14b6cd9 adPadO">
		<div>
			<table width="50%" cellpadding=0 border=0
				style="background-color: #f7f7f9;">
				<tbody>
					<tr>
						<td>
							<table
								cellspacing="0 cellpadding=0 border=0 bgcolor=#68c1ec align=center style=background: #68c1ec">
								<tbody>
									<tr>
										<td valign="top"><a href="<?php echo base_url();?>">
										<img src="<?php echo asset_url().LOGO ; ?>" height='85px' width='152px' style="margin-left:485px;margin-top:18px;">
										</a> <br /></td>
									</tr>
								</tbody>
							</table>
							<table
								width="581 cellspacing=0 cellpadding=0 border=0 align=center style=border-bottom: 1px solid #e1e1e1;margin-bottom:30px;">
								<tbody>
									<tr>
										<td
											valign="top style=padding: 0px 13px 10px 14px;font-family:Arial">
											<table width="100% cellspacing=0 cellpadding=0">
												<tbody>
													<tr>													
													<?php $name = explode(" ",$data['name']);				
														  $fname = $name[0];					
														  //$lname = $name[1]; ?>	
														<td	style="color: #000; padding-bottom: 7px; font-size: 16px; font-family: Arial;">
															Hi <?php echo $fname ;?>!		
														</td>
													</tr>
													<tr>
														<td	style="color: #000; font-size: 16px; padding-bottom: 7px; font-family: Arial;">
														  Your OTP</td>
													</tr>
													<!--<tr>														<td style="color:#666666;font-size:16px;padding-bottom:17px;font-family:Calibri,sans-serif;font-weight:300;font-weight:2;">															<a  href="<?php echo base_url();?>"> 																Please login here 															</a>														</td>													</tr>-->
													<tr>
														<td style="color: #000; font-size: 16px; padding-bottom: 7px; font-family: Arial;">		
															Username : <?php echo $data['email'];?>   <br />					
															OTP : <?php echo $data['otp'];?> </td>
													</tr>
													<tr>
														<td
															style="color: #000; font-size: 16px; padding-bottom: 17px; font-family: Arial;">Thanks!
															<br><?php echo COMPANY; ?> Team.
														</td>
													</tr>
												</tbody>
											</table>
										</td>
									</tr>
								</tbody>
							</table>
							<table
								width="581 cellspacing=0 cellpadding=0 border=0 align=center style=border-collapse: collapse; height: 30px;">
								<tbody>
								</tbody>
							</table>
						</td>
					</tr>
			
			</table>
		</div>
	</div>
</body>
</html>