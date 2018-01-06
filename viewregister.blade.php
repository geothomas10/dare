<!--@extends('app')!-->
@extends('layout.layout')

@section('viewregister')
<div style="margin-top: 10%;"></div>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			@if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif

			<div class="panel panel-default">
				<div class="panel-heading">View All Registers</div>
				    <div class="panel-body">
						<table class="table table-striped">
						    <thead>
						      <tr>
						        <th>ID</th>
						        <th>Name</th>
						        <th>Email</th>
						      </tr>
						    </thead>
						    <tbody>
						    	 <?php $count = 1 ?>
						      @foreach($regs as $userreg)
						       
                               <tr>
                               	@if($userreg['admin']==0)
                                <td>{{$count++}}</td>
						        <td>{{$userreg['name']}}</td>
						        <td>{{$userreg['email']}}</td>
						        <td><a href="{{action('MywebController@edit', $userreg['id'])}}" class="btn btn-warning">Edit</a></td>
			        <td><a href="{{action('MywebController@destroy', $userreg['id'])}}" class="btn btn-danger"  onclick="if(!confirm('Are you sure to delete this item?'))
                       {return false;};" title="Delete this Item">Delete</a></td>
                              @endif
						      </tr>
						      @endforeach
						    </tbody>
					  </table>
                    </div>
                </div>
            </div>
		</div>
	</div>
</div>
@endsection
