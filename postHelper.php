<?php
include("data.php");

/**
 * Get All Posts
 */
function posts()
{
    global $posts;

    $allPosts = null;
    if (isset($posts) && count($posts) > 0) {
        foreach ($posts as $post) {
            $allPosts .= createEachPost($post);
        }
    }
    return $allPosts;
}


function createEachPost($post){

    $postBody = '<div class="post-preview">';
    $postBody .= '<a href="./post.php">';
    $postBody .= '<h2>'.$post['title'].'</h2>';
    $postBody .= '</a>';
    $postBody .= '<div class="intro">';
    $postBody .= '<div class="clearfix">';
    $postBody .= '<p>'.$post['intro'].'</p>';
    $postBody .= '</div>';
    $postBody .= '</div>';
    $postBody .= '</div>';
    return $postBody;
}