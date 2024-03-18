<div id="footer-bg">
    <div class="container">
        <div class="row">
            <div class="col-6 py-5">
                <div class="d-flex flex-column flex-wrap row-gap-4 list-max-h">
                    @foreach ($footerLinks as $col)
                    <ul class="list-unstyled m-0">
                        <li>
                            <h3 class="text-uppercase text-white fw-bold">
                                {{$col['title']}}
                            </h3>
                        </li>
                        @foreach ($col['links'] as $link)
                            <li class="text-capitalize">
                                <a href="{{$link['link']}}" class="text-secondary">
                                    {{$link['url']}}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                    @endforeach
                </div>
                <p class="text-secondary pt-4">
                    All Site Content TM and &copy; 2020 DC Entertainment, unless otherwise <a class="text-primary" href="#">noted here</a>. All rights reserved. <a class="text-primary" href="#">Cookies Settings</a>
                </p>
            </div>
            <div class="col-6">
                <div class="footer-dc-bg"></div> 
            </div>
        </div>
    </div>
</div>


