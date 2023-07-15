<?php get_header(); ?>

    <!-- Готово -->
    <section class="category relative z-0 bg-cover bg-no-repeat bg-center pt-32 pb-16 mb-24 sm:mb-32 min-h-[680px] sm:min-h-[90vh] lg:pt-[230px] lg:pb-48" style="background-image: url(<?php the_field('trip_bg'); ?>);">
      <div class="mx-auto container px-3 sm:px-6 lg:px-16">
        <div class="content max-lg:flex max-lg:flex-col max-lg:items-center max-lg:justify-center">
          <h1 class="text-white uppercase font-medium max-w-6xl text-3xl leading-9 mb-7 max-lg:mb-60 max-lg:text-center md:text-6xl md:leading-[66px] lg:mb-10 2xl:text-8xl 2xl:leading-[100px]"><?php the_field('trip_title'); ?></h1>
          <div class="max-lg:text-center text-lg leading-6 text-white max-w-2xl max-lg:order-2 lg:text-xl lg:leading-8 lg:mb-16"><?php the_field('trip_text'); ?></div>
          <div class="flex gap-x-5 sm:gap-x-10 max-lg:order-1 max-lg:mb-7">
            <?php $booknow_link = get_field('booknow_link', 'option');
            if( $booknow_link ): 
                $booknow_link_url = $booknow_link['url'];
                $booknow_link_title = $booknow_link['title'];
                $booknow_link_target = $booknow_link['target'] ? $booknow_link['target'] : '_self';
                ?>
                <a href="<?php echo esc_url( $booknow_link_url ); ?>" target="<?php echo esc_attr( $booknow_link_target ); ?>" class="inline-flex items-center justify-center gap-x-6 py-6 px-8 text-lg leading-5 font-medium text-white rounded-full border-white border border-opacity-20 bg-card max-lg:backdrop-blur-lg lg:text-main lg:border-opacity-50 lg:bg-lightGrey lg:text-xl lg:leading-6 hover:bg-accent hover:border-accent"><?php echo esc_html( $booknow_link_title ); ?><i class="icomoon icon-whatsapp text-2xl leading-none font-normal"></i></a>
            <?php endif; ?>
            <?php
            $trip_video = get_field('trip_video');
            if( $trip_video ): ?>
              <a data-fancybox href="<?php echo $trip_video ?>" class="inline-flex items-center justify-center gap-x-6 p-6 text-lg leading-5 font-medium text-white rounded-full border-white border border-opacity-20 backdrop-blur-lg bg-card max-lg:order-1 lg:text-xl lg:leading-6 hover:shadow-myShadow1 max-lg:hidden"><i class="icomoon icon-youtube text-2xl leading-none font-normal"></i></a>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </section>
    <!-- Готово -->
    <section class="tripbl overflow-hidden relative z-0 pt-0 pb-16 mb-14 lg:pt-60 2xl:py-64">
      <div class="second-button-next swiper-button-next z-50 relative left-auto right-auto top-auto w-6 h-6 text-[#3B4855] mt-0 hover:shadow-myShadow1 lg:w-[74px] lg:h-[74px] lg:border-white lg:border lg:border-opacity-20 lg:rounded-full lg:backdrop-blur-lg lg:bg-card lg:text-white lg:absolute lg:right-[4rem] lg:bottom-16 lg:-mt-0 2xl:top-2/4 2xl:-mt-10 max-lg:hidden"></div>
      <div class="swiper-nav relative flex items-center justify-center mb-5 lg:ml-auto lg:absolute lg:right-16 lg:top-2">
        <div class="swiper-button-prev relative left-auto right-auto top-auto w-6 h-6 text-[#3B4855] mt-0 hover:text-accent lg:hidden"></div>
        <div class="swiper-pagination relative bottom-auto z-10"></div>
        <div class="swiper-button-next relative left-auto right-auto top-auto w-6 h-6 text-[#3B4855] mt-0 hover:text-accent lg:hidden"></div>
      </div>
      <!-- Swiper -->
      <?php if(have_rows('trip_block_slider')) : ?>
      <div class="swiper tripblSwiper lg:absolute left-0 top-0 w-full h-full z-[-2] max-lg:mb-10">
        <div class="swiper-wrapper">
          <?php while(have_rows('trip_block_slider')) : the_row(); ?>
          <?php $img = get_sub_field('img'); ?>
            <div class="swiper-slide">
              <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
            </div>
          <?php endwhile; ?>
        </div>
      </div>
      <?php else : endif; ?>
      <div class="mx-auto relative container px-3 sm:px-6 lg:px-16">
        <div class="content flex items-center justify-center flex-col gap-x-10 lg:flex-row-reverse lg:justify-between">
          <div class="w-full lg:w-4/12 2xl:w-6/12 relative">
            <h1 class="relative text-white uppercase font-medium text-3xl leading-9 mb-7 max-lg:mb-5 max-lg:text-center md:text-6xl md:leading-[66px] lg:w-min 2xl:text-8xl 2xl:leading-[100px]"><?php the_field('trip_block_title'); ?><img src="<?php the_field('cta_decor', 'option'); ?>" class="absolute w-40 rotate-[30deg] max-lg:hidden lg:-right-24 2xl:-right-56 lg:-top-16 lg:z-10 2xl:w-80" alt=""></h1>
          </div>
          <div class="py-8 px-6 border-white border border-opacity-20 backdrop-blur-lg bg-card lg:p-12 lg:w-8/12 2xl:w-5/12">
            <div class="grid gap-y-7 max-lg:text-center text-lg leading-6 text-white text-opacity-60 lg:text-xl lg:leading-8"><?php the_field('trip_block_text'); ?></div>
          </div>
        </div>
      </div>
    </section>
    <!-- Готово -->
    <section class="ba z-0 relative pb-24 xl:pb-36">
      <div class="mx-auto container px-3 sm:px-6 lg:px-16">
        <div class="relative flex flex-col justify-between flex-wrap gap-y-10 max-lg:items-center lg:flex-row">
          <div class="w-full xl:w-6/12">
            <h2 class="text-3xl leading-8 font-medium text-white uppercase mb-12 max-lg:text-center sm:text-5xl sm:leading-[1.1] lg:text-6xl lg:leading-[1.1]"><?php the_field('cta_title', 'option') ?></h2>
            <div class="group flex items-center flex-col gap-y-5 text-white lg:items-start lg:gap-y-9">
              <div class="text-lg leading-5 max-lg:font-semibold lg:text-3xl"><?php the_field('cta_subtitle', 'option'); ?></div>
              <p class="max-lg:text-center text-lg leading-5 lg:text-xl lg:leading-6"><?php the_field('address', 'option'); ?></p>
              <?php $phone = get_field('phone', 'option');
              if( $phone ): 
                  $phone_url = $phone['url'];
                  $phone_title = $phone['title'];
                  $phone_target = $phone['target'] ? $phone['target'] : '_self';
                  ?>
                  <a href="<?php echo esc_url( $phone_url ); ?>" target="<?php echo esc_attr( $phone_target ); ?>" class="max-lg:text-center text-lg leading-5 hover:text-accent lg:text-xl lg:leading-6"><?php echo esc_html( $phone_title ); ?></a>
              <?php endif; ?>
              <?php $email = get_field('email', 'option');
              if( $email ): 
                  $email_url = $email['url'];
                  $email_title = $email['title'];
                  $email_target = $email['target'] ? $email['target'] : '_self';
                  ?>
                  <a href="<?php echo esc_url( $email_url ); ?>" target="<?php echo esc_attr( $email_target ); ?>" class="max-lg:text-center text-lg leading-5 hover:text-accent lg:text-xl lg:leading-6"><?php echo esc_html( $email_title ); ?></a>
              <?php endif; ?>
              <?php $whatsapp_write = get_field('whatsapp_write', 'option');
              if( $whatsapp_write ): 
                  $whatsapp_write_url = $whatsapp_write['url'];
                  $whatsapp_write_title = $whatsapp_write['title'];
                  $whatsapp_write_target = $whatsapp_write['target'] ? $whatsapp_write['target'] : '_self';
                  ?>
                  <a href="<?php echo esc_url( $whatsapp_write_url ); ?>" target="<?php echo esc_attr( $whatsapp_write_target ); ?>" class="inline-flex items-center justify-center gap-x-6 py-6 px-8 text-lg leading-5 font-medium text-white rounded-full border-white border border-opacity-20 backdrop-blur-lg bg-card max-lg:order-1 max-lg:mt-4 lg:text-xl lg:leading-6 hover:shadow-myShadow1"><?php echo esc_html( $whatsapp_write_title ); ?><i class="icomoon icon-whatsapp text-2xl leading-none font-normal"></i></a>
              <?php endif; ?>
            </div>
          </div>
          <div class="w-full p-7 text-white border-white border border-opacity-20 backdrop-blur-lg bg-card h-fit lg:p-12 lg:pb-20 xl:w-5/12">
            <?php echo do_shortcode('[contact-form-7 id="155" title="Form Are you ready"]'); ?>
          </div>
        </div>
      </div>
    </section>

<?php get_footer(); ?>