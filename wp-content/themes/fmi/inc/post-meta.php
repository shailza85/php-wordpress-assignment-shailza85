<?php
/**
 * Post Meta Helper Functions
 *
 * @package Fmi
 */

// Сategory
if ( ! function_exists( 'vs_get_meta_categorys' ) ) {
  function vs_get_meta_categorys() {
    $category_list = get_the_category_list(' ');
    if ( $category_list ) {
      ?>
      <span class="meta-category"><i class="vs-icon vs-icon-list"></i><?php echo $category_list; ?></span>
      <?php
    }
  }
}

// Date
if ( ! function_exists( 'vs_get_meta_date' ) ) {
  function vs_get_meta_date() {
    ?>
    <span class="meta-date"><i class="vs-icon vs-icon-calendar"></i><?php echo get_the_date(); ?></span>
    <?php
  }
}

// Author
if ( ! function_exists( 'vs_get_meta_author' ) ) {
  function vs_get_meta_author() {
    ?>
    <span class="meta-author"><i class="vs-icon vs-icon-user"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo esc_html( get_the_author() ); ?></a></span>
    <?php
  }
}

// Comments
if ( ! function_exists( 'vs_get_meta_comments' ) ) {
  function vs_get_meta_comments() {
    if ( ! comments_open() ) {
      return;
    }
    ?>
    <span class="meta-comments"><i class="vs-icon vs-icon-comments"></i><?php comments_popup_link( esc_html__( 'No Comments', 'fmi' ), esc_html__( '1 Comment', 'fmi' ), '% ' . esc_html__( 'Comments', 'fmi' ), 'comments-link', '' ); ?></span>
    <?php
  }
}

// Tags
if ( ! function_exists( 'vs_get_meta_tags' ) ) {
  function vs_get_meta_tags() {
    $tags_list = get_the_tag_list();
    if ( $tags_list ) {
      ?>
      <span class="meta-tags"><i class="vs-icon vs-icon-tags"></i><?php echo $tags_list; ?></span>
      <?php
    }
  }
}
