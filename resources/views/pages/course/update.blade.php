@extends('layout.master')

@section('title','Manage Courses')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <form role="form" action="" method="post">
            {!! csrf_field() !!}
				<div class="form-group" action="" method="post">
					<label>Coursename</label>
					<input class="form-control" placeholder="Coursename" name="nama_course" type="text" value="{{$course->nama_course}}" required></input>
				</div>
				<br>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
        </div>
    </div><!--/.row-->         
@endsection