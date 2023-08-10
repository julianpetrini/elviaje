<!--Footer container-->
@section('footer')
    <footer class="bg-light text-center">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <!-- Section: Form -->
            <section class="">
                
                    <!--Grid row-->
                    <div class="row d-flex justify-content-center">
                        <!--Grid column-->
                        <div class="col-auto">
                            <p class="pt-2">
                                <strong>Any plans on your trip?</strong>
                            </p>

                            <div class="col-auto">
                                <!-- Submit button -->
                                @guest
                                <a href="{{ route('register') }}" class="btn-primary">
                                    Register
                                </a>
                                @endguest
                                @auth
                                <a href="{{ route('welcome') }}" class="btn-primary">
                                    home
                                </a>
                                @endauth
                            </div>
                            <!--Grid column-->
                        </div>
                        <!--Grid row-->
               
            </section>
            <!-- Section: Form -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2023 Copyright
        </div>
        <!-- Copyright -->
    </footer>

    </footer>
@endsection
