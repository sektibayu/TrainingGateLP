@extends('layout.master')

@section('title','Database Sections')

@section('content')
    <div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<a href="{{ URL::to('section/create') }}" class="btn btn-primary" title="Tambah"><span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Tambah Section</a>
					</div>
					<div class="panel-body">

						<table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr>
						        <!-- <th data-field="state" data-checkbox="true" >Item ID</th> -->
						        <th class="text-center" data-sortable="true">Section ID</th>
						        <th class="text-center" data-sortable="true">Section Name</th>
						        <th class="text-center" data-sortable="true">Course</th>
						        <th class="text-center" data-sortable="true">Video</th>
						        <th class="text-center" data-sortable="true">Materi</th>
						        <th class="text-center" data-sortable="true">Soal</th>
						        <th class="text-center" data-sortable="true">Aksi</th>
						    </tr>
						    </thead>
						    <tbody>
						   	@foreach($sections as $section)
						    <tr>
						    	<td>{{$section->section_id}}</td>
						    	<td>{{$section->nama_section}}</td>
						    	<td>{{$section->Course->nama_course}}</td>
						    	<td>{{$section->video_video_id}}</td>
						    	<td>{{$section->materi_materi_id}}</td>
						    	<td>{{$section->soal_soal_id}}</td>
						    	<td>
						    		<a href="{{ URL::to('section/update/' . $section->section_id) }}" class="btn btn-primary btn-xs"title="Sunting"><span class="glyphicon glyphicon-pencil"></span></a>
                                    <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modal{{$section->section_id}}"><span class="glyphicon glyphicon-remove"></span></button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="modal{{$section->section_id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                    <h4 class="modal-title" id="myModalLabel">Hapus section</h4>
                                                </div>
                                                <div class="modal-body">
                                                    Apakah anda yakin menghapus section {{$section->section_section}}? <br><br><br> klik "Ya" untuk konfirmasi
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                                <a href="{{ URL::to('section/delete/'.$section->section_id) }}">
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

