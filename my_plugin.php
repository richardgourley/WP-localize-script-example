<?php

/**
 * In this file we enqueue our javascript file.
 * We add a PHP array containing example database search results to be..
 * ..accessible as an object/ objects in our javascript file
 */


function enqueue_my_script()
{
    wp_enqueue_script(
        //handle name - name to refer to your js file
        'my_plugin_js',
        //locate your js file (here inside a folder called js)
        plugins_url('js/my_plugin.js', __FILE__),
        //add any dependencies to this array - empty array = no dependencies
        array(),
        //add a version number
        '1.0.0',
        //optional - true here means load js in footer not header.
        true
    );

    //assign var to our database search results function
    $array_of_posts = wpdb_example_search_results();

    //PARAMS:
    //1. Enqueued JS file handle name we are connecting to
    //2. The variable name that will be available in our js script.
    //3. The PHP array we are passing - in this case the var above - $array_of_posts
    
    wp_localize_script('my_plugin_js', 'varout', $array_of_posts);
}

//hook code from our method into Wordpress 
add_action('init', 'enqueue_my_script');

/**
 * ANY WPDB queries would go into the function below.
 * Below is an example of a multi-dimensional array of a post type with post meta data.
 * Replace it with any wp db queries you wish to return
 */

function wpdb_example_search_results()
{
    return [
        [
            'title' => 'Roofing',
            'our_promise' => 'We work with the best roofing companies in the industry.',
            'prices_from' => '$27.00 per hour'
        ],
        [
            'title' => 'Tiling',
            'our_promise' => 'We work with the highest-rated tiling companies in the industry.',
            'prices_from' => '$24.00 per hour'
        ],
        [
            'title' => 'Painting',
            'our_promise' => 'The professionals we work with use the highest-quality paint in the industry.',
            'prices_from' => '$23.00 per hour'
        ],
    ];
}
