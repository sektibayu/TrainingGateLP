@extends('layout.master')

@section('title','Course')

@section('content')
    <div class="row">
    	<?php $i=1; ?>
    	@foreach($courses as $course)
			<div class="col-md-6">
				<div class="panel panel-success">
					<div class="panel-heading">
					course {{$i++}}: {{ $course->nama_course }}
					</div>
					<div class="panel-body">
						<!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ut ante in sapien blandit luctus sed ut lacus. Phasellus urna est, faucibus nec ultrices placerat, feugiat et ligula. Donec vestibulum magna a dui pharetra molestie. Fusce et dui urna.</p> -->
						{{ $course->deskripsi_course }}
						<br>
						<a href="{{ URL::to('courseuser/detail/'.$course->course_id) }}" class="btn btn-primary" title="{{'Course '.($i-1)}}"> Go to Course</a>
					</div>
				</div>
			</div>
		@endforeach
	</div><!-- /.row -->      
@endsection