@if (session()->has('message'))
  <div
     x-data="{show: true}"
     x-init="setTimeout(() => show=false, 3000)"
     x-show="show"
     class="flex fixed top-0 left-1/2 transform bg-laravel text-white -translate-x-1/2 px-48 py-2"
   >
    <p> {{ session('message') }} </p>
 </div>
@endif