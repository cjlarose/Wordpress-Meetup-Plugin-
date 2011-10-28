<div class="wrap">

<h2>WP Meetup Options</h2>
<p class="description">
    Options for Meetup.com integration. <a href="http://wordpress.org/extend/plugins/wp-meetup/">Visit plugin page</a>.
</p>


<?php $this->display_feedback(); ?>

<?php echo $this->open_form(); ?>

<?php if (!$has_api_key): ?>

<h3>API Key</h3>
<p>
    To use WP Meetup, you need to provide your <a href="http://www.meetup.com/meetup_api/key/">Meetup.com API key</a>.  Just paste that key here:
</p>

<p>
    <label>Meetup.com API Key: </label>
    <input type="text" name="api_key" size="30" value="<?php echo $this->options->get('api_key'); ?>" />
</p>

<h3>Group URL</h3>
<p>
    To pull in your Meetup.com events, provide your group's Meetup.com URL, e.g. "http://www.meetup.com/tucsonhiking"
</p>
<p>
    <label>Meetup.com Group URL: </label>
    <input type="text" name="group_url" size="30" value="http://www.meetup.com/" />
</p>

<?php endif; ?>

<?php
$date_select = "<select name=\"publish_buffer\">";
$options = array(
    '1 week' => '1 weeks',
    '2 weeks' => '2 weeks',
    '1 month' => '1 month'
);
foreach ($options as $label => $value) {
    $date_select .= "<option value=\"{$value}\"" . ($this->options->get('publish_buffer') == $value ? ' selected="selected"' : "") . ">$label</option>";
}
$date_select .= "</select>";
?>




<h3>Publishing Options</h3>
<div id="publishing-options">
    <?php //echo $publish_option; ?>
    <label><input type="radio" name="publish_option" value="post" <?php if ($publish_option == 'post') {echo " checked=\"checked\" ";} ?>/>Publish as standard posts (recommended for non-developers)</label>
    
    <div class="publish_option_info">
        <p>
            <label>Categorize each event post as <input type="text" name="category" value="<?php echo $category; ?>" /></label>
        </p>
        
    </div>
    
    <label><input type="radio" name="publish_option" value="cpt" <?php if ($publish_option == 'cpt') {echo " checked=\"checked\" ";} ?>/>Publish as custom post type</label>
    
    <div class="publish_options_info">
        <p>
            The name of the custom post type is <code>wp_meetup_event</code>.  The archive is accessible from <a href="<?php echo home_urL('events'); ?>"><?php echo home_urL('events'); ?></a>.  The posts have a taxonomy called <code>wp_meetup_group</code>, which holds the name of the group.  The following custom fields are available: <code>time</code>, <code>utc_offset</code>, <code>event_url</code>, <code>venue</code> (as a serialized array), <code>rsvp_limit</code>, <code>yes_rsvp_count</code>, <code>maybe_rsvp_count</code>.
        </p>
    </div>
    
   
</div>
<p>
    <label>Publish event posts <?php echo $date_select; ?> before the event date.</label>
</p>




<p>
    <input type="submit" value="Update Options" class="button-primary" />
</p>







<?php echo $this->close_form(); ?>






<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) {return;}
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<p>Powered by <a href="http://nuancedmedia.com/" title="Website design, Online Marketing and Business Consulting">Nuanced Media</a> <span class="fb-like" data-href="http://www.facebook.com/NuancedMedia" data-send="false" data-layout="button_count" data-width="450" data-show-faces="false"></span></p>

</div><!--.wrap-->

