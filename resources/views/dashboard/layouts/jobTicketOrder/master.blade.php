<!doctype html>
<html lang="en">

<head>
   @include('dashboard.layouts.main-head')
</head>

<body>
            @include('dashboard.layouts.jobTicketOrder.header')
            @yield('jobTicketContent')
            @include('dashboard.layouts.jobTicketOrder.footer')
           @include('dashboard.layouts.scripts')

    
</body> 
</html>