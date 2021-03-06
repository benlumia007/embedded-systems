<?php
/*
================================================================================================
Embedded Systems - pdx-090t.php
Template Name: PDX2-090T
Template Post Type: products
================================================================================================
This is the most generic template file in a WordPress theme and is one of the two required files 
for a theme (the other being style.css). The index.php template file is flexible. It can be used to 
include all references to the header, content, widget, footer and any other pages created in 
WordPress. Or it can be divided into modular template files, each taking on part of the workload. 
If you do not provide other template files, WordPress may have default files or functions to 
perform their jobs.

@package        Embedded Systems WordPress Theme
@copyright      Copyright (C) 2017. Benjamin Lu
@license        GNU General Public License v2 or later (http://www.gnu.org/licenses/gpl-2.0.html)
@author         Benjamin Lu (https://www.benjaminlu.net/)
================================================================================================
*/
?>
<?php get_header(); ?>
    <div id="post-layout" class="right-sidebar">
        <div id="content-area" class="content-area">
            <?php while (have_posts()) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <div class="entry-content">
                        <?php the_content(); ?>
                        <?php wp_link_pages( array(
                            'before'      => '<div class="page-links">' . esc_html__( 'Pages:', 'embedded-systems' ),
                            'after'       => '</div>',
                            'link_before' => '<span>',
                            'link_after'  => '</span>',
                            'pagelink'    => '<span class="screen-reader-text">' . esc_html__( 'Page', 'embedded-systems' ) . ' </span>%',
                            'separator'   => '<span class="screen-reader-text">,</span> ',
                        ));
                        ?>
                    </div>
                    <div class="entry-taxonomies">

                    </div>
                </article>
            <?php endwhile; ?>
            <?php comments_template(); ?>
        </div>
        <?php get_sidebar('pdx2-090t'); ?>
    </div>
<?php get_footer(); ?>