<?php
/** @var SLN_Wrapper_Booking $booking */
$format = SLN_Plugin::getInstance()->format();
?>
<span class="day-event-item__customer"><div class="day-event-item__customer-name"><?php echo $booking->getDisplayName() ?></div>
<i class="sln-btn--icon sln-icon--checkmark <?php if(!$booking->getOnProcess()) echo "hide" ?>" <?php //if(!$booking->getOnProcess()) echo "style=\"display:none\""; ?>></i></span>

<span class="day-event-item__booking_id"><?php echo $booking->getId() ?></span>

<ul class='service_wrapper'>
    <?php foreach($booking->getBookingServices()->getItems() as $bookingService): ?>
        <li>
            <span class='day-event-item__service'><?php echo $bookingService->getService()->getName() ?></span><br />
            <span class='day-event-item__attendant'><span class="day-event-item__attendant_name"><?php echo $bookingService->getAttendant() ? $bookingService->getAttendant()->getName().': ' : '' ?></span>
            <span class='day-event-item__attendant_timing'><?php echo $format->time($bookingService->getStartsAt()) . ' &#8594; ' . $format->time($bookingService->getEndsAt()) ?></span> </span>
        </li>
    <?php endforeach ?>
</ul>