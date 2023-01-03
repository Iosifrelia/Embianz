{{--                   Modals           --}}
{{-- ////////////////////////////////// --}}
{{-- Modal User --}}
<div id="modal-user" class="modal-user bg-white-dark-2">
    <div class="content-user">
        <div>
            <span onclick="document.getElementById('modal-user').style.display='none'"
                class="exit text-hover-secondary-dark-5 float-r">&times;</span>
            <ul class="pt-5 mb-2 ">
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
                            <li class="p-1 mb-1 font-xl">
                                <button class="reset bg-bg text-secondary float-r p-1" type="reset">Clear
                                    form</button>
                            </li>
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
                            <li class="p-1 font-xl"><input type="submit" class="submit" value="Add" name="submit">
                            </li>
                        </ul>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>

{{-- Edit Category modal --}}
<div id="editmodal-category" class="modal">
    <div class="content-category o-50">
        <div>
            <span onclick="document.getElementById('editmodal-category').style.display='none'"
                class="exit text-hover-secondary float-r">&times;</span>
            <ul class="pt-1 mb-2">
                <li class="p-1 pt-1 font-xl">
                    <h1 id="title" class="modal-title talign-c font-xl ls-1 text-bg">{{ __('Add new category') }}
                    </h1>
                </li>
                <li class="p-1 font-xl">
                    <form id="editcategory_form" action="{{ url('/category_update') }}" method="POST">
                        @csrf
                        <ul class="pt-1 mb-2">
                            <li class="p-1 mb-1 font-xl">
                                <button class="reset bg-bg text-secondary float-r p-1" type="reset">Clear
                                    form</button>
                            </li>
                            <li class="p-1 pt-3 font-xl">
                                <input type="text" name="categoryname" id="category_name" placeholder="Category name"
                                    required>
                            </li>
                            <li class="p-1 font-xl">
                                <input type="text" name="category_parrent" id="category_parrent"
                                    placeholder="Parent catagory name" required>
                            </li>
                            <li class="p-1 font-xl">
                                <input type="text" id="category_long_description" name="category_long_description"
                                    placeholder="Long description catagory name" required>
                            </li>
                            <li class="p-1 font-xl">
                                <input type="text" name="category_short_description"
                                    id="category_short_description" placeholder="Short description catagory name"
                                    required>
                            </li>
                            <li class="p-1 font-xl">
                                <input type="number" name="category_sequence" id="category_sequence"
                                    placeholder="Catagory sequence" required>
                            </li>
                            <li class="p-1 font-xl">
                                <div class="element">
                                    <label class="font-lg text-secondary ls-1" for="start_date">Start Date -</label>
                                    <input class="ml-1" type="date" id="category_start_date"
                                        name="category_start_date" required>
                                </div>
                            </li>
                            <li class="p-1 font-xl talign-c">
                                <div class="element">
                                    <label class="font-lg text-secondary ls-1" for="end_date">End Date -</label>
                                    <input class="ml-1" type="date" id="category_end_date"
                                        name="category_end_date" required>
                                    <input type="hidden" name="hidden_id" id="hidden_id">
                                </div>
                            </li>
                            <li class="p-1 font-xl">
                                <input type="submit" class="submit bg-hover-bg-light-2" value="Update"
                                    name="submit">
                            </li>
                        </ul>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>

{{-- Show category details --}}
<div id="show-category" class="modal">
    <div class="content-category o-50">
        <div>
            <span onclick="document.getElementById('show-category').style.display='none'"
                class="exit text-hover-secondary float-r">&times;</span>
            <ul class="pt-1 mb-2">
                <li class="p-1 pt-1 font-xl">
                    <h1 id="title" class="modal-title talign-c font-xl ls-1 text-bg">{{ __('Add new category') }}
                    </h1>
                </li>
                <li class="p-1 font-xl">
                    <form id="editcategory_form" action="{{ url('/category_update') }}" method="POST">
                        @csrf
                        <ul class="pt-1 mb-2">
                            <li class="p-1 mb-1 font-xl">
                                <button class="reset bg-bg text-secondary float-r p-1" type="reset">Clear
                                    form</button>
                            </li>
                            <li class="p-1 pt-3 font-xl">
                                <input type="text" name="categoryname" id="category_name" placeholder="Category name"
                                    required>
                            </li>
                            <li class="p-1 font-xl">
                                <input type="text" name="category_parrent" id="category_parrent"
                                    placeholder="Parent catagory name" required>
                            </li>
                            <li class="p-1 font-xl">
                                <input type="text" id="category_long_description" name="category_long_description"
                                    placeholder="Long description catagory name" required>
                            </li>
                            <li class="p-1 font-xl">
                                <input type="text" name="category_short_description"
                                    id="category_short_description" placeholder="Short description catagory name"
                                    required>
                            </li>
                            <li class="p-1 font-xl">
                                <input type="number" name="category_sequence" id="category_sequence"
                                    placeholder="Catagory sequence" required>
                            </li>
                            <li class="p-1 font-xl">
                                <div class="element">
                                    <label class="font-lg text-secondary ls-1" for="start_date">Start Date -</label>
                                    <input class="ml-1" type="date" id="category_start_date"
                                        name="category_start_date" required>
                                </div>
                            </li>
                            <li class="p-1 font-xl talign-c">
                                <div class="element">
                                    <label class="font-lg text-secondary ls-1" for="end_date">End Date -</label>
                                    <input class="ml-1" type="date" id="category_end_date"
                                        name="category_end_date" required>
                                    <input type="hidden" name="hidden_id" id="hidden_id">
                                </div>
                            </li>
                            <li class="p-1 font-xl">
                                <input type="submit" class="submit bg-hover-bg-light-2" value="Update"
                                    name="submit">
                            </li>
                        </ul>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>

{{-- Confirm Delete Category modal --}}
<div id="confirmmodal-category" class="modal">
    <div class="content-category">
        <div>
            <span onclick="document.getElementById('confirmmodal-category').style.display='none'"
                class="exit text-hover-secondary float-r">&times;</span>
            <ul class="pt-1 mb-2">
                <li class="p-1 pt-1 font-xl">
                    <h1 class="modal-title talign-c font-xl ls-1 text-secondary">
                        {{ __('Are you sure to delete this Category ?') }}
                    </h1>
                </li>
                <li class="p-1 font-xl">
                    <form id="deletecategory_form" action="{{ url('/delete_category') }}" method="POST">
                        @csrf
                        <ul class="pt-1 mb-2">
                            <li class="p-1 font-xl">
                                <input type="hidden" name="hiddenid" id="hiddenid">
                                <input type="submit" class="submit cursor-p bg-hover-bg-light-2" value="Confirm"
                                    name="submit">
                                <input onclick="document.getElementById('confirmmodal-category').style.display='none'"
                                    class="submit cursor-p talign-c bg-hover-bg-light-2" value="Cancel">
                            </li>
                        </ul>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>
