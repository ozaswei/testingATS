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

        <!-- Left Bar -->
        <div class="col-md-2 position-relative" style="height:600px;">
            <ul class="collection">
                <img src="https://talentconnects.com.np/img/logo.png" width="140px" height="50px"
                     style=" box-shadow:5px 5px 5px #aaaaaa; position: absolute; top: 2%; left: 7%">
                <li><h3 style="text-shadow:5px 5px 5px #aaaaaa;position: absolute; top: 18% ">Details</h3></li>
                <li class="item" style="position: absolute; top: 75%;left: 30%"><a
                        href="{{url('dashboard/'.$datas->user_id)}}">Back</a></li>
                <br/>
                <li class="item" style="position: absolute; top:45%; left: 30%"><a
                        href="/dashboard/details/description/{{$datas->id}}">Next</a></li>

                <li class="item" style="position: absolute; top:30%; left: 30% "><a
                        href="/dashboard/details/edit_position/{{$datas->id}}">Edit</a></li>

                <li class="item" style="position: absolute; top:60%; left: 30% "><a
                        href="/dashboard/details/delete_position/{{$datas->id}}">Delete</a></li>
            </ul>
        </div>


        <div class="col-md-9" style="overflow: auto">
            <div class="card" style="height: 80vh; top: 10%;position: relative">
                <div class="card-header bg-dark" style="color: whitesmoke"><h2>{{$datas->position}}</h2></div>
                <div class="card-body">
                    <h4>Company : {{$datas->department}}</h4><br/>
                    <h5>Location : {{$datas->location}}</h5><br/>
                    <h5>Job Type : {{$datas->job_type}}</h5><br/>
                    <h5>Category : {{$datas->category}}</h5><br/>
                    <h5>Education : {{$datas->education}}</h5><br/>
                    <h5>Minimum Experience : {{$datas->experience}}</h5><br/>
                    <h5>Openings : {{$datas->openings}}</h5>
                    <hr/>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
