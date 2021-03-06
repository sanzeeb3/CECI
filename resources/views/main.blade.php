<!DOCTYPE html>
<html lang="en">
<head>
<title>CECI</title>
<meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">

<script src="{{asset('public/jquery.min.js')}}"></script>
<script src="{{asset('public/jquery.validate.min.js')}}"></script>
<link href="{{asset('public/bootstrap/css/bootstrap.css')}}" rel="stylesheet">
<script src="{{asset('public/bootstrap/js/bootstrap.js')}}"></script>
<link href="{{asset('public/sweetalert.css')}}" rel="stylesheet">
<script src="{{asset('public/sweetalert.js')}}"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.12/datatables.min.css"/>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.12/datatables.min.js"></script>
<link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
<script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>

</head>
<style>
.report td
{
    width:30%;
}
</style>
<body>
<div class="container-fluid" style="background-color:#F44336;color:#fff;height:100px;">
  <h1>CECI Report</h1>
</div>

<nav class="navbar navbar-inverse">
      <ul class="nav navbar-nav">

        
        @if (Auth::guest())
        
            <li class="active"><a href="{{url('/')}}"><span class="glyphicon glyphicon-home"></span> Home</a></li>
            <li><a href="{{ url('/register') }}">Volunteer Form</a></li>
            <li><a href="{{ url('/login') }}">Login</a></li>

        @else

            @if(auth()->user()->is_admin==1)
                 <li class="active"><a href="{{url('/admin')}}"><span class="glyphicon glyphicon-home"></span> Home</a></li>
            
            @else
                <li class="active"><a href="{{url('/')}}"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                <li><a href="{{ url('/reports') }}">Month Report</a></li>
            @endif

                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">

                   {{ Auth::user()->name }} <span class="caret"></span>
                </a>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{ url('/logout') }}"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                            </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                         </li>
                    </ul>
            </li>
        @endif
</nav>


@yield('content')

</body>
</html>
