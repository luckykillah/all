
    <!-- Foot icons starts, change these in theme options -->

    <?php
    //Load theme options
    $twitter = get_option('mmminimal_twitter');
    $facebook = get_option('mmminimal_facebook');
    $dribbble = get_option('mmminimal_dribbble');
    $tumblr = get_option('mmminimal_tumblr');
    $forrst = get_option('mmminimal_forrst');
    $last_fm = get_option('mmminimal_last_fm');
    $flickr = get_option('mmminimal_flickr');
    $behance = get_option('mmminimal_behance');
    ?>

    <div id="icons">
    	<?php if ($twitter != '') { ?>
        <a href="http://twitter.com/<?php echo $twitter; ?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/icon-twitter.png" alt="Twitter" width="26" height="26"/></a>
    	<?php }
    	if ($facebook != '') { ?>
        <a href="http://facebook.com/<?php echo $facebook; ?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/icon-facebook.png" alt="Facebook" width="26" height="26"/></a>
    	<?php }
    	if ($dribbble != '') { ?>
        <a href="http://dribbble.com/<?php echo $dribbble; ?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/icon-dribbble.png" alt="Dribbble" width="26" height="26"/></a>
    	<?php }
    	if ($tumblr != '') { ?>
        <a href="http://<?php echo $tumblr; ?>.tumblr.com" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/icon-tumblr.png" alt="Tumblr" width="26" height="26"/></a>
    	<?php }
    	if ($forrst != '') { ?>
        <a href="http://forrst.com/<?php echo $forrst; ?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/icon-forrst.png" alt="Forrst" width="26" height="26"/></a>
    	<?php }
    	if ($last_fm != '') { ?>
        <a href="http://last.fm/<?php echo $last_fm; ?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/icon-lastfm.png" alt="Last FM" width="26" height="26"/></a>
    	<?php }
    	if ($flickr != '') { ?>
        <a href="http://flickr.com/<?php echo $flickr; ?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/icon-flickr.png" alt="Flickr" width="26" height="26"/></a>
    	<?php }
    	if ($behance != '') { ?>
        <a href="http://behance.net/<?php echo $behance; ?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/icon-behance.png" alt="Behance" width="26" height="26"/></a>
    	<?php } ?>
    </div><!-- /#icons -->

    <!-- Foot icons end, change these in theme options -->

    <div id="footer">

            &copy; <?php echo date("Y"); ?>
            <a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>"><?php bloginfo('name'); ?></a>.
    </div><!-- /#footer -->

</div><!-- /#container -->

<?php wp_footer(); ?>


<!-- Stats starts, add google analytics in theme options -->

<?php
$analytics = get_option('mmminimal_analytics');
if ($analytics != '') {
?>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', '<?php echo $analytics; ?>']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<?php } ?>

<!-- Stats end, add google analytics in theme options -->

</body>
</html>