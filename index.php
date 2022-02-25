<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>PHP practiceing!</title>
    <!-- css link -->
    <link rel="stylesheet" href="style.css">
</head>


<div class="container-fluid dash_cus"> 
  <div class="container">
      <div class="row">
          <div class="col-sm-6">
              <div class="user_info">
                  <div class="col-sm-12">
                      <h2>Profile</h2>
                  </div>
                  <div class="col-sm-12">
                      <form action="./profileUpdate.php" method="post">
                          <div class="form-group row">
                              <label for="newName" class="col-md-3 col-form-label">Name</label>
                              <div class="col-md-9">
                                  <input type="text" class="form-control cus_input"  name="userName" autocomplete="off" >
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="newName" class="col-md-3 col-form-label">Email</label>
                              <div class="col-md-9">
                                  <input type="text" class="form-control cus_input"  name="userEmail"  autocomplete="off">
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="newName" class="col-md-3 col-form-label"></label>
                              <div class="col-md-9">
                                  <input type="submit" value="Update" class="form-control cus_input_btn">
                              </div>
                          </div>
                      
                      </form>
                  </div>
              </div>		
          </div> 
      </div>
  </div>
</div>
</html>