@if(session('success'))
    <div class="text-success"  style="font-size: 15px;text-align: center;">
        {{session('success')}}
    </div>
@elseif(session('failed'))
    <div class="text-danger"  style="font-size: 15px;text-align: center;">
        {{session('failed')}}
    </div>
@endif
