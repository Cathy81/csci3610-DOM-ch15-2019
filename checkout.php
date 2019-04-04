<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style type="text/css">
     .space10 {
      height: 20px;
     }
     .topSpace {
      margin-top:30px;
    }
     .imgSize {
               width:400px !important;
              height:200px !important;}
    </style>
    <title>Menu</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript">
   $(document).ready(function(){
      cartStr=getCartJson();
      document.getElementById("cartId").value=cartStr;
     })
  </script>
  </head>
  <body>
    <div class="container">
    <?php
      require_once("pageFormat.php");
      require_once("sqlSts.php");

      pageHeader("Checkout","logo1.jpg");
   
     ?>

      <form action="checkoutHandler.php" method="POST" >
        <div id="msgId"></div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Name:</label>
          <input type="text" name="name" >
           <p class="text-primary">Name must be at least 5 characters</p>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Phone number:</label>
          <input type="text" name="phone" >
          <p  class="text-primary">Phone: xxx-xxx-xxxx</p>
        </div>
          <input type="submit" class="btn btn-primary" value="Submit">
        </div>

       </form> 
     </div>



      <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>