
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('assets/style.css') }}" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet"/>
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet"/>
    <title>@yield('title')-{{ __('Perpuskuy') }}</title>
</head>
<body>

    @yield('content');

    <script>
        let btn = document.querySelector(".toggle");
        let sidebar = document.querySelector(".sidebar");
    
        btn.onclick = function(){
            sidebar.classList.toggle("close");
        }
    </script>
    <script type="text/javascript" src="{{ asset('print.js') }}"></script>
    
    </body>
    </html>
    