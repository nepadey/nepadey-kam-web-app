<!DOCTYPE html>
<html lang="en">
<head>
    @include("dashboard.master_partial.metatag")
    @include("dashboard.master_partial.style")
</head>
<body>
@include("dashboard.master_partial.navbar")
@yield("body_section")
</body>
{{-- @include("dashboard.master_partial.footer") --}}
@include("dashboard.master_partial.script")
</html>
