<?php
/**
 * Created by PhpStorm.
 * User: weford
 * Date: 11/4/2015
 * Time: 12:45 AM
 */
?>
    <div class="form-group">
        {!! Form::label('is_active', 'Status: ') !!}
        {!! Form::text('is_active', null, ['class' =>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('campaign_name', 'Campaign Name: ') !!}
        {!! Form::text('campaign_name', null, ['class' =>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('description', 'Description: ') !!}
        {!! Form::textarea('description', null, ['class' =>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('start_date', 'Start Date: ') !!}
        {!! Form::text('start_date', null, ['class' =>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('end_date', 'End Date: ') !!}
        {!! Form::text('end_date', null, ['class' =>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('target_goal', 'Target Goal: ') !!}
        {!! Form::text('target_goal', null, ['class' =>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('target_current', 'Current Total: ') !!}
        {!! Form::text('target_current', null, ['class' =>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('acct_number', 'Account Number: ') !!}
        {!! Form::text('acct_number', null, ['class' =>'form-control']) !!}
    </div>