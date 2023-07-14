<?php 
/*
Template Name: Home
*/
get_header(); ?>
    <!-- Готово -->
    <section class="hero relative z-0 pt-32 pb-16 mb-24 sm:mb-32 min-h-[680px] sm:min-h-[90vh] lg:pt-[230px] lg:pb-48">
      <div class="mx-auto container px-3 sm:px-6 lg:px-16">
        <div class="content max-lg:flex max-lg:flex-col max-lg:items-center max-lg:justify-center">
          <h1 class="text-white uppercase font-medium max-w-[1440px] text-3xl leading-9 mb-7 max-lg:mb-64 max-lg:text-center md:text-6xl md:leading-[66px] 2xl:text-8xl 2xl:leading-[100px]"><?php the_field('hero_title'); ?></h1>
          <div class="max-lg:text-center text-lg leading-6 text-white max-w-2xl lg:text-xl lg:leading-8 lg:mb-14"><?php the_field('hero_text'); ?></div>
        </div>
      </div>
      <div class="swiper-nav relative flex items-center justify-center max-lg:hidden lg:ml-auto lg:absolute lg:right-16 lg:bottom-12">
        <div class="swiper-pagination relative bottom-auto z-10"></div>
      </div>
      <!-- Swiper -->
      <?php if( have_rows('hero_slider') ): ?>
      <div class="swiper heroSwiper absolute left-0 top-0 w-full h-full z-[-2] max-lg:hidden">
        <div class="swiper-wrapper">
          <?php while( have_rows('hero_slider') ) : the_row(); ?>
              <div class="swiper-slide"><img src="<?php the_sub_field('img'); ?>" alt=""></div>
          <?php endwhile; ?>
        </div>
      </div>
      <?php else : endif; ?>
      <div class="bg-image absolute left-0 top-0 w-full h-full object-cover z-[-2] lg:hidden">
        <img src="<?php the_field('hero_mob_bg'); ?>" class="w-full h-full object-cover" alt="">
      </div>
    </section>
    <!-- Готово -->
    <section class="aboutbl mb-32 bg-no-repeat max-lg:bg-200 lg:bg-center lg:bg-contain" style="background-image: url(<?php the_field('aboutbl_bg'); ?>);">
      <div class="mx-auto container px-3 sm:px-6 lg:px-16">
        <h2 class="text-6xl text-white font-medium text-center text-opacity-5 uppercase mb-8 lg:hidden"><?php the_field('aboutbl_title'); ?></h2>
        <div class="flex items-end flex-wrap gap-y-32 -mx-3 sm:-mx-6 lg:gap-x-10 xl:gap-x-14 lg:flex-nowrap lg:-mx-0 2xl:gap-x-24">
          <div class="about-card relative w-fullMobile sm:w-fullTablet lg:basis-2/5">
            <div class="max-lg:absolute max-sm:left-3 max-sm:right-3 max-lg:p-8 max-lg:left-6 max-lg:right-6 max-lg:-bottom-10 max-lg:border-white max-lg:border max-lg:border-opacity-20 max-lg:backdrop-blur-lg max-lg:bg-card max-lg:text-center text-lg leading-6 text-white lg:text-xl lg:leading-8 lg:mb-7">
              <?php the_field('aboutbl_text_left'); ?>
            </div>
            <?php $aboutbl_img_left = get_field('aboutbl_img_left');
            if ($aboutbl_img_left) : ?>
              <img src="<?php echo esc_url($aboutbl_img_left['url']); ?>" 
                class="w-full max-sm:aspect-[39/53] sm:aspect-square object-cover lg:aspect-[66/62]"
                alt="<?php echo esc_attr($aboutbl_img_left['alt']); ?>">
            <?php endif; ?>
          </div>
          <div class="about-card relative w-fullMobile sm:w-fullTablet lg:basis-3/5">
            <h2 class="hidden text-white font-medium uppercase mb-8 lg:text-7xl lg:text-opacity-15 lg:block xl:text-9xl 2xl:text-[10rem]"><?php the_field('aboutbl_title'); ?></h2>
            <div class="max-lg:absolute max-sm:left-3 max-sm:right-3 max-lg:left-6 max-lg:right-6 max-lg:top-1/2 max-lg:-translate-y-1/2 max-lg:text-center text-lg leading-6 text-white lg:text-xl lg:leading-8 lg:mb-14 lg:max-w-4xl">
              <?php the_field('aboutbl_text_right'); ?>
            </div>
            <?php $aboutbl_img_right = get_field('aboutbl_img_right');
            if ($aboutbl_img_right) : ?>
              <img src="<?php echo esc_url($aboutbl_img_right['url']); ?>" 
                class="w-full max-sm:aspect-[39/53] sm:aspect-square object-cover lg:aspect-[103/50]" 
                alt="<?php echo esc_attr($aboutbl_img_right['alt']); ?>">
            <?php endif; ?>
          </div>
        </div>
      </div>
    </section>
    <!-- Готово -->
    <section class="z-0 about-diving relative pt-4 pb-20 mb-32 bg-no-repeat bg-center bg-cover max-lg:mt-64 lg:py-20 2xl:py-32" style="background-image: url('<?php the_field('about_diving_bg'); ?>');">
      <div class="z-10 relative mx-auto container px-3 sm:px-6 lg:px-16">
        <img src="<?php the_field('about_diving_decor'); ?>" class="absolute w-32 h-32 md:w-42 md:h-42 max-lg:left-1/2 max-lg:-translate-x-1/2 max-lg:-top-48 lg:right-16 lg:bottom-0 xl:w-52 xl:h-52" alt="">
        <div class="py-8 px-6 border-white border border-opacity-20 backdrop-blur-lg bg-card lg:p-12 lg:w-8/12 2xl:w-5/12">
          <h2 class="text-2xl text-white font-medium max-lg:text-center mb-8 lg:mb-10"><?php the_field('about_diving_title'); ?></h2>
          <div class="grid gap-y-7 max-lg:text-center text-lg leading-6 text-white text-opacity-60 lg:text-xl lg:leading-8">
            <?php the_field('about_diving_text'); ?>
          </div>
        </div>
      </div>
    </section>

    <section class="standartbl mb-32">
      <div class="mx-auto container px-3 sm:px-6 lg:px-16">
        <div class="flex max-lg:flex-col max-lg:justify-center gap-y-5 items-center gap-x-7 mb-6 lg:items-end">
          <h2 class="text-6xl text-white font-medium max-lg:text-center text-opacity-5 uppercase lg:text-7xl lg:text-opacity-15 xl:text-9xl 2xl:text-[10rem] max-2xl:leading-none">TRIPS</h2>
          <p class="text-lg leading-6 text-white max-w-3xl mb-3 max-lg:text-center lg:text-xl lg:leading-8 lg:max-w-[40%]">
            Dive into captivating freediving adventures, exploring stunning underwater realms and encountering mesmerizing marine life in their natural habitat
          </p>
          <div class="swiper-nav relative flex items-center justify-center lg:ml-auto">
            <div class="swiper-button-prev relative left-auto right-auto top-auto w-6 h-6 text-[#3B4855] mt-0 hover:text-accent lg:hidden"></div>
            <div class="swiper-pagination relative bottom-auto"></div>
            <div class="swiper-button-next relative left-auto right-auto top-auto w-6 h-6 text-[#3B4855] mt-0 hover:text-accent lg:hidden"></div>
          </div>
        </div>
        <!-- Swiper -->
        <div class="swiper standartSwiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="card-wrapper">
                <div class="z-0 card flex flex-col justify-between relative w-full py-7 px-9 bg-no-repeat bg-cover bg-center min-h-[540px] lg:justify-end lg:p-12 lg:min-h-[660px] 2xl:min-h-[740px]" style="background-image: url('./img/freediving-adventure-on-tropical-reefs.jpg');">
                  <!-- дата -->
                  <div class="flex items-center justify-center w-full text-center text-lg font-normal text-white lg:hidden">02.02.2023</div>
                  <a href="#" class="card-content z-10">
                    <h3 class="max-lg:text-center text-xl text-white font-medium max-sm:text-center mb-5 lg:mb-11">Freediving Adventure on Tropical Reefs</h3>
                    <div class="max-lg:text-center text-lg leading-6 text-white text-opacity-80 lg:mb-9 lg:text-xl lg:leading-7">
                      <p>Get ready for an exhilarating freediving journey to tropical reefs, where you can explore the ocean depths, immerse yourself in the vibrant underwater world, and encounter a diverse range of marine life</p>
                    </div>
                  </a>
                  <div class="flex items-center justify-between w-full max-lg:justify-center max-lg:hidden">
                    <div class="max-lg:text-center text-lg font-normal text-white lg:text-opacity-60">02.02.2023</div>
                    <a href="#" class="inline-flex gap-x-5 text-xl font-bold text-white hover:text-accent max-lg:hidden">Book now <i class="icomoon icon-whatsapp text-2xl leading-none font-normal"></i></a>
                  </div>
                </div>
                <div class="flex justify-center w-full h-20 border border-t-0 border-white border-opacity-10 rounded-b-[1.25rem] lg:hidden">
                  <div class="flex items-center justify-center w-1/2 text-xl font-bold text-white even:border-l even:border-l-white even:border-opacity-10">
                    <a href="#" class="inline-flex gap-x-5 text-xl font-bold text-white hover:text-accent">Book now <i class="icomoon icon-whatsapp text-2xl leading-none font-normal"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="card-wrapper">
                <div class="z-0 card flex flex-col justify-between relative w-full py-7 px-9 bg-no-repeat bg-cover bg-center min-h-[540px] lg:justify-end lg:p-12 lg:min-h-[660px] 2xl:min-h-[740px]" style="background-image: url('./img/unique-freediving-experience-with-dolphins.jpg');">
                  <!-- дата -->
                  <div class="flex items-center justify-center w-full text-center text-lg font-normal text-white lg:hidden">02.02.2023</div>
                  <a href="#" class="card-content z-10">
                    <h3 class="max-lg:text-center text-xl text-white font-medium max-sm:text-center mb-5 lg:mb-11">Unique Freediving Experience with Dolphins</h3>
                    <div class="max-lg:text-center text-lg leading-6 text-white text-opacity-80 lg:mb-9 lg:text-xl lg:leading-7">
                      <p>Join us on an unforgettable journey where you can dive into a world of freedom and come face to face with amazing
                      dolphins. Experienced instructors will guide you through unforgettable freediving sessions</p>
                    </div>
                  </a>
                  <div class="flex items-center justify-between w-full max-lg:justify-center max-lg:hidden">
                    <div class="max-lg:text-center text-lg font-normal text-white lg:text-opacity-60">02.02.2023</div>
                    <a href="#" class="inline-flex gap-x-5 text-xl font-bold text-white hover:text-accent max-lg:hidden">Book now <i class="icomoon icon-whatsapp text-2xl leading-none font-normal"></i></a>
                  </div>
                </div>
                <div class="flex justify-center w-full h-20 border border-t-0 border-white border-opacity-10 rounded-b-[1.25rem] lg:hidden">
                  <div class="flex items-center justify-center w-1/2 text-xl font-bold text-white even:border-l even:border-l-white even:border-opacity-10">
                    <a href="#" class="inline-flex gap-x-5 text-xl font-bold text-white hover:text-accent">Book now <i class="icomoon icon-whatsapp text-2xl leading-none font-normal"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="card-wrapper">
                <div class="z-0 card flex flex-col justify-between relative w-full py-7 px-9 bg-no-repeat bg-cover bg-center min-h-[540px] lg:justify-end lg:p-12 lg:min-h-[660px] 2xl:min-h-[740px]" style="background-image: url('./img/freediving-among-sunken-treasures.jpg');">
                  <!-- дата -->
                  <div class="flex items-center justify-center w-full text-center text-lg font-normal text-white lg:hidden">02.02.2023</div>
                  <a href="#" class="card-content z-10">
                    <h3 class="max-lg:text-center text-xl text-white font-medium max-sm:text-center mb-5 lg:mb-11">Freediving among Sunken Treasures</h3>
                    <div class="max-lg:text-center text-lg leading-6 text-white text-opacity-80 lg:mb-9 lg:text-xl lg:leading-7">
                      <p>Embark on an exciting adventure to explore sunken treasures at the bottom of the ocean. Through freediving, you'll
                      experience the thrill of adventure and unravel the secrets of ancient shipwrecks</p>
                    </div>
                  </a>
                  <div class="flex items-center justify-between w-full max-lg:justify-center max-lg:hidden">
                    <div class="max-lg:text-center text-lg font-normal text-white lg:text-opacity-60">02.02.2023</div>
                    <a href="#" class="inline-flex gap-x-5 text-xl font-bold text-white hover:text-accent max-lg:hidden">Book now <i class="icomoon icon-whatsapp text-2xl leading-none font-normal"></i></a>
                  </div>
                </div>
                <div class="flex justify-center w-full h-20 border border-t-0 border-white border-opacity-10 rounded-b-[1.25rem] lg:hidden">
                  <div class="flex items-center justify-center w-1/2 text-xl font-bold text-white even:border-l even:border-l-white even:border-opacity-10">
                    <a href="#" class="inline-flex gap-x-5 text-xl font-bold text-white hover:text-accent">Book now <i class="icomoon icon-whatsapp text-2xl leading-none font-normal"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="standartbl max-lg:mb-32">
      <div class="mx-auto container px-3 sm:px-6 lg:px-16">
        <div class="flex max-lg:flex-col max-lg:justify-center gap-y-5 items-center gap-x-7 mb-6 lg:items-end">
          <h2 class="text-6xl text-white font-medium max-lg:text-center text-opacity-5 uppercase lg:text-7xl lg:text-opacity-15 xl:text-9xl 2xl:text-[10rem] max-2xl:leading-none">Courses</h2>
          <div class="swiper-nav relative flex items-center justify-center lg:ml-auto">
            <div class="swiper-button-prev relative left-auto right-auto top-auto w-6 h-6 text-[#3B4855] mt-0 hover:text-accent lg:hidden"></div>
            <div class="swiper-pagination relative bottom-auto"></div>
            <div class="swiper-button-next relative left-auto right-auto top-auto w-6 h-6 text-[#3B4855] mt-0 hover:text-accent lg:hidden"></div>
          </div>
        </div>
        <!-- Swiper -->
        <div class="swiper standartSwiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="card-wrapper">
                <div class="z-0 card flex flex-col justify-between relative w-full py-7 px-9 bg-no-repeat bg-cover bg-center min-h-[540px] lg:justify-end lg:p-12 lg:min-h-[660px] 2xl:min-h-[740px]" style="background-image: url('./img/advanced-freediving-training-program.jpg');">
                  <!-- дата -->
                  <div class="flex items-center justify-center w-full text-center text-lg font-normal text-white lg:hidden">02.02.2023</div>
                  <a href="#" class="card-content z-10">
                    <h3 class="max-lg:text-center text-xl text-white font-medium max-sm:text-center mb-5 lg:mb-11">Advanced Freediving Training Program</h3>
                    <div class="max-lg:text-center text-lg leading-6 text-white text-opacity-80 lg:mb-9 lg:text-xl lg:leading-7">
                      <p>Take your freediving skills to new depths with our advanced training program. Designed for experienced freedivers, this
                      program focuses on advanced techniques, breath-hold exercises</p>
                    </div>
                  </a>
                  <div class="flex items-center justify-between w-full max-lg:hidden">
                    <div class="text-xl font-bold text-white">$ 100</div>
                    <a href="#" class="inline-flex gap-x-5 text-xl font-bold text-white hover:text-accent max-lg:hidden">Book now <i class="icomoon icon-whatsapp text-2xl leading-none font-normal"></i></a>
                  </div>
                </div>
                <div class="flex justify-center w-full h-20 border border-t-0 border-white border-opacity-10 rounded-b-[1.25rem] lg:hidden">
                  <div class="flex items-center justify-center w-1/2 text-xl font-bold text-white even:border-l even:border-l-white even:border-opacity-10">
                    <a href="#" class="inline-flex gap-x-5 text-xl font-bold text-white hover:text-accent">Book now <i class="icomoon icon-whatsapp text-2xl leading-none font-normal"></i></a>
                  </div>
                  <div class="flex items-center justify-center w-1/2 text-xl font-bold text-white even:border-l even:border-l-white even:border-opacity-10">$ 100</div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="card-wrapper">
                <div class="z-0 card flex flex-col justify-between relative w-full py-7 px-9 bg-no-repeat bg-cover bg-center min-h-[540px] lg:justify-end lg:p-12 lg:min-h-[660px] 2xl:min-h-[740px]" style="background-image: url('./img/intermediate-freediving-training-program.jpg');">
                  <!-- дата -->
                  <div class="flex items-center justify-center w-full text-center text-lg font-normal text-white lg:hidden">02.02.2023</div>
                  <a href="#" class="card-content z-10">
                    <h3 class="max-lg:text-center text-xl text-white font-medium max-sm:text-center mb-5 lg:mb-11">Intermediate Freediving Training Program</h3>
                    <div class="max-lg:text-center text-lg leading-6 text-white text-opacity-80 lg:mb-9 lg:text-xl lg:leading-7">
                      <p>Ready to take your freediving skills to the next level? Our intermediate training program is tailored for those who have
                      some experience in freediving and want to enhance their techniques and performance</p>
                    </div>
                  </a>
                  <div class="flex items-center justify-between w-full max-lg:hidden">
                    <div class="text-xl font-bold text-white">$ 100</div>
                    <a href="#" class="inline-flex gap-x-5 text-xl font-bold text-white hover:text-accent max-lg:hidden">Book now <i class="icomoon icon-whatsapp text-2xl leading-none font-normal"></i></a>
                  </div>
                </div>
                <div class="flex justify-center w-full h-20 border border-t-0 border-white border-opacity-10 rounded-b-[1.25rem] lg:hidden">
                  <div class="flex items-center justify-center w-1/2 text-xl font-bold text-white even:border-l even:border-l-white even:border-opacity-10">
                    <a href="#" class="inline-flex gap-x-5 text-xl font-bold text-white hover:text-accent">Book now <i class="icomoon icon-whatsapp text-2xl leading-none font-normal"></i></a>
                  </div>
                  <div class="flex items-center justify-center w-1/2 text-xl font-bold text-white even:border-l even:border-l-white even:border-opacity-10">$ 100</div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="card-wrapper">
                <div class="z-0 card flex flex-col justify-between relative w-full py-7 px-9 bg-no-repeat bg-cover bg-center min-h-[540px] lg:justify-end lg:p-12 lg:min-h-[660px] 2xl:min-h-[740px]" style="background-image: url('./img/beginner-freediving-training-program.jpg');">
                  <!-- дата -->
                  <div class="flex items-center justify-center w-full text-center text-lg font-normal text-white lg:hidden">02.02.2023</div>
                  <a href="#" class="card-content z-10">
                    <h3 class="max-lg:text-center text-xl text-white font-medium max-sm:text-center mb-5 lg:mb-11">Beginner Freediving Training Program</h3>
                    <div class="max-lg:text-center text-lg leading-6 text-white text-opacity-80 lg:mb-9 lg:text-xl lg:leading-7">
                      <p>Embark on an incredible journey into the world of freediving with our beginner training program. Perfect for those new
                      to freediving, this program provides a comprehensive introduction</p>
                    </div>
                  </a>
                  <div class="flex items-center justify-between w-full max-lg:hidden">
                    <div class="text-xl font-bold text-white">$ 100</div>
                    <a href="#" class="inline-flex gap-x-5 text-xl font-bold text-white hover:text-accent max-lg:hidden">Book now <i class="icomoon icon-whatsapp text-2xl leading-none font-normal"></i></a>
                  </div>
                </div>
                <div class="flex justify-center w-full h-20 border border-t-0 border-white border-opacity-10 rounded-b-[1.25rem] lg:hidden">
                  <div class="flex items-center justify-center w-1/2 text-xl font-bold text-white even:border-l even:border-l-white even:border-opacity-10">
                    <a href="#" class="inline-flex gap-x-5 text-xl font-bold text-white hover:text-accent">Book now <i class="icomoon icon-whatsapp text-2xl leading-none font-normal"></i></a>
                  </div>
                  <div class="flex items-center justify-center w-1/2 text-xl font-bold text-white even:border-l even:border-l-white even:border-opacity-10">$ 100</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Готово -->
    <section class="team z-0 max-lg:mb-32 max-lg:bg-none bg-cover bg-center lg:relative lg:pt-48 lg:pb-80 lg:mb-16" style="background-image: url(<?php the_field('team_bg'); ?>);">
      <div class="mx-auto container px-3 sm:px-6 lg:px-16">
        <h2 class="text-6xl text-white font-medium mb-16 max-lg:text-center text-opacity-5 uppercase lg:text-7xl lg:text-opacity-15 lg:mb-4 xl:text-9xl 2xl:text-[10rem] max-2xl:leading-none"><?php the_field('team_title'); ?></h2>
        <?php
        $team_cards = get_field('team_cards');
        if( $team_cards ): ?>
            <div class="grid gap-5 md:grid-cols-2">
            <?php foreach( $team_cards as $post ): 
                setup_postdata($post); ?>
                  <div class="py-8 pl-7 pr-4 text-white border-white border border-opacity-20 backdrop-blur-lg bg-card lg:p-10">
                    <div class="flex items-center w-full mb-7 lg:mb-10 xl:mb-12">
                      <img src="<?php the_post_thumbnail_url('thumbnail'); ?>" class="w-20 h-20 mr-7 aspect-square rounded-full lg:w-36 lg:h-36 lg:mr-11" alt="<?php the_title(); ?>">
                      <div class="flex flex-col">
                        <h3 class="text-xl leading-6 font-medium text-white mb-2 lg:mb-5"><?php the_title(); ?></h3>
                        <div class="text-base leading-4 text-white text-opacity-80 md:text-xl md:leading-7">
                          <?php if( has_excerpt() ){ the_excerpt(); } else {} ?>
                        </div>
                      </div>
                    </div>
                    <div class="grid gap-x-7 text-lg leading-6 text-white text-opacity-60 lg:max-w-3xl lg:text-xl lg:leading-7">
                      <?php the_content(); ?>
                    </div>
                  </div>
            <?php endforeach; ?>
            </div>
            <?php
            wp_reset_postdata(); ?>
        <?php endif; ?>
      </div>
    </section>
    <!-- Готово -->
    <section class="mb-32">
      <div class="mx-auto container px-3 sm:px-6 lg:px-16">
        <div class="relative flex flex-wrap max-lg:flex-col justify-center gap-y-5 items-center gap-x-7 lg:justify-between">
          <h2 class="text-6xl text-white font-medium max-lg:text-center text-opacity-5 uppercase lg:text-7xl lg:text-opacity-15 xl:text-9xl 2xl:text-[10rem] max-2xl:leading-none"><?php the_field('faq_title'); ?></h2>
          <?php 
          $faq_link = get_field('faq_link');
          if( $faq_link ): 
              $faq_link_url = $faq_link['url'];
              $faq_link_title = $faq_link['title'];
              ?>
              <a href="<?php echo esc_url($faq_link_url); ?>" class="inline-flex items-center justify-center py-6 px-8 text-lg leading-5 font-medium text-white rounded-full border-white border border-opacity-20 backdrop-blur-lg bg-card max-lg:order-1 max-lg:mt-3 lg:text-xl lg:leading-6 hover:shadow-myShadow1"><?php echo esc_html($faq_link_title); ?></a>
          <?php endif; ?>
          <div class="grid gap-y-5 w-full">
            <?php    
            global $post;
            $faq_query = new WP_Query( [
              'posts_per_page' => 5,
              'post_type' => 'faq',
              'orderby'        => 'ASC',
            ] );
            if ( $faq_query->have_posts() ) {
              while ( $faq_query->have_posts() ) {
                $faq_query->the_post();
                ?>
                  <div  class="accordion grid w-full">
                    <h3>
                      <button type="button" class="flex items-center justify-between w-full p-7 text-lg font-medium text-white border-white border border-opacity-20 backdrop-blur-lg bg-card lg:p-12 lg:text-xl hover:shadow-myShadow1">
                        <span class="text-left"><?php the_title(); ?></span>
                        <i class="icomoon icon-chevron w-5 h-5 text-lg text-white shrink-0 ml-3 lg:mr-5"></i>
                      </button>
                    </h3>
                    <div class="accordion-content">
                      <div class="p-7 w-full text-lg font-normal text-white text-opacity-80 border-white border border-t-0 border-opacity-20 backdrop-blur-lg bg-card lg:p-12 lg:text-xl">
                        <?php the_content(); ?>
                      </div>
                    </div>
                  </div>
                <?php 
              }
            } else {}
            wp_reset_postdata();
            ?>
          </div>
          <img src="<?php the_field('faq_decor'); ?>" class="absolute object-contain w-20 right-2 -top-14 aspect-[19/27] lg:w-48 lg:right-16 lg:-top-72" alt="">
        </div>
      </div>
    </section>
    <!-- Готово -->
    <section class="reviews mb-32 bg-center bg-no-repeat" style="background-image: url(<?php the_field('reviews_bg'); ?>);">
      <div class="mx-auto container px-3 sm:px-6 lg:px-16">
        <div class="relative flex flex-wrap max-lg:flex-col justify-center gap-y-5 items-center gap-x-7 lg:justify-between">
          <h2 class="text-6xl text-white font-medium max-lg:text-center text-opacity-5 uppercase lg:text-7xl lg:text-opacity-15 xl:text-9xl 2xl:text-[10rem] max-2xl:leading-none"><?php the_field('reviews_title'); ?></h2>
          <?php 
          $reviews_link = get_field('reviews_link');
          if( $reviews_link ): 
              $reviews_link_url = $reviews_link['url'];
              $reviews_link_title = $reviews_link['title'];
              ?>
              <a href="<?php echo esc_url($reviews_link_url); ?>" class="inline-flex items-center justify-center gap-x-6 py-6 px-8 text-lg leading-5 font-medium text-white rounded-full border-white border border-opacity-20 backdrop-blur-lg bg-card max-lg:order-1 max-lg:mt-3 lg:text-xl lg:leading-6 max-lg:hidden hover:shadow-myShadow1"><?php echo esc_html($reviews_link_title); ?><img src="<?php echo get_template_directory_uri() ?>/src/img/tripadvisor-logo.png" class="w-9 h-6" alt=""></a>
          <?php endif; ?>
        <?php
        $reviews_cards = get_field('reviews_cards');
        if( $reviews_cards ): ?>
            <div class="grid gap-5 w-full md:grid-cols-2 xl:grid-cols-3">
            <?php foreach( $reviews_cards as $post ): 
                setup_postdata($post); ?>
                <a href="<?php the_field('review_link'); ?>" target="_blank" class="flex flex-col py-8 pl-7 pr-4 text-white border-white border border-opacity-20 backdrop-blur-lg bg-card lg:min-h-[295px] lg:p-10">
                  <div class="line-clamp-4 text-lg leading-6 text-white text-opacity-80 mb-10 max-sm:text-center lg:text-xl lg:leading-7 lg:mb-14"><?php the_content(); ?></div>
                  <div class="flex items-center justify-between gap-x-5 w-full mt-auto">
                    <h3 class="text-lg leading-5 font-medium text-white lg:text-xl lg:leading-6"><?php the_title(); ?></h3>
                    <div class="rating flex items-center justify-center">
                      <div class="stars relative bg-no-repeat bg-[auto_100%] w-[106px] h-4 sm:w-40 sm:h-6" style="background-image: url(<?php echo get_template_directory_uri(); ?>/src/img/star-off.svg);">
                        <div class="progress absolute top-0 left-0 bg-no-repeat bg-[auto_100%] h-4 sm:h-6" style="background-image: url(<?php echo get_template_directory_uri(); ?>/src/img/star-on.svg);">
                      </div>
                    </div>
                      <div class="rating-agregate hidden"><?php the_field('review_rating'); ?></div>
                    </div>
                  </div>
                </a>
            <?php endforeach; ?>
            </div>
            <?php
            wp_reset_postdata(); ?>
        <?php endif; ?>
        </div>
      </div>
    </section>
    <!-- Частично готово. Не сделана карта. -->    
    <section class="place mb-32">
      <div class="mx-auto container px-3 sm:px-6 lg:px-16">
        <h2 class="text-6xl text-white font-medium max-lg:text-center text-opacity-5 uppercase mb-5 lg:text-7xl lg:mb-9 xl:text-9xl 2xl:text-[10rem] max-2xl:leading-none"><?php the_field('place_title', 'option'); ?></h2>
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

    <section class="ba z-0 relative bg-cover bg-center pt-28 pb-36" style="background-image: url('./img/cta-bg.jpg');">
      <div class="mx-auto container px-3 sm:px-6 lg:px-16">
        <div class="relative flex flex-col justify-between flex-wrap gap-y-10 max-lg:items-center lg:flex-row">
          <img src="./img/cta-decor.png" class="w-48 max-lg:mb-16 xl:absolute xl:w-80 xl:rotate-[30deg] xl:-right-44 xl:-top-5 xl:z-10" alt="">
          <div class="w-full xl:w-6/12">
            <h2 class="text-3xl leading-8 font-medium text-white uppercase mb-12 max-lg:text-center sm:text-5xl sm:leading-[1.1] lg:text-6xl lg:leading-[1.1]">are you ready to plunge into the wonderful world?</h2>
            <div class="group flex items-center flex-col gap-y-5 text-white lg:items-start lg:gap-y-9">
              <div class="text-lg leading-5 max-lg:font-semibold lg:text-3xl">Contacts</div>
              <p class="max-lg:text-center text-lg leading-5 lg:text-xl lg:leading-6">123 Main Street, City, Country, Postal Code</p>
              <a href="tel:+3700000000" class="max-lg:text-center text-lg leading-5 hover:text-accent lg:text-xl lg:leading-6">+37 000 000 00</a>
              <a href="mailto:Info@mail.com" class="max-lg:text-center text-lg leading-5 hover:text-accent lg:text-xl lg:leading-6">Info@mail.com</a>
              <a href="#" class="inline-flex items-center justify-center gap-x-6 py-6 px-8 text-lg leading-5 font-medium text-white rounded-full border-white border border-opacity-20 backdrop-blur-lg bg-card max-lg:order-1 max-lg:mt-4 lg:text-xl lg:leading-6 hover:shadow-myShadow1">Write<i class="icomoon icon-whatsapp text-2xl leading-none font-normal"></i></a>
            </div>
          </div>
          <div class="w-full p-7 text-white border-white border border-opacity-20 backdrop-blur-lg bg-card h-fit lg:p-12 lg:pb-20 xl:w-5/12">
            <form>
              <div class="mb-5 lg:mb-6">
                <label for="name" class="hidden"></label>
                <input type="text" id="name" class="h-[60px] bg-transparent border border-[#3B4A59] text-white text-lg leading-4 text-opacity-50 outline-none focus:text-opacity-80 focus:border-accent block w-full p-5" placeholder="Name" required>
              </div>
              <div class="mb-5 lg:mb-6">
                <label for="email" class="hidden"></label>
                <input type="email" id="email" class="h-[60px] bg-transparent border border-[#3B4A59] text-white text-lg leading-4 text-opacity-50 outline-none focus:text-opacity-80 focus:border-accent block w-full p-5" placeholder="Email" required>
              </div>
              <div class="mb-5 lg:mb-6">
                <label for="tel" class="hidden"></label>
                <input type="tel" id="tel" class="h-[60px] bg-transparent border border-[#3B4A59] text-white text-lg leading-4 text-opacity-50 outline-none focus:text-opacity-80 focus:border-accent block w-full p-5" placeholder="Phone number" required>
              </div>
              <div class="flex items-center max-lg:justify-center max-lg:flex-col w-full gap-7 mt-10 lg:mt-[72px]">
                <button type="submit" class="w-full h-[60px] text-white font-medium text-lg leading-none px-7 py-5 text-center border-white border border-opacity-20 lg:w-auto lg:text-xl lg:leading-none hover:backdrop-blur-lg hover:bg-card">Send</button>
                <p class="text-white text-sm font-normal opacity-50 max-lg:text-center">by clicking the "submit" button, you agree to the <a href="#" class="underline hover:no-underline">privacy policy</a></p>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

<?php get_footer(); ?>