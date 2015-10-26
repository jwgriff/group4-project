<?php
/**
 * Created by PhpStorm.
 * User: weford
 * Date: 10/15/2015
 * Time: 9:39 PM
 */
?>
@extends('layouts.admin')
@section('content')
    <div id="tabs">
        <ul class="nav nav-tabs" class="container-fluid">
            <li id="admins" role="presentation"><a href="#admins_table" data-toggle="tab">Admins</a></li>
            <li id="campains" role="presentation"><a href="#campains_table" data-toggle="tab">Campains</a></li>
            <li id="founders"role="presentation"><a href="#founders_table">Fonders</a></li>
            <li id="investors" role="presentation"><a href="#investors_table" data-toggle="tab">Investors</a></li>
            <li id="settings" role="presentation"><a href="#settings_table" data-toggle="tab">Settings</a></li>
        </ul>
    </div>
    <div class="tab-content" class="container-fluid">
        <div id="campains_table" class="tab-pane">
            <h3>Campain</h3>
            <p>Some Campain content.</p>
        </div>
        <div id="founders_table" class="tab-pane">
            <h3>Founders</h3>
            <p>Some founders content.</p>
        </div>
        <div id="investors_table" class="tab-pane">
            <h3>Inverstor</h3>
            <p>Some investors content.</p>
        </div>
        <div id="admins_table" class="tab-pane" width="80%">
            <table id="usersTable" class="display" width="80%">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>email</th>
                        <th>is_admin</th>
                        <th>is_founder</th>
                        <th>is_investor</th>
                        <th>created_at</th>
                        <th>updated_at</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>email</th>
                        <th>is_admin</th>
                        <th>is_founder</th>
                        <th>is_investor</th>
                        <th>created_at</th>
                        <th>updated_at</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <div id="settings_table" class="tab-pane">
            <h3>Settings</h3>
            <p>Some settings content.</p>
        </div>
    </div>
    <script>
        init();
    </script>

@stop