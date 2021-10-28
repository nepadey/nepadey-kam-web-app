<!DOCTYPE html>
<html lang="en">
<head>
    @include("dashboard.master_partial.metatag")
    @include("dashboard.master_partial.style")
</head>
<body>
@include("dashboard.master_partial.navbar")
{{-- @include('dashboard.master_partial.dashboard_sidebar') --}}
@yield("body_section")
</body>
{{-- @include("dashboard.master_partial.footer") --}}
@include("dashboard.master_partial.script")
</html>
