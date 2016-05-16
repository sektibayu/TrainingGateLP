@extends('layout.master-user')

@section('content')
	<div class="row">
            <ol class="breadcrumb">
                <li><a href="{{ URL::to('courseuser') }}"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li class="active">Course</li>
                <li class="active">{{ $course->nama_course }}</li>
            </ol>
        </div><!--/.row-->
        <br>   
    <div class="row">
        <div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-body tabs">
						<?php $i=1; ?>
						<ul class="nav nav-tabs">
							@foreach($sections as $section)
							@if($i === 1)
								<li class="active"><a href="{{'#tab'.$i}}" data-toggle="tab">Section {{$i++}}</a></li>
							@else
								<li><a href="{{'#tab'.$i}}" data-toggle="tab">Section {{$i++}}</a></li>
							@endif
							@endforeach
						</ul>
						<?php $i=1; ?>
						<div class="tab-content">
							@foreach($sections as $section)
							@if($i === 1)
								<div class="tab-pane fade in active" id="{{'tab'.$i}}">
							@else
								<div class="tab-pane fade" id="{{'tab'.$i}}">
							@endif
								<h4>Tab {{$i++}}</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget rutrum purus. Donec hendrerit ante ac metus sagittis elementum. Mauris feugiat nisl sit amet neque luctus, a tincidunt odio auctor. </p>
								<a href="{{ URL::to('courseuser/detail/'.$course->course_id.'/'.$section->section_id.'/materi') }}" class="btn btn-primary" title="Materi"> Materi </a>
								<a href="{{ URL::to('courseuser/detail/'.$course->course_id.'/'.$section->section_id.'/video') }}" class="btn btn-primary" title="Video"> Video </a>
								<a href="{{ URL::to('courseuser/detail/'.$course->course_id.'/'.$section->section_id.'/materi') }}" class="btn btn-primary" title="Soal" disabled> Soal </a>
							</div>
							@endforeach
						</div>
					</div>
				</div><!--/.panel-->
			</div><!--/.col-->
    </div><!--/.row-->         
@endsection