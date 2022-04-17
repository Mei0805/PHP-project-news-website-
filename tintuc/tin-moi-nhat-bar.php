<?php
$tmn = tinMoiNhat();

?>
<body>
    <div class="container">
        <div class="trending-now">
            <span class="trending-now__label">
                <i class="ui-flash"></i>
                <span class="trending-now__text d-lg-inline-block d-none">Tin mới nhất</span>
            </span>
            <div class="newsticker">
                <ul class="newsticker__list">
                    <?php foreach($tmn as $tin) { ?>
                    <li class="newsticker__item"><a href="index.php?page=tin&idLT=<?=$tin['idLT']?>&idTin=<?= $tin['idTin']?>" class="newsticker__item-url"><?= $tin['Tieude']?></a></li>
                    <?php } ?>
                </ul>
            </div>
            <div class="newsticker-buttons">
                <button class="newsticker-button newsticker-button--prev" id="newsticker-button--prev" aria-label="next article"><i class="ui-arrow-left"></i></button>
                <button class="newsticker-button newsticker-button--next" id="newsticker-button--next" aria-label="previous article"><i class="ui-arrow-right"></i></button>
            </div>
        </div>
    </div>
</body>

</html>