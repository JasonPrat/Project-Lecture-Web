<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @extends('layout.partials.head')
      <body>
            
                @include('layout.partials.nav')
            </aside>
            @yield('content')

            @extends('layout.partials.footer')
      </body>
</html>
