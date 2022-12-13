@include('backend.style')
@yield('css')
@include('backend.nave')
@yield('container')
<div class="center_containt_loder">
    <div class="loder" id="loder">
        <div class="ring"></div>
        <div class="ring"></div>
        <div class="ring"></div>
        {{--  <span class="loging">Loging...</span>  --}}
    </div>
</div>
@include('backend.footer')

@include('backend.script')
@yield('javascript')
{{--  <script src="{{ asset('/public/backend/assets/js/apps.js') }}"></script>  --}}
