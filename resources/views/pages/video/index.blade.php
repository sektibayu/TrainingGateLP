@extends('layout.master')

@section('title','Video')

@section('content')
    <div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#upload"><span class="glyphicon glyphicon-plus"></span>Upload Video</button>
						 <!-- Modal -->
                                    <div class="modal fade" id="upload" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                    <h4 class="modal-title" id="myModalLabel">Upload video</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form role="form" action="video/upload" method="post" enctype="multipart/form-data">
										            {!! csrf_field() !!}
										            	<div class="form-group">
															<label>Nama video</label>
															<input class="form-control" placeholder="name" name="name" type="text" required>
														</div>
														<div class="form-group">
															<label>file video</label>
															<input class="form-control" placeholder="" name="upload_file" type="file" required>
														</div>
															<button type="submit" class="btn btn-primary">Submit</button>
													</form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
					</div>
					<div class="panel-body">

						<table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr>
						        <!-- <th data-field="state" data-checkbox="true" >Item ID</th> -->
						        <th class="text-center" data-sortable="true">Video ID</th>
						        <th class="text-center" data-sortable="true">Nama Video</th>
						        <th class="text-center" data-sortable="true">Aksi</th>
						    </tr>
						    </thead>
						    <tbody>
						   	@foreach($videos as $video)
						    <tr>
						    	<td>{{$video->video_id}}</td>
						    	<td><a href="{{URL::to('file_video/'.$video->alamat_video) }}">{{$video->nama_video}}</a></td>
						    	<td>
                                    <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modal{{$video->video_id}}"><span class="glyphicon glyphicon-remove"></span></button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="modal{{$video->video_id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                    <h4 class="modal-title" id="myModalLabel">Hapus Video</h4>
                                                </div>
                                                <div class="modal-body">
                                                    Apakah anda yakin menghapus video {{$video->nama_video}}? <br><br><br> klik "Ya" untuk konfirmasi
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                                <a href="{{ URL::to('video/delete/'.$video->video_id) }}">
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

