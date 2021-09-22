<div class="col-md-1 sidebar">
    <div class="content-sidebar">
        <dl id="goto">
            <dt style="top: 13px;"><span class="show-list"></span></dt>
            <?php $i = 1; foreach ($subInfos as $pData) { ?>
            <dd >
			    <a href="#<?= $pData['code']; ?>" class="auto-scroll" data-offset="-20" data-speed="500"><?= $pData['name']; ?></a>
            </dd>
            <?php } ?>
        </dl>
    </div>
</div>
