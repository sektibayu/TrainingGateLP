@extends('layout.master')

@section('title','Course')

@section('content')
    <div class="row">
    	@foreach($courses as $course)
			<div class="col-md-6">
				<div class="panel panel-success">
					<div class="panel-heading">
						{{ $course->nama_course }}
					</div>
					<div class="panel-body">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ut ante in sapien blandit luctus sed ut lacus. Phasellus urna est, faucibus nec ultrices placerat, feugiat et ligula. Donec vestibulum magna a dui pharetra molestie. Fusce et dui urna.</p>
					</div>
				</div>
			</div>
		@endforeach
	</div><!-- /.row -->      
@endsection