@extends('layout.master')

@section('title','profil')

@section('content')
   <body>
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default" style="opacity: 0.9;">
				<div class="panel-heading"><center>Profil</center></div>
				<div class="panel-body">
					<div class="col-sm-4">
					<img src="{{asset('img/logolp.jpg')}}" style="width:120%;height:120%;">
					</div>
					<div class="col-sm-8">
							<br>
						 My Username&nbsp;: {{Auth::user()->username}} <br>
						 My Role&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{Auth::user()->role->rolename}}
					</div>

					<div class="col-sm-8">
					</div>
				</div>
				<div class="panel-footer"><center></center></div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
  
@endsection
