<?php
/**
 * Section Block template.
 *
 * @param array $block The block settings and attributes.
 */

// Load values and assign defaults.




// Support custom "anchor" values.
$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'roomdetails';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $class_name .= ' align' . $block['align'];
}

?>

<div <?php echo esc_attr( $anchor ); ?>class="<?php echo esc_attr( $class_name ); ?>"<?php echo $style; ?>>
    <div class="container">
        <h2>Afficher les details d'une chambre</h2>
    </div>
</div>