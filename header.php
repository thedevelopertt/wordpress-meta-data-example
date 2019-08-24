<?php

function _showTags()
{
//        Shows all tags if available

    if (get_the_tags()) {
        $tags = array();
        foreach (get_the_tags() as $tag) {
            $tags . array_push($tags, $tag->name);
        }
        echo join(',', $tags);
    }
}

function showTags()
{
    _showTags();
}

?>


<html>
<head>

    <link rel="canonical" href="<?php echo the_permalink() ?>"/>

    <!--    Basic MetaTags-->
    <title><?php echo get_the_title(); ?></title>
    <meta name="description" content="<?php echo get_the_excerpt(); ?>">
    <meta name="keywords" content="<?php showTags(); ?>">
    <!--    Basic MetaTags-->


    <!--        Begin Facebook OpenGraph-->
    <meta property="og:url" content="<?php echo get_permalink(); ?>">
    <meta property="og:type" content="article">
    <meta property="og:title" content="<?php echo get_the_title(); ?>">
    <meta property="og:description" content="<?php echo get_the_excerpt(); ?>">
    <meta property="og:image"
          content="<?php echo wp_get_upload_dir()['baseurl']; ?>/<?php echo get_the_ID(); ?>_facebook.jpg">
    <meta property="og:image:type" content="jpg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <!--        End Facebook OpenGraph-->

    <!--        Start Twitter Card-->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@thedevelopertt">
    <meta name="twitter:creator" content="@thedevelopertt">
    <meta name="twitter:image"
          content="<?php echo wp_get_upload_dir()['baseurl']; ?>/<?php echo get_the_ID(); ?>_twitter.jpg">
    <!--        End Twitter Card-->

</head>
<body>

