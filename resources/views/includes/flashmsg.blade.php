<?php
/**
 * Created by PhpStorm.
 * User: weford
 * Date: 11/5/2015
 * Time: 4:32 PM
 */
?>

@if (Session::has('flash_notification.message'))
<div id="alert" class="alert alert-{{ Session::get('flash_notification.level') }}">
    <!--button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button-->

    {{ Session::get('flash_notification.message') }}
</div>
@endif
