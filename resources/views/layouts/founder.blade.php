<?php
/**
 * Created by PhpStorm.
 * User: weford
 * Date: 10/9/2015
 * Time: 8:45 PM
 */
?>
<!doctype html>
<html>
    <head>
        @include('includes.head')
    </head>
    <body>
        <div class="container">

            <header class="row">
                @include('includes.founderheader')
            </header>

            <div id="main" class="row">
                @yield('content')
            </div>

            <footer class="row">
                @include('includes.footer')
            </footer>

        </div>
    </body>
</html>