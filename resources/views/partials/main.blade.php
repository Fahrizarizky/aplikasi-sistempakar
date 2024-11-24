<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistem Pakar</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        .animated-gradient {
  background: linear-gradient(45deg, #e74c3c, #9b59b6, #3498db, #3498db, #9b59b6, #e74c3c);
  background-size: 400% 400%;

}
    </style>
</head>
{{-- <body style="background-image: url({{ asset('assets/bg-darelhikmah.jpg') }}); background-repeat: no-repeat; background-attachment:fixed; background-size:cover"> --}}
<body class="animated-gradient">
    {{-- bagian navbar --}}
    @include('navbar.index')
    
          {{-- bagian konten --}}
                    @yield('container')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>