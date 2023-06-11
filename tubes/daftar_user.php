<?php 
require"functions.php";
$result=mysqli_query($conn,"SELECT * FROM user");
$list_user= query("SELECT * FROM user");
if(isset($_POST["search-but"])){
  $list_user = search($_POST["keyword"]);
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Halaman Admin - Job Portal</title>
	<link rel="stylesheet" href="css/admin.css " />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <style>
        table th, td{
            border:1px solid black;
        }
    </style>
  </head>
  <body>
    <header>
      <h1>Job Portal - Halaman Admin</h1>
    </header>
    <nav>
		<ul>
			<li><a href="admin.php">Dashboard</a></li>
			<li><a href="daftar_pekerjaan.php">Manajemen Lowongan</a></li>
    
			<li><a href="daftar_user_php">Manajemen User</a></li>
			<li><a href="#">Manajemen Author</a></li>
      <li><a href="index.php">Kembali </a></li>
		  </ul>	
    </nav>


    <div class="row">
   <div class="col-md-6">
     <form action=""method="post">
     <div class="input-group my-3">
        <input type="search" 
         class="form-control" 
         placeholder="masukan keyword " 
         name="keyword"
         id ="keyword" 
         autofocus 
         autocomplete="off">
         <button class="btn btn-primary" type="submit"name="search-but" id="search-but">search</button>
      </div>
    </form>
  </div>
 </div>
    
<table cellpadding ="10" cellspacing="0">
<th>fullname</th>
<th>username</th>
<th>password</th>
<th>role</th>
<?php foreach($list_user as $list_u):?>
    
    <tr>
        <td><?= $list_u["fullname"]; ?></td>
        <td><?= $list_u["username"]; ?></td>
        <td><?= $list_u["password"]; ?></td>
        <td><?= $list_u["role"]; ?></td>
    </tr>
<?php endforeach;?>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="js/script.js"></script>  
</body>
</html>