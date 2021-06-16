<?php require "../../app/core/MVC_model.php"?>
<style>
  body{
    background-image: url("../images/donasi/bg.jpg");
  }
  .form-donasi{
    width: 400px;
    padding: 20px;
    border: 1px solid black;
    margin-left: auto;
    margin-right: auto;
    background-color: white;
  }
  .container{
    height: auto;
  }
  
</style>

<body>
  <?php require "$absolute_path/app/views/template/navbar.php";?>

  <div class="container">
    <br><br><br><br>
    
    <div class="form-donasi">
    <h1 class="fs-5 text-center">Mari bantu selamatkan terumbu karang </h1>
      <form action="" method="POST">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input type="text" name="email_input" class="form-control" ><br>
        
        <label for="exampleInputEmail1" class="form-label">Jumlah Donasi</label>
        <input type="text" class="form-control" id="disabledTextInput" placeholder="Virtual account : 09123456789" >
        <input type="text" name="jumlah_donasi" class="form-control">
        
        <span>
          <center>
            <img style="width: 100px;" src="../images/donasi/logo1.png" alt="">
            <img style="width: 100px;" src="../images/donasi/logo2.png" alt="">
            <img style="width: 30px;" src="../images/donasi/logo3.png" alt="">
          </center>
        </span>
        
        <center><button type="submit" name="donasi" class="btn btn-primary">Donasi</button></center>
        
      </form>
    </div>
    
  </div>  
  
</body>