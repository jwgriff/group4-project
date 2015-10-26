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
            <a class="navbar-brand" href="#"><h1>Admin Portal</h1></a>
        </div>
    </div>
    <div class="container">
        @if(Auth::check())
            <h3>Welcome!  <strong>{{Auth::user()->name}}</strong> </h3><br>
            <a href="auth/logout">Log Out</a>
        @endif
    </div>

</nav>


