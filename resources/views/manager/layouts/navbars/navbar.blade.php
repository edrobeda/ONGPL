@auth()
    @include('manager.layouts.navbars.navs.auth')
@endauth
    
@guest()
    @include('manager.layouts.navbars.navs.guest')
@endguest