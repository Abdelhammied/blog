<!DOCTYPE html>
<html lang="en">

<head>

    @include('web.layouts.includes.head')

</head>

<body>

    @include('web.layouts.includes.navbar')

    @include('web.layouts.includes.page-header')

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                @yield('content')
            </div>
        </div>
    </div>

    <hr>

    @include('web.layouts.includes.footer')

    @include('web.layouts.includes.scripts')

</body>

</html>
