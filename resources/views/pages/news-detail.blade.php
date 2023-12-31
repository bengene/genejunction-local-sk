@extends('layouts.app')

@section('content')

<section class="section text-center">
    <h3 class="pt-3">
        Brand News
    </h3>
    <div>
        <img src="{{ asset('/images/2022102410184329134e.png') }}" alt="icon">
    </div>
</section>

<section class="bg-light">
    <div class="container">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-10">
                <div class="single-post">
                    <h3>Boots on the Ground, Inclusive Thought Provoking Ideas</h3>
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div class="single-post-meta me-4">
                            <div class="single-post-meta-details">
                                <div class="single-post-meta-details-date">Feb 5 · 6 min</div>
                            </div>
                        </div>
                    </div>
                    <img class="img-fluid mb-2 rounded" src="https://source.unsplash.com/vZJdYl5JVXY/990x540">
                    <div class="single-post-text my-5">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit similique distinctio quidem blanditiis architecto ullam a itaque quisquam nihil! Unde ducimus deleniti exercitationem minima, molestiae ab saepe libero. Doloribus, a?</p>
                        <p>Magnam amet labore exercitationem maxime consectetur molestias quas quia dicta, praesentium minus illum quis fuga, fugiat velit voluptate sed nostrum ipsam atque.</p>
                        <p>Quaerat voluptas natus velit deleniti reprehenderit vero ad eos ab reiciendis. Libero dignissimos temporibus ipsam sint dolores voluptate consequatur debitis tempora doloremque.</p>
                        <h4>Creating Something New</h4>
                        <p>Laborum placeat quas accusantium vitae perferendis dolores possimus tempora, qui consectetur hic ullam autem. Enim, rerum obcaecati numquam quaerat necessitatibus voluptatem? Repellat!</p>
                        <p>Quasi, quos quaerat? Sint at odit possimus ullam saepe suscipit officiis nobis eaque, laudantium ut earum tempore repellendus mollitia odio nam! Unde?</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi explicabo unde perferendis reprehenderit ullam nobis? Laborum amet voluptatem sunt natus? Tempore commodi corporis accusamus laudantium assumenda blanditiis aut nobis culpa.</p>
                        <h4>It's time to build your new project</h4>
                        <p>Facilis enim voluptatibus qui voluptatum nemo non, facere, fugiat deserunt dicta ab sunt in sequi, assumenda nobis ipsam quidem corporis. Nemo, aliquam.</p>
                        <p>Illum numquam sapiente debitis similique, a accusantium quisquam recusandae! Nihil quia nulla blanditiis. Nobis numquam iure facilis consequuntur beatae eos adipisci doloremque!</p>
                        <p>Voluptate reiciendis nisi tempora laboriosam commodi sequi sapiente natus aut ab, cum aspernatur illo. Nobis laboriosam excepturi iste earum. Error, ab eius?</p>
                        <p>Quam, nesciunt iusto, praesentium amet necessitatibus quod porro libero voluptates soluta nostrum quisquam delectus repellendus totam accusamus sint magni dolore atque qui.</p>
                        <img class="img-fluid mb-2 rounded" src="https://source.unsplash.com/sv8oOQaUb-o/990x540">
                        <h4>It's time to build your new project</h4>
                        <p>Laborum placeat quas accusantium vitae perferendis dolores possimus tempora, qui consectetur hic ullam autem. Enim, rerum obcaecati numquam quaerat necessitatibus voluptatem? Repellat!</p>
                        <p>Quasi, quos quaerat? Sint at odit possimus ullam saepe suscipit officiis nobis eaque, laudantium ut earum tempore repellendus mollitia odio nam! Unde?</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi explicabo unde perferendis reprehenderit ullam nobis? Laborum amet voluptatem sunt natus? Tempore commodi corporis accusamus laudantium assumenda blanditiis aut nobis culpa.</p>
                        <hr class="my-5">
                        <div class="text-center">
                            <a class="btn btn-transparent-dark" href="{{ route('landing-page.news') }}">Back to Blog Overview</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection