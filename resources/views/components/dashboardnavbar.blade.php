<nav class="navbar-bg">
    <div class="logo">
        <img src="\images\rectangular_light.png"  alt="">
    </div>
        <div><form action="#" method="post" class="display-f">
            @csrf
            <input type="text" name="input_search" id="input_search" class="mr-2 font-md pl-1 br-sm" placeholder="Search here">
            <button class="bg-secondary-light-4 bg-hover-secondary-light-1 br-lg p-1" type="submit" value="search"><img src="/images/magnifier.svg" alt="search_lupe"></button>
            </form>
        </div>
        <ul class="display-f">
            <li class="ml-1">
                <button id="button_user" class="btn-bg-secondary-light-2 font-lg pb-1 pl-2 pt-1 br-xs o-80">{{$user}}<img src="/images/chevron-down.svg" alt="icon" class="ml-1 mr-1"> </button>
            {{-- add dropdown element // show profile and logout --}}
            </li>
        </ul> 
</nav>