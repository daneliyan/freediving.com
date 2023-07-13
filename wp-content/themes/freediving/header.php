<!DOCTYPE html>
<html lang="ru" class="h-full scroll-smooth antialiased overflow-x-hidden">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
  <!-- <title>Home Page</title> -->
</head>
<body class="relative flex h-full flex-col bg-main overflow-x-hidden">
  <header class="header z-10 absolute top-0 left-0 right-0">
    <div class="mx-auto container px-3 sm:px-6 lg:px-16">
      <nav class="relative z-50 flex justify-between border-0 border-b-white pt-7 pb-6 lg:border-b lg:pt-14 lg:pb-12">
        <div class="flex items-center w-full md:gap-x-14">
          <?php if( $logo = get_custom_logo() ){ echo $logo; } ?>
          <?php
            wp_nav_menu( [
              'theme_location'  => 'header',
              'container'       => '',
              'menu_class'      => 'hidden gap-x-8 lg:flex xl:gap-x-14',
              'menu_id'         => false,
              'echo'            => true,
              'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            ] );
          ?>

          <?php
            wp_nav_menu( [
              'theme_location'  => 'header_socials',
              'container'       => '',
              'menu_class'      => 'flex items-center ml-auto gap-x-4 max-lg:mr-auto xl:gap-x-7',
              'menu_id'         => false,
              'echo'            => true,
              'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            ] );
          ?>

          <!-- <div class="flex items-center ml-auto gap-x-4 max-lg:mr-auto xl:gap-x-7">
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
            </a> -->
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

            <?php
              wp_nav_menu( [
                'theme_location'  => 'header',
                'container'       => '',
                'menu_class'      => 'mob-menu flex flex-col gap-y-7',
                'menu_id'         => false,
                'echo'            => true,
                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
              ] );
            ?>
          </div>
        </div>
      </nav>
    </div>
  </header>

  <main>