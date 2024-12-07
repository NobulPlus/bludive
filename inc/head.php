<!DOCTYPE html>

<html class="no-js" lang="en">
    <head>
        <!-- Meta Tags -->
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="author" content="Bludive" />
        
        <!-- Favicon Icon -->
        <link rel="icon" href="assets/img/favicon.svg" />
        <!-- Site Title -->
        <title><?php echo $page_title . ' | ' . SITE_TITLE; ?></title>
        <meta name="description" content="<?php echo $page_description; ?>" />
        <link rel="canonical" href="<?php echo SITE_URL; ?>" />
    	<meta property="og:locale" content="en_US" />
    	<meta property="og:type" content="website" />
    	<meta property="og:title" content="<?php echo $page_title . ' - ' . SITE_TITLE; ?>" />
    	<meta property="og:description" content="<?php echo $page_description; ?>" />
    	<meta property="og:url" content="<?php echo SITE_URL; ?>" />
    	<meta property="og:site_name" content="<?php echo SITE_TITLE; ?>" />
    	<meta property="og:image" content="<?php echo $page_seo_img; ?>" />
    	<meta property="og:image:width" content="1280" />
    	<meta property="og:image:height" content="853" />
    	<meta property="og:image:type" content="image/jpeg" />
    	<meta name="twitter:card" content="summary_large_image" />
    	<script type="application/ld+json" class="yoast-schema-graph">
    	    {"@context":"https://schema.org","@graph":[{"@type":"WebPage","@id":"<?php echo $page_url; ?>","url":"<?php echo $page_url; ?>",
    	     "name":"<?php echo $page_title . ' - ' . SITE_TITLE; ?>","isPartOf":{"@id":"<?php echo $page_url; ?>#website"},"primaryImageOfPage":{"@id":"<?php echo $page_url; ?>#primaryimage"},
    	     "image":{"@id":"<?php echo $page_url; ?>#primaryimage"},"thumbnailUrl":"<?php echo $page_seo_img; ?>",
    	     "datePublished":"2024-03-05T03:14:07+00:00","dateModified":"2024-11-14T17:49:42+00:00","description":"<?php echo $page_description; ?>",
    	     "inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["<?php echo $page_url; ?>"]}]},
    	     {"@type":"ImageObject","inLanguage":"en-US","@id":"<?php echo $page_url; ?>#primaryimage","url":"<?php echo $page_seo_img; ?>",
    	     "contentUrl":"<?php echo $page_seo_img; ?>","width":1280,"height":853,"caption":"Marine Support Vessels"},
    	     {"@type":"BreadcrumbList","@id":"<?php echo $page_url; ?>#breadcrumb","itemListElement":[{"@type":"ListItem","position":1,"name":"Home"}]},
    	     {"@type":"WebSite","@id":"<?php echo $page_url; ?>#website","url":"<?php echo $page_url; ?>","name":"<?php echo $page_description; ?>",
    	     "potentialAction":[{"@type":"SearchAction","target":{"@type":"EntryPoint","urlTemplate":"<?php echo SITE_URL . '/'; ?>?s={search_term_string}"},
    	     "query-input":{"@type":"PropertyValueSpecification","valueRequired":true,"valueName":"search_term_string"}}],"inLanguage":"en-US"}]}</script>
	    
	    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/plugins/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/css/plugins/lightgallery.min.css" />
        <link rel="stylesheet" href="assets/css/plugins/swiper.min.css" />
        <link rel="stylesheet" href="assets/css/style.css" />
        <link rel="stylesheet" href="assets/css/bludive.css" />
    </head>