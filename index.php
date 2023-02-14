<?php 
include('conn.php');
if(isset($_GET['id'])){
  $id = $_GET['id'];
  
  $que = "SELECT * FROM `$students` WHERE id='$id'";
  $res = mysqli_query($conn,$que);
  $data = mysqli_fetch_assoc($res);
}
if(isset($_REQUEST['submit'])){
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $state = $_REQUEST['state'];
    $adress = $_REQUEST['adress'];

    if($_REQUEST['idd'] != ''){
      $id = $_REQUEST['idd'];
      $que = "UPDATE `$students` SET `name`='$name',`email`='$email',`password`='$password',`state`='$state',`adress`='$adress' WHERE id='$id'";
    }else{
        $que = "INSERT INTO `$students` (`name`,`email`,`password`,`state`,`adress`) VALUES ('$name','$email','$password','$state','$adress')";
    }
   $res = mysqli_query($conn,$que);
 
   
  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="main pb pt">
      <div class="w-780">
        <div class="card">
           <form action="" method="post">
           <div style="display:none">
                    <label for="">ID:-</label>
                    <input type="text" class="form-control" name="idd" placeholder = "Enter Your Name" value="<?php echo @$data['id']; ?>">
               </div>
               <div>
                    <label for="">Name:-</label>
                    <input type="text" class="form-control" name="name" placeholder = "Enter Your Name" value="<?php echo @$data['name']; ?>">
               </div>
              <div class="d-flex">
                    <div class="form">
                            <label for="">Email:-</label>
                            <input type="text" class="form-control" name="email" placeholder = "Enter Your Name" value="<?php echo @$data['email']; ?>">
                    </div>
                    <div class="form"  style="margin-left:170px">
                            <label for="">Password:-</label>
                            <input type="password" class="form-control" name="password" placeholder = "Enter Your Name" value="<?php echo @$data['password']; ?>">
                    </div>
              </div>
              <div class="form">
                    <label for="">State:-</label>
                    <select name="state" id="" class="form-control">
                        <option value="gujarat">gujarat</option>
                        <option value="goa">goa</option>
                        <option value="delhi">delhi</option>
                        <option value="godhra">godhra</option>
                    </select>
               </div>
               <div class="form">
                    <label for="">Adress:-</label>
                    <textarea name="adress" class="form-control"  value="<?php echo @$data['adress']; ?>" cols="30" rows="8"></textarea>
               </div>
              <button type="submit" class="btn" name="submit">Submit</button>
            </form>
        </div>
      </div>
    </div>       
</body>
</html>