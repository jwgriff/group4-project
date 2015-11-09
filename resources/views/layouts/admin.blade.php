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
        <script src="../js/admin.js"></script>
    </head>
    <body>
        <div>

            <header class="row">
                @include('includes.adminheader')
            </header>
            <!--div class="container"-->
                <div id="main" class="row">
                    @include('includes.flashmsg')
                    @include('errors.list')
                    @yield('content')
                </div>
            <!--/div-->

            <footer class="row">
                @include('includes.footer')
            </footer>

        </div>
    </body>
</html>