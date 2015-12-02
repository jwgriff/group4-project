<?php
/**
 * Created by PhpStorm.
 * User: weford
 * Date: 11/8/2015
 * Time: 8:45 AM
 */
?>
<div class="container">
    <h2>User Details</h2>
    <p></p>
    <table id="listFounderTbl" class="table table table-hover table-bordered">
        <thead>
        <tr>
            <th class="hidden">Id</th>
            <th>name</th>
            <th>email</th>
            <th>password</th>
            <th>is_admin</th>
            <th>is_founder</th>
            <th>is_investor</th>
            <th>is_active</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        {{--  @foreach ($founder as $fdr) --}}
        <tr>
            <td class="hidden">{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->password }}</td>
            <td>{{ $user->is_admin }}</td>
            <td>{{ $user->is_founder }}</td>
            <td>{{ $user->is_investor }}</td>
            <td>{{ $user->is_active }}</td>
            <!--td><a class="btn btn-default" id="listSongBtn">List Songs</a></td-->
            <td><a class="btn btn-default" id="editBtn" href='admin/user/edit/{!! $user->id !!}'>Edit</a></td>
            <td><a class="btn btn-default" id="deleteBtn"  href='admin/user/delete/{!! $user->id !!}'>Delete</a></td>
        </tr>
        {{--  @endforeach --}}
        </tbody>
    </table>
    <!--td><a class="btn btn-default left" id="addAlbumBtn"  href='/add'>Add Album</a></td-->
</div>