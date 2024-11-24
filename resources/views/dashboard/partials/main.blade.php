<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem Pakar</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <!-- Custom styles for this template -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
    <style>
      .dashboard-bg{
        background: linear-gradient(to bottom right, #ff7f50, #ffdb58)
      }

      .sidebar-bg{
        background: linear-gradient(to bottom right, #f2f2f2, #e0c3fc)
      }
    </style>
  </head>
  <body class="dashboard-bg">

    @include('dashboard.header.header')

    <div class="container-fluid">
        <div class="row" style="margin-bottom: 30%">

           @include('dashboard.sidebar.sidebar')

           <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="card border-0 mt-5">
              <div class="card-body">
                @yield('container')
              </div>
            </div>
           </main>
           
        </div>
    </div>
    
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <script src="{{ asset('js/dashboard.js') }}"></script>
  </body>
</html>