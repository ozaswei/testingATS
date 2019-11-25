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
    <div class="card-header bg-dark" style=" top: 5%;color: whitesmoke">
        <div class="row">
            <div class="col-md-6">
                <h2>Create a Position</h2>
            </div>
            <div class="col-md-6">@include('inc.message')
                @include('inc.errors')
            </div>
        </div>
    </div>
    <br/>
    <form class="form-group" method="post" action="/dashboard/store_postion/{{$id}}">
        @csrf

        <div class="row">
            <div class="col-md-5" style="width: 400px">
                <input type="text" class="form-control" name="position" placeholder="Postion*"/><br/>

                <input type="text" class="form-control" name="department" placeholder="Department Name*"/><br/>
                <input type="text" class="form-control" name="location" placeholder="Location*"/><br/>

                <!-- Job type-->
                Job Type :
                <input type="checkbox" name="job_type[]" value="Full Time" checked="checked"> Full Time
                <input type="checkbox" name="job_type[]" value="Part Time"> Part Time
                <input type="checkbox" name="job_type[]" value="Contract"> Contract<br/>
                <div style="height: 20px"></div>
                <!--Category-->
                <select class="form-control" name="category">
                    <option disabled selected>-- Job Category --</option>
                    <option>Accounting and Finance</option>
                    <option>Administrative/Management</option>
                    <option>Banking/Financial</option>
                    <option>Beauty and Healthcare</option>
                    <option>Business Development</option>
                    <option>Development</option>
                    <option>Communications/Broadcasting</option>
                    <option>Technology/Management</option>
                    <option>Content Writing</option>
                    <option>Database Programming</option>
                    <option>Graphic Designing</option>
                    <option>Hardware/Network</option>
                    <option>Internet Marketing</option>
                    <option>Computer Programming</option>
                    <option>Computer System Programming</option>
                    <option>Web Designing and Programming</option>
                    <option>Consulting and Professional Services</option>
                    <option>Counseling</option>
                    <option>Customer Service</option>
                    <option>E-Commerce</option>
                    <option>Education</option>
                    <option>Expression of Interest</option>
                    <option>Finance and Administration</option>
                    <option>Hospital Management</option>
                    <option>Hospitality</option>
                    <option>Hotel/Resort Business</option>
                    <option>Human Resources</option>
                    <option>Information Technology</option>
                    <option>Marketing</option>
                    <option>Media/Journalism</option>
                    <option>Mobile App Development</option>
                    <option>Research</option>
                    <option>Sales</option>
                    <option>Software Development</option>
                    <option>Tourism Industry</option>
                    <option>Trainer</option>
                    <option>Tourism Industry</option>
                    <option>Travel and Ticketing</option>
                    <option>Others/Misc</option>
                </select><br/>

                <!--Education-->
                <select class="form-control" name="education">
                    <option disabled selected>-- Minimum Required Education --</option>
                    <option>PHD</option>
                    <option>Master's Degree</option>
                    <option>Bachelor's Degree</option>
                    <option>Diploma</option>
                    <option>High School</option>
                    <option>Grade 10</option>
                </select><br/>

                <!--Experiences-->
                <input type="text" class="form-control" name="experience"
                       placeholder="Minimum years of Experience*"/><br/>

                <input type="text" class="form-control" name="openings" placeholder="No. of Openings*"/><br/>

            </div>

            <div class="col-md-7" style="position: relative">
                <h4>Full description of your Job</h4>
                <textarea class="form-control" name="description" rows="500" id="ckeditor1"></textarea>
                <br/>
                <input type="submit" class="btn btn-success">
                <input type="reset" class="btn btn-danger">
                <a href="/dashboard/{{$id}}" class="btn btn-primary">Go Back</a>
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
