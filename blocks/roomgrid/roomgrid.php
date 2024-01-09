<?php

/**
 * Section Block template.
 *
 * @param array $block The block settings and attributes.
 */


// Support custom "anchor" values.
$anchor = '';
if (!empty($block['anchor'])) {
    $anchor = 'id="' . esc_attr($block['anchor']) . '" ';
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'roomgrid';
if (!empty($block['className'])) {
    $class_name .= ' ' . $block['className'];
}


// Styles

?>
<!-- Swiper -->

<div <?php echo esc_attr($anchor); ?>class="<?php echo esc_attr($class_name); ?>">

    <div class="container">
        <div class="lg:grid lg:grid-cols-2 gap-8">
            <?php
            // list all rooms custom post fields
            $args = array(
                'post_type' => 'room',
                'posts_per_page' => -1
            );
            $rooms = new WP_Query($args);
            while ($rooms->have_posts()) {
                $rooms->the_post();
                $post_id = get_the_ID();
                $room_title = get_the_title();
                $room_description = get_field("description",  $post_id);
                $room_image = get_the_post_thumbnail_url();
                $room_gallery = get_field("gallery",  $post_id);
                $room_link = get_the_permalink();
                $features = get_field("features",  $post_id);
            ?>
                <div>

                    <div class="relative overflow-hidden">
                        <div class="swiper-container ">
                            <div class="swiper-wrapper">
                                <!-- Slides -->
                                <?php
                                foreach ($room_gallery as $image) {
                                    $image_url = $image["url"];
                                    $image_alt = $image["alt"]; ?>
                                    <div class="swiper-slide">
                                        <img src="<?php echo $image_url ?> " alt="<?php echo $image_alt ?>" class="rounded-lg w-full h-full object-cover" loading="lazy">
                                        <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                    </div>
                                <?php
                                }
                                ?>
                                <!-- Add more slides as needed -->
                            </div>
                            <!-- Add Pagination -->
                            <div class="swiper-pagination "></div>
                            <!-- Add Navigation -->
                            <div class="dc-button-next absolute top-0 h-full right-0 z-10">
                                <div class="flex items-center h-full px-4">
                                    <i class="fa-regular fa-chevron-right text-white"></i>
                                </div>
                            </div>
                            <div class="dc-button-prev absolute top-0 h-full left-0 z-10">
                                <div class="flex items-center h-full px-4">
                                    <i class="fa-regular fa-chevron-left text-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="<?php echo $room_link; ?>">
                        <h3 class="mt-2"><?php echo $room_title; ?></h3>
                        <p class="text-sm"><?php echo $room_description; ?></p>
                        <ul class="text-sm">
                            <?php foreach ($features as $feature) { ?>
                                <li class="flex gap-2 items-center"> <i class="<?php echo $feature["icon"] ?> "></i><?php echo $feature["description"]; ?></li>
                            <?php } ?>
                        </ul>
                    </a>
                </div>
            <?php

            }

            ?>
        </div>
    </div>
</div>