<div class="stylenavbar">
        <div id="styleshiden" style="display: block;">
        <p><a href="javascript:toggle_div('styleshiden');toggle_div('stylesshown');">show styles</a></p>
        </div>
        <div id="stylesshown" style="display: none;">
        <ul>
        <?php
        foreach ($themes as $skin => $dumb) {
                                echo "<li><a href=\"javascript:setActiveStyleSheet('$skin')\" title=\"$skin\">";
                                echo "$skin</a></li> \n";
        }
        ?>
        </ul>
        <p><a href="javascript:toggle_div('styleshiden');toggle_div('stylesshown');">hide styles</a></p>
        </div>
</div>
