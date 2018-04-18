<!DOCTYPE html>
<html>
<head>
	<title>Pembersih man</title>

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<link href="css/custom.css" rel="stylesheet">
</head>
<body>
		<div class="uploader" name="uploader">
			<div class ="content">
				<form method="post" enctype="multipart/form-data" action="upload.php">
					<div class = "row">
					<div class="col-sm-6">
						<div class="form-group">	             
			              <input id="dataset" type="file" class="form-control form-control-lg" id="file" name = "file">
			            </div>
<!-- 			              <div class="form-group">
						    <label for="exampleFormControlFile1">Example file input</label>
						    <input type="file" class="form-control-file" id="exampleFormControlFile1">
						  </div>				 -->		
					</div>
					<div class="col-sm-6">
						<button id="upload" type="submit" class="baten"  alt=""> clean </button>						
					</div> 
				</div>
	         	</form>
			</div>		
		</div>

		<div class="clean-parameter">
			<div class = "row"> 
				<div class="col-sm-12">

				<div class="form-check">
					<p style="display:inline; font-size: 20px;">Clean : </p>
					
					<input type="checkbox" class="form-check-input" id="no-emoji"> 
					<label class="form-check-label tick" for="no-emoji"> emoji </label>

					<input type="checkbox" class="form-check-input" id="no-missing"> 
					<label class="form-check-label tick" for="no-missing"> missing values </label>

					<input type="checkbox" class="form-check-input" id="no-url"> 
					<label class="form-check-label tick" for="no-url"> url </label>						
				</div>
				</div>
			
			</div>
			
		</div>
		<div class="feature">
			<div>
				
			</div>			
		</div>


</body>
</html>