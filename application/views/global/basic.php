<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title; ?></title>
<meta name="description" content="<?php echo $description; ?>" />

<?php foreach($styles as $style): ?>
    <link href="<?php echo URL::base(); ?>public/css/<?php echo $style; ?>.css" rel="stylesheet" type="text/css" />
<?php endforeach; ?>

<?php foreach($styles as $style): ?>
    <link href="<?php echo URL::base(); ?>public/css/<?php echo $style; ?>.css" rel="stylesheet" type="text/css" />
<?php endforeach; ?>

</head>
<body>
<div class="body">
	<div>
		<div>
			<a href="<?php echo URL::base(); ?>"><img src="<?php echo URL::base(); ?>public/image/gerb.png"></a>
			<h1>ГОБУЗ "Маловишерская стоматологическая поликлиника"</h1>
		</div>
		<div class="menu">
			<ul id="menu">
				<li>
					<a href="<?php echo URL::base(); ?>menu/institutions">Учреждения</a>
					<ul>
						<li><a href="#">Общяя информация</a></li>
						<li><a href="#">Устав</a></li>
						<li><a href="#">Деклорации целей и задач</a></li>
						<li><a href="#">Структура учреждения</a></li>
						<li><a href="#">Нормативные документы</a></li>
					</ul>
				</li>
				<li>
					<a href="<?php echo URL::base(); ?>menu/population">Населению</a>
					<ul>
						<li><a href="#">Запись на прием к врачу</a></li>
						<li><a href="#">Полезная информация</a></li>
					</ul>
				</li>
				<li>
				<a href="<?php echo URL::base(); ?>menu/specialists">Специалистам</a>
					<ul>
						<li><a href="#">Вакансии</a></li>
						<li><a href="#">Полезная информация</a></li>
					</ul>
				</li>
				<li>
					<a href="<?php echo URL::base(); ?>menu/nocorruption">Противодействие корупции</a>
				</li>
				<li>
					<a href="<?php echo URL::base(); ?>menu/news">Новости</a>
				</li>
				<li>
					<a href="<?php echo URL::base(); ?>menu/quality">Качество обслуживания</a>
					<ul>
						<li><a href="#">Анкета</a></li>
						<li><a href="#">Вопрос-ответ (форум)</a></li>
					</ul>
				</li>
				<li>
					<a href="<?php echo URL::base(); ?>menu/contacts">Контакты</a>
					<ul>
						<li><a href="#">Контактная информация</a></li>
						<li><a href="#">Специалисты</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	<div class="content">
		<?php echo $content; ?>
	</div>
	<div>
		
	</div>
</div>
	
    
</body>
</html>

