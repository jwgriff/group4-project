<?php
/**
 * Created by PhpStorm.
 * User: weford
 * Date: 11/8/2015
 * Time: 8:46 AM
 */
?>

<div class="container">
    <h2>Investor Details</h2>
    <p></p>
    <table id="listFounderTbl" class="table table table-hover table-bordered">
        <thead>
        <tr>
            <th class="hidden">Id</th>
            <th>fname</th>
            <th>lname</th>
            <th>profile_name</th>
            <th>street</th>
            <th>city</th>
            <th>state</th>
            <th>zip</th>
            <th>phone</th>
            <th>invst_objective</th>
            <th>invst_amount_total</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        {{--  @foreach ($investor as $fdr) --}}
        <tr>
            <td class="hidden">{{ $investor->id }}</td>
            <td>{{ $investor->fname }}</td>
            <td>{{ $investor->lname }}</td>
            <td>{{ $investor->profile_name }}</td>
            <td>{{ $investor->street }}</td>
            <td>{{ $investor->city }}</td>
            <td>{{ $investor->state }}</td>
            <td>{{ $investor->zip }}</td>
            <td>{{ $investor->phone }}</td>
            <td>{{ $investor->invst_objective }}</td>
            <td>{{ $investor->invst_amount_total }}</td>
            <!--td><a class="btn btn-default" id="listSongBtn">List Songs</a></td-->
            <td><a class="btn btn-default" id="editBtn" href='admin/edit/investor/{!! $investor->id !!}'>Edit</a></td>
            <td><a class="btn btn-default" id="deleteBtn"  href='admin/edit/investor/{!! $investor->id !!}'>Delete</a></td>
        </tr>
        {{--  @endforeach --}}
        </tbody>
    </table>
    <!--td><a class="btn btn-default left" id="addAlbumBtn"  href='/add'>Add Album</a></td-->
</div>