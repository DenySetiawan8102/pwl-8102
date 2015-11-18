
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">    
    <link rel="stylesheet" href="assets\css\bootstrap.css" type="text/css" />
    <title>Login User</title>

</head>

<body>

	<div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1><span class="label label-default">Login User</span></h1><br />                
                <div class="alert alert-info" role="alert">
                    <p>Isikan user dan password anda</p>
                </div>

                <?php if(!empty($data['error'])):?>
                <div class="alert alert-danger" role="alert">
                    <p><?php echo $data['error']?></p>
                </div>
            	<?php endif?>

                <form class="form-horizontal" role="form" action="" method="post">
				  <div class="form-group">
				    <label for="inputEmail3" class="col-sm-2 control-label">Username</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="inputEmail3" name="usr">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
				    <div class="col-sm-10">
				      <input type="password" class="form-control" id="inputPassword3" name="pwd">
				    </div>
				  </div>				  
				  <div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				      <button type="submit" class="btn btn-success">Sign in</button>
				    </div>
				  </div>
				</form>

                </form>	
            </div>    
        </div>    
        <div class="row">        	
    </div>    	

</body>
</html>	