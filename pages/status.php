<h1 class="title"><?php print $server->links['status']['page_title']; ?></h1>
<div class="container" id="viewerContainer">
<?php
print $server->virtualServer->getViewer(new TeamSpeak3_Viewer_Html());
?>
<p id="refreshText"><progress class="progress is-medium is-dark" max="100"></progress></p>
</div>

<script>
    var interval = 60;
    $(document).ready(
            function() {
                setInterval(function(){
                $('#refreshText').addClass('tag is-dark is-medium');
                $('#refreshText').text('Refreshing in: ' + interval);
                interval--;
                if(interval <= 0){ interval = 60; }
                }, 1000);
                setInterval(function() {
                    location.reload(); //refresh every minute
                }, 60 * 1000);
            });
</script>
