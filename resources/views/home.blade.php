@extends('app')
@section('content')

@foreach($classes as $class)
@endforeach

@if (count($classes) > 0 )

	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<p class="text-left">
					<b>Name - </b>{{$class->first_name}} {{$class->last_name}}
				</p>
				<p class="text-left">
					<b>Major - </b>{{$class->major}}
				</p>
				<p class="text-left">
					<b>Student ID - </b>{{$class->student_id}}
				</p>
				<p class="text-left">
					<b>Email - </b>{{$class->email}}
				</p>
			</div>
		</div>
		<div class="row">
			<div class='page-header'>
				<div class='btn-toolbar pull-right'>
					<div class='btn-group'>
						<a href="/addClass/{{$class->u_id}}"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add Class</button></a>
					</div>
				</div>
				<h3>Taken Classes</h3>
			</div>
		</div>
		<div class="container">
		<div class="row">
			<div class="table-responsive">
				<table class="table table-striped data-table"  cellspacing="0" width="100%">
					<thead>
					<th>Class Code</th>
					<th>Class Name</th>
					<th>Units</th>
					<th>Date Taken</th>
					<th>Note</th>
					<th class="no-arrow"></th>
					</thead>
					@foreach($classes as $class)
						<tr>
							<td>{{$class->class_code}}</td>
							<td>{{$class->name}}</td>
							<td>{{$class->units}}</td>
							<td>{{date('n/d/Y', strtotime($class->date_taken))}}</td>
							<td>{{$class->note}}</td>
							<td class="action-button" align="right">
								<a href="/edit/{{$class->uc_id}}"><button type="button" class="btn btn-default"> <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Edit</button></a>
								<a href="/delete/{{$class->uc_id}}"><button type="button" class="btn btn-danger"> <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Delete</button></a>
							</td>
						</tr>
					@endforeach
				</table>
			</div>
		</div>
		</div>
	</div>
	@else
	@foreach($classes as $class)
	@endforeach
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<p class="text-left">
					<b>Name - </b>{{Auth::user()->first_name}} {{Auth::user()->last_name}}
				</p>
				<p class="text-left">
					<b>Major - </b>{{Auth::user()->major}}
				</p>
				<p class="text-left">
					<b>Student ID - </b>{{Auth::user()->student_id}}
				</p>
				<p class="text-left">
					<b>Email - </b>{{Auth::user()->email}}
				</p>
			</div>
		</div>
		<div class="row">
			<div class='page-header'>
				<div class='btn-toolbar pull-right'>
					<div class='btn-group'>
						<a href="/addClass/{{Auth::id()}}"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add Class</button></a>
					</div>
				</div>
				<h3>You Currently Don't Have Any classes Done</h3>
			</div>
		</div>
	</div>
	@endif
@endsection