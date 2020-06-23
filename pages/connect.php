<h1 class="title"><?php print $pageHeaders['connect']; ?></h1>
<form method="POST">
    <p class="label">Připojit se na TS zadáním jména a odesláním formuláře</p>
    <div class="field has-addons">
        <div class="control">
            <input class="input is-rounded" type="text" name="username" placeholder="Jméno na serveru">
        </div>
        <div class="control">
            <input type="submit" class="button is-link" name="connect" value="Připojit se">
        </div>
    </div>
</form>

<?php
if ($_POST['connect']) {
    $name = $_POST['username'];
    print "<script type='text/javascript'>window.location.href='ts3server://$serverPublicIP/?port=9987&nickname=$name'</script>";
}
?>