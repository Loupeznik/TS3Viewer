<h1 class="title"><?php print $pageHeaders['status']; ?></h1>
<div class="container">
<?php
echo $ts3_VirtualServer->getViewer(new TeamSpeak3_Viewer_Html());
?>
</div>
