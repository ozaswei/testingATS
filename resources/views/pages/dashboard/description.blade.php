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

        <!-- Leftbar-->
        <div class="col-md-2 position-relative" style="height:600px;">
            <ul class="collection">
                <img src="https://talentconnects.com.np/img/logo.png" width="140px" height="50px" style=" box-shadow:5px 5px 5px #aaaaaa; position: absolute; top: 2%; left: 7%">
                <li><h3 style="text-shadow:5px 5px 5px #aaaaaa;position: absolute; top: 18% ; left: 15%">Description</h3></li>
                <li class="item" style="position: absolute; top:45%; left: 30%"><a href="/dashboard/details/{{$datas->id}}">Back</a></li>
            </ul>
        </div>

        <!-- Description Body-->
        <div class="col-md-9">
            <div class="card" style="height: 80vh; top: 9%">
                <div class="card-header bg-dark" style=";color: whitesmoke"><h2>{{$datas->position}}</h2></div>
                    <div class="card-body" style="overflow: auto">
                        <?php
                        echo htmlspecialchars_decode($datas->description);
                        ?>
                    </div>
            </div>
        </div>
    </div>
</div>
<script src="{{url('plugin/ckeditor/ckeditor.js')}}"></script>
<script>
    CKEDITOR.replace('ckeditor1');
</script>
</body>
</html>
