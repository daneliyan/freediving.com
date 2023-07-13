<?php
/*
Template Name: About us
*/
get_header(); ?>

    <section class="about-us overflow-hidden relative z-0 bg-cover bg-no-repeat bg-right-top pt-32 pb-16 mb-14 lg:pt-60 2xl:py-80" style="background-image: url('./img/about-us-desktop-bg.jpg');">
      <div class="mx-auto container px-3 sm:px-6 lg:px-16">
        <div class="content flex items-center justify-center flex-col gap-x-10 lg:flex-row-reverse lg:justify-between">
          <div class="lg:w-4/12 2xl:w-6/12">
            <h1 class="text-white uppercase font-medium max-w-[1440px] text-3xl leading-9 mb-7 max-lg:mb-64 max-lg:text-center md:text-6xl md:leading-[66px] 2xl:text-8xl 2xl:leading-[100px]">About US</h1>
          </div>
          <div class="py-8 px-6 border-white border border-opacity-20 backdrop-blur-lg bg-card lg:p-12 lg:w-8/12 2xl:w-5/12">
            <div class="grid gap-y-7 max-lg:text-center text-lg leading-6 text-white text-opacity-60 lg:text-xl lg:leading-8">
              <p>Freediving is the thrilling art of diving to depths using a single breath. Unlike scuba diving, freedivers rely
                entirely on their breath-holding ability and body control. This allows them to move freely and gracefully
                underwater, exploring the underwater world without any limitations.</p>
              <p>Freediving is not just a sport; it is a way to find harmony with oneself and the surrounding environment. It
                enables us
                to become aware of and control our breath, relieve stress, and truly embrace the present moment underwater. Each
                dive
                becomes a unique experience, revealing the incredible beauty of marine life and underwater landscapes.</p>
              <p>Freediving is an exciting and inspiring adventure that grants you freedom and a deep connection with nature.
                Regardless of your skill level, freediving opens the doors to the mesmerizing world of underwater wonders. Join us
                and immerse yourself in the captivating world of freediving!</p>
            </div>
          </div>
        </div>
      </div>
      <div class="bg-image absolute left-0 top-0 w-full h-full object-cover z-[-2] lg:hidden"><img src="./img/about-us-mob-bg.jpg" class="min-w-full max-w-none min-h-full object-cover" alt=""></div>
    </section>

    <section class="place mb-32">
      <div class="mx-auto container px-3 sm:px-6 lg:px-16">
        <h2 class="text-6xl text-white font-medium max-lg:text-center text-opacity-5 uppercase mb-4 lg:text-7xl xl:text-9xl 2xl:text-[10rem] max-2xl:leading-none">PLACE</h2>
        <div class="max-w-xl mb-6 max-lg:text-center text-lg leading-6 text-white max-lg:mx-auto lg:text-xl lg:leading-8 lg:mb-8">
          <p>Take your freediving skills to new depths with our advanced training program. Designed for experienced freedivers, this
          program focuses on advanced techniques, breath-hold exercises, and deep diving protocols</p>
        </div>
      </div>
      <div class="flex max-lg:flex-col mx-auto px-3 sm:px-6 lg:pr-0 justify-center gap-y-10 items-center gap-x-5 lg:justify-between container--fluid">
        <div class="map relative max-lg:w-full h-[520px] lg:w-2/5 lg:h-[610px] 3xl:h-[750px]">
          <div class="map-baloon-info absolute max-w-[230px] py-2 pr-2 pl-4 rounded-2xl rounded-bl-none backdrop-blur-lg text-left text-white text-opacity-80 text-lg leading-5 lg:text-xl lg:leading-6">123 Main Street, City, Country, Postal Code</div>
          <img src="./img/placemark.svg" class="absolute top-2/4 left-2/4" alt="">
          <img src="img/map-img.jpg" class="w-full h-full object-cover" alt="">
        </div>
        <!-- Swiper -->
        <div class="swiper placeSwiper max-lg:w-full h-auto lg:w-3/5 lg:h-[610px] 3xl:h-[750px]">
          <div class="swiper-nav relative flex items-center justify-center max-lg:mb-5 lg:ml-auto lg:absolute lg:right-16 lg:bottom-12">
            <div class="swiper-button-prev relative left-auto right-auto top-auto w-6 h-6 text-[#3B4855] mt-0 hover:text-accent lg:hidden"></div>
            <div class="swiper-pagination relative bottom-auto"></div>
            <div class="swiper-button-next relative left-auto right-auto top-auto w-6 h-6 text-[#3B4855] mt-0 hover:text-accent lg:hidden"></div>
          </div>
          <div class="swiper-wrapper max-lg:h-[520px]">
            <div class="swiper-slide"><img src="./img/place-img-01.jpg" alt=""></div>
            <div class="swiper-slide"><img src="./img/place-img-01.jpg" alt=""></div>
            <div class="swiper-slide"><img src="./img/place-img-01.jpg" alt=""></div>
          </div>
        </div>
      </div>
    </section>

    <section class="ba z-0 relative pb-24 xl:pb-36">
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