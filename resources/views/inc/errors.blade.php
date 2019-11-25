@foreach($errors->all() as $error)
    <div class="text-danger" style="font-size: 15px;text-align: center;">
        <q>{{$error}}</q>
    </div>
@endforeach
