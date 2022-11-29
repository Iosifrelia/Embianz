<nav class="navbar-bg pos-fix">
    <div class="logo">
        <img src="\images\rectangular_light.png"  alt="">
    </div>
        <div><form action="#" method="post" class="display-f">
            @csrf
            <input type="text" name="input_search" id="input_search" class="mr-2 font-md p-1 br-sm" placeholder="Search here">
            <button class="bg-secondary-light-4 bg-hover-secondary-light-1 br-lg p-1" type="submit" value="search"><img src="/images/magnifier.svg" alt="search_lupe" class="p-0"></button>
            </form>
        </div>
        <ul class="dropdown">
            <li class="ml-1 ">
                <button id="button_user" class="btn-secondary font-lg pb-1 pl-2 pt-1 br-xs o-80">{{$user}}<img src="/images/chevron-down.svg" alt="icon" class="ml-1"></button>
            {{-- add dropdown element // show profile and logout --}}
            <div class="dropdown-content bg-secondary-light-4 font-lg">
                <a class="p-1" href="#">{{__('Profile')}}</a>
                <a class="p-1" href="#">{{__('Logout')}}</a>
            </div>
            </li>
        </ul> 
</nav>