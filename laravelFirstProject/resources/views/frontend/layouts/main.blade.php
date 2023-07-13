@include('frontend.layouts.header')

@if(Route::currentRouteName() != 'index')
    @include('frontend.layouts.breadcrumbs')
@endif

@yield('main-container')
@include('frontend.layouts.footer')
