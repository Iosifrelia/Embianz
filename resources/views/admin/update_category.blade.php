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
    <h1 id="title" class="mt-4 talign-c font-xl ls-1 text-secondary">{{ __('Edit Category') }}</h1>
    <div class="row talign-c mt-1">
        <div class="col-12-xs col-12-sm col-12-xl">
            <p>salut</p>
        </div>
        
       
    </div>
    
</section>
{{-- page content end --}}
<x-dashboardscript />
<x-dashboardfooter />