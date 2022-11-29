<nav class="navbar-bg">
    <div class="logo">
        <img src="\images\rectangular_light.png"  alt="">
    </div>
        <div><form action="#" method="post">
            @csrf
            <input type="text" name="" id="" class="mr-2">
            <button class="bg-secondary-light-4 bg-hover-secondary-light-1 br-lg p-1" type="submit" value="search"><img src="/images/magnifier.svg" alt="search_lupe"></button>
            </form>
        </div>
        <ul class="display-f">
            <li class="ml-1">
                <button class="btn-white br-xs o-80">{{$user}}</button>
            
            </li>
        </ul> 
</nav>