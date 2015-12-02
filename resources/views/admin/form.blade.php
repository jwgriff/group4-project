<?php
/**
 * Created by PhpStorm.
 * User: weford
 * Date: 11/1/2015
 * Time: 9:18 AM
 */

    /*
    * ADMIN MODEL FORM
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
            {!! Form::label('home_street', 'Street: ') !!}
            {!! Form::text('home_street', null, ['class' =>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('home_city', 'City: ') !!}
            {!! Form::text('home_city', null, ['class' =>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('home_state', 'State: ') !!}
            {!! Form::text('home_state', null, ['class' =>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('home_zip', 'Zip: ') !!}
            {!! Form::text('home_zip', null, ['class' =>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('home_phone', 'Phone: ') !!}
            {!! Form::text('home_phone', null, ['class' =>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('security_level', 'Security Level: ') !!}
            {!! Form::text('security_level', null, ['class' =>'form-control']) !!}
        </div>


