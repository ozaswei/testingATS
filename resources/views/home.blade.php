@extends('layouts.app')
@section('content')
    <style>
        .collection{
            list-style-type: none;
            margin: 0;
            padding: 0;
            width: 200px;

        }
        .item a {
            display: block;
            color: whitesmoke;
            padding: 8px 16px;
            text-decoration: none;
            background-color: #555;
            border: 1px solid #555;
            box-shadow: 5px 5px 5px #aaaaaa;
        }
        .item a:hover{
            background-color: whitesmoke;
            border: 1px solid whitesmoke;
            color: black;
        }
        .details{
            text-decoration: none;
            display: block;
            width: 115px;
            height: 25px;
            background: red;
            text-align: center;
            border-radius: 5px;
            color: white;
        }
        .details:hover{
            background-color: #555;
            color: white;
            text-decoration: none;
        }

        .rightbar{
            list-style-type: none;
        }

        .stats{
            font-weight: bold;
            text-align: center;
            font-size: medium;
        }
        .candidates
        {
            padding-bottom: 5px;
        }
        .calenders{
            padding-bottom: 5px;
        }
    </style>


    <div class="box" style="position: relative;overflow: hidden">
    <div class="row">

        <div class="col-md-2">
            <div class="row" style="padding: 10px 0 10px 10px">
                <ul class="collection">
                    <li class="item"><a href="https://duckduckgo.com">Task</a></li><br/>
                    <li class="item"><a href="https://duckduckgo.com">Calender</a></li><br/>
                    <li class="item"><a href="{{route('register')}}">Position</a></li><br/>
                    <li class="item"><a href="https://duckduckgo.com">Candidate</a></li><br/>
                </ul>
            </div>
        </div>

        <div class="col-md-7">
            <div class="card" style="height: 80vh;">
                <div class="card-header">All Positions</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <ol>
                        <li><h4> Java</h4>
                            <a class="details" href="https:\\www.google.com" >
                                Details
                            </a>
                        </li><hr/>
                        <li><h4>PHP</h4>
                        <a class="details" href="https:\\www.google.com" >
                            Details
                        </a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="row">
                <ul class="rightbar">
                    <li class="stats">Stats<hr></li>
                    <li class="candidates"><b>New Candidates</b>
                            <ul>
                                <li>Ram Prasad</li>
                                <li>Ram Prasad</li>
                                <li>Ram Prasad</li>
                                <li>Ram Prasad</li>
                            </ul>
                    </li>
                    <li class="calenders">
                        <b>Calender Events</b>
                        <ul>
                            <li>23-03-1995 09:00 AM: technical interview</li>
                            <li>23-03-1995 09:00 AM: technical interview</li>
                            <li>23-03-1995 09:00 AM: technical interview</li>
                            <li>23-03-1995 09:00 AM: technical interview</li>
                        </ul>
                    </li>
                    <li class="tasks"><b>Tasks</b>
                    <ul>
                        <li>Review the CV</li>
                        <li>Review the CV</li>
                        <li>Review the CV</li>
                        <li>Review the CV</li>
                    </ul>
                    </li>
                </ul>

            </div>
        </div>

    </div>
    </div>
@endsection
