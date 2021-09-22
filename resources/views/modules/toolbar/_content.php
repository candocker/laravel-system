<?php
$datas = [];
$model = $this->context->getPointModel('toolbar-promotion');
foreach ($subInfos as $navData) {
	$datas[$navData['code']] = $model->getInfos(['where' => ['sort' => $navData['code']], 'orderBy' => ['orderlist' => SORT_DESC]]);
}
?>
<div class="col-md-11">
    <?php foreach ($subInfos as $pData) { ?>
	<div class="part" id="<?= $pData['code']; ?>" data-title="<?= $pData['name']; ?>">
        <h2 class="has_link ">
            <strong>
				<a href="/toolbar_<?= $pData['code']; ?>.html" title="<?= $pData['name']; ?>" rel="category tag"><?= $pData['name']; ?></a>
            </strong>
			<!--<a href="/toolbar_<?= $pData['code']; ?>.html" title="<?= $pData['name']; ?>" rel="category tag" class="category_more">更多 &gt;</a>-->
        </h2>
        <div class="items ">
            <div class="row">
                <?php foreach ($datas[$pData['code']] as $subData) { ?>
                <div class="col-xs-6 col-sm-4 col-md-3 mbp-item">
                    <div class="item">
					    <a href="<?= $subData['website']; ?>" target="_blank" title="<?= $subData['name']; ?>" class="item-app">
						    <img class="app-logo lazy" src="<?= $subData['logo']; ?>" data-original="<?= $subData['logo']; ?>" alt="<?= $subData['name']; ?>" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/promotion/img/d6be8-3481.svg'" style="display: block;">
							<h3 class="app-title"><?= $subData['name']; ?></h3>
                        </a>
                        <a href="http://123.meibp.com/506.html" target="_blank" title="《微信公众平台》">
					    <a href="<?= $subData['website']; ?>" target="_blank" title="<?= $subData['name']; ?>">
						    <p class="app-detail"><?= $subData['description']; ?></p>
                        </a>
                        <div class="app-nums"><span></span></div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <?php } ?>
	<?php //echo $this->render('_content-article'); ?>
	<?php //echo $this->render('_content-footer'); ?>
    <div class="content-linkto "></div>
</div>
