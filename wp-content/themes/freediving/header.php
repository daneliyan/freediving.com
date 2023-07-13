<!DOCTYPE html>
<html lang="ru" class="h-full scroll-smooth antialiased overflow-x-hidden">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
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
            if( have_rows('header_socials', 'option') ): ?>
              <div class="flex items-center ml-auto gap-x-4 max-lg:mr-auto xl:gap-x-7">
                <?php while( have_rows('header_socials', 'option') ) : the_row();
                $link = get_sub_field('link', 'option');
                if( $link ): 
                    $link_url = $link['url'];
                    $link_target = $link['target'] ? $link['target'] : '_self';?>
                    <a class="inline-block text-lg leading-none text-white hover:text-accent xl:text-2xl xl:leading-none" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                      <?php the_sub_field('icon', 'option'); ?>
                    </a>
                <?php endif;
                endwhile; ?>
              </div>
            <?php else :
            endif;
          ?>
        </div>
        <div class="flex items-center lg:hidden">
          <button class="z-10 flex items-center justify-center" aria-label="Toggle Navigation" type="button" id="nav-toggle">
            <i class="icomoon icon-menu text-2xl leading-none text-white"></i>
          </button>
          <div class="nav-menu" id="nav-menu">
            <?php
              if( have_rows('header_socials', 'option') ): ?>
                <div class="flex items-center ml-auto gap-x-4 mb-8 lg:gap-x-7">
                  <?php while( have_rows('header_socials', 'option') ) : the_row();
                  $link = get_sub_field('link', 'option');
                  if( $link ): 
                      $link_url = $link['url'];
                      $link_target = $link['target'] ? $link['target'] : '_self';?>
                      <a class="inline-block text-lg leading-none text-white hover:text-accent xl:text-2xl xl:leading-none" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                        <?php the_sub_field('icon', 'option'); ?>
                      </a>
                  <?php endif;
                  endwhile; ?>
                </div>
              <?php else :
              endif;
            ?>
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