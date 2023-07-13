
  </main>

  <footer>
    <div class="mx-auto container px-3 sm:px-6 lg:px-16">
      <div class="flex flex-col items-center justify-center w-full gap-y-12 border-t border-t-white pt-10 pb-8 lg:pt-12 lg:pb-14 lg:justify-between lg:flex-row lg:gap-x-14 2xl:pt-16 2xl:pb-20">
        <div class="flex items-center gap-x-14 max-lg:justify-between max-lg:w-full">
          <?php if( $logo = get_custom_logo() ){ echo $logo; } ?>
          <a href="contacts.html" class="inline-flex items-center gap-x-5 text-lg font-normal text-white hover:text-accent lg:text-xl">Contact us <i class="icomoon icon-place text-2xl leading-none font-normal"></i></a>
        </div>
        <?php
          if( have_rows('footer_socials', 'option') ): ?>
            <div class="flex items-center gap-x-7">
              <?php while( have_rows('footer_socials', 'option') ) : the_row();
              $link = get_sub_field('link', 'option');
              if( $link ): 
                  $link_url = $link['url'];
                  $link_target = $link['target'] ? $link['target'] : '_self';?>
                  <a class="inline-block text-4xl leading-none text-white hover:text-accent lg:text-2xl lg:leading-none" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                    <?php the_sub_field('icon', 'option'); ?>
                  </a>
              <?php endif;
              endwhile; ?>
            </div>
          <?php else :
          endif;
        ?>
        <a href="#" target="_blank" class="inline-block text-lg text-center leading-none text-white text-opacity-60 hover:text-accent lg:text-xl lg:leading-none">Privacy policy</a>
      </div>
    </div>
  </footer>

  <?php wp_footer(); ?>
</body>
</html>