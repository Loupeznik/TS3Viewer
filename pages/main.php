<h1 class="title"><?php print $server->links['main']['page_title']; ?></h1>
<article class="message is-dark">
  <div class="message-header">
    <p>Current server status</p>
  </div>
  <div class="message-body">
    <p class="is-size-5 has-text-centered is-uppercase has-text-weight-semibold">
        Status:
        <?php
            if ($server->serverStatus == 1) print '<b>ACTIVE</b>'; else print '<b>INACTIVE</b>';
            print '<br> Number of connected clients: ';
            if($server->serverStatus == 0) print '<b>0/0</b>'; else print $server->virtualServer["virtualserver_clientsonline"]-$server->virtualServer["virtualserver_queryclientsonline"] . '/' . $server->virtualServer["virtualserver_maxclients"];
        ?>
    </p>
  </div>
</article>
<article class="message is-dark">
  <div class="message-header">
    <p>Available songs</p>
  </div>
  <div class="message-body">
    <div class="tile notification is-light has-text-black-ter is-size-3">
      <div class="columns">
        <div class="column is-narrow">
          <p class="is-size-4">Bot controls</p><br>
          <a href="index.php?page=main&stop=1" title="Stop"><i class="fas fa-stop-circle"></i></a>
          <a href="index.php?page=main&pause=1" title="Pause"><i class="fas fa-pause-circle"></i></a>
          <a href="index.php?page=main&unpause=1" title="Resume"><i class="fas fa-play-circle"></i></a>
        </div>
        <div class="column is-three-quarters">
          <h2 class="is-size-4">Now playing</h2>
          <p class="is-size-3 is-uppercase has-text-weight-semibold">
            <?php $bot->status(); ?>
          </p>
          <form method="POST">
            <p class="label">Paste a link to a youtube video source</p>
            <div class="field has-addons">
              <div class="control">
              <input class="input is-rounded" type="text" placeholder="https://youtube.com/xx1337link" name="ytLink">
              </div>
              <div class="control">
              <input type="submit" class="button is-link" name="ytPlay" value="Play">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <table class="table is-hoverable is-fullwidth">
        <thead>
            <tr>
                <th>Filename</th>
                <th>Alias</th>
            </tr>
        </thead>
        <tbody>
            <?php
                exec('ls ' . $server->audiobotPath, $arr);
                foreach ($arr as $item) {
                    print '<tr><th>' . $item . '<span class="icon"><a href="index.php?page=main&play=' . $item . '"><i class="far fa-play-circle"></i></a></span></th><td>-</td></tr>';
                }
            ?>
        </tbody>
    </table>
  </div>
</article>

<?php
if ($_GET['play']) $bot->command('play',$_GET['play']);
if ($_GET['stop']) $bot->command('stop','0');
if ($_GET['pause']) $bot->command('pause','0');
if ($_GET['unpause']) $bot->command('play','0');
if ($_POST['ytPlay']) $bot->command('play',$_POST['ytLink']);
?>
