<?php

// no direct access
defined('_JEXEC') or die;
JHtml::_('jquery.framework');
$document = JFactory::getDocument();
$document->addScript(JURI::root(true). '/media/mod_flowplayervideo/js/flowplayer.min.js');

$document->addStyleSheet(JURI::root(true). '/media/mod_flowplayervideo/skins/minimalist.css');

?>
<!-- Display the player -->
<div class="flowplayer" data-swf="<?php echo JURI::root(true).'/media/mod_flowplayervideo/js/flowplayer.swf'; ?>" data-ratio="<?php echo $ratio; ?>" data-embed="false" style="width: <?php echo $width;?>%; background:#777 url(<?php echo JURI::root(true).'/images/videos/'.substr($videoname,0,-3).'jpg'; ?>);">
  <video>	 
	<source type="video/webm" src="<?php echo JURI::root(true).'/images/videos/'.substr($videoname,0,-3).'webm'; ?>">
	<source type="video/mp4" src="<?php echo JURI::root(true).'/images/videos/'.$videoname; ?>">
	 <!-- <source type="video/webm" src="http://stream.flowplayer.org/bauhaus/624x260.webm">
	 <source type="video/mp4" src="http://stream.flowplayer.org/bauhaus/624x260.mp4">
	 <source type="video/ogv" src="http://stream.flowplayer.org/bauhaus/624x260.ogv"> -->
  </video>
</div>