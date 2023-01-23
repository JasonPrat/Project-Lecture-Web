<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @extends('layout.partials.head')
      <body>
            @auth
                  @if(Auth::user()->role=='admin')
                        @include('layout.partials.nav')
                  @elseif(Auth::user()->role=='member')
                        @include('layout.partials.mnav')
                  @endif
            @else
                  @include('layout.partials.gnav')
            @endauth
            
            @yield('content')

            @extends('layout.partials.footer')
      </body>
</html>
