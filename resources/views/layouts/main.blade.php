@extends('layouts.app')

@section('title') @yield('title') @stop
@section('content')

<div class="container">
    <div class="row">
    <div class="col-md-2 col-md-offset-1">
        <nav class="navbar navbar-default sidebar" role="navigation">
    <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#left-menus">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>      
    </div>
    <div class="collapse navbar-collapse" id="left-menus">
      <ul class="nav navbar-nav">
        {{--<li {!! (Route::currentRouteName()=='home')?'class="active"':'' !!}}><a href="#">Home</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuarios </span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a>
          <ul class="dropdown-menu forAnimate" role="menu">
            <li><a href="{{URL::to('createusuario')}}">Crear</a></li>
            <li><a href="#">Modificar</a></li>
            <li><a href="#">Reportar</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">Informes</a></li>
          </ul>
        </li>--}}        
        <li {!! (Route::currentRouteName()=='addEvent')?'class="active"':'' !!}}><a href="{{url('newevent')}}">Add Event{{--<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-th-list"></span>--}}</a></li>        
        <li {!! (Route::currentRouteName()=='events' || Route::currentRouteName()=='singleEvent' || Route::currentRouteName()=='editEvent')?'class="active"':'' !!}}><a href="{{ route('events') }}">My Events{{--<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-tags"></span>--}}</a></li>
      </ul>
    </div>
  </div>
</nav>
    </div>
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">@yield('title')</div>

                <div class="panel-body">
                    @yield('body')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
