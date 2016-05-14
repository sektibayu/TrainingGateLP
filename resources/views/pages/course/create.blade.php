@extends('layout.master')

@section('title','Create Courses')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <form role="form" action="" method="post">
            {!! csrf_field() !!}
				<div class="form-group" action="" method="post">
					<label>Course Name</label>
					<input class="form-control" placeholder="Coursename" name="nama_course" type="text" required>
				</div>
				<div class="form-group" action="" method="post">
					<label>Deskripsi Name</label>
					<textarea class="form-control" rows="3" placeholder="deskripsi" name="deskripsi_course" required></textarea>
				</div>
				<br>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
        </div>
    </div><!--/.row-->         
@endsection