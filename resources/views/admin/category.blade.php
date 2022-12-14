<x-dashboardheader />
<x-dashboardnavbar />
<x-dashboardsidebar />
<x-dashboardmodals />
{{-- Page content start --}}
<section class="section-container bg-sidebar-bg-light-1">
    {{-- Display session message --}}
    @if (session()->has('message'))
        <div class="bg-secondary pos-rel ls-1 p-1" id="alertevent">
            {{ session()->get('message') }}
            <button type="button" onclick="document.getElementById('alertevent').style.display='none'" class="exit font-lg bg-secondary float-r" data-bs-dismiss="alert" aria-hidden="true">x</button>
        </div>
    @endif
    {{-- End Section session message --}}
    <h1 id="title" class="mt-4 talign-c font-xl ls-1 text-secondary">{{ __('Categories') }}</h1>
    <div class="row talign-c mt-1">
        <div class="col-12-xs col-12-sm col-12-xl">
            <div class="add-category">
                <button onclick="document.getElementById('modal-category').style.display='block'"
                    class="bg-sidebar-bg-light-1 mt-1"><svg class="talign-c bg-sidebar-bg-light-1" version="1.1"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20"
                        height="20" viewBox="0 0 20 20">
                        <path fill="#bafcdd"
                            d="M17.854 5.646l-4.5-4.5c-0.094-0.094-0.221-0.146-0.354-0.146h-9.5c-0.827 0-1.5 0.673-1.5 1.5v16c0 0.827 0.673 1.5 1.5 1.5h13c0.827 0 1.5-0.673 1.5-1.5v-12.5c0-0.133-0.053-0.26-0.146-0.354zM16.793 6h-3.293c-0.276 0-0.5-0.224-0.5-0.5v-3.293l3.793 3.793zM16.5 19h-13c-0.276 0-0.5-0.224-0.5-0.5v-16c0-0.276 0.224-0.5 0.5-0.5h8.5v3.5c0 0.827 0.673 1.5 1.5 1.5h3.5v11.5c0 0.276-0.224 0.5-0.5 0.5z">
                        </path>
                        <path fill="#bafcdd"
                            d="M11.5 13h-2.5v-2.5c0-0.276-0.224-0.5-0.5-0.5s-0.5 0.224-0.5 0.5v2.5h-2.5c-0.276 0-0.5 0.224-0.5 0.5s0.224 0.5 0.5 0.5h2.5v2.5c0 0.276 0.224 0.5 0.5 0.5s0.5-0.224 0.5-0.5v-2.5h2.5c0.276 0 0.5-0.224 0.5-0.5s-0.224-0.5-0.5-0.5z">
                        </path>
                    </svg></button>
            </div>
        </div>
        <div class="col-12-xs col-12-sm col-12-xl">
            {{-- Table Category --}}
            <table class="category-table" id="category_table">
                <tr>
                    <td>Catagory Name</td>
                    <td>Catagory Parrent</td>
                    <td>Catagory Long Description</td>
                    <td>Catagory Short Description</td>
                    <td>Catagory Sequence</td>
                    <td>Catagory Start Date</td>
                    <td>Catagory End Date</td>
                    <td>Action</td>
                </tr>
                @foreach($data as $category)
                <tr>
                    <td>{{$category->name}}</td>
                    <td>{{$category->parrent}}</td>
                    <td>{{$category->long_description}}</td>
                    <td>{{$category->short_description}}</td>
                    <td>{{$category->sequence}}</td>
                    <td>{{$category->start_date}}</td>
                    <td>{{$category->end_date}}</td>
                    <td>Delete or Edit</td>
                </tr>
                @endforeach
            </table>
            {{--End Table Category --}}
            {{--Show a lot off items on diferent pages--}}
            {{$data->links()}}
        </div>
       
    </div>
    
</section>
{{-- page content end --}}
<x-dashboardscript />
<x-dashboardfooter />