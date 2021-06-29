<h1 class="title"><?php print $server->links['upload']['page_title']; ?></h1>
<div class="container">
    <form method="POST" enctype="multipart/form-data">
        <div class="field">
            <div class="control">
            <label class="label">Filename</label>
            <input class="input is-rounded" type="text" name="filename" placeholder="Filename for storing on the server">
            </div>
        </div>
        <div class="field">
            <div class="control">
            <label class="label">Alias</label>
            <input class="input is-rounded" type="text" placeholder="Není k dispozici" disabled>
            </div>
        </div>
        <div class="field">
            <div class="file is-info is-boxed">
                <label class="file-label">
                <input class="file-input" type="file" name="file">
                <span class="file-cta">
                    <span class="file-icon">
                    <i class="fas fa-cloud-upload-alt"></i>
                    </span>
                    <span class="file-label">
                    Select file
                    </span>
                </span>
                </label>
            </div>
        </div>
        <div class="field">
            <div class="control is-expanded">
                <input type="submit" name="submit" value="Nahrát" class="button is-link">
            </div>
        </div>
    </form>
</div>

<?php
if ($_POST['submit']) {
    $filename = 'upload_temp/' . $_POST['filename'] . '.mp3';
    $file_only = $_POST['filename'] . '.mp3';
    $filesize = $_FILES['file']['size'];
        if ($filesize <= 8388608) {
            if (move_uploaded_file($_FILES['file']['tmp_name'], $filename)) {
                $finfo = finfo_open(FILEINFO_MIME_TYPE);
                if(finfo_file($finfo, $filename) == 'audio/mpeg') {
                    exec('./move.sh ' . $file_only);
                    print 'File was successfully uploaded';
                } else {
                    unlink($filename);
                    print '<b>File did not pass the checks, try again with another file</b>';
                }
                finfo_close($finfo);
            } else print 'Upload failed';
        } else {
            print 'File is too large, filesize cannot exceed <i>8MB</i>';
        }

}
?>
