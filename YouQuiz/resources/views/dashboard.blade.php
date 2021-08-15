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
    <title>Admin</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
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

            {{-- <div class="search-wrapper">
                <span class="las la-search"></span>
                <input type="search" placeholder="Serach" />
            </div> --}}
            <div class="user-wrapper">
                <img src="{{ asset('img/Avatar.png') }}" width="40px" height="40px" alt="">
                <div>
                    <h4>Admin</h4>
                    <a href="{{ route('profile.show') }}">{{ auth()->user()->name }}</a>
                </div>
            </div>
        </header>

        <main>
            <div class="cards">

                <div class="card-single">
                    <div>
                        <h1>5</h1>
                        <span>Students</span>
                    </div>
                    <div>
                        <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                    </div>
                </div>

                <div class="card-single">
                    
                    <div>
                        <h1>{{ $countTopic }}</h1>
                        <a href="{{ route('topic') }}">    <span>Topics</span></a>
                    </div>
                    <div>
                        <i class="far fa-shapes"></i>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>{{ $countQuiz }}</h1>
                        <span>Quiz</span>
                    </div>
                    <div>
                        <i class="far fa-question-circle"></i>
                    </div>
                </div>

                <!-- <div class="card-single">
                    <div>
                        <h1>2</h1>
                        <span>Nuevas consultas</span>
                    </div>
                    <div>
                        <span class="lab la-wpforms"></span>
                    </div>
                </div> -->
            </div>
            <!--Table-->
            <div class="recent-grid">
                <div class="projects">
                    <div class="card">
                        <div class="card-header">
                            <h3>la list des Apprents</h3>

                            {{-- <button>Mostrar todo <span class="las la-arrow-right">
                            </span></button> --}}
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">

                                
                                    
                                
                                <table width="100%">
                                    <thead>
                                        <tr>
                                            <td>Name</td>
                                            <td>Quiz</td>
                                            <td>Date</td>
                                            <td>Status</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($result as $item)
                                            
                                      
                                        <tr>
                                            <td>{{$item->student_name}}</td>
                                            <td>{{$item->quiz_name}}</td>
                                            <td>{{$item->created_at}}</td>
                                            <td>{{$item->status}}</td>
                                            
                                        </tr>
                                        @endforeach
                                       


                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>

                {{-- <div class="customers">

                    <div class="card">
                        <div class="card-header">
                            <h3>Nuevos pacientes</h3>

                            <button>Mostrar todo <span class="las la-arrow-right">
                            </span></button>
                        </div> --}}

                        {{-- <div class="card-body">

                            <div class="customer">
                                <div class="info">
                                    <img src="avatars/1.png" width="40px" height="40px" alt="">
                                    <div>
                                        <h4>Ana Maria Acosta</h4>
                                        <small>Diarrea</small>
                                    </div>
                                </div>
                                <div class="contact">
                                    <span class="las la-user-circle"></span>
                                    <span class="lab la-whatsapp"></span>
                                    <span class="las la-phone"></span>
                                </div>
                            </div>

                            <div class="customer">
                                <div class="info">
                                    <img src="avatars/2.png" 40px " height="40px " alt=" ">
                                    <div>
                                        <h4>Karen Orozco</h4>
                                        <small>Gripa</small>
                                    </div>
                                </div>
                                <div class="contact ">
                                    <span class="las la-user-circle "></span>
                                    <span class="lab la-whatsapp "></span>
                                    <span class="las la-phone "></span>
                                </div>
                            </div>

                            <div class="customer ">
                                <div class="info ">
                                    <img src="avatars/3.png " width="40px " height="40px " alt=" ">
                                    <div>
                                        <h4>Kelly Ortiz</h4>
                                        <small>Intoxicación</small>
                                    </div>
                                </div>
                                <div class="contact ">
                                    <span class="las la-user-circle "></span>
                                    <span class="lab la-whatsapp "></span>
                                    <span class="las la-phone "></span>
                                </div>
                            </div>

                            <div class="customer ">
                                <div class="info ">
                                    <img src="avatars/4.png " width="40px " height="40px " alt=" ">
                                    <div>
                                        <h4>Julian Quesada</h4>
                                        <small>Malestar general</small>
                                    </div>
                                </div>
                                <div class="contact ">
                                    <span class="las la-user-circle "></span>
                                    <span class="lab la-whatsapp "></span>
                                    <span class="las la-phone "></span>
                                </div>
                            </div>

                            <div class="customer ">
                                <div class="info ">
                                    <img src="avatars/5.png " width="40px " height="40px " alt=" ">
                                    <div>
                                        <h4>Nelson Stiven</h4>
                                        <small>Bartolinitis</small>
                                    </div>
                                </div>
                                <div class="contact ">
                                    <span class="las la-user-circle "></span>
                                    <span class="lab la-whatsapp "></span>
                                    <span class="las la-phone "></span>
                                </div>
                            </div>

                            <div class="customer ">
                                <div class="info ">
                                    <img src="avatars/6.png " width="40px " height="40px " alt=" ">
                                    <div>
                                        <h4>Sara Cortez</h4>
                                        <small>Acné</small>
                                    </div>
                                </div>
                                <div class="contact ">
                                    <span class="las la-user-circle "></span>
                                    <span class="lab la-whatsapp "></span>
                                    <span class="las la-phone "></span>
                                </div>
                            </div>

                            <div class="customer ">
                                <div class="info ">
                                    <img src="avatars/7.png " width="40px " height="40px " alt=" ">
                                    <div>
                                        <h4>Mario Ortiz</h4>
                                        <small>Demencia</small>
                                    </div>
                                </div>
                                <div class="contact ">
                                    <span class="las la-user-circle "></span>
                                    <span class="lab la-whatsapp "></span>
                                    <span class="las la-phone "></span>
                                </div>
                            </div>

                            <div class="customer ">
                                <div class="info ">
                                    <img src="avatars/8.png " width="40px " height="40px " alt=" ">
                                    <div>
                                        <h4>Leopoldo Sas</h4>
                                        <small>Eccema</small>
                                    </div>
                                </div>
                                <div class="contact ">
                                    <span class="las la-user-circle "></span>
                                    <span class="lab la-whatsapp "></span>
                                    <span class="las la-phone "></span>
                                </div>
                            </div>

                            <div class="customer ">
                                <div class="info ">
                                    <img src="avatars/9.png " width="40px " height="40px " alt=" ">
                                    <div>
                                        <h4>Stiven Alrboleda</h4>
                                        <small>Encefalitis</small>
                                    </div>
                                </div>
                                <div class="contact ">
                                    <span class="las la-user-circle "></span>
                                    <span class="lab la-whatsapp "></span>
                                    <span class="las la-phone "></span>
                                </div>
                            </div>

                            <div class="customer ">
                                <div class="info ">
                                    <img src="avatars/10.png " width="40px " height="40px " alt=" ">
                                    <div>
                                        <h4>Brandon Carnadona</h4>
                                        <small>Faringitis</small>
                                    </div>
                                </div>
                                <div class="contact ">
                                    <span class="las la-user-circle "></span>
                                    <span class="lab la-whatsapp "></span>
                                    <span class="las la-phone "></span>
                                </div>
                            </div>

                            
                        </div> --}}
                    {{-- </div>
                </div>
                 --}}
            </div>
        </main>

    </div>

</body>

</html>
