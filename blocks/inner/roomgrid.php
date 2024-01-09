<?php
/**
 * Section Block template.
 *
 * @param array $block The block settings and attributes.
 */

// Load values and assign defaults.
$bg  = get_field( 'bg' );
$color = get_field( 'color' );

// Support custom "anchor" values.
$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'section';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $class_name .= ' align' . $block['align'];
}

// Styles
$styles = array( 'background-color: ' . $bg, 'color: ' . $color );
$css = implode( '; ', $styles );
$style = '';
if ($bg || $color) {
    $style = ' style="'.$css.'"';
}
?>

<div <?php echo esc_attr( $anchor ); ?>class="<?php echo esc_attr( $class_name ); ?>"<?php echo $style; ?>>
    <div class="container">
        <InnerBlocks />
    </div>
</div>