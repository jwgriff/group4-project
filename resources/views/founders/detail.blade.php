<?php
/**
 * Created by PhpStorm.
 * User: weford
 * Date: 11/8/2015
 * Time: 8:46 AM
 */
?>

<div class="container">
    <h2>Founder Details</h2>
    <p></p>
    <table id="listFounderTbl" class="table table table-hover table-bordered">
        <thead>
        <tr>
            <th class="hidden">Id</th>
            <th>fname</th>
            <th>lname</th>
            <th>company_name</th>
            <th>company_street</th>
            <th>company_city</th>
            <th>company_state</th>
            <th>company_zip</th>
            <th>company_phone</th>
            <th>company_industry</th>
            <th>company_mktcap</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        {{--  @foreach ($founder as $fdr) --}}
        <tr>
            <td class="hidden">{{ $founder->id }}</td>
            <td>{{ $founder->fname }}</td>
            <td>{{ $founder->lname }}</td>
            <td>{{ $founder->company_name }}</td>
            <td>{{ $founder->company_street }}</td>
            <td>{{ $founder->company_city }}</td>
            <td>{{ $founder->company_state }}</td>
            <td>{{ $founder->company_zip }}</td>
            <td>{{ $founder->company_phone }}</td>
            <td>{{ $founder->company_industry }}</td>
            <td>{{ $founder->company_mktcap }}</td>
            <!--td><a class="btn btn-default" id="listSongBtn">List Songs</a></td-->
            <td><a class="btn btn-default" id="editBtn" href='admin/edit/founder/{!! $founder->id !!}'>Edit</a></td>
            <td><a class="btn btn-default" id="deleteBtn"  href='admin/delete/founder/{!! $founder->id !!}'>Delete</a></td>
        </tr>
        {{--  @endforeach --}}
        </tbody>
    </table>
    <!--td><a class="btn btn-default left" id="addAlbumBtn"  href='/add'>Add Album</a></td-->
</div>