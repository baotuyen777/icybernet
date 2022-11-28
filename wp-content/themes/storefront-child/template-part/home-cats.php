<div class="shopee-header-section shopee-header-section--simple">
    <div class="shopee-header-section__header">
        <div class="shopee-header-section__header__title">Danh Mục</div>
    </div>
    <ul class="flex">
        <?php
        $terms = get_terms(array(
            'taxonomy' => 'product_cat',
            'hide_empty' => false,
            'hierarchical' => false,
            'parent' => 0,
        ));
        foreach ($terms as $term):
            $thumbnail_id = get_term_meta($term->term_id, 'thumbnail_id', true);
            $image = wp_get_attachment_url($thumbnail_id);
            ?>
            <li class="flex-grow">
                <div class="home-category-list__group">
                    <a class="home-category-list__category-grid"
                       href="<?php echo get_term_link($term->term_id) ?>">
                        <img  src="<?php echo $image ?>"/>
                        <p><?php echo $term->name ?></p>
                    </a>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
</div>