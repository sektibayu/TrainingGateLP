@extends('layout.master')

@section('title','Manage Sections')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <form role="form" action="" method="post">
            {!! csrf_field() !!}
				<div class="form-group" action="" method="post">
					<label>Sectionname</label>
					<input class="form-control" placeholder="Sectionname" name="nama_section" type="text" value="{{$section->nama_section}}" required></input>
				</div>
				<div>
					<label>Course</label>
					<select class="form-control" name="course_course_id" value="$section->course_course_id">
						@foreach($courses as $course)
							<option value="{{$course->course_id}}">{{$course->nama_course}}</option>
						@endforeach
					</select>
				</div>
				<div>
					<label>Video</label>
					<select class="form-control" name="video_video_id" value="$section->video_video_id">
						@foreach($videos as $video)
							<option value="{{$video->video_id}}">{{$video->alamat_video}}</option>
						@endforeach
					</select>
				</div>
				<div>
					<label>Materi</label>
					<select class="form-control" name="materi_mater_id" value="$section->materi_materi_id">
						@foreach($materis as $materi)
							<option value="{{$materi->materi_id}}">{{$materi->nama_materi}}</option>
						@endforeach
					</select>
				</div>
				<div>
					<label>Soal</label>
					<select class="form-control" name="soal_soal_id" value="$section->soal_soal_id">
						@foreach($soals as $soal)
							<option value="{{$soal->soal_id}}">{{$soal->judul_soal}}</option>
						@endforeach
					</select>
				</div>
				<br>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
        </div>
    </div><!--/.row-->         
@endsection