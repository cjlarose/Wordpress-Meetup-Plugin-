<div class="wrap <?php echo ($show_plug) ? 'good-person' : 'bad-person' ?>">
<h2>WP Meetup Developer Support Policy</h2>

<h3>We'd appreciate your support</h3>
<p>We are a small Tucson company and we're providing this plugin free of charge.  However, we'd appreciate to be rewarded for our efforts by allowing us to include nearly inconspicuous links to our homepage.  By default, no links to our website are displayed on your site.  Annoying messages, though, persist your admin area begging you to change your settings so that we can display links on your event posts.</p>

<h3>Get rid of annoying messages</h3>
<p>If you would not like to support Nuanced Media by allowing our links to appear on your event posts, but need to get rid of the angry messages on the admin interface, you'll need to open wp-meetup.php located in your WordPress installation's wp-content/plugins directory.  In that file, find the line that reads <code>add_action('admin_notices', array($meetup, 'admin_notices'), 12);</code> and remove it.  This will get rid of those annoying messages even if you choose not to support us.</p>

</div>