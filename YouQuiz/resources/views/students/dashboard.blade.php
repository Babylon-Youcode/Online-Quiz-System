{{-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
  

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="{{ asset('img/logo.png') }}" height="65" width="65" alt="" srcset=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown d-flex ">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-primary" type="submit">Search</button>
      </form>
    </div>
  </div>

  
</nav>

<div class="row my-5 mx-5">
  @if(Session::get('success'))
  <div class="alert alert-success">
     {{ Session::get('success') }}
  </div>
@endif
@if(Session::get('fail'))
<div class="alert alert-danger">
   {{ Session::get('fail') }}
</div>
@endif
  <div class="col-md-8">
    <div class="row">
      @foreach ($quiz as $item)
          
      
      <div class="card col-4 m-4" style="width: 18rem;">
        <img src="/img/{{ $item->image }}" class="card-img-top" alt="...">
        <div class="card-body">

          <h3 class="card-title">{{ $item->name_quiz }}</h3>
          <h5 class="card-title">{{ $item->name_category }}</h5>
          <button type="submit" data-toggle="modal" class="btn btn-danger"   data-target="#pass{{$item->id}}"  >  
            PassQuiz</button>
        </div>
      </div>



      <div class="modal fade" id="pass{{$item->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title" id="staticBackdropLabel">{{ $item->question_quiz }}?</h3>
              <button type="button" class="close btn btn-light" data-dismiss="modal" aria-label="Close">
              <i class="fas fa-times"> 
                X
              </i>
              </button>
            </div>
            <div class="modal-body">
        

              <form action="/passQuiz/{{$item->id }}" method="post" enctype="multipart/form-data">
                @csrf
                  <div class="mb-3">   
                      <label for="exampleInputPassword1" class="form-label">Anwser</label>
                      <input type="text" name="name_repons" class="form-control"  required>
                    </div>
                    <input type="hidden" name="quiz_id" value="{{ $item->id }}">
                    <input type="hidden" name="quiz_name" value="{{ $item->name_quiz }}">
                    <input type="hidden" name="student_id" value="{{ Auth::user()->id }}">
                    <input type="hidden" name="student_name" value="{{ Auth::user()->name }}">
                    <button type="submit" class="btn btn-primary">Submit</button>
              </form> 
             
             

             </div>
          </div>

        </div>
    </div>
      @endforeach
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 </body>
</html> --}}
  

 
  
{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div>
</x-app-layout> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>YouQuiz</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
             <h2 style=""><a href="{{ route('welcome') }}"> <img src="{{ asset('img/logo.png') }}" alt="" srcset="" width="80" height="80" style="margin-left: -12px;"></a>
        </div>
        <!--Secciones-del-tablero-->
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="" class="active"><i class="far fa-home-lg-alt"></i>
                    <span>Dashboard</span></a>
                </li>
                <li>
                    <a href="{{ route('quiz.show') }}" class="active" ><i class="far fa-question-circle"></i>
                    <span>Quiz</span></a>
                </li>
                <li> 
                    <a href="{{ route('students.dashboard') }}" class="active"><i class="fal fa-user-graduate"></i>
                    <span>Students</span></a>
                </li>
                <li>
                    <a href="{{ route('topic') }}" class="active"><i class="far fa-shapes"></i>
                    <span>topic</span></a>
                </li>
                <li>
                    <a href="{{ route('profile.show') }}" class="active"><i class="far fa-user"></i>
                    <span>Profile</span></a>
                </li>
                <li>
                    
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <a href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                        this.closest('form').submit();">
                            <i class="fa fa-sign-out" >
                            </i> <span>logout</span>
                        </a>
                    </form>
                   
                </li>
               
        </div>
    </div>

    <div class="main-content">
        <header>
            <h2>
                <label for="nav-toggle">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </label> Dashboard
            </h2>

           
            <div class="user-wrapper">
                <img src="{{ asset('img/Avatar.png') }}" width="40px" height="40px" alt="">
                <div>
                    <h4>Admin</h4>
                    <a href="{{ route('profile.show') }}">{{ auth()->user()->name }}</a>
                </div>
            </div>
        </header>

        <div class="row my-5 mx-5">
          @if(Session::get('success'))
          <div class="alert alert-success">
             {{ Session::get('success') }}
          </div>
        @endif
        @if(Session::get('fail'))
        <div class="alert alert-danger">
           {{ Session::get('fail') }}
        </div>
        @endif
          <div class="col m-5 ">
            <div class="row">
              @foreach ($quiz as $item)
              <div class="card col-6 m-4" style="width: 18rem;">
                <img src="/img/{{ $item->image }}" class="card-img-top" alt="...">
                <div class="card-body">
        
                  <h3 class="card-title">{{ $item->name_quiz }}</h3>
                  <h5 class="card-title">{{ $item->name_category }}</h5>
                  <button type="submit" data-toggle="modal" class="btn btn-danger"   data-target="#pass{{$item->id}}"  >  
                    PassQuiz</button>
                </div>
              </div>
        
        
        
              <div class="modal fade" id="pass{{$item->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h3 class="modal-title" id="staticBackdropLabel">{{ $item->question_quiz }}?</h3>
                      <button type="button" class="close btn btn-light" data-dismiss="modal" aria-label="Close">
                      <i class="fas fa-times"> 
                        
                      </i>
                      </button>
                    </div>
                    <div class="modal-body">
                
        
                      <form action="/passQuiz/{{$item->id }}" method="post" enctype="multipart/form-data">
                        @csrf
                          <div class="mb-3">   
                              <label for="exampleInputPassword1" class="form-label">Anwser</label>
                              <input type="text" name="name_repons" class="form-control"  required>
                            </div>
                            <input type="hidden" name="quiz_id" value="{{ $item->id }}">
                            <input type="hidden" name="quiz_name" value="{{ $item->name_quiz }}">
                            <input type="hidden" name="student_id" value="{{ Auth::user()->id }}">
                            <input type="hidden" name="student_name" value="{{ Auth::user()->name }}">
                            <button type="submit" class="btn btn-primary">Submit</button>
                      </form> 
                     
                     
        
                     </div>
                  </div>
        
                </div>
            </div>
              @endforeach
            </div>
          </div>
        </div>

        <main>
           
{{--  --}}
            </div>
            <!--Table-->
            
        </main>

    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
