
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create New Post</div>

                <div class="card-body">
                  <form action="/post/store" method="post">
                  	


{{csrf_field()}}

<div class="form-group">
	
<label for="title">title</label>
<input type="text" name="title" class="form-control">

</div>


<div class="form-group">
	
<label for="discription">discription</label>
<textarea name="discription" id="discription" cols="5" rows="5" class="form-control" ></textarea>

</div>

<div class="text-center">
	<button class="btn btn-success" type="submit">
		store post

	</button>

</div>
                  	
                  </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection