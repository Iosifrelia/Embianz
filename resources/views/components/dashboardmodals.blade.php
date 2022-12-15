{{-- Modals --}}
{{-- Modal User --}}
<div id="modal-user" class="modal-user bg-white-dark-2">
    <div class="content-user">
        <div>
            <span onclick="document.getElementById('modal-user').style.display='none'"
                class="exit text-hover-secondary-dark-5 float-r">&times;</span>
            <ul class="pt-5 mb-2">
                <li class="p-1 pt-5 font-xl"><a class="text-secondary text-hover-secondary-light-3"
                        href="{{ route('profile.show') }}">{{ __('Edit Profile') }}</a></li>
                <li class="p-1 font-xl"><a class="text-secondary text-hover-secondary-light-3"
                        href="{{ route('logout') }}">{{ __('Logout') }}</a></li>
            </ul>
        </div>
    </div>
</div>

{{-- Modal Add new Category --}}
<div id="modal-category" class="modal">
    <div class="content-category o-50">
        <div>
            <span onclick="document.getElementById('modal-category').style.display='none'"
                class="exit text-hover-secondary float-r">&times;</span>
            <ul class="pt-1 mb-2">
                <li class="p-1 pt-1 font-xl">
                    <h1 id="title" class="talign-c font-xl ls-1 text-bg">{{ __('Add new category') }}</h1>
                </li>
                <li class="p-1 font-xl">
                    <form action="{{ url('/add_category') }}" method="POST">
                        @csrf
                        <ul class="pt-1 mb-2">
                            <li class="p-1 pt-3 font-xl">
                                <input type="text" name="category" placeholder="Category name" required>
                            </li>
                            <li class="p-1 font-xl">
                                <input type="text" name="parrent" placeholder="Parent catagory name" required>
                            </li>
                            <li class="p-1 font-xl">
                                <input type="text" name="long_description"
                                    placeholder="Long description catagory name" required>
                            </li>
                            <li class="p-1 font-xl">
                                <input type="text" name="short_description"
                                    placeholder="Short description catagory name" required>
                            </li>
                            <li class="p-1 font-xl">
                                <input type="number" name="sequence" placeholder="Catagory sequence" required>
                            </li>
                            <li class="p-1 font-xl">
                                <div class="element">
                                    <label class="font-lg text-secondary ls-1" for="start_date">Start Date -</label>
                                    <input class="ml-1" type="date" id="start_date" name="start_date" required>
                                </div>
                            </li>
                            <li class="p-1 font-xl talign-c">
                                <div class="element">
                                    <label class="font-lg text-secondary ls-1" for="end_date">End Date -</label>
                                    <input class="ml-1" type="date" id="end_date" name="end_date" required>
                                </div>
                            </li>
                            <li class="p-1 font-xl"><input type="submit" class="submit" value="Add Catagory"
                                    name="submit"></li>
                        </ul>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>
