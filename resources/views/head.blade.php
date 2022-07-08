@if (config('enso-bugherd.enabled') && config('enso-bugherd.key'))
    <script type="text/javascript" src="https://www.bugherd.com/sidebarv2.js?apikey={{ config('enso-bugherd.key') }}" async="true"></script>
@endif
