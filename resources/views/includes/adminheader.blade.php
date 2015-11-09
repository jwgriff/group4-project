<?php
/**
 * Created by PhpStorm.
 * User: weford
 * Date: 10/9/2015
 * Time: 8:41 PM
 */
?>
<nav class="navbar navbar-default navbar-inverse">

    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/public"><h1>Admin Portal</h1></a>
        </div>
    </div>
    <div class="container">
        @if(Auth::check())
            <h3>Welcome!  <strong>{{Auth::user()->name}}</strong> </h3><br>
            <a class="btn btn-default navbar-right" href="auth/logout">Log Out</a>

            @unless(URL::current()== 'http://group4.app/admin')
                <a class="btn btn-default navbar-left" href="{{action('PublicController@main')}}" role="button">&raquo;Main Page </a>
                <a class="btn btn-default navbar-header" href="{{action('AdminController@index')}}" role="button">Admin Home&raquo; </a>
             @endunless
            @if(URL::current()== 'http://group4.app/admin')
                <a class="btn btn-default navbar-left" href="{{action('PublicController@main')}}" role="button">&raquo;Main Page </a>
            @endif
        @endif
    </div>

</nav>


