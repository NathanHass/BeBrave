<?php
$context = Timber::get_context();

$args = array(
    'post_type' => 'post',
    'orderby' => 'title',
	'order'   => 'ASC',
);

$context['posts'] = Timber::get_posts($args);

Timber::render('page-guests.twig', $context);
