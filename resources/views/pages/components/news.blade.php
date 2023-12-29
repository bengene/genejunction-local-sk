
<div class="row gx-5">
    @foreach([
        [
            'title' => 'SukGarden won the Golden Bull Award ! Spokesperson Gu Ailing wins again',
            'image' => '/images/news/640.jpg',
            'date' => 'December 14th, 2023',
        ],
        [
            'title' => 'Let\'s art and beauty reach our life',
            'image' => '/images/news/642.jpg',
            'date' => 'November 14th , 2023',
        ],
        [
            'title' => 'Ben Webb, SVP Regional Head of Fragrances APAC at Givaudan, led a team to visit SukGarden',
            'image' => '/images/news/643.jpg',
            'date' => 'April 15th , 2023',
        ],
    ] as $entity)
    <div class="col-md-6 col-xl-4 mb-5 align-items-stretch">
        <div class="card h-100" href="#!">
            <img class="card-img-top" src="{{ asset($entity['image']) }}">
            <div class="card-body">
                <h5 class="card-title">
                    {{ $entity['title'] }}
                </h5>
                {{-- <p class="card-text">
                    {{ $entity['subtitle'] }}
                </p> --}}
            </div>
            <div class="card-footer text-muted">
                <i class="bi bi-calendar"></i>
                <span class="ms-2">
                    {{ $entity['date'] }}
                </span>
            </div>
        </div>
    </div>
    @endforeach
</div>