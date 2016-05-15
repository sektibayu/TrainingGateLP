@extends('layout.master')

@section('title','')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1>{{ $course->nama_course }}</h1>
        </div>
        <div class="col-lg-12">
        {{ $course->deskripsi_course }}
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
								<a href="{{ URL::to('course/create') }}" class="btn btn-primary" title="Tambah"> Materi </a>
								<a href="{{ URL::to('course/create') }}" class="btn btn-primary" title="Tambah"> Video </a>
								<a href="{{ URL::to('course/create') }}" class="btn btn-primary" title="Tambah"> Soal </a>
							</div>
							@endforeach
						</div>
					</div>
				</div><!--/.panel-->
			</div><!--/.col-->
        </div>
    </div><!--/.row-->         
@endsection