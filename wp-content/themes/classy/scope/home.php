<?php

$framework = get_theme_framework();

$tabs = [
    'generation',
    'reasons',
    'brand',
    'about'
];
$tabs_data = [];

foreach ($tabs as $item)
{
    $tabs_data[$item] = get_field($item);
}
['generation' => $generation, 'reasons' => $reasons, 'brand' => $brand, 'about' => $about] = $tabs_data;

$posts_query = new WP_Query([
    'post_type' => 'post',
    'post_status' => 'publish',
    'order' => 'ASC',
    'posts_per_page' => 3
]);
$posts = [];

while ( $posts_query->have_posts() ) {
    $posts_query->the_post();
    $posts[] = $posts_query->post;
}

wp_reset_postdata();

$data = compact(
    'generation',
    'reasons',
    'brand',
    'about',
    'posts'
);