<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .required label::after{
            content: " *";
            color: red;
        }
    </style>
  </head>
  <body class="bg-dark">

    <div class="container-fluid bg-dark">
        <div class="container">
           <nav class="navbar navbar-expand-sm">
               <a class="navbar-brand" href="#" style="color: white"><h2>NSS</h2></a>
               <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                   aria-expanded="false" aria-label="Toggle navigation">
                   <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="collapsibleNavId">
                   <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                       <li class="nav-item">
                           <a class="nav-link" href="{{url('/')}}" style="color: white">Home</a>
                       </li>
                       <li class="nav-item">
                           <a class="nav-link" href="{{url('/register')}}" style="color: white">Register</a>
                       </li>
                       <li class="nav-item">
                           <a class="nav-link" href="{{url('/customer')}}" style="color: white">Customer</a>
                       </li>
                   </ul>
               </div>
           </nav>
        </div>
   </div>
   
    <form action="{{url('/')}}/customer" method="post">
        @csrf
        <div class="container mt-4 card p-4 bg-white">
            <h3 class="text-center text-primary"> Customer Registraion</h3>
            <div class="row">
                <div class="form-group col-md-6 required">
                  <label for="">Name:</label>
                  <input type="text" name="name" id="" class="form-control"/>
                  <span class="text-danger">
                    @error('name')
                        {{$message}}
                    @enderror
                  </span>
                </div>
              
                <div class="form-group col-md-6 required">
                  <label for="">Email:</label>
                  <input type="email" name="email" id="" class="form-control"/>
                  <span class="text-danger">
                    @error('email')
                        {{$message}}
                    @enderror
                  </span>
                </div>
             
                <div class="form-group col-md-6 required">
                  <label for="">password:</label>
                  <input type="password" name="password" id="" class="form-control"/>
                  <span class="text-danger">
                    @error('password')
                        {{$message}}
                    @enderror
                  </span>
                </div>
               
                <div class="form-group col-md-6 required">
                  <label for="">Confirm Password:</label>
                  <input type="password" name="confirm_password" id="" class="form-control"/>
                  <span class="text-danger">
                    @error('confirm_password')
                        {{$message}}
                    @enderror
                  </span>
                </div>
            
                <div class="form-group col-md-6">
                  <label for="">Country:</label>
                  <input type="text" name="country" id="" class="form-control"/>
                  <span class="text-danger">
                    @error('country')
                        {{$message}}
                    @enderror
                  </span>
                </div>
            
                <div class="form-group col-md-6 ">
                  <label for="">State:</label>
                  <input type="text" name="state" id="" class="form-control"/>
                  <span class="text-danger">
                    @error('state')
                        {{$message}}
                    @enderror
                  </span>
                </div>
            
                <div class="form-group col-md-12">
                  <label for="">Address:</label>
                  <input type="text" name="address" id="" class="form-control"/>
                  <span class="text-danger">
                    @error('address')
                        {{$message}}
                    @enderror
                  </span>
                </div>
            
              
                <div class="form-group col-md-6">
                  <label for="">Gender:</label>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="M">
                    <label class="form-check-label" for="inlineRadio1">Male</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="F">
                    <label class="form-check-label" for="inlineRadio2">Female</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio3" value="O">
                    <label class="form-check-label" for="inlineRadio3">Other</label>
                  </div>
                  <span class="text-danger">
                    @error('gender')
                        {{$message}}
                    @enderror
                  </span>
                </div>
              
                <div class="form-group col-md-6">
                  <label for="">Date of Birth:</label>
                  <input type="date" name="dob" id="" class="form-control"/>
                  <span class="text-danger">
                    @error('date')
                        {{$message}}
                    @enderror
                  </span>
                </div>
                <button class="btn btn-primary col-md-12 p-2">Submit</button>    
            </div>
        </div>
    </form>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>