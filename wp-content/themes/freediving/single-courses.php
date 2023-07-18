<?php get_header(); ?>

    <!-- Готово -->
    <section class="relative z-0 pt-32 pb-16 mb-24 sm:mb-32 min-h-[680px] sm:min-h-[90vh] lg:pt-[230px]">
      <div class="mx-auto container px-3 sm:px-6 lg:px-16">
        <div class="content max-lg:flex max-lg:flex-col max-lg:items-center max-lg:justify-center">
          <h1 class="text-white uppercase font-medium max-w-6xl text-3xl leading-9 mb-7 max-lg:mb-60 max-lg:text-center md:text-6xl md:leading-[66px] lg:mb-10 2xl:text-8xl 2xl:leading-[100px]"><?php the_field('course_title'); ?></h1>
          <div class="flex items-end gap-x-16 max-lg:order-2">
            <div class="grid gap-y-5 max-lg:text-center text-lg leading-6 text-white max-w-2xl lg:text-xl lg:leading-8"><?php the_field('course_text'); ?></div>
            <?php
            $course_video = get_field('course_video');
            if( $course_video ): ?>
              <a data-fancybox href="<?php echo $course_video ?>" class="inline-flex items-center justify-center gap-x-6 p-6 text-lg leading-5 font-medium text-white rounded-full border-white border border-opacity-20 backdrop-blur-lg bg-card max-lg:order-1 lg:text-xl lg:leading-6 hover:shadow-myShadow1 max-lg:hidden"><i class="icomoon icon-youtube text-2xl leading-none font-normal"></i></a>
            <?php endif; ?>
          </div>
          <?php $booknow_link = get_field('booknow_link', 'option');
          if( $booknow_link ): 
              $booknow_link_url = $booknow_link['url'];
              $booknow_link_title = $booknow_link['title'];
              $booknow_link_target = $booknow_link['target'] ? $booknow_link['target'] : '_self';
              ?>
              <div class="flex gap-x-5 sm:gap-x-10 max-lg:order-1 max-lg:mb-7">
                <a href="<?php echo esc_url( $booknow_link_url ); ?>" target="<?php echo esc_attr( $booknow_link_target ); ?>" class="inline-flex items-center justify-center gap-x-6 py-6 px-8 text-lg leading-5 font-medium text-white rounded-full border-white border border-opacity-20 bg-card max-lg:backdrop-blur-lg lg:text-main lg:border-opacity-50 lg:bg-lightGrey lg:text-xl lg:leading-6 hover:bg-accent hover:border-accent lg:hidden"><?php echo esc_html( $booknow_link_title ); ?><i class="icomoon icon-whatsapp text-2xl leading-none font-normal"></i></a>
              </div>
          <?php endif; ?>
        </div>
      </div>
    </section>

    <section class="coursebl overflow-hidden relative z-0 pt-0 mb-32">
      <div class="mx-auto relative container px-3 sm:px-6 lg:px-16">
        <div class="w-full pt-8 pb-12 px-6 max-lg:flex max-lg:flex-col max-lg:justify-center border-white border border-opacity-20 backdrop-blur-lg bg-card lg:p-12">
          <h2 class="text-xl leading-8 font-medium text-white uppercase mb-5 max-lg:text-center sm:text-3xl sm:leading-[1.1] lg:mb-10 lg:text-5xl lg:leading-[1.1]">Level 1 - SSI Freediving</h2>
          <div class="flex items-center gap-x-11 mb-12 lg:mb-16 max-lg:justify-center">
            <div class="flex items-center w-fit flex-wrap border border-white border-opacity-10">
              <div class="flex items-center justify-center text-xl text-white even:border-l even:border-l-white even:border-opacity-10 py-4 px-6 lg:text-3xl lg:py-6 lg:px-9">72 hr</div>
              <div class="flex items-center justify-center text-xl text-white even:border-l even:border-l-white even:border-opacity-10 py-4 px-6 lg:text-3xl lg:py-6 lg:px-9">$ 7 800</div>
            </div>
            <a href="#" class="inline-flex items-center justify-center gap-x-6 py-6 px-8 text-lg leading-5 font-medium text-white rounded-full border-white border border-opacity-20 bg-card max-lg:backdrop-blur-lg lg:text-main lg:border-opacity-50 lg:bg-lightGrey lg:text-xl lg:leading-6 hover:bg-accent hover:border-accent max-lg:hidden">Book now<i class="icomoon icon-whatsapp text-2xl leading-none font-normal"></i></a>
          </div>

          <div class="flex w-full flex-wrap gap-y-12">
            <div class="w-full text-xl text-white xl:even:border-l xl:even:border-l-white xl:even:border-opacity-10 xl:odd:pr-14 xl:even:pl-14 xl:w-1/2 lg:text-xl">
              <h4 class="mb-2">PRICE:</h4>
              <ul class="list-disc text-xl lg:text-xl">
                <li>Only course: 2 or more students: 265 euro/per person, including ALL fees (digital student manual, digital certification,
                pool and transportation fees and all necessary equipment). If you are alone in the course we will charge you a
                supplement of 20 euro. If you require a one on one tuition while there is already a level 1 course running, we will add
                40 euro to the base price.</li>
                <li>Accommodation: Want a place to stay? We have rooms in our apartments, at 30 euro/night (plus 25 euro cleaning fee at the end of your stay)</li>
                <li>Insurance: If you want to have an insurance covering your freediving activities and don’t have your own, do not worry!
                We offer insurance at only 14 euro / week. In this case it is best that you let us know before starting your courses.</li>
              </ul>
            </div>
            <div class="w-full text-xl text-white xl:even:border-l xl:even:border-l-white xl:even:border-opacity-10 xl:odd:pr-14 xl:even:pl-14 xl:w-1/2 lg:text-xl">
              <h4 class="mb-2">COURSE CONTENT:</h4>
              <ul class="list-disc text-xl lg:text-xl">
                <li>2 theory sessions</li>
                <li>1 dynamic apnea session</li>
                <li>1 static apnea session</li>
                <li>2 open water sessions</li>
              </ul>
            </div>
          </div>
          <a href="#" class="inline-flex items-center justify-center mx-auto mt-14 gap-x-6 py-6 px-8 text-lg leading-5 font-medium text-white rounded-full border-white border border-opacity-20 bg-card max-lg:backdrop-blur-lg lg:text-main lg:border-opacity-50 lg:bg-lightGrey lg:text-xl lg:leading-6 hover:bg-accent hover:border-accent lg:hidden">Book now<i class="icomoon icon-whatsapp text-2xl leading-none font-normal"></i></a>
        </div>
      </div>
    </section>

    <!-- Готово -->
    <?php if(have_rows('course_slider')) : ?>
    <section class="course-gallery bg-main relative z-10 pb-32">
      <div class="mx-auto container px-3 sm:px-6 lg:px-16">
        <div class="swiper-nav relative flex items-center justify-center mb-5 lg:ml-auto lg:w-fit">
          <div class="swiper-button-prev relative left-auto right-auto top-auto w-6 h-6 text-[#3B4855] mt-0 hover:text-accent lg:hidden"></div>
          <div class="swiper-pagination relative bottom-auto z-10"></div>
          <div class="swiper-button-next relative left-auto right-auto top-auto w-6 h-6 text-[#3B4855] mt-0 hover:text-accent lg:hidden"></div>
        </div>
        <!-- Swiper -->
        <div class="swiper courseGallerySwiper w-full h-[750px] z-[0]">
          <div class="swiper-wrapper">
            <?php while(have_rows('course_slider')) : the_row(); ?>
            <?php $img = get_sub_field('img'); ?>
              <div class="swiper-slide">
                <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
              </div>
            <?php endwhile; ?>
          </div>
          <div class="second-button-prev swiper-button-prev z-50 relative left-auto right-auto top-auto w-6 h-6 text-[#3B4855] mt-0 hover:shadow-myShadow1 lg:w-[74px] lg:h-[74px] lg:border-white lg:border lg:border-opacity-20 lg:rounded-full lg:backdrop-blur-lg lg:bg-card lg:text-white lg:absolute lg:left-7 lg:top-2/4 lg:-mt-10 max-lg:hidden"></div>
          <div class="second-button-next swiper-button-next z-50 relative left-auto right-auto top-auto w-6 h-6 text-[#3B4855] mt-0 hover:shadow-myShadow1 lg:w-[74px] lg:h-[74px] lg:border-white lg:border lg:border-opacity-20 lg:rounded-full lg:backdrop-blur-lg lg:bg-card lg:text-white lg:absolute lg:right-7 lg:top-2/4 lg:-mt-10 max-lg:hidden"></div>
        </div>
      </div>
    </section>
    <?php else : endif; ?>

    <section class="ba z-0 relative pb-24 bg-main xl:pb-36">
      <div class="mx-auto container px-3 sm:px-6 lg:px-16">
        <div class="relative flex flex-col justify-between flex-wrap gap-y-10 max-lg:items-center lg:flex-row">
          <div class="w-full xl:w-6/12">
            <h2
              class="text-3xl leading-8 font-medium text-white uppercase mb-12 max-lg:text-center sm:text-5xl sm:leading-[1.1] lg:text-6xl lg:leading-[1.1]">
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