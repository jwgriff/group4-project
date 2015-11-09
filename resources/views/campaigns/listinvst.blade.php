<?php
/**
 * Created by PhpStorm.
 * User: weford
 * Date: 11/8/2015
 * Time: 8:48 AM
 */
?>
<div class="container">
    <h2>{!! $userType !!} Campaigns</h2>
    <p></p>
    <table id="listFounderTbl" class="table table table-hover table-bordered">
        <thead>
        <tr>
            <th class="hidden">Id</th>
            <th>campaign_name</th>
            <th>description</th>
            <th>start_date</th>
            <th>end_date</th>
            <th>target_goal</th>
            <th>target_current</th>
            <th>acct_number</th>
            <th>is_active</th>
            <th>invst_label</th>
            <th>invst_amount</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($cmpginvt as $cmpg)
            <tr>
                <td class="hidden">{{ $cmpg->id }}</td>
                <td>{{ $cmpg->campaign_name }}</td>
                <td>{{ $cmpg->description }}</td>
                <td>{{ $cmpg->start_date }}</td>
                <td>{{ $cmpg->end_date }}</td>
                <td>{{ $cmpg->target_goal }}</td>
                <td>{{ $cmpg->target_current }}</td>
                <td>{{ $cmpg->acct_number }}</td>
                <td>{{ $cmpg->is_active }}</td>
                <td>{{ $cmpg->pivot->invst_label }}</td>
                <td>{{ $cmpg->pivot->invst_amount }}</td>
                <!--td><a class="btn btn-default" id="listSongBtn">List Songs</a></td-->
                <td><a class="btn btn-default" id="editBtn" href='admin/edit/campaign/{!! $cmpg->id !!}'>Edit</a></td>
                <td><a class="btn btn-default" id="deleteBtn"  href='admin/delete/campaign/{!! $cmpg->id !!}'>Delete</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <!--td><a class="btn btn-default left" id="addAlbumBtn"  href='/add'>Add Album</a></td-->
</div>