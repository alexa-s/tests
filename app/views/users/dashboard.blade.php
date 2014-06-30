<h1>Dashboard</h1>
 
<p>Welcome to your Dashboard.</p>

<div class="col-xs-12">
	<div class="table-responsive">
		<table class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>Id</th>
					<th>Fullname</th>
					<th>Email</th>
					<th>Created At</th>
					<th>Last update</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($users as $user)
          <tr>
          	<td>{{ $user->id }}</td>
            <td>{{ $user->getFullName() }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->created_at->format('F d, Y h:ia') }}</td>
            <td>{{ $user->updated_at->format('F d, Y h:ia') }}</td>
            <td style="width:150px">
            		{{ HTML::link('users/'.$user->id.'/edit', 'Edit', array('class'=>'btn btn-info-custom pull-left')) }}
                {{ Form::open(['url' => '/user/' . $user->id, 'method' => 'DELETE']) }}
                {{ Form::submit('Delete', ['class' => 'btn btn-custom'])}}
                {{ Form::close() }}
            </td>
          </tr>
         @endforeach
			</tbody>
			<tfoot><tr><th colspan="6">{{ HTML::link('users/create', 'Add Users', array('class'=>'btn btn-custom')) }}</th></tr></tfoot>
		</table>
	</div>
</div>