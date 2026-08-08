<!DOCTYPE html>
<html lang="fa" dir="rtl">
@include('layout.head')

<body>

    <div class="sidebar-overlay" id="sidebarOverlay"></div>

    <!-- ===== HEADER ===== -->
    @include('layout.header')


    <!-- ===== SIDEBAR ===== -->
    @include('layout.sidebar')


    <!-- ===== MAIN CONTENT ===== -->
    <main class="main-content">
        @yield('content')
        <div id="pageContent"></div>
    </main>

</body>

</html>