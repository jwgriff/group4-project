<?php
/**
 * Created by PhpStorm.
 * User: weford
 * Date: 10/9/2015
 * Time: 8:41 PM
 */
?>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><h1><b>GWU Crowdfunder</b></h1></a>
        </div>

        <div id="navbar" class="navbar-collapse collapse">
            @if(Auth::check())
                <h3>Welcome!  <strong>{{Auth::user()->name}}</strong> </h3><br>
                <a href="auth/logout">Log Out</a>
                {{--!! link_to('auth/logout',' Log Out') !!--}}
            @else
                <form class="navbar-form navbar-right" role="form" method="POST" action="{{ url('/auth/login') }}">
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <!--input type="text" placeholder="Email" class="form-control"-->
                        <input type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                        <!--input type="password" placeholder="Password" class="form-control"-->
                    </div>

                    <button type="submit" class="btn btn-success">Sign in</button>
                </form>
            @endif
        </div><!--/.navbar-collapse -->
        @if (count($errors) > 0)
            <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if(Session::has('message'))
            <div class="alert alert-info alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>Messages!</strong><br><br>
                <ul>
                   {{Session::get('message')}}
                </ul>
            </div>
        @endif

    </div>
</nav>


