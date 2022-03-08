@extends('layouts.app')
@push('head')
    <!-- elFinder CSS (REQUIRED) -->
    <link rel="stylesheet" type="text/css" href="{{ asset($dir.'/css/elfinder.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset($dir.'/css/theme.css') }}">

    <!-- elFinder JS (REQUIRED) -->
    <script src="{{ asset($dir.'/js/elfinder.min.js') }}"></script>

    @if($locale)
        <!-- elFinder translation (OPTIONAL) -->
        <script src="{{ asset($dir."/js/i18n/elfinder.$locale.js") }}"></script>
    @endif

    <!-- elFinder initialization (REQUIRED) -->
    <script type="text/javascript" charset="utf-8">
        // Documentation for client options:
        // https://github.com/Studio-42/elFinder/wiki/Client-configuration-options
        $().ready(function() {
            $('#elfinder').elfinder({
                // set your elFinder options here
                @if($locale)
                    lang: '{{ $locale }}', // locale
                @endif
                customData: { 
                    _token: '{{ csrf_token() }}'
                },
                url : '{{ route("elfinder.connector") }}',  // connector URL
                soundPath: '{{ asset($dir.'/sounds') }}'
            });
        });
    </script>

@endpush
@section('content')
<div class="row">
    <div class="row justify-content-center">
        <div class="col-md-auto">
            <div id="elfinder"></div>
            
        </div>
    </div>
</div>
@endsection