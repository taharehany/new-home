@include('admin.layouts.header')
<body>
    <div class="main-wrapper">
        @include('admin.layouts.aside')
        <!-- @include('admin.layouts.top-nav') -->
        @include('admin.layouts._messages')
        @yield('content')
    @include('admin.layouts.footer')
