@extends('layouts.app')

@section('content')

<section class="section text-center">
    <h3 class="pt-3">
        Our Story
    </h3>
    <div>
        <img src="{{ asset('/images/2022102410184329134e.png') }}">
    </div>
</section>
<section class="pt-2">
    <div class="container">
        <div class="timeline">
            @foreach(
                collect([
                    [
                        'year' => '2015',
                        'desc' => 'SukGarden was established to launch natural and ecological household cleaning and care products.'
                    ],[
                        'year' => '2016',
                        'desc' => 'SukGarden cooperates with domestic and foreign household cleaning research experts to establish an ecological household cleaning research and development center.'
                    ],[
                        'year' => '2017',
                        'desc' => 'SukGarden has reached strategic investment and alliance cooperation with a well-known domestic home care company to achieve fully automated digital production.'
                    ],[
                        'year' => '2018',
                        'desc' => 'SukGarden uses big data in real time to control the entire supply chain and open up a direct supply platform for household cleaning and personal care across the country.'
                    ],[
                        'year' => '2019',
                        'desc' => 'SukGarden\'s first Tmall official flagship store was launched online, and it also entered large-scale offline supermarkets.'
                    ],[
                        'year' => '2020',
                        'desc' => 'SukGarden has successfully entered tens of thousands of supermarkets in most provinces and cities in China, becoming a popular seller brand in offline supermarkets.'
                    ],[
                        'year' => '2021',
                        'desc' => 'SukGarden has become the sales leader in Douyin\'s home cleaning category. It has cooperated with nearly a hundred well-known celebrities such as Jing Tian, Chen Xiaochun, Wang Zulan, and Xiao Yang Ge to recommend products, and successfully created 3D laundry beads, blue wind chime laundry detergent, and sunshine pine wood cleaner. Toilet agent and many other popular products across the Internet, it has won the Golden Broadcast Award of the Year for Live Streaming E-commerce and the Popular Brand Award of the Year for China Beauty.'
                    ],[
                        'year' => '2022',
                        'desc' => 'Jiang Nanchun, Chairman of Focus Media, made a strong call, and SukGarden was launched in elevator media advertisements in 20 first- and second-tier cities across the country, with billions of exposures every day, attracting hundreds of millions of mainstream people. It has also won the top 1 spot in Douyin\'s condensed beads category, the top 1 best-selling condensed beads on Tmall, and the top 1 favorite condensed beads among celebrities.'
                    ]
                ])
                as $entity
            )
                <div class="timeline-row">
                    <div class="timeline-time">
                        {{ $entity['year'] }}
                    </div>
                    <div class="timeline-content">
                        <img class="img-fluid rounded" src="{{ asset('/images/timeline/'.$entity['year'].'.jpg') }}" alt="Maxwell Admin">
                        <p class="pt-3 text-justify">
                            {{ $entity['desc'] }}
                        </p>
                    </div>
                </div>
            @endforeach
            
        </div>
    </div>
</section>
@endsection