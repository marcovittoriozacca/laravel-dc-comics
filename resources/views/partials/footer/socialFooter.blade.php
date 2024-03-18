<div class="py-5 my-dark-bg" id="footer-bottom-banner">
    <div class="container">
        <div class="row">
            <div class="col-8">
                <a href="#" class="text-white text-uppercase p-3 border border-2 border-primary fw-bolder">
                    sign-up now!
                </a>
            </div>
            <div class="col-4 right-col">
                <div class="d-flex justify-content-between align-items-center">
                    <a href="#" class="text-uppercase text-primary fw-bolder follow-us">
                        follow us
                    </a>
                    @foreach ($socials as $social)
                    <a class="social d-flex align-items-center justify-content-center rounded-circle bg-secondary" href="{{$social['url']}}">
                        <i class="{{$social['icon']}} social-icon my-dark-color"></i>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>