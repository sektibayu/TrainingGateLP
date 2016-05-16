@extends('layout.master-user')

@section('content')
	<div class="row">
            <ol class="breadcrumb">
                <li><a href="{{ URL::to('courseuser') }}"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li><a href="{{ URL::to('courseuser/detail/'.$id) }}">Course</a></li>
                <li class="active">materi</li>
                <li class="active">{{ $section->materi->nama_materi }}</li>
            </ol>
        </div><!--/.row-->
        <br>  
    <div class="row">
        <div class="col-lg-12">
            <center><embed src="{{ URL::to('file_materi/'.$section->materi->alamat_materi) }}" width="800px" height="600px"></center>
        </div>
    </div><!--/.row-->         
@endsection