@php
    $post_fields = get_field('post', $post->ID);
    $custom_title = is_array($post_fields) && $post_fields['custom_title'] ? $post_fields['custom_title'] : false;
@endphp

<article class="about-card" data-aos="fade-up">
    <a href="{{get_permalink($post->ID)}}" class="about-card__img">
        <img width="350" src="{{get_the_post_thumbnail_url($post->ID)}}" alt="{{$post->post_title}}">
    </a>

    <a href="{{get_permalink($post->ID)}}" class="about-card__title">{!! $custom_title ? $custom_title : $post->post_title !!}</a>
</article>