@extends('layout.master2')

@section('content')
@inject('notices', 'App\Http\Controllers\RequestController')
@inject('applications', 'App\Http\Controllers\ApplicationController')
@inject('entryforms', 'App\Http\Controllers\EntryformController' )
    <div class="well span8" style="min-height: 300px">
        <div>
            <h1>Instructor</h1> 
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
                            <a href="{{URL('mysports')}}">
                                <span class="icon">
                                    <i aria-hidden="true" class="fa fa-futbol-o"></i>
                                </span>
                                <span>Team players
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{URL('applied')}}">
                                <span class="icon">
                                    <i aria-hidden="true" class="fa fa-envelope"></i>
                                </span>
                                <span>Applications
                                    @if($applications->show() !== 0)
                                            <span class="label label-danger">
                                                {{$applications->show()}}
                                            </span>
                                        @endif</span>
                            </a>
                        </li>

                    </ul>
                </nav>
            </div>
    </div>
@endsection