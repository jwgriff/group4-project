<?php
/**
 * Created by PhpStorm.
 * User: weford
 * Date: 11/1/2015
 * Time: 9:18 AM
 */

    /*
    * INVESTOR MODEL FORM
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
            {!! Form::label('profile_name', 'Profile Name: ') !!}
            {!! Form::text('profile_name', null, ['class' =>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('street', 'Street: ') !!}
            {!! Form::text('street', null, ['class' =>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('city', 'City: ') !!}
            {!! Form::text('city', null, ['class' =>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('state', 'State: ') !!}
            {!! Form::text('state', null, ['class' =>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('zip', 'Zip: ') !!}
            {!! Form::text('zip', null, ['class' =>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('phone', 'Phone: ') !!}
            {!! Form::text('phone', null, ['class' =>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('invst_objective', 'Objective: ') !!}
            {!! Form::text('invst_objective', null, ['class' =>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('invst_amount_total', 'Investment Total:') !!}
            {!! Form::text('invst_amount_total', null, ['class' =>'form-control']) !!}
        </div>

