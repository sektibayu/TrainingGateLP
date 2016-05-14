@extends('layout.master')

@section('title','Create Users')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <form role="form" action="" method="post">
            {!! csrf_field() !!}
				<div class="form-group" action="" method="post">
					<label>Username</label>
					<input class="form-control" placeholder="Username" name="username" type="text" required>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input class="form-control" placeholder="Password" name="password" type="password" required>
				</div>
				<div>
					<label>Role</label>
					<select class="form-control" name="role_role_id">
						@foreach($roles as $role)
							<option value="{{$role->role_id}}">{{$role->rolename}}</option>
						@endforeach
					</select>
				</div>
				<br>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
        </div>
    </div><!--/.row-->         
@endsection