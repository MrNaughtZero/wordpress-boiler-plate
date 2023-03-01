<?php get_header(); ?>

  <div class="content-area">
    <main class="site-main">
      <section class="error-404 not-found">
        <header class="page-header">
          <h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'replace-text-domain' ); ?></h1>
        </header>
        <div class="page-content">
          <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'replace-text-domain' ); ?></p>

          <?php get_search_form(); ?>

          <?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

          <div class="widget widget_categories">
            <h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'replace-text-domain' ); ?></h2>
            <ul>
              <?php
                wp_list_categories(
                  array(
                    'orderby'    => 'count',
                    'order'      => 'DESC',
                    'show_count' => 1,
                    'title_li'   => '',
                    'number'     => 10,
                  )
                );
              ?>
            </ul>
          </div>
        </div>
      </section>
    </main>
  </div>

<?php get_footer(); ?>