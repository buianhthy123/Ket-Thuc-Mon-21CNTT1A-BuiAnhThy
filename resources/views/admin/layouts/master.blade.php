  
   <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <!-- Bootstrap core CSS -->
  <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="/css/all.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="/fonts/fontawesome-free-5.15.4-web/css/all.min.css">
  </link><!-- Custom styles for this template -->
  <link href="/css/css_admin/admin.css" rel="stylesheet" />

  @yield('css')
</head>
<body>
<div class="d-flex" id="wrapper">
    <!-- Sidebar -->
@include('admin.layouts.header')

  @yield('content')

  

  </div>
  <!-- /#wrapper -->
 <!-- Bootstrap core JavaScript -->
 <script src="/vendor/jquery/jquery.min.js"></script>
  <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function (e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });

  </script>
  <script src="/js/js_admin/divide-page.js"></script>

  <!-- search -->
  <script>
    $(document).ready(function () {
      $("#myInput").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#content-table tr").filter(function () {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
  </script>

  <script>
    $(document).ready(function () {
      $('[data-toggle="tooltip"]').tooltip();
    });
  </script>

</body>

</html>