@php
    $services = [
        [
            'name' => 'digital comics',
            'thumb' => 'buy-comics-digital-comics.png'
        ],
        [
            'name' => 'dc merchandise',
            'thumb' => 'buy-comics-merchandise.png'
        ],
        [
            'name' => 'subscription',
            'thumb' => 'buy-comics-subscriptions.png'
        ],
        [
            'name' => 'comic shop locator',
            'thumb' => 'buy-comics-shop-locator.png'
        ],
        [
            'name' => 'dc power visa',
            'thumb' => 'buy-dc-power-visa.svg'
        ],
    ]
@endphp

<div class="my-blue-bg py-5" id="services">
    <div class="container">
        <div class="d-flex align-items-center justify-content-between">
            @foreach ($services as $service)
            <div class="d-flex align-items-center column-gap-3">
                <figure class="m-0">
                    <img src="{{Vite::asset('resources/images/'.$service['thumb'])}}" alt="{{$service['name']}}">
                </figure>
                <h6 class="text-white text-uppercase fw-bold">
                    {{$service['name']}}
                </h6>
            </div>
            @endforeach
        </div>
    </div>
</div>