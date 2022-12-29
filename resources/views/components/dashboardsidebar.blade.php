<div class="sidebar">
  <ul class="menu">
    <li class="list pt-1 pb-1 bg-hover-sidebar-bg-light-1 font-sm">
      <a href="{{url('redirect')}}" class="link pl-1">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20">
          <path fill="#000000" d="M8.5 20c-2.27 0-4.405-0.884-6.010-2.49s-2.49-3.74-2.49-6.010c0-2.27 0.884-4.405 2.49-6.010s3.74-2.49 6.010-2.49c0.276 0 0.5 0.224 0.5 0.5v7.5h7.5c0.276 0 0.5 0.224 0.5 0.5 0 2.27-0.884 4.405-2.49 6.010s-3.74 2.49-6.010 2.49zM8 4.016c-3.903 0.258-7 3.516-7 7.484 0 4.136 3.364 7.5 7.5 7.5 3.967 0 7.225-3.097 7.484-7h-7.484c-0.276 0-0.5-0.224-0.5-0.5v-7.484z"></path>
          <path fill="#000000" d="M18.5 10h-8c-0.276 0-0.5-0.224-0.5-0.5v-8c0-0.276 0.224-0.5 0.5-0.5 2.27 0 4.405 0.884 6.010 2.49s2.49 3.74 2.49 6.010c0 0.276-0.224 0.5-0.5 0.5zM11 9h6.984c-0.247-3.738-3.246-6.736-6.984-6.984v6.984z"></path>
          </svg>
        <span class="text-white text-hover-secondary ml-1 ls-1">{{__('Dashboard')}}</span>
      </a>
    </li>
    <li class="list pt-1 pb-1 bg-hover-sidebar-bg-light-1 font-sm">
      <a  class="dropdown-btn pl-1">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20">
          <path fill="#000000" d="M10 12c-0.066 0-0.132-0.013-0.194-0.039l-9.5-4c-0.185-0.078-0.306-0.26-0.306-0.461s0.121-0.383 0.306-0.461l9.5-4c0.124-0.052 0.264-0.052 0.388 0l9.5 4c0.185 0.078 0.306 0.26 0.306 0.461s-0.121 0.383-0.306 0.461l-9.5 4c-0.062 0.026-0.128 0.039-0.194 0.039zM1.788 7.5l8.212 3.457 8.212-3.457-8.212-3.457-8.212 3.457z"></path>
          <path fill="#000000" d="M10 15c-0.066 0-0.132-0.013-0.194-0.039l-9.5-4c-0.254-0.107-0.374-0.4-0.267-0.655s0.4-0.374 0.655-0.267l9.306 3.918 9.306-3.918c0.254-0.107 0.548 0.012 0.655 0.267s-0.012 0.548-0.267 0.655l-9.5 4c-0.062 0.026-0.128 0.039-0.194 0.039z"></path>
          <path fill="#000000" d="M10 18c-0.066 0-0.132-0.013-0.194-0.039l-9.5-4c-0.254-0.107-0.374-0.4-0.267-0.655s0.4-0.374 0.655-0.267l9.306 3.918 9.306-3.918c0.254-0.107 0.548 0.012 0.655 0.267s-0.012 0.548-0.267 0.655l-9.5 4c-0.062 0.026-0.128 0.039-0.194 0.039z"></path>
          </svg>
        <span class="text-white text-hover-secondary ml-1 ls-2">{{__('Categories')}}<i class="fa fa-caret-down ml-3"></i></span>
        </a>
        <div class="dropdown-container ml-1 text-white">
          <a class="pt-1 pr-2 pb-1 font-md" onclick="document.getElementById('modal-category').style.display='block'"">Add new Category</a>
          <a class="pt-1 pr-2 pb-1 font-md" href="{{url('category')}}">Show all Categories</a>

        </div>
    </li>
    <li class="list pt-1 pb-1 bg-hover-sidebar-bg-light-1 font-lg">
      <a class="dropdown-btn pl-1">
        
        <svg version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20">
          <path fill="#000000" d="M18 9.5v-1c0-0.078-0.018-0.154-0.053-0.224l-2-4c-0.085-0.169-0.258-0.276-0.447-0.276h-12c-0.189 0-0.363 0.107-0.447 0.276l-2 4c-0.035 0.069-0.053 0.146-0.053 0.224v1c0 0.816 0.393 1.542 1 1.999v6.501h-0.5c-0.276 0-0.5 0.224-0.5 0.5s0.224 0.5 0.5 0.5h16c0.276 0 0.5-0.224 0.5-0.5s-0.224-0.5-0.5-0.5h-0.5v-6.501c0.607-0.457 1-1.182 1-1.999zM11.5 11c-0.827 0-1.5-0.673-1.5-1.5v-0.5h3v0.5c0 0.827-0.673 1.5-1.5 1.5zM2 9.5v-0.5h3v0.5c0 0.827-0.673 1.5-1.5 1.5s-1.5-0.673-1.5-1.5zM9 5v3h-2.86l0.75-3h2.11zM12.11 5l0.75 3h-2.86v-3h2.11zM6 9h3v0.5c0 0.827-0.673 1.5-1.5 1.5s-1.5-0.673-1.5-1.5v-0.5zM14 9h3v0.5c0 0.827-0.673 1.5-1.5 1.5s-1.5-0.673-1.5-1.5v-0.5zM16.691 8h-2.801l-0.75-3h2.051l1.5 3zM3.809 5h2.051l-0.75 3h-2.801l1.5-3zM3 11.95c0.162 0.033 0.329 0.050 0.5 0.050 0.817 0 1.544-0.394 2-1.002 0.456 0.608 1.183 1.002 2 1.002s1.544-0.394 2-1.002c0.361 0.48 0.89 0.827 1.5 0.951v6.050h-8v-6.050zM16 18h-4v-6.050c0.61-0.124 1.139-0.471 1.5-0.951 0.456 0.608 1.183 1.002 2 1.002 0.171 0 0.338-0.017 0.5-0.050v6.050z"></path>
          <path fill="#000000" d="M14 14.5c0 0.276-0.224 0.5-0.5 0.5s-0.5-0.224-0.5-0.5c0-0.276 0.224-0.5 0.5-0.5s0.5 0.224 0.5 0.5z"></path>
          <path fill="#000000" d="M4.5 15c-0.128 0-0.256-0.049-0.354-0.146-0.195-0.195-0.195-0.512 0-0.707l1-1c0.195-0.195 0.512-0.195 0.707 0s0.195 0.512 0 0.707l-1 1c-0.098 0.098-0.226 0.146-0.354 0.146z"></path>
          <path fill="#000000" d="M5.5 17c-0.128 0-0.256-0.049-0.354-0.146-0.195-0.195-0.195-0.512 0-0.707l3-3c0.195-0.195 0.512-0.195 0.707 0s0.195 0.512 0 0.707l-3 3c-0.098 0.098-0.226 0.146-0.354 0.146z"></path>
          <path fill="#000000" d="M8.5 17c-0.128 0-0.256-0.049-0.354-0.146-0.195-0.195-0.195-0.512 0-0.707l1-1c0.195-0.195 0.512-0.195 0.707 0s0.195 0.512 0 0.707l-1 1c-0.098 0.098-0.226 0.146-0.354 0.146z"></path>
          </svg>
        
        <span class="text-white text-hover-secondary ml-1 ls-1">{{__('Products')}}<i class="fa fa-caret-down ml-4"></i></span>
      </a>
      <div class="dropdown-container ml-1 text-white">
        <a class="pt-1 pr-2 pb-1 font-md" href="#">Add new Product</a>
        <a class="pt-1 pr-2 pb-1 font-md" href="#">Show all Products</a>
       
        
      </div>
    </li>
    <li class="list pt-1 pb-1 bg-hover-sidebar-bg-light-1 font-lg">
      <a class="dropdown-btn pl-1">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20">
          <path fill="#000000" d="M8 20c-1.103 0-2-0.897-2-2s0.897-2 2-2 2 0.897 2 2-0.897 2-2 2zM8 17c-0.551 0-1 0.449-1 1s0.449 1 1 1 1-0.449 1-1-0.449-1-1-1z"></path>
          <path fill="#000000" d="M15 20c-1.103 0-2-0.897-2-2s0.897-2 2-2 2 0.897 2 2-0.897 2-2 2zM15 17c-0.551 0-1 0.449-1 1s0.449 1 1 1 1-0.449 1-1-0.449-1-1-1z"></path>
          <path fill="#000000" d="M17.539 4.467c-0.251-0.297-0.63-0.467-1.039-0.467h-12.243l-0.099-0.596c-0.131-0.787-0.859-1.404-1.658-1.404h-1c-0.276 0-0.5 0.224-0.5 0.5s0.224 0.5 0.5 0.5h1c0.307 0 0.621 0.266 0.671 0.569l1.671 10.027c0.131 0.787 0.859 1.404 1.658 1.404h10c0.276 0 0.5-0.224 0.5-0.5s-0.224-0.5-0.5-0.5h-10c-0.307 0-0.621-0.266-0.671-0.569l-0.247-1.48 9.965-0.867c0.775-0.067 1.483-0.721 1.611-1.489l0.671-4.027c0.067-0.404-0.038-0.806-0.289-1.102zM16.842 5.404l-0.671 4.027c-0.053 0.316-0.391 0.629-0.711 0.657l-10.043 0.873-0.994-5.962h12.076c0.117 0 0.215 0.040 0.276 0.113s0.085 0.176 0.066 0.291z"></path>
          </svg>
        <span class="text-white text-hover-secondary ml-1 ls-2">{{__('Orders')}}<i class="fa fa-caret-down ml-4 pl-1"></i></span>
      </a>
      <div class="dropdown-container ml-1 text-white">
        <a class="pt-1 pr-2 pb-1 font-md" href="#">Active Orders</a>
        <a class="pt-1 pr-2 pb-1 font-md" href="#">Show all Orders</a>
        
      </div>
    </li>
    <li class="list pt-1 pb-1 bg-hover-sidebar-bg-light-1 font-lg">
      <a class="dropdown-btn pl-1">
        <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><defs><style>.cls-1{fill:#141f38;}</style></defs><title>price-tag-2-outline</title><path class="cls-1" d="M215.8,512a76.1,76.1,0,0,1-54.17-22.44L22.44,350.37a76.59,76.59,0,0,1,0-108.32L242,22.44A76.11,76.11,0,0,1,296.2,0H435.4A76.69,76.69,0,0,1,512,76.6V215.79A76.09,76.09,0,0,1,489.56,270L270,489.56A76.09,76.09,0,0,1,215.8,512ZM296.2,25.6a50.69,50.69,0,0,0-36.06,14.94L40.54,260.14a51,51,0,0,0,0,72.13L179.73,471.46a51,51,0,0,0,72.13,0l219.6-219.61a50.68,50.68,0,0,0,14.94-36.06V76.6a51.06,51.06,0,0,0-51-51ZM422.64,127.68A38.32,38.32,0,1,1,461,89.36,38.36,38.36,0,0,1,422.64,127.68Zm0-51a12.72,12.72,0,1,0,12.72,12.72A12.73,12.73,0,0,0,422.64,76.64Z"/><path class="cls-1" d="M217.56,422.4a44.61,44.61,0,0,1-31.76-13.16l-83-83a45,45,0,0,1,0-63.52h0L211.49,154A44.91,44.91,0,0,1,275,154l83,83a45,45,0,0,1,0,63.52L249.31,409.24A44.59,44.59,0,0,1,217.56,422.4Zm-96.7-141.61a19.34,19.34,0,0,0,0,27.32l83,83a19.77,19.77,0,0,0,27.31,0L339.94,282.41a19.34,19.34,0,0,0,0-27.32l-83-83a19.77,19.77,0,0,0-27.31,0L120.86,280.79Z"/><path class="cls-1" d="M279.38,240.85c3,3,3,5,.11,7.92L275,253.23c7.28,10.32,8.8,21.19,4.56,32.8-1.41,4.67-3.8,5.54-8.58,3.58l-10.86-4.13c-4.23-1.63-5.21-3.48-3.8-8.15,2.07-6.41,1.31-11.29-4.67-17.27-7.71-7.72-12.6-9.34-17.27-4.67-4,4-1,10.1,6.52,19.34a107.26,107.26,0,0,1,10.32,14.45,30.06,30.06,0,0,1,3.37,8.37c2,7.82,1,18.14-8.8,27-11.62,11.62-27.26,12-43.23,1.07l-4.67,4.67c-3,3-5,3-8,0l-8.26-8.26c-2.93-2.94-3-5,0-8l4.45-4.45c-9-12.28-10.64-24.55-5.1-36.82q2.77-5.7,8.79-2.93l10,4.79c4.34,2,5.22,4.13,3.47,8.69-2.72,6.19-.87,12.39,5.32,18.58,8.26,8.26,14.67,10.1,19.34,5.44,4.34-4.34,1.52-10-6.2-19.45-5.32-6.84-8.15-10.32-11.51-18a26.74,26.74,0,0,1-2.94-10.54c-.43-6.3,2.28-14.66,9.34-21.72,11.41-11.4,26.51-11.93,42.15-.64l4.46-4.45c2.93-2.93,5-2.82,7.93.12Z"/></svg>
        <span class="text-white text-hover-secondary ml-1 ls-1">{{__('Price List')}}<i class="fa fa-caret-down ml-4"></i></span>
      </a>
      <div class="dropdown-container ml-1 text-white">
        <a class="pt-1 pr-2 pb-1 font-md" href="#">Show Price Lists</a>
        <a class="pt-1 pr-2 pb-1 font-md" href="#">Add new Price List</a>
        
      </div>
    </li>
    <li class="list pt-1 pb-1 bg-hover-sidebar-bg-light-1 font-lg">
      <a class="dropdown-btn pl-1">
        <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 64 64"><path d="M28,35.5a2,2,0,1,0,0-4,13.43052,13.43052,0,0,1-5.69482-1.17908A19.09386,19.09386,0,0,0,26.60339,22.5H28a2,2,0,0,0,0-4H21v-2a2,2,0,1,0-4,0v2H10a2,2,0,0,0,0,4H22.396a14.81827,14.81827,0,0,1-3.38532,5.50268,13.93046,13.93046,0,0,1-2.48724-3.425,1.99983,1.99983,0,1,0-3.54883,1.84473,18.53078,18.53078,0,0,0,2.695,3.908A13.33728,13.33728,0,0,1,10,31.5a2,2,0,0,0,0,4,16.74023,16.74023,0,0,0,8.96918-2.40607A16.7175,16.7175,0,0,0,28,35.5Z"/><path d="M62,20.5H42a2,2,0,0,0,0,4H60v29H31.44617l6.29016-11.00781A2.31134,2.31134,0,0,0,38,41.5V8.5a2.0001,2.0001,0,0,0-2-2H2a2.0001,2.0001,0,0,0-2,2v33a2.0001,2.0001,0,0,0,2,2H26v12a2.03222,2.03222,0,0,0,2.00177,2H62a2.0001,2.0001,0,0,0,2-2v-33A2.0001,2.0001,0,0,0,62,20.5ZM4,10.5H34v29H4Zm28.55383,33L30,47.96923V43.5Z"/><path d="M42,40.5v7a2,2,0,0,0,4,0v-2h6v2a2,2,0,0,0,4,0v-7a7,7,0,0,0-14,0Zm7-3a3.00328,3.00328,0,0,1,3,3v1H46v-1A3.00328,3.00328,0,0,1,49,37.5Z"/><circle cx="49" cy="29.5" r="2"/></svg>
        <span class="text-white text-hover-secondary ml-1 ls-1">{{__('Languages')}}<i class="fa fa-caret-down ml-3-5"></i></span>
      </a>
      <div class="dropdown-container ml-1 text-white">
        <a class="pt-1 pr-2 pb-1 font-md" href="#">Show Language Lists</a>
        <a class="pt-1 pr-2 pb-1 font-md" href="#">Add new Language</a>
        
      </div>
    </li>
    <li class="list pt-1 pb-1 bg-hover-sidebar-bg-light-1 font-lg">
      <a href="#" class="settings pl-1">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20">
          <path fill="#000000" d="M7.631 19.702c-0.041 0-0.083-0.005-0.125-0.016-0.898-0.231-1.761-0.587-2.564-1.059-0.233-0.137-0.315-0.434-0.186-0.671 0.159-0.292 0.243-0.622 0.243-0.957 0-1.103-0.897-2-2-2-0.334 0-0.665 0.084-0.957 0.243-0.237 0.129-0.534 0.047-0.671-0.186-0.472-0.804-0.828-1.666-1.059-2.564-0.065-0.254 0.077-0.515 0.325-0.598 0.814-0.274 1.362-1.036 1.362-1.895s-0.547-1.621-1.362-1.895c-0.248-0.084-0.39-0.344-0.325-0.598 0.231-0.898 0.587-1.761 1.059-2.564 0.137-0.233 0.434-0.315 0.671-0.186 0.291 0.159 0.622 0.243 0.957 0.243 1.103 0 2-0.897 2-2 0-0.334-0.084-0.665-0.243-0.957-0.129-0.237-0.047-0.534 0.186-0.671 0.804-0.472 1.666-0.828 2.564-1.059 0.254-0.065 0.515 0.077 0.598 0.325 0.274 0.814 1.036 1.362 1.895 1.362s1.621-0.547 1.895-1.362c0.084-0.248 0.345-0.39 0.598-0.325 0.898 0.231 1.761 0.587 2.564 1.059 0.233 0.137 0.315 0.434 0.186 0.671-0.159 0.292-0.243 0.622-0.243 0.957 0 1.103 0.897 2 2 2 0.334 0 0.665-0.084 0.957-0.243 0.237-0.129 0.534-0.047 0.671 0.186 0.472 0.804 0.828 1.666 1.059 2.564 0.065 0.254-0.077 0.515-0.325 0.598-0.814 0.274-1.362 1.036-1.362 1.895s0.547 1.621 1.362 1.895c0.248 0.084 0.39 0.344 0.325 0.598-0.231 0.898-0.587 1.761-1.059 2.564-0.137 0.233-0.434 0.315-0.671 0.186-0.292-0.159-0.622-0.243-0.957-0.243-1.103 0-2 0.897-2 2 0 0.334 0.084 0.665 0.243 0.957 0.129 0.237 0.047 0.534-0.186 0.671-0.804 0.472-1.666 0.828-2.564 1.059-0.254 0.065-0.515-0.077-0.598-0.325-0.274-0.814-1.036-1.362-1.895-1.362s-1.621 0.547-1.895 1.362c-0.070 0.207-0.264 0.341-0.474 0.341zM10 17c1.127 0 2.142 0.628 2.655 1.602 0.52-0.161 1.026-0.369 1.51-0.622-0.108-0.314-0.164-0.646-0.164-0.98 0-1.654 1.346-3 3-3 0.334 0 0.666 0.056 0.98 0.164 0.253-0.484 0.462-0.989 0.622-1.51-0.974-0.512-1.602-1.527-1.602-2.655s0.628-2.142 1.602-2.655c-0.161-0.52-0.369-1.026-0.622-1.51-0.314 0.108-0.646 0.164-0.98 0.164-1.654 0-3-1.346-3-3 0-0.334 0.056-0.666 0.164-0.98-0.484-0.253-0.989-0.462-1.51-0.622-0.512 0.974-1.527 1.602-2.655 1.602s-2.142-0.628-2.655-1.602c-0.52 0.16-1.026 0.369-1.51 0.622 0.108 0.314 0.164 0.646 0.164 0.98 0 1.654-1.346 3-3 3-0.334 0-0.666-0.056-0.98-0.164-0.253 0.484-0.462 0.989-0.622 1.51 0.974 0.512 1.602 1.527 1.602 2.655s-0.628 2.142-1.602 2.655c0.16 0.52 0.369 1.026 0.622 1.51 0.314-0.108 0.646-0.164 0.98-0.164 1.654 0 3 1.346 3 3 0 0.334-0.056 0.666-0.164 0.98 0.484 0.253 0.989 0.462 1.51 0.622 0.512-0.974 1.527-1.602 2.655-1.602z"></path>
          <path fill="#000000" d="M10 13c-1.654 0-3-1.346-3-3s1.346-3 3-3 3 1.346 3 3-1.346 3-3 3zM10 8c-1.103 0-2 0.897-2 2s0.897 2 2 2c1.103 0 2-0.897 2-2s-0.897-2-2-2z"></path>
          </svg>
        <span class="text-white text-hover-secondary  ml-1 ls-2">{{__('Settings')}}</span>
      </a>
    </li>
  </ul>
  {{-- <div class="copyright">
    <span>Copyright Embianz</span>
  </div> --}}
</div>