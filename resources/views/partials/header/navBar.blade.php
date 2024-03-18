<div class="bg-white pt-2 border">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-1">
                <figure>
                    <img width="70" src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="dc-logo">
                </figure>
            </div>
            <div class="col-9">
                <ul class="list-unstyled d-flex justify-content-between">
                    @foreach ($navLinks as $link)
                    {{-- active will be applied only to comics for now --}}
                    <li>   
                        <a href="{{$link['url']}}" class="text-uppercase fw-bold opacity-75 @if($loop->iteration == 2) active @endif">
                            {{$link['name']}}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-2 pb-3">
                <div class="input-group input-border">
                    <input type="text" class="form-control border-0 shadow-none text-end" placeholder="Search">
                    <span class="input-group-text bg-transparent border-0">
                        <i class="fas fa-magnifying-glass"></i>
                    </span>
                  </div>
            </div>
        </div>
    </div>
</div>