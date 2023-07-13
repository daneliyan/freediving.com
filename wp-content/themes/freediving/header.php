<!DOCTYPE html>
<html lang="ru" class="h-full scroll-smooth antialiased overflow-x-hidden">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
  <title>Home Page</title>
</head>
<body class="relative flex h-full flex-col bg-main overflow-x-hidden">
  <header class="header z-10 absolute top-0 left-0 right-0">
    <div class="mx-auto container px-3 sm:px-6 lg:px-16">
      <nav class="relative z-50 flex justify-between border-0 border-b-white pt-7 pb-6 lg:border-b lg:pt-14 lg:pb-12">
        <div class="flex items-center w-full md:gap-x-14">
          <?php if( $logo = get_custom_logo() ){ echo $logo; } ?>
          <!-- <a aria-label="Home" href="/#">
            <svg width="92" height="33" viewBox="0 0 92 33" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M4.80006 25.888H15.0401V28H2.56006V5.6H4.80006V25.888Z" fill="white" />
              <path
                d="M35.1818 25.024C32.9418 27.264 30.2005 28.384 26.9578 28.384C23.7151 28.384 20.9738 27.264 18.7338 25.024C16.4938 22.7627 15.3738 20.0213 15.3738 16.8C15.3738 13.5787 16.4938 10.848 18.7338 8.608C20.9738 6.34667 23.7151 5.216 26.9578 5.216C30.2005 5.216 32.9418 6.34667 35.1818 8.608C37.4218 10.848 38.5418 13.5787 38.5418 16.8C38.5418 20.0213 37.4218 22.7627 35.1818 25.024ZM20.3018 23.488C22.0938 25.3013 24.3125 26.208 26.9578 26.208C29.6031 26.208 31.8218 25.3013 33.6138 23.488C35.4058 21.6533 36.3018 19.424 36.3018 16.8C36.3018 14.176 35.4058 11.9573 33.6138 10.144C31.8218 8.30934 29.6031 7.392 26.9578 7.392C24.3125 7.392 22.0938 8.30934 20.3018 10.144C18.5098 11.9573 17.6138 14.176 17.6138 16.8C17.6138 19.424 18.5098 21.6533 20.3018 23.488Z" fill="white" />
              <path
                d="M63.7806 17.344V18.496C63.7806 21.2693 62.7886 23.616 60.8046 25.536C58.8206 27.4347 56.1646 28.384 52.8366 28.384C49.4446 28.384 46.6392 27.264 44.4206 25.024C42.2019 22.784 41.0926 20.0427 41.0926 16.8C41.0926 13.5573 42.2019 10.816 44.4206 8.576C46.6392 6.336 49.4446 5.216 52.8366 5.216C54.9059 5.216 56.8046 5.71734 58.5326 6.72C60.2606 7.72267 61.5939 9.056 62.5326 10.72L60.5486 11.872C59.8446 10.5067 58.7992 9.41867 57.4126 8.608C56.0259 7.79734 54.5006 7.392 52.8366 7.392C50.0419 7.392 47.7592 8.29867 45.9886 10.112C44.2179 11.9253 43.3326 14.1547 43.3326 16.8C43.3326 19.4453 44.2179 21.6747 45.9886 23.488C47.7592 25.3013 50.0419 26.208 52.8366 26.208C55.3539 26.208 57.3699 25.5787 58.8846 24.32C60.3992 23.04 61.2632 21.4187 61.4766 19.456H52.5806V17.344H63.7806Z" fill="white" />
              <path
                d="M86.1506 25.024C83.9106 27.264 81.1692 28.384 77.9266 28.384C74.6839 28.384 71.9426 27.264 69.7026 25.024C67.4626 22.7627 66.3426 20.0213 66.3426 16.8C66.3426 13.5787 67.4626 10.848 69.7026 8.608C71.9426 6.34667 74.6839 5.216 77.9266 5.216C81.1692 5.216 83.9106 6.34667 86.1506 8.608C88.3906 10.848 89.5106 13.5787 89.5106 16.8C89.5106 20.0213 88.3906 22.7627 86.1506 25.024ZM71.2706 23.488C73.0626 25.3013 75.2812 26.208 77.9266 26.208C80.5719 26.208 82.7906 25.3013 84.5826 23.488C86.3746 21.6533 87.2706 19.424 87.2706 16.8C87.2706 14.176 86.3746 11.9573 84.5826 10.144C82.7906 8.30934 80.5719 7.392 77.9266 7.392C75.2812 7.392 73.0626 8.30934 71.2706 10.144C69.4786 11.9573 68.5826 14.176 68.5826 16.8C68.5826 19.424 69.4786 21.6533 71.2706 23.488Z" fill="white" />
            </svg>
          </a> -->
          <div class="hidden gap-x-8 lg:flex xl:gap-x-14">
            <a class="inline-block text-base text-white hover:opacity-80 xl:text-xl" href="index.html">Home</a>
            <a class="inline-block text-base text-white hover:opacity-80 xl:text-xl" href="about-us.html">About us</a>
            <a class="inline-block text-base text-white hover:opacity-80 xl:text-xl" href="trips.html">Trips</a>
            <a class="inline-block text-base text-white hover:opacity-80 xl:text-xl" href="courses.html">Courses</a>
            <a class="inline-block text-base text-white hover:opacity-80 xl:text-xl" href="faq.html">FAQ</a>
            <a class="inline-block text-base text-white hover:opacity-80 xl:text-xl" href="reviews.html">Reviews</a>
            <a class="inline-block text-base text-white hover:opacity-80 xl:text-xl" href="place.html">Place</a>
          </div>
          <div class="flex items-center ml-auto gap-x-4 max-lg:mr-auto xl:gap-x-7">
            <a class="inline-block text-lg leading-none text-white hover:text-accent xl:text-2xl xl:leading-none" href="#" target="_blank">
              <i class="icomoon icon-telegram"></i>
            </a>
            <a class="inline-block text-lg leading-none text-white hover:text-accent xl:text-2xl xl:leading-none" href="#" target="_blank">
              <i class="icomoon icon-whatsapp"></i>
            </a>
            <a class="inline-block text-lg leading-none text-white hover:text-accent xl:text-2xl xl:leading-none" href="#" target="_blank">
              <i class="icomoon icon-instagram"></i>
            </a>
            <a class="inline-block text-lg leading-none text-white hover:text-accent xl:text-2xl xl:leading-none" href="#" target="_blank">
              <i class="icomoon icon-facebook"></i>
            </a>
            <a class="inline-block text-lg leading-none text-white hover:text-accent xl:text-2xl xl:leading-none" href="#" target="_blank">
              <i class="icomoon icon-twitter"></i>
            </a>
          </div>
        </div>
        <div class="flex items-center lg:hidden">
          <button class="z-10 flex items-center justify-center" aria-label="Toggle Navigation" type="button" id="nav-toggle">
            <i class="icomoon icon-menu text-2xl leading-none text-white"></i>
          </button>
          <div class="nav-menu" id="nav-menu">
            <div class="flex items-center ml-auto gap-x-4 mb-8 lg:gap-x-7">
              <a class="inline-block text-lg leading-none text-white hover:text-accent" href="#" target="_blank">
                <i class="icomoon icon-telegram"></i>
              </a>
              <a class="inline-block text-lg leading-none text-white hover:text-accent" href="#" target="_blank">
                <i class="icomoon icon-whatsapp"></i>
              </a>
              <a class="inline-block text-lg leading-none text-white hover:text-accent" href="#" target="_blank">
                <i class="icomoon icon-instagram"></i>
              </a>
              <a class="inline-block text-lg leading-none text-white hover:text-accent" href="#" target="_blank">
                <i class="icomoon icon-facebook"></i>
              </a>
              <a class="inline-block text-lg leading-none text-white hover:text-accent" href="#" target="_blank">
                <i class="icomoon icon-twitter"></i>
              </a>
            </div>
            <div class="flex flex-col gap-y-7">
              <a class="inline-block text-xl text-white hover:opacity-80" href="index.html">Home</a>
              <a class="inline-block text-xl text-white hover:opacity-80" href="about-us.html">About us</a>
              <a class="inline-block text-xl text-white hover:opacity-80" href="trips.html">Trips</a>
              <a class="inline-block text-xl text-white hover:opacity-80" href="courses.html">Courses</a>
              <a class="inline-block text-xl text-white hover:opacity-80" href="faq.html">FAQ</a>
              <a class="inline-block text-xl text-white hover:opacity-80" href="reviews.html">Reviews</a>
              <a class="inline-block text-xl text-white hover:opacity-80" href="place.html">Place</a>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>

  <main>