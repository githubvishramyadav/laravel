<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

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
   
<form action="{{url('/')}}/register" method="post">
    @csrf
    {{-- <pre>
        @php
            print_r($errors->all());
        @endphp
    </pre> --}}
    <div class="container">

        <x-input type="text" name="name" label="Please Enter your name"/>
        <x-input type="emai" name="email" label="Please Enter your email"/>
        <x-input type="password" name="password" label="Please Enter your password"/>
        <x-input type="password" name="password_confirmation" label="Please Enter your confirm password"/>






        
        {{-- <div class="form-group">
            <label for="">Email</label>
            <input type="text" name="email" id="" class="form-control" value="{{old('email')}}">
                <span class="text-danger">
                    @error('email')
                        {{$message}}
                    @enderror
                </span>
        </div> --}}
        {{-- <div class="form-group">
            <label for="">Password</label>
            <input type="password" name="password" id="" class="form-control">
                <span class="text-danger">
                    @error('password')
                        {{$message}}
                    @enderror
                </span>
        </div>
        <div class="form-group">
            <label for="">Confirm Password</label>
            <input type="password" name="password_confirmation" id="" class="form-control">
                <span class="text-danger">
                    @error('password_confirmation')
                        {{$message}}
                    @enderror
                </span>
        </div> --}}
        <button class="btn btn-primary">Submit</button>
    </div>
</form>
</body>

</html>
