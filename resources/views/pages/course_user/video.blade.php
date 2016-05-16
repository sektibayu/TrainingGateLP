@extends('layout.master-user')

@section('content')
	<div class="row">
            <ol class="breadcrumb">
                <li><a href="{{ URL::to('courseuser') }}"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li><a href="{{ URL::to('courseuser/detail/'.$id) }}">Course</a></li>
                <li class="active">video</li>
                <li class="active">{{ $section->video->nama_video }}</li>
            </ol>
        </div><!--/.row-->
        <br>   
    <div class="row">
        <div class="col-lg-12">
        	<center>
             <video width="640" height="480" controls>
				  <source src="{{ URL::to('file_video/'.$section->video->alamat_video) }}" type="video/mp4">
					Your browser does not support the video tag.
			</video> 
			</center>
        </div>
    </div><!--/.row-->         
@endsection