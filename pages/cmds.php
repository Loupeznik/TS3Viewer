<h1 class="title"><?php print $pageHeaders['cmds']; ?></h1>
<p>Používá se zasláním zprávy do kanela či botovi přímo, musíte mít server grupu <i>Može hrac boxu</i></p>
<table class="table is-hoverable is-fullwidth">
        <thead>
            <tr>
                <th>Command</th>
                <th>Syntax</th>
                <th>Účel</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>!play</th>
                <td>!play název lokální songy || odkaz na youtube</td>
                <td>Zahraje vybraný song</td>
            </tr>
            <tr>
                <th>!song</th>
                <td>!song</td>
                <td>Vypíše aktuální song</td>
            </tr>
            <tr>
                <th>!volume</th>
                <td>!volume 0-100</td>
                <td>Změní hlasitost bota</td>
            </tr>
            <tr>
                <th>!yt</th>
                <td>!yt text</td>
                <td>Vyhledá zadaný text na youtube a vrátí výsledky, ze kterých je pak možno vybrat song k přehrání</td>
            </tr>
        </tbody>
    </table>
