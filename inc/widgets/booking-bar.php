<?php
/**
 * Booking Bar Widget for Elementor
 */
class Saphir_Booking_Bar_Widget extends \Elementor\Widget_Base {

    public function get_name() {
        return 'saphir_booking_bar';
    }

    public function get_title() {
        return esc_html__( 'Saphir Booking Bar', 'saphir' );
    }

    public function get_icon() {
        return 'eicon-calendar';
    }

    protected function render() {
        echo '<div class="saphir-booking-bar">
                <input type="date" placeholder="Check-in">
                <input type="date" placeholder="Check-out">
                <button class="button-primary">Book Now</button>
              </div>';
    }
}
