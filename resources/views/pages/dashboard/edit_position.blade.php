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

</head>
<body>

<div class="container-fluid" style="width:100% ; height: 100%;">
    <br/>
    <div class="card-header bg-dark" style=" top: 5%;color: whitesmoke"><h2>Edit Your Position</h2></div>
    <br/>
    @include('inc.message')
    @include('inc.errors')
    <form class="form-group" method="post" action="/dashboard/details/position_edited/{{$datas->id}}">
        @csrf

        <div class="row">
            <div class="col-md-5" style="width: 400px">
                <input type="text" class="form-control" value="{{$datas->position}}" name="position"
                       placeholder="Postion*"/><br/>

                <input type="text" class="form-control" value="{{$datas->department}}" name="department"
                       placeholder="Department Name*"/><br/>
                <input type="text" class="form-control" value="{{$datas->location}}" name="location"
                       placeholder="Location*"/><br/>

                <!-- Job type-->
                Job Type :
                @php
                $jobtype=" ";
                $jobtype=explode('/',$datas->job_type);

                if(in_array('Full Time',$jobtype))
                echo'<input type="checkbox" name="job_type[0]" value="Full Time" checked="checked"> Full Time';
                else
                echo'<input type="checkbox" name="job_type[0]" value="Full Time"> Full Time';

                if(in_array('Part Time',$jobtype))
                echo'<input type="checkbox" name="job_type[1]" value="Part Time"  checked="checked"> Part Time';
                else
                echo'<input type="checkbox" name="job_type[1]" value="Part Time"> Part Time';

                if(in_array('Contract',$jobtype))
                echo'<input type="checkbox" name="job_type[2]" value="Contract"  checked="checked"> Contract';
                else
                echo'<input type="checkbox" name="job_type[2]" value="Contract"> Contract';



                //Category
                //For selecting the datas of this select option
                $select0=' ';
                $select1=' ';
                $select2=' ';
                $select3=' ';
                $select4=' ';
                $select5=' ';
                $select6=' ';
                $select7=' ';
                $select8=' ';
                $select9=' ';
                $select10=' ';
                $select11=' ';
                $select12=' ';
                $select13=' ';
                $select14=' ';
                $select15=' ';
                $select16=' ';
                $select17=' ';
                $select18=' ';
                $select19=' ';
                $select20=' ';
                $select21=' ';
                $select22=' ';
                $select23=' ';
                $select24=' ';
                $select25=' ';
                $select26=' ';
                $select27=' ';
                $select28=' ';
                $select29=' ';
                $select30=' ';
                $select31=' ';
                $select32=' ';
                $select33=' ';
                $select34=' ';
                $select35=' ';
                $select36=' ';
                $select37=' ';
                $select38=' ';
                $select39=' ';
                    if($datas->category =='Accounting and Finance')
                           $select1=' selected';
                    elseif ($datas->category =='Administrative/Management')
                            $select2=' selected';
                     elseif ($datas->category =='Banking/Financial')
                            $select3=' selected';
                    elseif ($datas->category =='Beauty and Healthcare')
                            $select4=' selected';
                    elseif ($datas->category =='Business Development')
                            $select5=' selected';
                    elseif ($datas->category =='Communications/Broadcasting')
                            $select6=' selected';
                    elseif ($datas->category =='Technology/Management')
                            $select7=' selected';
                    elseif ($datas->category =='Content Writing')
                            $select8=' selected';
                    elseif ($datas->category =='Database Programming')
                            $select9=' selected';
                    elseif ($datas->category =='Graphic Designing')
                            $select10=' selected';
                    elseif ($datas->category =='Hardware/Network')
                            $select11=' selected';
                    elseif ($datas->category =='Internet Marketing')
                            $select12=' selected';
                    elseif ($datas->category =='Computer Programming')
                            $select13=' selected';
                    elseif ($datas->category =='Computer System Programming')
                            $select14=' selected';
                    elseif ($datas->category =='Web Designing and Programming')
                            $select15=' selected';
                    elseif ($datas->category =='Consulting and Professional Services')
                            $select16=' selected';
                    elseif ($datas->category =='Counseling')
                            $select17=' selected';
                    elseif ($datas->category =='Customer Service')
                            $select18=' selected';
                    elseif ($datas->category =='E-Commerce')
                            $select19=' selected';
                    elseif ($datas->category =='Education')
                            $select20=' selected';
                    elseif ($datas->category =='Expression of Interest')
                            $select21=' selected';
                    elseif ($datas->category =='Finance and Administration')
                            $select22=' selected';
                    elseif ($datas->category =='Hospital Management')
                            $select23=' selected';
                    elseif ($datas->category =='Hospitality')
                            $select24=' selected';
                    elseif ($datas->category =='Hotel/Resort Business')
                            $select25=' selected';
                    elseif ($datas->category =='Human Resources')
                            $select26=' selected';
                    elseif ($datas->category =='Information Technology')
                            $select27=' selected';
                    elseif ($datas->category =='Marketing')
                            $select28=' selected';
                    elseif ($datas->category =='Media/Journalism')
                                                $select29=' selected';
                    elseif ($datas->category =='Mobile App Development')
                                                $select30=' selected';
                    elseif ($datas->category =='Research')
                                                $select31=' selected';
                    elseif ($datas->category =='Sales')
                                                $select32=' selected';
                    elseif ($datas->category =='Software Development')
                                                $select33=' selected';
                    elseif ($datas->category =='Tourism Industry')
                                                $select34=' selected';
                    elseif ($datas->category =='Trainer')
                                                $select35=' selected';
                    elseif ($datas->category =='Tourism Industry')
                                                $select36=' selected';
                    elseif ($datas->category =='Travel and Ticketing')
                                                $select37=' selected';
                    elseif ($datas->category =='Others/Misc')
                                                $select38=' selected';
                     elseif ($datas->category =='Development')
                                                $select39=' selected';
                    else
                        $select0='selected' //full php operation for category selection here //if operation for job type
                @endphp
                <div style="height: 20px"></div>
                <select class="form-control" name="category">
                    <option disabled {{$select0}}>-- Job Category --</option>
                    <option {{$select1}}>Accounting and Finance</option>
                    <option {{$select2}}>Administrative/Management</option>
                    <option {{$select3}}>Banking/Financial</option>
                    <option {{$select4}}>Beauty and Healthcare</option>
                    <option {{$select5}}>Business Development</option>
                    <option {{$select6}}>Communications/Broadcasting</option>
                    <option {{$select7}}>Technology/Management</option>
                    <option {{$select8}}>Content Writing</option>
                    <option {{$select9}}>Database Programming</option>
                    <option {{$select10}}>Graphic Designing</option>
                    <option {{$select11}}>Hardware/Network</option>
                    <option {{$select12}}>Internet Marketing</option>
                    <option {{$select13}}>Computer Programming</option>
                    <option {{$select14}}>Computer System Programming</option>
                    <option {{$select15}}>Web Designing and Programming</option>
                    <option {{$select16}}>Consulting and Professional Services</option>
                    <option {{$select17}}>Counseling</option>
                    <option {{$select18}}>Customer Service</option>
                    <option {{$select19}}>E-Commerce</option>
                    <option {{$select20}}>Education</option>
                    <option {{$select21}}>Expression of Interest</option>
                    <option {{$select22}}>Finance and Administration</option>
                    <option {{$select23}}>Hospital Management</option>
                    <option {{$select24}}>Hospitality</option>
                    <option {{$select25}}>Hotel/Resort Business</option>
                    <option {{$select26}}>Human Resources</option>
                    <option {{$select27}}>Information Technology</option>
                    <option {{$select28}}>Marketing</option>
                    <option {{$select29}}>Media/Journalism</option>
                    <option {{$select30}}>Mobile App Development</option>
                    <option {{$select31}}>Research</option>
                    <option {{$select32}}>Sales</option>
                    <option {{$select33}}>Software Development</option>
                    <option {{$select34}}>Tourism Industry</option>
                    <option {{$select35}}>Trainer</option>
                    <option {{$select36}}>Tourism Industry</option>
                    <option {{$select37}}>Travel and Ticketing</option>
                    <option {{$select38}}>Others/Misc</option>
                    <option {{$select39}}>Development</option>
                </select><br/>


                <!--Education-->
                @php //php operation for selecting the previously defined education
                    $select0=' ';
                    $select1=' ';
                    $select2=' ';
                    $select3=' ';
                    $select4=' ';
                    $select5=' ';
                    $select6=' ';
                        if($datas->education =='PHD')
                                   $select1=' selected';
                            elseif ($datas->education =='Master\'s Degree')
                                    $select2=' selected';
                             elseif ($datas->education =='Bachelor\'s Degree')
                                    $select3=' selected';
                            elseif ($datas->education =='Diploma<')
                                    $select4=' selected';
                            elseif ($datas->education =='High School')
                                    $select5=' selected';
                            elseif ($datas->education =='Grade 10')
                                    $select6=' selected';
                            else
                                    $select0='selected'; //full if operation
                @endphp
                <select class="form-control" name="education">
                    <option disabled {{$select0}}>-- Minimum Required Education --</option>
                    <option {{$select1}}>PHD</option>
                    <option {{$select2}}>Master's Degree</option>
                    <option {{$select3}}>Bachelor's Degree</option>
                    <option {{$select4}}>Diploma</option>
                    <option {{$select5}}>High School</option>
                    <option {{$select6}}>Grade 10</option>
                </select><br/>


                <!--Experiences-->
                <input type="text" class="form-control" name="experience"
                       placeholder="Minimum years of Experience*" value="{{$datas->experience}}"/><br/>

                <input type="text" class="form-control" name="openings" placeholder="No. of Openings*" value="{{$datas->openings}}" /><br/>

            </div>

            <div class="col-md-7" style="position: relative">
                <h4>Full description of your Job</h4>
                <textarea class="form-control" name="description" rows="500" id="ckeditor1">

                    <?php
                    echo htmlspecialchars_decode($datas->description);
                    ?>

                </textarea>
                <br/>
                <input type="submit" value="Edit" class="btn btn-success">
                <input type="reset" class="btn btn-danger">
                <a href="/dashboard/details/{{$datas->id}}" class="btn btn-primary">Go Back</a>
            </div>
        </div>


    </form>
</div>
<script src="{{url('plugin/ckeditor/ckeditor.js')}}"></script>
<script>
    CKEDITOR.replace('ckeditor1');
</script>
</body>
</html>
