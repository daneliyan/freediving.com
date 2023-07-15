<?php
/*
Template Name: Trips
*/
get_header(); ?>

    <!-- Готово -->
    <section class="category relative z-0 bg-cover bg-no-repeat bg-center pt-32 pb-16 mb-24 sm:mb-32 min-h-[680px] sm:min-h-[90vh] lg:pt-[230px] lg:pb-48" style="background-image: url(<?php the_field('trips_bg'); ?>);">
      <div class="mx-auto container px-3 sm:px-6 lg:px-16">
        <div class="content max-lg:flex max-lg:flex-col max-lg:items-center max-lg:justify-center">
          <h1 class="text-white uppercase font-medium max-w-6xl text-3xl leading-9 mb-7 max-lg:mb-60 max-lg:text-center md:text-6xl md:leading-[66px] lg:mb-10 2xl:text-8xl 2xl:leading-[100px]"><?php the_field('trips_title'); ?></h1>
          <div class="max-lg:text-center text-lg leading-6 text-white max-w-2xl max-lg:order-2 lg:text-xl lg:leading-8 lg:mb-16"><?php the_field('trips_text'); ?></div>
          <div class="flex gap-x-10 max-lg:order-1 max-lg:mb-7">
            <?php $booknow_link = get_field('booknow_link', 'option');
            if( $booknow_link ): 
                $booknow_link_url = $booknow_link['url'];
                $booknow_link_title = $booknow_link['title'];
                $booknow_link_target = $booknow_link['target'] ? $booknow_link['target'] : '_self';
                ?>
                <a href="<?php echo esc_url( $booknow_link_url ); ?>" target="<?php echo esc_attr( $booknow_link_target ); ?>" class="inline-flex items-center justify-center gap-x-6 py-6 px-8 text-lg leading-5 font-medium text-white rounded-full border-white border border-opacity-20 backdrop-blur-lg bg-card lg:text-xl lg:leading-6 hover:shadow-myShadow1"><?php echo esc_html( $booknow_link_title ); ?><i class="icomoon icon-whatsapp text-2xl leading-none font-normal"></i></a>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </section>

    <!-- Готово -->
    <section class="standartbl mb-32">
      <div class="mx-auto container px-3 sm:px-6 lg:px-16">
        <div class="flex max-lg:flex-col max-lg:justify-center gap-y-5 items-center gap-x-7 mb-6 lg:items-end">
          <h2 class="text-6xl text-white font-medium max-lg:text-center text-opacity-5 uppercase lg:text-7xl lg:text-opacity-15 xl:text-9xl 2xl:text-[10rem] max-2xl:leading-none"><?php the_field('tripsbl_title'); ?></h2>
          <div class="text-lg leading-6 text-white max-w-3xl mb-3 max-lg:text-center lg:text-xl lg:leading-8 lg:max-w-[80%] 2xl:max-w-[40%]"><?php the_field('tripsbl_text'); ?></div>
        </div>
        <div class="grid grid-cols-1 gap-x-5 gap-y-10 md:grid-cols-2 xl:grid-cols-3">
          <?php    
          global $post;
          $news_query = new WP_Query( [
            'posts_per_page' => -1,
            'post_type' => 'trips',
            'order'        => 'ASC',
          ] );
          if ( $news_query->have_posts() ) {
            while ( $news_query->have_posts() ) {
              $news_query->the_post();
              ?>
                <div class="card-wrapper">
                  <div class="z-0 card flex flex-col justify-between relative w-full py-7 px-9 bg-no-repeat bg-cover bg-center min-h-[540px] lg:justify-end lg:p-12 lg:min-h-[660px] 3xl:min-h-[740px]" style="background-image: url(<?php the_field('trip_card_img'); ?>);">
                    <!-- дата -->
                    <div class="flex items-center justify-center w-full text-center text-lg font-normal text-white lg:hidden"><?php the_time('m.d.Y'); ?></div>
                    <a href="#" class="card-content z-10">
                      <h3 class="max-lg:text-center text-xl text-white font-medium max-sm:text-center mb-5 lg:mb-11"><?php the_field('trip_title'); ?></h3>
                      <div class="max-lg:text-center text-lg leading-6 text-white text-opacity-80 lg:mb-9 lg:text-xl lg:leading-7"><?php the_field('trip_text'); ?></div>
                    </a>
                    <div class="flex items-center justify-between w-full max-lg:justify-center max-lg:hidden">
                      <div class="max-lg:text-center text-lg font-normal text-white lg:text-opacity-60"><?php the_time('m.d.Y'); ?></div>
                      <?php $booknow_link = get_field('booknow_link', 'option');
                      if( $booknow_link ): 
                          $booknow_link_url = $booknow_link['url'];
                          $booknow_link_title = $booknow_link['title'];
                          $booknow_link_target = $booknow_link['target'] ? $booknow_link['target'] : '_self';
                          ?>
                          <a href="<?php echo esc_url( $booknow_link_url ); ?>" target="<?php echo esc_attr( $booknow_link_target ); ?>" class="inline-flex gap-x-5 text-xl font-bold text-white hover:text-accent max-lg:hidden"><?php echo esc_html( $booknow_link_title ); ?><i class="icomoon icon-whatsapp text-2xl leading-none font-normal"></i></a>
                      <?php endif; ?>
                    </div>
                  </div>
                  <div class="flex justify-center w-full h-20 border border-t-0 border-white border-opacity-10 rounded-b-[1.25rem] lg:hidden">
                    <div class="flex items-center justify-center w-1/2 text-xl font-bold text-white even:border-l even:border-l-white even:border-opacity-10">
                      <a href="<?php echo esc_url( $booknow_link_url ); ?>" target="<?php echo esc_attr( $booknow_link_target ); ?>" class="inline-flex gap-x-5 text-xl font-bold text-white hover:text-accent"><?php echo esc_html( $booknow_link_title ); ?> <i class="icomoon icon-whatsapp text-2xl leading-none font-normal"></i></a>
                    </div>
                  </div>
                </div>
              <?php 
            }
          } else {
            // Постов не найдено
          }
          wp_reset_postdata(); // Сбрасываем $post
          ?>
        </div>
      </div>
    </section>


    <section class="ba z-0 relative pb-24 xl:pb-36">
      <div class="mx-auto container px-3 sm:px-6 lg:px-16">
        <div class="relative flex flex-col justify-between flex-wrap gap-y-10 max-lg:items-center lg:flex-row">
          <div class="w-full xl:w-6/12">
            <h2 class="text-3xl leading-8 font-medium text-white uppercase mb-12 max-lg:text-center sm:text-5xl sm:leading-[1.1] lg:text-6xl lg:leading-[1.1]">
              are you ready to plunge into the wonderful world?</h2>
            <div class="group flex items-center flex-col gap-y-5 text-white lg:items-start lg:gap-y-9">
              <div class="text-lg leading-5 max-lg:font-semibold lg:text-3xl">Contacts</div>
              <p class="max-lg:text-center text-lg leading-5 lg:text-xl lg:leading-6">123 Main Street, City, Country, Postal
                Code</p>
              <a href="tel:+3700000000"
                class="max-lg:text-center text-lg leading-5 hover:text-accent lg:text-xl lg:leading-6">+37 000 000 00</a>
              <a href="mailto:Info@mail.com"
                class="max-lg:text-center text-lg leading-5 hover:text-accent lg:text-xl lg:leading-6">Info@mail.com</a>
              <a href="#"
                class="inline-flex items-center justify-center gap-x-6 py-6 px-8 text-lg leading-5 font-medium text-white rounded-full border-white border border-opacity-20 backdrop-blur-lg bg-card max-lg:order-1 max-lg:mt-4 lg:text-xl lg:leading-6 hover:shadow-myShadow1">Write<i
                  class="icomoon icon-whatsapp text-2xl leading-none font-normal"></i></a>
            </div>
          </div>
          <div class="w-full p-7 text-white border-white border border-opacity-20 backdrop-blur-lg bg-card h-fit lg:p-12 lg:pb-20 xl:w-5/12">
            <form>
              <div class="mb-5 lg:mb-6">
                <label for="name" class="hidden"></label>
                <input type="text" id="name"
                  class="h-[60px] bg-transparent border border-[#3B4A59] text-white text-lg leading-4 text-opacity-50 outline-none focus:text-opacity-80 focus:border-accent block w-full p-5"
                  placeholder="Name" required>
              </div>
              <div class="mb-5 lg:mb-6">
                <label for="email" class="hidden"></label>
                <input type="email" id="email"
                  class="h-[60px] bg-transparent border border-[#3B4A59] text-white text-lg leading-4 text-opacity-50 outline-none focus:text-opacity-80 focus:border-accent block w-full p-5"
                  placeholder="Email" required>
              </div>
              <div class="mb-5 lg:mb-6">
                <label for="tel" class="hidden"></label>
                <input type="tel" id="tel"
                  class="h-[60px] bg-transparent border border-[#3B4A59] text-white text-lg leading-4 text-opacity-50 outline-none focus:text-opacity-80 focus:border-accent block w-full p-5"
                  placeholder="Phone number" required>
              </div>
              <div class="flex items-center max-lg:justify-center max-lg:flex-col w-full gap-7 mt-10 lg:mt-[72px]">
                <button type="submit"
                  class="w-full h-[60px] text-white font-medium text-lg leading-none px-7 py-5 text-center border-white border border-opacity-20 lg:w-auto lg:text-xl lg:leading-none hover:backdrop-blur-lg hover:bg-card">Send</button>
                <p class="text-white text-sm font-normal opacity-50 max-lg:text-center">by clicking the "submit" button, you
                  agree to the <a href="#" class="underline hover:no-underline">privacy policy</a></p>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>


<?php get_footer(); ?>