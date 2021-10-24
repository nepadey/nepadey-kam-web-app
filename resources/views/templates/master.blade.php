<!DOCTYPE html>
<html lang="en">
<head>
    @include("templates.master_partial.metatag")
    @include("templates.master_partial.style")
</head>
<body>
@include("templates.master_partial.navbar")
@yield("body_section")
</body>
@include("templates.master_partial.footer")
@include("templates.master_partial.script")
</html>
