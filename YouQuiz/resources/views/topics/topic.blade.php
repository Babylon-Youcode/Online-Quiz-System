<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>Admin</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><a href="{{ route('welcome') }}"> <span>YouQuiz</span></a></h2>
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
                </label> Topics
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
            <div class="recent-grid">
                <div class="projects">
                    <div class="card">
                        <div class="card-header">
                            <h3>les list </h3>

                           {{-- <a href="{{ route('topics.create') }}">  --}}
                            {{-- <button type="submit" class="popupbtn">  <span class="las la-arrow-right">
                              add Topic</span></button>
                            </a> --}}
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table width="100%">
                                    <thead>
                                        <tr>
                                            <td>Name</td>
                                            <td>Date</td>
                                            <td>action</td>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($topic as $topics )
                                        <tr>
                                            <td>{{ $topics->name }}</td>
                                            <td>{{ $topics->created_at }}</td>
                                            <td>
                                                <a class="btn btn-danger" href="/deleteTopic/{{ $topics->id }}">Delele</a> 
                                            </td>
                                        </tr>
                                       
                                        @endforeach

                                    </tbody>
                                </table>
                             
                                
                            </div>
                        </div>

                    </div>
                </div>
               <div class="customers">

                    <div class="card ">
                        <h3 >Name of Topics</h3>
                            <form class="card-header" action="{{ route('topics.store') }}" method="POST">
                                        @csrf
                                        
                                        <input type="text"  name="name" style="width: 80%; height:40px;" required>
                                        <button type="submit">add <span class="las la-arrow-right">
                                        </span></button>
                             </form>   
                    </div>
                </div>
        </main>
    </div>
</body>

</html>
