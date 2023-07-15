<?php
/*
Template Name: About us
*/
get_header(); ?>

    <!-- Готово -->
    <section class="about-us overflow-hidden relative z-0 bg-cover bg-no-repeat bg-right-top pt-32 pb-16 mb-14 lg:pt-60 2xl:py-80" style="background-image: url(<?php the_field('about_bg'); ?>);">
      <div class="mx-auto container px-3 sm:px-6 lg:px-16">
        <div class="content flex items-center justify-center flex-col gap-x-10 lg:flex-row-reverse lg:justify-between">
          <div class="lg:w-4/12 2xl:w-6/12 relative">
            <h1 class="relative text-white uppercase font-medium max-w-[1440px] text-3xl leading-9 mb-7 max-lg:mb-64 max-lg:text-center lg:w-fit md:text-6xl md:leading-[66px] 2xl:text-8xl 2xl:leading-[100px]"><?php the_field('about_title'); ?><img src="<?php the_field('about_decor'); ?>" class="absolute w-40 rotate-[30deg] max-lg:hidden lg:-right-24 2xl:-right-56 lg:-top-16 lg:z-10 2xl:w-80" alt=""></h1>
          </div>
          <div class="py-8 px-6 border-white border border-opacity-20 backdrop-blur-lg bg-card lg:p-12 lg:w-8/12 2xl:w-5/12">
            <div class="grid gap-y-7 max-lg:text-center text-lg leading-6 text-white text-opacity-60 lg:text-xl lg:leading-8"><?php the_field('about_text'); ?></div>
          </div>
        </div>
      </div>
      <div class="bg-image absolute left-0 top-0 w-full h-full object-cover z-[-2] lg:hidden"><img src="<?php the_field('about_bg_mob'); ?>" class="min-w-full max-w-none min-h-full object-cover" alt=""></div>
    </section>

    <!-- Частично готово. Не сделана карта. -->    
    <section class="place mb-32">
      <div class="mx-auto container px-3 sm:px-6 lg:px-16">
        <h2 class="text-6xl text-white font-medium max-lg:text-center text-opacity-5 uppercase mb-5 lg:text-7xl lg:mb-9 xl:text-9xl 2xl:text-[10rem] max-2xl:leading-none"><?php the_field('place_title', 'option'); ?></h2>
        <div class="max-w-xl mb-6 max-lg:text-center text-lg leading-6 text-white max-lg:mx-auto lg:text-xl lg:leading-8 lg:mb-8"><?php the_field('place_text', 'option'); ?></div>
      </div>
      <div class="flex max-lg:flex-col mx-auto px-3 sm:px-6 lg:pr-0 justify-center gap-y-10 items-center gap-x-5 lg:justify-between container--fluid">
        <div class="map relative max-lg:w-full h-[520px] lg:w-2/5 lg:h-[610px] 3xl:h-[750px]">
          <div class="map-baloon-info absolute max-w-[230px] py-2 pr-2 pl-4 rounded-2xl rounded-bl-none backdrop-blur-lg text-left text-white text-opacity-80 text-lg leading-5 lg:text-xl lg:leading-6">123 Main Street, City, Country, Postal Code</div>
          <img src="./img/placemark.svg" class="absolute top-2/4 left-2/4" alt="">
          <img src="img/map-img.jpg" class="w-full h-full object-cover" alt="">
        </div>
        <!-- Swiper -->
        <?php if(have_rows('place_slider', 'option')) : ?>
        <div class="swiper placeSwiper max-lg:w-full h-auto lg:w-3/5 lg:h-[610px] 3xl:h-[750px]">
          <div class="swiper-nav relative flex items-center justify-center max-lg:mb-5 lg:ml-auto lg:absolute lg:right-16 lg:bottom-12">
            <div class="swiper-button-prev relative left-auto right-auto top-auto w-6 h-6 text-[#3B4855] mt-0 hover:text-accent lg:hidden"></div>
            <div class="swiper-pagination relative bottom-auto"></div>
            <div class="swiper-button-next relative left-auto right-auto top-auto w-6 h-6 text-[#3B4855] mt-0 hover:text-accent lg:hidden"></div>
          </div>
          <div class="swiper-wrapper max-lg:h-[520px]">
            <?php while(have_rows('place_slider', 'option')) : the_row(); ?>
            <?php $img = get_sub_field('img', 'option'); ?>
              <div class="swiper-slide">
                <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
              </div>
            <?php endwhile; ?>
          </div>
        </div>
        <?php else : endif; ?>
      </div>
    </section>

    <!-- Готово -->
    <section class="ba z-0 relative pb-24 xl:pb-36">
      <div class="mx-auto container px-3 sm:px-6 lg:px-16">
        <div class="relative flex flex-col justify-between flex-wrap gap-y-10 max-lg:items-center lg:flex-row">
          <div class="w-full xl:w-6/12">
            <h2 class="text-3xl leading-8 font-medium text-white uppercase mb-12 max-lg:text-center sm:text-5xl sm:leading-[1.1] lg:text-6xl lg:leading-[1.1]"><?php the_field('about_cta_title') ?></h2>
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