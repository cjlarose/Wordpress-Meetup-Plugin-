<div class="wrap <?php echo ($show_plug) ? 'good-person' : 'bad-person' ?>">
<h2>WP Meetup Events</h2>

<div id="wp-meetup-events">
<?php if ($events): ?>
<h3>Events (Upcoming in the next month)</h3>
<pre>
<?php //var_dump($events); ?>
</pre>

<?php
$post_status_map = array(
    'publish' => 'Published',
    'pending' => 'Pending',
    'draft' => 'Draft',
    'future' => 'Scheduled',
    'private' => 'Private',
    'trash' => 'Trashed'
);

$headings = array(
    'Group',
    'Event Name',
    'Event Date',
    'Date Posted',
    'RSVP Count'
);
$rows = array();
//$this->pr($events);
foreach ($events as $event) {
    $rows[] = array(
        $this->element('a', $event->group->name, array('href' => $event->group->link)),
        $this->element('a', $event->name, array('href' => get_permalink($event->post_id))),
        date('D M j, Y, g:i A', $event->time + $event->utc_offset),
        date('Y/m/d', strtotime($event->post->post_date)) . "<br />" . $post_status_map[$event->post->post_status],
        $event->yes_rsvp_count . " going"
    );
}
echo $this->data_table($headings, $rows);

?>

<?php elseif(count($groups) > 0): ?>

<p>There are no available events listed for this group.</p>

<?php endif; ?>
</div><!--#wp-meetup-events-->

</div><!--#wrap-->

