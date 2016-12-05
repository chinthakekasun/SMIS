@extends('layout.master2')

@section('content')

@inject('notices', 'App\Http\Controllers\RequestController')
@inject('applications', 'App\Http\Controllers\ApplicationController')
@inject('entryforms', 'App\Http\Controllers\EntryformController' )
@inject('grounds', 'App\Http\Controllers\GroundController' )
    <div class="well span8" style="min-height: 300px">
    <!-- <link rel="stylesheet" type="text/css" href="CreativeButtons/css/default.css"> -->
        <div>
            <h1>Director of Physical Education</h1> 
        </div>

        <div class="main clearfix">
                <nav id="menu" class="navv"><button type="button" id="menutoggle" class="navtoogle" aria-hidden="true"><i aria-hidden="true" class="icon-menu"> </i> Menu</button>                   
                    <ul>
                        <li>
                            <a href="{{URL('/profile')}}">
                                <span class="icon">
                                    <i aria-hidden="true" class="fa fa-user"></i>
                                </span>
                                <span>Profile</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="icon"> 
                                    <i aria-hidden="true" class="fa fa-calendar"></i>
                                </span>
                                <span>Schedule</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{URL('notice')}}">
                                <span class="icon">
                                    <i aria-hidden="true" class="fa fa-file-text"></i>
                                </span>
                                <span>Notices</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{URL('upcoming')}}">
                                <span class="icon">
                                    <i aria-hidden="true" class="fa fa-calendar-check-o"></i>
                                </span>
                                <span>Events</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{URL('manage')}}">
                                <span class="icon">
                                    <i aria-hidden="true" class="fa fa-users"></i>
                                </span>
                                <span>Manage Users
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{URL('requests')}}">
                                <span class="icon">
                                    <i aria-hidden="true" class="fa fa-envelope"></i>
                                </span>
                                <span>Requests
                                    @if($notices->show()+$entryforms->show()+$grounds->show() !== 0)
                                            <span class="label label-danger">
                                                {{$notices->show()+$entryforms->show()+$grounds->show()}}
                                            </span>
                                        @endif</span>
                            </a>
                        </li>

                    </ul>
                </nav>
            </div>

    </div>
@endsection