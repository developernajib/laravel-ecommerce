<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin Dashboard</title>
  @include("admin.css")
</head>

<body class="g-sidenav-show  bg-gray-100">
  @include("admin.sidebar")
  <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
    @include("admin.nav")
    @include("admin.body")
  </main>
  @include("admin.settings")
  @include("admin.js")
</body>

</html>