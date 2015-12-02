<?php
/**
 * Created by PhpStorm.
 * User: weford
 * Date: 11/8/2015
 * Time: 8:46 AM
 */
?>

<div class="container">
    <h2>Admin Details</h2>
    <p></p>
    <table id="listFounderTbl" class="table table table-hover table-bordered">
        <thead>
        <tr>
            <th class="hidden">Id</th>
            <th>fname</th>
            <th>lname</th>
            <th>street</th>
            <th>city</th>
            <th>state</th>
            <th>zip</th>
            <th>phone</th>
            <th>security_level</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        {{--  @foreach ($investor as $fdr) --}}
        <tr>
            <td class="hidden">{{ $admin->id }}</td>
            <td>{{ $admin->fname }}</td>
            <td>{{ $admin->lname }}</td>
            <td>{{ $admin->home_street }}</td>
            <td>{{ $admin->home_city }}</td>
            <td>{{ $admin->home_state }}</td>
            <td>{{ $admin->home_zip }}</td>
            <td>{{ $admin->home_phone }}</td>
            <td>{{ $admin->security_level }}</td>
            <!--td><a class="btn btn-default" id="listSongBtn">List Songs</a></td-->
            <td><a class="btn btn-default" id="editBtn" href='admin/edit/admin/{!! $admin->id !!}'>Edit</a></td>
            <td><a class="btn btn-default" id="deleteBtn"  href='admin/edit/admin/{!! $admin->id !!}'>Delete</a></td>
        </tr>
        {{--  @endforeach --}}
        </tbody>
    </table>
    <!--td><a class="btn btn-default left" id="addAlbumBtn"  href='/add'>Add Album</a></td-->
</div>