<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Coffee Shop</title>
	<link rel="icon" href="{{ asset('client/images/icon.png') }}">
	<link rel="stylesheet" href="{{ asset('client/css/bootstrap.min.css') }}">
	{{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
	<link rel="stylesheet" href="{{ asset('client/css/index.css') }}">
</head>
<body>
	<div class="container">
		<div class="header">
			<div class="header-left col-md-6 col-sm-12">
				<img src="{{ asset('client/images/icon.png') }}" alt="">
				<h1>Coffee Shop</h1>
			</div>
			<div class="header-right col-md-6">
			  	<ul class="navbar-nav">
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @else
                    	<li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Cart') }} <span class="glyphicon glyphicon-shopping-cart"></span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            	<a class="dropdown-item" href="{{ route('editPass') }}">
		                            {{ __('Change password') }}
		                        </a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
			</div>
		</div>
		@include('client.layouts.navbar')	
		@yield('content')	
		<div class="footer">
			<h4>Thanks for visiting Coffee Shop!</h4>
		</div>
	</div>
	<script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('client/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('client/js/js/bootstrap.min.js') }}"></script>
</body>
</html>
