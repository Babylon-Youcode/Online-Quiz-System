<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>Admin</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2> <span>YouQuiz</span></h2>
        </div>
        <!--Secciones-del-tablero-->
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="{{ route('dashboard') }}" class="active">  <i class="far fa-home-lg-alt"></i>
                    <span>dashboard</span></a>
                </li>
                <li>
                    <a href="{{ route('quiz.show') }}" class="active" ><i class="far fa-question-circle"></i>
                    <span>Quiz</span></a>
                </li>
                <li>
                    <a href="" class="active"><i class="fal fa-user-graduate"></i>
                    <span>Students</span></a>
                </li>
                <li>
                    <a href="{{ route('topic') }}" class="active"><i class="far fa-shapes"></i>
                    <span>Topics</span></a>
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
                
            </ul>
        </div>
    </div>

    <div class="main-content">
        <header>
            <h2>
                <label for="nav-toggle">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </label> Quiz
            </h2>

            {{-- <div class="search-wrapper">
                <span class="las la-search"></span>
                <input type="search" placeholder="Serach" />
            </div> --}}
            <div class="user-wrapper">
                <img src="img/Avatar.png" width="40px" height="40px" alt="">
                <div>
                    <h4>Admin</h4>
                    <a href="">{{ auth()->user()->name }}</a>
                </div>
            </div>
        </header>

        <main>
            
            <!--Table-->
            <div class="recent-grid" style="background-image: url()">
                <div class="projects">
                    <div class="card">
                        <div class="card-header">
                            <h3>les list </h3>

                            <button type="submit" data-toggle="modal"   data-target="#update-modal"  >  <span class="las la-arrow-right">
                              add Quiz</span></button>
                              
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table width="100%">
                                    <thead>
                                        <tr>
                                            <td>Name</td>
                                            <td>Topic</td>
                                            <td>Date</td>
                                            <td>action</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        @foreach ($quiz_show as $quiz)
                                        <tr>
                                            <td>{{$quiz->name_quiz }}</td>
                                            <td>{{$quiz->name_category }}</td>
                                            <td>{{$quiz->created_at }}</td>
                                            <td>
                                               
                            <button type="submit" data-toggle="modal" class="btn btn-danger"   data-target="#delete{{$quiz->id }}"  >  
                                Delete</button> <button type="submit" data-toggle="modal" class="btn btn-success"   data-target="#update{{$quiz->id }}"  >  
                                    Update</button>
                                            </td>
                                        </tr>

                                        {{-- delete--------------------- --}}
                                        <div class="modal fade" id="delete{{$quiz->id }}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <h3 class="modal-title" id="staticBackdropLabel">Are You Sure !?</h3>
                                                  <button type="button" class="close btn btn-light" data-dismiss="modal" aria-label="Close">
                                                  <i class="fas fa-times"></i>
                                                  </button>
                                                </div>
                                                <div class="modal-body">
                                                    <a class="btn btn-danger btn-block" href="/delete/quiz/{{ $quiz->id }}">Delele</a> 
                                                 </div>
                                              </div>
                            
                                            </div>
                                        </div>
                                        {{-- delete--------------------- --}}


                                        
                                        {{-- update -----------------------------------}}
                                        <div class="modal fade" id="update{{$quiz->id }}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <h3 class="modal-title" id="staticBackdropLabel">Are You Sure !?</h3>
                                                  <button type="button" class="close btn btn-light" data-dismiss="modal" aria-label="Close">
                                                  <i class="fas fa-times"></i>
                                                  </button>
                                                </div>
                                                <div class="modal-body">
                                        <form action="/updateQuiz/{{$quiz->id }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                              <div class="mb-3">
                                                  <label for="exampleInputEmail1" class="form-label">Name</label>
                                                  <input type="text" name="name_quiz" value="{{$quiz->name_quiz }}" class="form-control"  >
                                                </div>
                                                <div class="mb-3">
                                                  <label for="exampleInputPassword1" class="form-label">Question</label>
                                                  <input type="text" name="question_quiz" value="{{$quiz->question_quiz }}" class="form-control" >
                                                </div>
                                                <div class="mb-3">
                                                  <label for="exampleInputPassword1" class="form-label">Anwser</label>
                                                  <input type="text" name="answer_quiz" class="form-control" value="{{$quiz->answer_quiz }}"   required>
                                                </div>
                                                <div class="mb-3">
                                                  <label for="exampleInputPassword1" class="form-label">image</label>
                                                  <input type="file" name="image" class="form-control" id="exampleInputPassword1" >
                                                </div>
                                                <div class="mb-3">
                                                  <select name="name_category" class="form-select" aria-label="Default select example" required>
                                                      <option value="{{$quiz->name_category }}" >{{$quiz->name_category }}</option>
                                                      @foreach ( $topic as $item)
                                                      <option value="{{ $item->name}}">{{ $item->name }}</option>
                                                      @endforeach
                                                      
                                                    
                                                    </select>
                                                 
                                                </div>
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                          </form> 
                                        </div>
                                    </div>
                  
                                  </div>
                              </div>



                                         {{-- update -----------------------------------}}
                                        @endforeach

                                    </tbody>
                                </table>
                         
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="update-modal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h3 class="modal-title" id="staticBackdropLabel">Update Profile</h3>
                      <button type="button" class="close btn btn-light" data-dismiss="modal" aria-label="Close">
                      <i class="fas fa-times"></i>
                      </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('quiz.add') }}" method="post" enctype="multipart/form-data">
                            @csrf
                              <div class="mb-3">
                                  <label for="exampleInputEmail1" class="form-label">Name</label>
                                  <input type="text" name="name_quiz" class="form-control"  >
                                </div>
                                <div class="mb-3">
                                  <label for="exampleInputPassword1" class="form-label">Question</label>
                                  <input type="text" name="question_quiz" class="form-control" >
                                </div>
                                <div class="mb-3">
                                  <label for="exampleInputPassword1" class="form-label">Anwser</label>
                                  <input type="text" name="answer_quiz" class="form-control"  required>
                                </div>
                                <div class="mb-3">
                                  <label for="exampleInputPassword1" class="form-label">image</label>
                                  <input type="file" name="image" class="form-control" id="exampleInputPassword1" >
                                </div>
                                <div class="mb-3">
                                  <select name="name_category" class="form-select" aria-label="Default select example" required>
                                      @foreach ( $topic as $item)
                                      <option value="{{ $item->name}}">{{ $item->name }}</option>
                                      @endforeach
                                      
                                    
                                    </select>
                                 
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                          </form> 
                     </div>
                  </div>

                </div>
            </div>


        </main>
    </div>
    
    
       
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>
