<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Login system</title>
    <style>
        body
        {
            background-image:url('https://amazingpict.com/wp-content/uploads/2015/02/beautiful-natural-scene.jpg');
        }
        .panel
        {
            color:white;
            margin-top:150px;
            height:300px;
            width:1000px;
            padding:30px;
            border-radius:10px;
            background-repeat:no-repeat;
            background-color:rgba(45, 122, 239,0.7);
            border-bottom:solid 10px rgba(45, 162, 239,0.7);
            border-top:solid 10px rgba(198, 237, 255,0.2);
            text-align:center;
            
            
        }
        .panel-login
        {
            margin-top:70px;
            margin-left:140px;
            
        }
        a
        {
           color: #63cff9;    
        }
        
    </style>
  </head>
  <body>
    <div class="container" > 
        <div class="panel">
         <h1 >bootstrap 4+laravel &nbsp;// login system</h1>
         <form action="signin" method="post" class="form-group">  
         <div class="row panel-login">
           
               <div class="form-group">
                   <div class="col-md-12" >
                   <input type="text" class="form-control" placeholder="Email" style="backgroud-color:rgba(65, 159, 242,0.7);" name="email">
                   <input type="hidden" name="_token" value="{{ csrf_token() }}">
                   </div>
               </div>
               <div class="form-group">
                   <div class="col-md-12" >
                   <input type="password" class="form-control" placeholder="password" style="backgroud-color:rgba(65, 159, 242,0.7);" name="password">
                   </div>
               </div>
               <div class="form-group">
                   <div class="col-md-12" >
                   <input type="submit" class="btn btn-success btn-block" value="Login">
                   </div>
               </div>
               
                   
          </div> 
          </form>
           <h3 style="float:left;margin-left:150px;">New here ?&nbsp;&nbsp;<a href="register">Register here</a> </h3>
         </div>
    </div> 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>