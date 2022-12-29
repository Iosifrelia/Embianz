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
    <h1 id="title" class="mt-1 talign-c font-xl ls-1 text-secondary">{{ __('All categories') }}</h1>
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
    </div>
    <div class="row talign-c mt-1">
        <div class="col-12-xs col-12-sm col-12-xl m-2 p-1 text-secondary">
            {{-- Table Category --}}
            <table class="category-table mb-1 mt-3 p-2" id="category_table">
                <thead class="pb-1">
                <tr>
                    <th>Catagory Id</th>
                    <th>Catagory Name</th>
                    <th>Catagory Parrent</th>
                    <th>Catagory Short Description</th>
                    <th>Action</th>
                </tr>
            </thead>
                <tbody class="pt-1"></tbody>
            </table>
            {{--End Table Category --}}
            
        </div>
       
    </div>
    
</section>
{{-- page content end --}}
<x-dashboardscript />
<x-dashboardfooter />