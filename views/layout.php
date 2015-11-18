
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">    
    <link rel="stylesheet" href="assets\css\bootstrap.css" type="text/css" />
    <title>List Data Siswa</title>

</head>

<body>
    

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1><span class="label label-default">List Data Siswa</span></h1><br />                
            </div>    
        </div>    
        <div class="row">
            <div class="col-md-6">
                <div class="alert alert-warning" role="alert">
                    <p>Layout untuk menampilkan data siswa ke table html</p>
                </div>
            </div>    
            <div class="col-md-2">
                <div class="alert alert-danger" role="alert">
                    <a href="logout.php">Logout</a>
                </div>
            </div>    
        </div>    

        <div class="row">
            <div class="col-md-4">
                <form action="" method="post">

                    <label>NIS</label>
                    <input type="text" class="form-control" id="inputEmail3" name="nis" />

                    <label>Fullname</label>
                    <input type="text" class="form-control" id="inputEmail3" name="name" />

                    <label>Email</label>
                    <input type="text" class="form-control" id="inputEmail3" name="email" />

                    <label>Nationality</label>
                    <select name="nat" class="form-control">
                        <option>--select nationality--</option>
                        <?php foreach($data['nat'] as $n):?>
                        <option value="<?php echo $n['id']?>"><?php echo $n['n']?></option>
                        <?php endforeach?>
                    </select>    
                    <br />
                    <button type="submit" class="btn btn-success">Save</button>
                    <br /><br />
                </form>    
            </div>     
        </div>    

        <div class="row">
            <div class="col-md-8">
                <table class="table table-striped table-bordered">
                	<tr>
                		<th>NIS</th>
                		<th>Full Name</th>
                        <th>Email</th>
                		<th>Nationality</th>
                	</tr>
                    <?php foreach($data['siswa'] as $k => $v):?>
                    <tr>
                        <td><?php echo $v['nis']?></td>
                        <td><?php echo $v['full_name']?></td>
                        <td><?php echo $v['email']?></td>
                        <td><?php echo $v['nationality']?></td>
                    </tr>   
                    <?php endforeach?>

                    <!--
                	<?php foreach($data['siswa'] as $k => $v):?>
                    <?php $splitname = explode(' ', $v['full_name'])?>
                    <?php $max = count($splitname)?>

                    <?php $splitmail = explode('@', $v['email'])?>
                	<tr>
                		<td><?php echo substr($v['nis'], 1)?></td>
                		<td><?php echo $splitname[$max-1].', '.$splitname[0]?></td>
                		<td><?php if(!empty($v['email'])) echo $splitmail[0]?></td>
                        <td><?php if(!empty($v['email'])) echo '@'.$splitmail[1]?></td>
                	</tr>	
                	<?php endforeach;?>
                    -->
                </table>
            </div>
        </div>
    <div class="container">

</body>

</html>
