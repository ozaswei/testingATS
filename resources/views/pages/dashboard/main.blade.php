<html>
<head>
    <title>Dashboard</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .collection {
            list-style-type: none;
            height: 100%;
            width: 185px;
            float: left;

        }

        .item a {
            position: relative;
            display: block;
            color: whitesmoke;
            width: 170px;
            height: 50px;
            text-align: center;
            padding-top: 10px;
            text-decoration: none;
            background-color: #555;
            border: 1px solid #555;
            box-shadow: 5px 5px 5px #aaaaaa;
            right: 30%;
            top: 20%;
        }

        .item a:hover {
            background-color: whitesmoke;
            border: 1px solid whitesmoke;
            color: black;
        }

        .details {
            text-decoration: none;
            display: block;
            width: 115px;
            height: 25px;
            background: red;
            text-align: center;
            border-radius: 5px;
            color: white;
        }

        .details:hover {
            background-color: #555;
            color: white;
            text-decoration: none;
        }

        .stats {
            font-weight: bold;
            font-size: 20px;
        }

        .candidates {

        }

        .calenders {

        }
    </style>
</head>


<body>
<div class="container-fluid" style=" position: absolute; width:100% ;height: 100%;">
    <div class="row">

        <!-- Left bar -->
        <div class="col-md-2">
            <ul class="collection">
                <img src="https://talentconnects.com.np/img/logo.png" width="140px" height="50px"
                     style=" box-shadow:5px 5px 5px #aaaaaa; position: absolute; top: 2%; left: 7%">
                <br/></br></br><br>
                <li class="item"><a href="https://duckduckgo.com">Task</a></li>
                <br/>
                <li class="item"><a href="https://duckduckgo.com">Calender</a></li>
                <br/>
                <li class="item"><a href="{{route('register')}}">Position</a></li>
                <br/>
                <li class="item"><a href="https://duckduckgo.com">Candidate</a></li>
                <br/>
                <li class="item"><a href="https://duckduckgo.com">Settings</a></li>
                <br/>
                <li class="item"><a href="{{route('loginpage')}}">Log Out</a></li>
                <br/>
            </ul>
        </div>

        <!-- Middle bar-->
        <div class="col-md-7">
            <div class="card" style="height: 90vh; top: 5%">
                <div class="card-header bg-dark" style="color: whitesmoke">
                    <div class="row">

                        <!--All Position -->
                        <div class="col-md-5">
                            <div style="float: left; font-size: 25px">All Positions</div>
                        </div>

                        <div class="col-md-4">
                            <div style="font-size: 17px;float: left">
                                @include('inc.message')
                                @include('inc.errors')

                            </div>
                        </div>

                        <div class="col-md-3">
                            <a href="/dashboard/create_position/{{$id}}" class="btn btn-success" style="float: right;">Add new
                                Position</a></div>
                        </div>

                    </div>


                <div class="card-body">
                    <ol>
                        @if(count($datas)>0)
                            @foreach($datas as $data)
                                <li><h5> {{$data['position']}}</h5>
                                    <a class="details" href="{{url('/dashboard/details/'.$data->id)}}">
                                        Details
                                    </a>
                                </li>
                                <hr/>
                            @endforeach
                            {{$datas->links()}}
                        @else
                            There aren't any positions currently.
                        @endif
                    </ol>
                </div>
            </div>
        </div>


        <!--Rightside bar-->
        <div class="col-md-3">

            <div class="card" style="top: 3.5%; border: transparent; position: absolute">

                <div class="card-header" style="border: transparent;">
                    <ul style="list-style-type: none;">
                        <li class="stats">Stats
                        </li>
                    </ul>
                </div> <!-- For header -->

                <div class="card-group" style="width: 290px;height: 135px; border-radius: 10px 10px; overflow: auto">
                    <ul>
                        <li class="candidates"><b>New Candidates</b>
                            <ul>
                                <li>Ram Prasad</li>
                                <li>Ram Prasad</li>
                                <li>Ram Prasad</li>
                                <li>Ram Prasad</li>
                            </ul>
                        </li>
                    </ul>
                </div>  <!-- For Candidates-->

                <div class="card-group" style="width: 290px;height: 240px; border-radius: 10px 10px; overflow: auto">
                    <ul>
                        <li class="calenders">
                            <b>Calender Events</b>
                            <ul>
                                <li>23-03-1995 09:00 AM: technicalinterview</li>
                                <li>23-03-1995 09:00 AM: technical interview</li>
                                <li>23-03-1995 09:00 AM: technical interview</li>
                                <li>23-03-1995 09:00 AM: technical interview</li>
                            </ul>
                        </li>
                    </ul>
                </div>  <!-- For Calender Events -->

                <div class="card-group" style=" width: 290px;height: 180px; border-radius: 10px 10px; overflow: auto">
                    <ul>
                        <li class="tasks"><b>Tasks</b>
                            <ul>
                                <li>Review the CV</li>
                                <li>Review the CV</li>
                                <li>Review the CV</li>
                                <li>Review the CV</li>
                            </ul>
                        </li>
                    </ul>
                </div>  <!-- For Tasks -->
            </div> <!-- RightBar-->
        </div>


    </div>
</div>

</body>
</html>
