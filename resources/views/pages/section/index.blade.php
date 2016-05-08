@extends('layout.master')

@section('title','Database Courses')

@section('content')
    <div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<a href="{{ URL::to('course/create') }}" class="btn btn-primary" title="Tambah"><span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Tambah Course</a>
					</div>
					<div class="panel-body">

						<table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr>
						        <!-- <th data-field="state" data-checkbox="true" >Item ID</th> -->
						        <th class="text-center" data-sortable="true">Course ID</th>
						        <th class="text-center" data-sortable="true">Course Name</th>
						        <th class="text-center" data-sortable="true">Aksi</th>
						    </tr>
						    </thead>
						    <tbody>
						   	@foreach($courses as $course)
						    <tr>
						    	<td>{{$course->course_id}}</td>
						    	<td>{{$course->nama_course}}</td>
						    	<td>
						    		<a href="{{ URL::to('course/update/' . $course->course_id) }}" class="btn btn-primary btn-xs"title="Sunting"><span class="glyphicon glyphicon-pencil"></span></a>
                                    <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modal{{$course->course_id}}"><span class="glyphicon glyphicon-remove"></span></button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="modal{{$course->course_id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                    <h4 class="modal-title" id="myModalLabel">Hapus course</h4>
                                                </div>
                                                <div class="modal-body">
                                                    Apakah anda yakin menghapus course {{$course->nama_course}}? <br><br><br> klik "Ya" untuk konfirmasi
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                                <a href="{{ URL::to('course/delete/'.$course->course_id) }}">
                                                    <button type="button" class="btn btn-danger">Ya</button>
                                                </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
						    	</td>
						    </tr>
						    @endforeach
						    </tbody>
						</table>
					</div>
				</div>
			</div>
		</div><!--/.row-->
		<script>
						    $(function () {
						        $('#hover, #striped, #condensed').click(function () {
						            var classes = 'table';
						
						            if ($('#hover').prop('checked')) {
						                classes += ' table-hover';
						            }
						            if ($('#condensed').prop('checked')) {
						                classes += ' table-condensed';
						            }
						            $('#table-style').bootstrapTable('destroy')
						                .bootstrapTable({
						                    classes: classes,
						                    striped: $('#striped').prop('checked')
						                });
						        });
						    });
						
						    function rowStyle(row, index) {
						        var classes = ['active', 'success', 'info', 'warning', 'danger'];
						
						        if (index % 2 === 0 && index / 2 < classes.length) {
						            return {
						                classes: classes[index / 2]
						            };
						        }
						        return {};
						    }
						</script>
@endsection

