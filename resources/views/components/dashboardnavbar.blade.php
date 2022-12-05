<nav class="navbar-bg pos-fix">
    <div class="logo ml-0">
        <img src="/images/dashboard/navbar/rectangular_light.png"  id="full_logo" alt="icon large">
        <img src="/images/dashboard/navbar/logoe.png" id="min_logo" alt="icon ">
    </div>
        <div><form action="#" method="post" class="display-f" x-data>
            @csrf
            <input type="text" name="input_search" id="input_search" class="mr-2 font-md p-1 pl-3 bg-sidebar-bg-light-1 br-sm" placeholder="Search here...">
            {{-- <button class="bg-secondary-light-4 bg-hover-secondary-light-1 br-lg p-1" type="submit" value="search"><img src="/images/magnifier.svg" alt="search_lupe" class="p-0"></button> --}}
            </form>
        </div>
        <ul class="dropdown">
            <li class="ml-1 mr-2">
                <button id="button_user" class="btn-secondary font-lg pb-1 pl-2 pt-1 br-xs o-80">{{$user}}<img src="/images/dashboard/navbar/chevron-down.svg" alt="icon" class="ml-1"></button>
                <button id="button_user_small" class="btn-secondary font-lg  br-xs o-80"><img src="/images/dashboard/navbar/chevron-down.svg" alt="icon"></button>

            {{--dropdown element // show profile and logout --}}
            <div class="dropdown-content bg-secondary-light-4 font-lg">
                <a class="p-1" href="{{ route('profile.show') }}">{{__('Profile')}} <img class="float-r" src="/images/dashboard/navbar/user.svg" alt="user_icon"></a>
                <a class="p-1" href="{{ route('logout') }}">{{__('Logout')}} <img class="float-r" src="/images/dashboard/navbar/exit.svg" alt="user_icon"></a>
            </div>
            {{-- end dropdown --}}
            </li>
        </ul> 
</nav>