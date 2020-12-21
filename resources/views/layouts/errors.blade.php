@if($errors->any())
    <div class="alert alert-danger" style="width: 85%;margin-left:35px">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif
