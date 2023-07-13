<?php get_header(); ?>

    <section class="hero relative z-0 pt-32 pb-16 mb-24 sm:mb-32 min-h-[680px] sm:min-h-[90vh] lg:pt-[230px] lg:pb-48">
      <div class="mx-auto container px-3 sm:px-6 lg:px-16">
        <div class="content max-lg:flex max-lg:flex-col max-lg:items-center max-lg:justify-center">
          <h1 class="text-white uppercase font-medium max-w-[1440px] text-3xl leading-9 mb-7 max-lg:mb-64 max-lg:text-center md:text-6xl md:leading-[66px] 2xl:text-8xl 2xl:leading-[100px]">Discover the hidden wonders underwater</h1>
          <p class="max-lg:text-center text-lg leading-6 text-white max-w-2xl lg:text-xl lg:leading-8 lg:mb-14">Explore the underwater world and master freediving with our freediving school. Gain unforgettable experience and breath control under the guidance of experienced instructors</p>
        </div>
      </div>
      <div class="swiper-nav relative flex items-center justify-center max-lg:hidden lg:ml-auto lg:absolute lg:right-16 lg:bottom-12">
        <div class="swiper-pagination relative bottom-auto z-10"></div>
      </div>
      <!-- Swiper -->
      <div class="swiper heroSwiper absolute left-0 top-0 w-full h-full z-[-2] max-lg:hidden">
        <div class="swiper-wrapper">
          <div class="swiper-slide"><img src="./img/hero-slider-img.jpg" alt=""></div>
          <div class="swiper-slide"><img src="./img/hero-slider-img.jpg" alt=""></div>
          <div class="swiper-slide"><img src="./img/hero-slider-img.jpg" alt=""></div>
        </div>
        <!-- <div class="swiper-pagination"></div> -->
      </div>
      <div class="bg-image absolute left-0 top-0 w-full h-full object-cover z-[-2] lg:hidden"><img src="./img/hero-slider-img.jpg" class="w-full h-full object-cover" alt=""></div>
    </section>

    <section class="aboutbl mb-32 bg-no-repeat max-lg:bg-200 lg:bg-center lg:bg-contain" style="background-image: url('./img/about-bg.png');">
      <div class="mx-auto container px-3 sm:px-6 lg:px-16">
        <h2 class="text-6xl text-white font-medium text-center text-opacity-5 uppercase mb-8 lg:hidden">About us</h2>
        <div class="flex items-end flex-wrap gap-y-32 -mx-3 sm:-mx-6 lg:gap-x-10 xl:gap-x-14 lg:flex-nowrap lg:-mx-0 2xl:gap-x-24">
          <div class="about-card relative w-fullMobile sm:w-fullTablet lg:basis-2/5">
            <div class="max-lg:absolute max-sm:left-3 max-sm:right-3 max-lg:p-8 max-lg:left-6 max-lg:right-6 max-lg:-bottom-10 max-lg:border-white max-lg:border max-lg:border-opacity-20 max-lg:backdrop-blur-lg max-lg:bg-card max-lg:text-center text-lg leading-6 text-white lg:text-xl lg:leading-8 lg:mb-14">
              <p>Welcome to our freediving school! We offer training and practice in the art of breath-hold diving with experienced
              instructors. Our mission is to help students unlock their potential and master the art of depth diving without scuba
              gear</p>
            </div>
            <img src="img/about-img-01.jpg" class="w-full max-sm:aspect-[39/53] sm:aspect-square object-cover lg:aspect-[66/64]" alt="">
          </div>
          <div class="about-card relative w-fullMobile sm:w-fullTablet lg:basis-3/5">
            <h2 class="hidden text-white font-medium uppercase mb-8 lg:text-7xl lg:text-opacity-15 lg:block xl:text-9xl 2xl:text-[10rem]">About us</h2>
            <div class="max-lg:absolute max-sm:left-3 max-sm:right-3 max-lg:left-6 max-lg:right-6 max-lg:top-1/2 max-lg:-translate-y-1/2 max-lg:text-center text-lg leading-6 text-white lg:text-xl lg:leading-8 lg:mb-14">
              <p>Our team consists of highly qualified instructors with expertise in freediving. They will accompany you throughout your learning journey, creating a safe and inspiring environment. Our approach encompasses theory, practice, and personal support to develop your skills and reach new depths
              inspiring environment. Our approach encompasses theory, practice, and personal support to develop your skills and reach
              new depths</p>
            </div>
            <img src="img/about-img-02.jpg" class="w-full max-sm:aspect-[39/53] sm:aspect-square object-cover lg:aspect-[103/39]" alt="">
          </div>
        </div>
      </div>
    </section>

    <section class="z-0 about-diving relative pt-4 pb-20 mb-32 bg-no-repeat bg-center bg-cover max-lg:mt-64 lg:py-20 2xl:py-32" style="background-image: url('./img/about-diving-bg.jpg');">
      <div class="z-10 relative mx-auto container px-3 sm:px-6 lg:px-16">
        <img src="img/about-diving-decor.png" class="absolute w-32 h-32 md:w-42 md:h-42 max-lg:left-1/2 max-lg:-translate-x-1/2 max-lg:-top-48 lg:right-16 lg:bottom-0 xl:w-52 xl:h-52" alt="">
        <div class="py-8 px-6 border-white border border-opacity-20 backdrop-blur-lg bg-card lg:p-12 lg:w-8/12 2xl:w-5/12">
          <h2 class="text-2xl text-white font-medium max-lg:text-center mb-8 lg:mb-10">About free diving</h2>
          <div class="grid gap-y-7 max-lg:text-center text-lg leading-6 text-white text-opacity-60 lg:text-xl lg:leading-8">
            <p>Freediving is the thrilling art of diving to depths using a single breath. Unlike scuba diving, freedivers rely entirely on their breath-holding ability and body control. This allows them to move freely and gracefully underwater, exploring the underwater world without any limitations.</p>
            <p>Freediving is not just a sport; it is a way to find harmony with oneself and the surrounding environment. It enables us
            to become aware of and control our breath, relieve stress, and truly embrace the present moment underwater. Each dive
            becomes a unique experience, revealing the incredible beauty of marine life and underwater landscapes.</p>
            <p>Freediving is an exciting and inspiring adventure that grants you freedom and a deep connection with nature. Regardless of your skill level, freediving opens the doors to the mesmerizing world of underwater wonders. Join us and immerse yourself in the captivating world of freediving!</p>
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

    <section class="team z-0 max-lg:mb-32 max-lg:bg-none bg-cover bg-center lg:relative lg:pt-48 lg:pb-80 lg:mb-16" style="background-image: url('./img/team-bg.jpg');">
      <div class="mx-auto container px-3 sm:px-6 lg:px-16">
        <h2 class="text-6xl text-white font-medium mb-16 max-lg:text-center text-opacity-5 uppercase lg:text-7xl lg:text-opacity-15 lg:mb-4 xl:text-9xl 2xl:text-[10rem] max-2xl:leading-none">TEAM</h2>
        <div class="grid gap-5 md:grid-cols-2">
          <div class="py-8 pl-7 pr-4 text-white border-white border border-opacity-20 backdrop-blur-lg bg-card lg:p-10">
            <div class="flex items-center w-full mb-7 lg:mb-10 xl:mb-12">
              <img src="./img/review-avatar-01.jpg" class="w-20 h-20 mr-7 aspect-square rounded-full lg:w-36 lg:h-36 lg:mr-11" alt="">
              <div class="flex flex-col">
                <h3 class="text-xl leading-6 font-medium text-white mb-2 lg:mb-5">Julia Rodriguez</h3>
                <p class="text-base leading-4 text-white text-opacity-80 md:text-xl md:leading-7">Marine Awareness Instructor</p>
              </div>
            </div>
            <div class="grid gap-x-7 text-lg leading-6 text-white text-opacity-60 lg:max-w-xl lg:text-xl lg:leading-7">
              <p>
                Freediving is the thrilling art of diving to depths using a single breath. Unlike scuba diving, freedivers rely entirely
                on their breath-holding ability and body control. This allows them to move freely and gracefully underwater, exploring
                the underwater world without any limitations.
              </p>
            </div>
          </div>
          <div class="py-8 pl-7 pr-4 text-white border-white border border-opacity-20 backdrop-blur-lg bg-card lg:p-10">
            <div class="flex items-center w-full mb-7 lg:mb-10 xl:mb-12">
              <img src="./img/review-avatar-02.jpg" class="w-20 h-20 mr-7 aspect-square rounded-full lg:w-36 lg:h-36 lg:mr-11" alt="">
              <div class="flex flex-col">
                <h3 class="text-xl leading-6 font-medium text-white mb-2 lg:mb-5">Julia Rodriguez</h3>
                <p class="text-base leading-4 text-white text-opacity-80 md:text-xl md:leading-7">Marine Awareness Instructor</p>
              </div>
            </div>
            <div class="grid gap-x-7 text-lg leading-6 text-white text-opacity-60 lg:max-w-xl lg:text-xl lg:leading-7">
              <p>
                Freediving is the thrilling art of diving to depths using a single breath. Unlike scuba diving, freedivers rely entirely
                on their breath-holding ability and body control. This allows them to move freely and gracefully underwater, exploring
                the underwater world without any limitations.
              </p>
            </div>
          </div>
          <div class="py-8 pl-7 pr-4 text-white border-white border border-opacity-20 backdrop-blur-lg bg-card lg:p-10">
            <div class="flex items-center w-full mb-7 lg:mb-10 xl:mb-12">
              <img src="./img/review-avatar-03.jpg" class="w-20 h-20 mr-7 aspect-square rounded-full lg:w-36 lg:h-36 lg:mr-11" alt="">
              <div class="flex flex-col">
                <h3 class="text-xl leading-6 font-medium text-white mb-2 lg:mb-5">Julia Rodriguez</h3>
                <p class="text-base leading-4 text-white text-opacity-80 md:text-xl md:leading-7">Marine Awareness Instructor</p>
              </div>
            </div>
            <div class="grid gap-x-7 text-lg leading-6 text-white text-opacity-60 lg:max-w-xl lg:text-xl lg:leading-7">
              <p>
                Freediving is the thrilling art of diving to depths using a single breath. Unlike scuba diving, freedivers rely entirely
                on their breath-holding ability and body control. This allows them to move freely and gracefully underwater, exploring
                the underwater world without any limitations.
              </p>
            </div>
          </div>
          <div class="py-8 pl-7 pr-4 text-white border-white border border-opacity-20 backdrop-blur-lg bg-card lg:p-10">
            <div class="flex items-center w-full mb-7 lg:mb-10 xl:mb-12">
              <img src="./img/review-avatar-04.jpg" class="w-20 h-20 mr-7 aspect-square rounded-full lg:w-36 lg:h-36 lg:mr-11" alt="">
              <div class="flex flex-col">
                <h3 class="text-xl leading-6 font-medium text-white mb-2 lg:mb-5">Julia Rodriguez</h3>
                <p class="text-base leading-4 text-white text-opacity-80 md:text-xl md:leading-7">Marine Awareness Instructor</p>
              </div>
            </div>
            <div class="grid gap-x-7 text-lg leading-6 text-white text-opacity-60 lg:max-w-xl lg:text-xl lg:leading-7">
              <p>
                Freediving is the thrilling art of diving to depths using a single breath. Unlike scuba diving, freedivers rely entirely
                on their breath-holding ability and body control. This allows them to move freely and gracefully underwater, exploring
                the underwater world without any limitations.
              </p>
            </div>
          </div>
          <div class="py-8 pl-7 pr-4 text-white border-white border border-opacity-20 backdrop-blur-lg bg-card lg:p-10">
            <div class="flex items-center w-full mb-7 lg:mb-10 xl:mb-12">
              <img src="./img/review-avatar-05.jpg" class="w-20 h-20 mr-7 aspect-square rounded-full lg:w-36 lg:h-36 lg:mr-11" alt="">
              <div class="flex flex-col">
                <h3 class="text-xl leading-6 font-medium text-white mb-2 lg:mb-5">Julia Rodriguez</h3>
                <p class="text-base leading-4 text-white text-opacity-80 md:text-xl md:leading-7">Marine Awareness Instructor</p>
              </div>
            </div>
            <div class="grid gap-x-7 text-lg leading-6 text-white text-opacity-60 lg:max-w-xl lg:text-xl lg:leading-7">
              <p>
                Freediving is the thrilling art of diving to depths using a single breath. Unlike scuba diving, freedivers rely entirely
                on their breath-holding ability and body control. This allows them to move freely and gracefully underwater, exploring
                the underwater world without any limitations.
              </p>
            </div>
          </div>
          <div class="py-8 pl-7 pr-4 text-white border-white border border-opacity-20 backdrop-blur-lg bg-card lg:p-10">
            <div class="flex items-center w-full mb-7 lg:mb-10 xl:mb-12">
              <img src="./img/review-avatar-06.jpg" class="w-20 h-20 mr-7 aspect-square rounded-full lg:w-36 lg:h-36 lg:mr-11" alt="">
              <div class="flex flex-col">
                <h3 class="text-xl leading-6 font-medium text-white mb-2 lg:mb-5">Julia Rodriguez</h3>
                <p class="text-base leading-4 text-white text-opacity-80 md:text-xl md:leading-7">Marine Awareness Instructor</p>
              </div>
            </div>
            <div class="grid gap-x-7 text-lg leading-6 text-white text-opacity-60 lg:max-w-xl lg:text-xl lg:leading-7">
              <p>
                Freediving is the thrilling art of diving to depths using a single breath. Unlike scuba diving, freedivers rely entirely
                on their breath-holding ability and body control. This allows them to move freely and gracefully underwater, exploring
                the underwater world without any limitations.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="mb-32">
      <div class="mx-auto container px-3 sm:px-6 lg:px-16">
        <div class="relative flex flex-wrap max-lg:flex-col justify-center gap-y-5 items-center gap-x-7 lg:justify-between">
          <h2 class="text-6xl text-white font-medium max-lg:text-center text-opacity-5 uppercase lg:text-7xl lg:text-opacity-15 xl:text-9xl 2xl:text-[10rem] max-2xl:leading-none">FAQ</h2>
          <a href="faq.html" class="inline-flex items-center justify-center py-6 px-8 text-lg leading-5 font-medium text-white rounded-full border-white border border-opacity-20 backdrop-blur-lg bg-card max-lg:order-1 max-lg:mt-3 lg:text-xl lg:leading-6 hover:shadow-myShadow1">All FAQ</a>
          <div class="grid gap-y-5 w-full">
            <div  class="accordion grid w-full">
              <h3>
                <button type="button" class="flex items-center justify-between w-full p-7 text-lg font-medium text-white border-white border border-opacity-20 backdrop-blur-lg bg-card lg:p-12 lg:text-xl hover:shadow-myShadow1">
                  <span class="text-left">What level of preparation is required to start practicing freediving?</span>
                  <i class="icomoon icon-chevron w-5 h-5 text-lg text-white shrink-0 ml-3 lg:mr-5"></i>
                </button>
              </h3>
              <div class="accordion-content">
                <div class="p-7 w-full text-lg font-normal text-white text-opacity-80 border-white border border-t-0 border-opacity-20 backdrop-blur-lg bg-card lg:p-12 lg:text-xl"><p>We accept students aged 12 and above. Participants under the age of 18 must have written permission from their parents or legal guardians.</p></div>
              </div>
            </div>
            <div  class="accordion grid w-full">
              <h3>
                <button type="button" class="flex items-center justify-between w-full p-7 text-lg font-medium text-white border-white border border-opacity-20 backdrop-blur-lg bg-card lg:p-12 lg:text-xl hover:shadow-myShadow1">
                  <span class="text-left">What equipment is necessary for freediving?</span>
                  <i class="icomoon icon-chevron w-5 h-5 text-lg text-white shrink-0 ml-3 lg:mr-5"></i>
                </button>
              </h3>
              <div class="accordion-content">
                <div class="p-7 w-full text-lg font-normal text-white text-opacity-80 border-white border border-t-0 border-opacity-20 backdrop-blur-lg bg-card lg:p-12 lg:text-xl"><p>We accept students aged 12 and above. Participants under the age of 18 must have written permission from their parents or legal guardians.We accept students aged 12 and above. Participants under the age of 18 must have written permission from their parents or legal guardians.We accept students aged 12 and above. Participants under the age of 18 must have written permission from their parents
                or legal guardians.</p></div>
              </div>
            </div>
            <div  class="accordion grid w-full">
              <h3>
                <button type="button" class="flex items-center justify-between w-full p-7 text-lg font-medium text-white border-white border border-opacity-20 backdrop-blur-lg bg-card lg:p-12 lg:text-xl hover:shadow-myShadow1">
                  <span class="text-left">What level of preparation is required to start practicing freediving?</span>
                  <i class="icomoon icon-chevron w-5 h-5 text-lg text-white shrink-0 ml-3 lg:mr-5"></i>
                </button>
              </h3>
              <div class="accordion-content">
                <div class="p-7 w-full text-lg font-normal text-white text-opacity-80 border-white border border-t-0 border-opacity-20 backdrop-blur-lg bg-card lg:p-12 lg:text-xl"><p>We accept students aged 12 and above. Participants under the age of 18 must have written permission from their parents or legal guardians.We accept students aged 12 and above.</p></div>
              </div>
            </div>
            <div  class="accordion grid w-full">
              <h3>
                <button type="button" class="flex items-center justify-between w-full p-7 text-lg font-medium text-white border-white border border-opacity-20 backdrop-blur-lg bg-card lg:p-12 lg:text-xl hover:shadow-myShadow1">
                  <span class="text-left">What equipment is necessary for freediving?</span>
                  <i class="icomoon icon-chevron w-5 h-5 text-lg text-white shrink-0 ml-3 lg:mr-5"></i>
                </button>
              </h3>
              <div class="accordion-content">
                <div class="p-7 w-full text-lg font-normal text-white text-opacity-80 border-white border border-t-0 border-opacity-20 backdrop-blur-lg bg-card lg:p-12 lg:text-xl"><p>We accept students aged 12 and above. Participants under the age of 18 must have written permission from their parents or legal guardians.We accept students aged 12 and above. Participants under the age of 18 must have written permission from their parents or legal guardians.We accept students aged 12 and above. Participants under the age of 18 must have written permission from their parents
                or legal guardians.</p></div>
              </div>
            </div>
          </div>
          <img src="img/faq-decor.png" class="absolute object-contain w-20 right-2 -top-14 aspect-[19/27] lg:w-48 lg:right-16 lg:-top-72" alt="">
        </div>
      </div>
    </section>

    <section class="mb-32">
      <div class="mx-auto container px-3 sm:px-6 lg:px-16">
        <div class="relative flex flex-wrap max-lg:flex-col justify-center gap-y-5 items-center gap-x-7 lg:justify-between">
          <h2 class="text-6xl text-white font-medium max-lg:text-center text-opacity-5 uppercase lg:text-7xl lg:text-opacity-15 xl:text-9xl 2xl:text-[10rem] max-2xl:leading-none">Reviews</h2>
          <a href="#" class="inline-flex items-center justify-center gap-x-6 py-6 px-8 text-lg leading-5 font-medium text-white rounded-full border-white border border-opacity-20 backdrop-blur-lg bg-card max-lg:order-1 max-lg:mt-3 lg:text-xl lg:leading-6 max-lg:hidden hover:shadow-myShadow1">More reviews on Tripadvisor<img src="./img/tripadvisor-logo.png" class="w-9 h-6" alt=""></a>
          <div class="grid gap-5 w-full md:grid-cols-2 xl:grid-cols-3">
            <a href="#" class="flex flex-col py-8 pl-7 pr-4 text-white border-white border border-opacity-20 backdrop-blur-lg bg-card lg:p-10">
              <div class="line-clamp-4 text-lg leading-6 text-white text-opacity-80 mb-10 max-sm:text-center lg:text-xl lg:leading-7 lg:mb-14">
                  I had an incredible experience at the freediving school! The instructors were knowledgeable and supportive, and I felt
                  safe throughout the entire training. Highly recommended!
              </div>
              <div class="flex items-center justify-between gap-x-5 w-full mt-auto">
                <h3 class="text-lg leading-5 font-medium text-white lg:text-xl lg:leading-6">Sarah G.</h3>
                <div class="rating flex items-center justify-center">
                  <div class="stars relative bg-no-repeat bg-[auto_100%] w-[106px] h-4 sm:w-40 sm:h-6" style="background-image: url('./img/star-off.svg');"><div class="progress absolute top-0 left-0 bg-no-repeat bg-[auto_100%] h-4 sm:h-6" style="background-image: url('./img/star-on.svg');"></div></div>
                  <div class="rating-agregate hidden">4.65</div>
                </div>
              </div>
            </a>
            <a href="#" class="flex flex-col py-8 pl-7 pr-4 text-white border-white border border-opacity-20 backdrop-blur-lg bg-card lg:p-10">
              <div class="line-clamp-4 text-lg leading-6 text-white text-opacity-80 mb-10 max-sm:text-center lg:text-xl lg:leading-7 lg:mb-14">
                  The freediving course exceeded my expectations. The instructors were patient and helped me overcome my fears. It was a
                  life-changing experience!
              </div>
              <div class="flex items-center justify-between gap-x-5 w-full mt-auto">
                <h3 class="text-lg leading-5 font-medium text-white lg:text-xl lg:leading-6">John D.</h3>
                <div class="rating flex items-center justify-center">
                  <div class="stars relative bg-no-repeat bg-[auto_100%] w-[106px] h-4 sm:w-40 sm:h-6" style="background-image: url('./img/star-off.svg');"><div class="progress absolute top-0 left-0 bg-no-repeat bg-[auto_100%] h-4 sm:h-6" style="background-image: url('./img/star-on.svg');"></div></div>
                  <div class="rating-agregate hidden">4</div>
                </div>
              </div>
            </a>
            <a href="#" class="flex flex-col py-8 pl-7 pr-4 text-white border-white border border-opacity-20 backdrop-blur-lg bg-card lg:p-10">
              <div class="line-clamp-4 text-lg leading-6 text-white text-opacity-80 mb-10 max-sm:text-center lg:text-xl lg:leading-7 lg:mb-14">
                  The freediving school provided top-notch training. The instructors were professional, and the curriculum was
                  comprehensive. I feel confident and ready to explore the underwater world.
              </div>
              <div class="flex items-center justify-between gap-x-5 w-full mt-auto">
                <h3 class="text-lg leading-5 font-medium text-white lg:text-xl lg:leading-6">Michael L.</h3>
                <div class="rating flex items-center justify-center">
                  <div class="stars relative bg-no-repeat bg-[auto_100%] w-[106px] h-4 sm:w-40 sm:h-6" style="background-image: url('./img/star-off.svg');"><div class="progress absolute top-0 left-0 bg-no-repeat bg-[auto_100%] h-4 sm:h-6" style="background-image: url('./img/star-on.svg');"></div></div>
                  <div class="rating-agregate hidden">5</div>
                </div>
              </div>
            </a>
            <a href="#" class="flex flex-col py-8 pl-7 pr-4 text-white border-white border border-opacity-20 backdrop-blur-lg bg-card lg:p-10">
              <div class="line-clamp-4 text-lg leading-6 text-white text-opacity-80 mb-10 max-sm:text-center lg:text-xl lg:leading-7 lg:mb-14">
                  My time at the freediving school was amazing. The instructors created a supportive and friendly atmosphere, and I made
                  lifelong friends. It was an adventure of a lifetime!
              </div>
              <div class="flex items-center justify-between gap-x-5 w-full mt-auto">
                <h3 class="text-lg leading-5 font-medium text-white lg:text-xl lg:leading-6">Lisa M.</h3>
                <div class="rating flex items-center justify-center">
                  <div class="stars relative bg-no-repeat bg-[auto_100%] w-[106px] h-4 sm:w-40 sm:h-6" style="background-image: url('./img/star-off.svg');"><div class="progress absolute top-0 left-0 bg-no-repeat bg-[auto_100%] h-4 sm:h-6" style="background-image: url('./img/star-on.svg');"></div></div>
                  <div class="rating-agregate hidden">3.8</div>
                </div>
              </div>
            </a>
            <a href="#" class="flex flex-col py-8 pl-7 pr-4 text-white border-white border border-opacity-20 backdrop-blur-lg bg-card lg:p-10">
              <div class="line-clamp-4 text-lg leading-6 text-white text-opacity-80 mb-10 max-sm:text-center lg:text-xl lg:leading-7 lg:mb-14">
                  I never thought I could achieve such progress in such a short time. The freediving school's instructors pushed me to my
                  limits and helped me discover my true potential.
              </div>
              <div class="flex items-center justify-between gap-x-5 w-full mt-auto">
                <h3 class="text-lg leading-5 font-medium text-white lg:text-xl lg:leading-6">Danil D.</h3>
                <div class="rating flex items-center justify-center">
                  <div class="stars relative bg-no-repeat bg-[auto_100%] w-[106px] h-4 sm:w-40 sm:h-6" style="background-image: url('./img/star-off.svg');"><div class="progress absolute top-0 left-0 bg-no-repeat bg-[auto_100%] h-4 sm:h-6" style="background-image: url('./img/star-on.svg');"></div></div>
                  <div class="rating-agregate hidden">5</div>
                </div>
              </div>
            </a>
            <a href="#" class="flex flex-col py-8 pl-7 pr-4 text-white border-white border border-opacity-20 backdrop-blur-lg bg-card lg:p-10">
              <div class="line-clamp-4 text-lg leading-6 text-white text-opacity-80 mb-10 max-sm:text-center lg:text-xl lg:leading-7 lg:mb-14">
                  The freediving school provided an exceptional learning environment. The instructors were patient, passionate, us become
                  skilled freedivers. I can't wait to continue my journey.
              </div>
              <div class="flex items-center justify-between gap-x-5 w-full mt-auto">
                <h3 class="text-lg leading-5 font-medium text-white lg:text-xl lg:leading-6">Samantha R.</h3>
                <div class="rating flex items-center justify-center">
                  <div class="stars relative bg-no-repeat bg-[auto_100%] w-[106px] h-4 sm:w-40 sm:h-6" style="background-image: url('./img/star-off.svg');"><div class="progress absolute top-0 left-0 bg-no-repeat bg-[auto_100%] h-4 sm:h-6" style="background-image: url('./img/star-on.svg');"></div></div>
                  <div class="rating-agregate hidden">4.7</div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>

    <section class="place mb-32">
      <div class="mx-auto container px-3 sm:px-6 lg:px-16">
        <h2 class="text-6xl text-white font-medium max-lg:text-center text-opacity-5 uppercase mb-5 lg:text-7xl lg:mb-9 xl:text-9xl 2xl:text-[10rem] max-2xl:leading-none">PLACE</h2>
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