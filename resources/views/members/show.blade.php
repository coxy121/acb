@extends('layouts.navigation')
@section('page_heading','Edit Member')
@section('section')
    <div class="col-lg-12">
        {!! Form::model($member, ['action' => 'MemberController@store', 'class' => 'form-horizontal']) !!}
        <div class="form-group">
            {!! Form::label('first_name','First Name', ['class' => 'col-md-4 control-label']) !!}
            <div class="col-md-6">
                {!! Form::text('first_name', '', ['class' => 'col-md-6 form-control']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('last_name','Last Name', ['class' => 'col-md-4 control-label']) !!}
            <div class="col-md-6">
                {!! Form::text('last_name', '', ['class' => 'col-md-6 form-control']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('address_1','Address 1', ['class' => 'col-md-4 control-label']) !!}
            <div class="col-md-6">
                {!! Form::text('address_1', '', ['class' => 'col-md-6 form-control']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('address_2','Address 2', ['class' => 'col-md-4 control-label']) !!}
            <div class="col-md-6">
                {!! Form::text('address_2', '', ['class' => 'col-md-6 form-control']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('city','City', ['class' => 'col-md-4 control-label']) !!}
            <div class="col-md-6">
                {!! Form::text('city', '', ['class' => 'col-md-6 form-control']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('state','State', ['class' => 'col-md-4 control-label']) !!}
            <div class="col-md-6">
                {!! Form::text('state', '', ['class' => 'col-md-6 form-control']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('zip','Zip', ['class' => 'col-md-4 control-label']) !!}
            <div class="col-md-6">
                {!! Form::text('zip', '', ['class' => 'col-md-6 form-control']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('phone','Phone #', ['class' => 'col-md-4 control-label']) !!}
            <div class="col-md-6">
                {!! Form::text('phone', '', ['class' => 'col-md-6 form-control']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('email','E-Mail Address', ['class' => 'col-md-4 control-label']) !!}
            <div class="col-md-6">
                {!! Form::email('email', '', ['class' => 'col-md-6 form-control']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('member_type','Member Type', ['class' => 'col-md-4 control-label']) !!}
            <div class="col-md-6">
                {!! Form::select('member_type', array('1' => 'Regular', '2' => 'Regular Junior', '3' => 'Paid', '4' => 'Paid Junior'), null, ['placeholder' => 'Pick select a member type...','class' => 'col-md-6 form-control']) !!}
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                {!!  Form::submit('Click Me!', ['class' => 'btn btn-primary']) !!}
            </div>
        </div>
        {!! Form::close() !!}
        </div>

@stop