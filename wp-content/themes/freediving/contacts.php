<?php
/*
Template Name: Contacts
*/
get_header(); ?>


    <section class="pt-32 pb-24 lg:pt-64 xl:pb-36 2xl:pt-80">
      <div class="mx-auto container px-3 sm:px-6 lg:px-16">
        <div class="relative flex flex-col justify-between flex-wrap gap-y-10 max-lg:items-center lg:flex-row">
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