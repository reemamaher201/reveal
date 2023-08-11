<!DOCTYPE html>
<html lang="en">

@include('parts.head')

<body id="body">

  @include('parts.header')

  @yield('content')


    @include('parts.footer')

  </main>

  @include('parts.scripts')


</body>
</html>
