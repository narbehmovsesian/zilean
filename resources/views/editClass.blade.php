@extends('app')
@section('content')


    <div class="row">
        <div class="col-md-8 col-md-offset-2 form-horizontal">

            <h3>Edit Class</h3>

        @foreach($classes as $class)

        {!! Form::model($class, ['method' => 'PATCH', 'class' => 'form-horizontal', 'role' => 'form', 'action' => ['ClassController@postEditClass', $class->id]]) !!}


                <div class="form-group invisible">
                <div class="col-sm-2">
                    {!! Form::label('user_id', 'User*') !!}
                </div>
                <div class="col-sm-4">
                    {!! Form::select('user_id',$users , null, ['class'=>'form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-2">
                    {!! Form::label('class_id', 'Class*') !!}
                </div>
                <div class="col-sm-4">
                    {!! Form::select('class_id',$classes , null, ['class'=>'form-control']) !!}
                </div>
            </div>

            <div class="form-group {{ ($errors->has('date_taken')) ? 'has-error' : '' }}">
                <div class="col-sm-2">
                    {!! Form::label('date_taken', 'Date Taken') !!}
                </div>
                <div class="col-sm-3">
                    {!! Form::text('date_taken', null, [ 'id' => 'date_taken_input' , 'class'=>'form-control']) !!}
                    {{ ($errors->has('date_taken') ? $errors->first('date_taken') : '') }}
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-2">
                    {!! Form::label('note', 'Note') !!}
                </div>
                <div class="col-sm-8">
                    {!! Form::textarea('note', null, ['class'=>'form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-4 col-sm-offset-4">
                    {!! Form::submit('Edit Class', ['class'=>'btn btn-primary form-control' ]) !!}
                </div>
            </div>
            @endforeach
        </div>
    </div>
    {!! Form::close() !!}

@stop