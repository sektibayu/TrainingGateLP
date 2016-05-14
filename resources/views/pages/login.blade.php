@include('layout.head-general')

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body style="background-image: url({{asset('img/bglogin.jpg')}});">
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default" style="opacity: 0.9;">
				<div class="panel-heading"><center>LP Training Gate</center></div>
				<div class="panel-body">
					<div class="col-sm-4">
					<img src="{{asset('img/logolp.jpg')}}" style="width:150px;height:150px;">
					</div>
					<div class="col-sm-8">
						<form role="form" method="post" action="{{route('login')}}" >
	            			{!! csrf_field() !!}
								<div class="form-group">
									<input class="form-control" placeholder="username" name="username" type="text" autofocus="">
								</div>
								<div class="form-group">
									<input class="form-control" placeholder="Password" name="password" type="password" value="">
								</div>
								<button type="submit" class="btn btn-primary">Login</button>
				
						</form>
					</div>
				</div>
				<div class="panel-footer"><center>IF YOU WANT TRAINING, MAKE IT HARDER THEN YOU DO LAST</center></div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	
@include('layout.footer-general')
