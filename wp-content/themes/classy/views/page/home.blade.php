{{-- Template Name: Home Page --}}

@extends('layout.default')

@section('content')
    <section class="generation">
        <div class="container">
            <h1 class="generation__title" data-aos="fade-up">{{$generation['title']}}</h1>

            @if($generation['subtitle'])
                <h2 class="generation__subtitle" data-aos="fade-up">{{$generation['subtitle']}}</h2>
            @endif

            <a href="#" class="button button--default button--products" data-aos="fade-up">View products</a>

            @if($generation['description'])
                <div class="description generation__description" data-aos="fade-up">{!! $generation['description'] !!}</div>
            @endif
        </div>
    </section>

    <section class="reasons">
        <div class="container">
            <h2 class="reasons__title" data-aos="fade-up">{{$reasons['title']}}</h2>

            <div class="grid reasons__row" data-aos="fade-up">
                @foreach($reasons['repeater'] as $item)
                    @include('parts.reason-card', [
                        'item' => $item,
                        'index' => $loop->index+1
                    ])
                @endforeach
            </div>
        </div>
    </section>

    <section class="brand">
        <div class="container">
            <h2 class="brand__title" data-aos="fade-up">{{$brand['title']}}</h2>

            <div class="description brand__description" data-aos="fade-up">{!! $brand['description'] !!}</div>

            <div class="grid brand__row" data-aos="fade-up">
                @foreach($brand['repeater'] as $item)
                    @include('parts.brand-card', [
                        'title' => $item['title'],
                        'description' => $item['description'],
                        'link' => $item['link']
                    ])
                @endforeach
            </div>
        </div>
    </section>

    <section class="about">
        <div class="container">
            <h2 class="about__title" data-aos="fade-up">{{$about['title']}}</h2>

            <div class="grid about__row">
                @each('parts.about-card', $posts, 'post')
            </div>

            <a href="#" class="button button--default button--about" data-aos="fade-up">To the blog</a>
        </div>
    </section>
@stop