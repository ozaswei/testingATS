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
    </style>
</head>


<body>
<div class="container-fluid" style=" position: absolute; width:100% ;height: 100%;">
    <div class="row">


        <div class="col-md-2 position-relative" style="height:600px;">
            <ul class="collection">
                <img src="https://talentconnects.com.np/img/logo.png" width="140px" height="50px" style=" box-shadow:5px 5px 5px #aaaaaa; position: absolute; top: 2%; left: 7%">
                <li><h3 style="text-shadow:5px 5px 5px #aaaaaa;position: absolute; top: 18% ; left: 15%">Description</h3></li>
            </ul>
        </div>


        <div class="col-md-9">
            <div class="card" style="height: 80vh; top: 5%">
                <div class="card-body" style="overflow: auto">
                    Deletion Successful
                    <a href="{{route('dashboard')}}" class="btn btn-primary">Go Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
