<?php
/**
 * Created by PhpStorm.
 * User: weford
 * Date: 11/1/2015
 * Time: 7:29 AM
 */
    /*
     * FOUNDER MODEL FORM
     */
?>
    <div class="form-group">
        {!! Form::label('fname', 'First Name: ') !!}
        {!! Form::text('fname', null, ['class' =>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('lname', 'Last Name: ') !!}
        {!! Form::text('lname', null, ['class' =>'form-control']) !!}
    </div>

    <div class="form-group">
    {!! Form::label('company_name', 'Company Name: ') !!}
    {!! Form::text('company_name', null, ['class' =>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('company_street', 'Street: ') !!}
        {!! Form::text('company_street', null, ['class' =>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('company_city', 'City: ') !!}
        {!! Form::text('company_city', null, ['class' =>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('company_state', 'State: ') !!}
        {!! Form::text('company_state', null, ['class' =>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('company_zip', 'Zip: ') !!}
        {!! Form::text('company_zip', null, ['class' =>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('company_phone', 'Phone: ') !!}
        {!! Form::text('company_phone', null, ['class' =>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('company_industry', 'Industry: ') !!}
        {!! Form::text('company_industry', null, ['class' =>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('company_mktcap', 'Market Capital: ') !!}
        {!! Form::text('company_mktcap', null, ['class' =>'form-control']) !!}
    </div>
