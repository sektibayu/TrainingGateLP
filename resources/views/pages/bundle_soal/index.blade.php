@extends('layout.master')

@section('title','Bundle Soal')

@section('content')
    <div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					
					<div class="panel-body">

						<table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr>
						        <!-- <th data-field="state" data-checkbox="true" >Item ID</th> -->
						        <th class="text-center" data-sortable="true">Soal ID</th>
						        <th class="text-center" data-sortable="true">Judul Soal</th>
						        <th class="text-center" data-sortable="true">Deskripsi Soal</th>
						    </tr>
						    </thead>
						    <tbody>
						   	@foreach($soals as $soal)
						    <tr>
						    	<td>{{$soal->soal_id}}</td>
						    	<td>{{$soal->judul_soal}}</td>
						    	<td>{{$soal->deskripsi_soal}}</td>
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

