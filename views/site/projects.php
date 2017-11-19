<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Все проекты';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    				<div class = "container">

    				<div class = "row">
				
					<?php foreach ($projects as $project) { ?>
					
					<div class = "col-md-4">
						<div class = "block-portfolio-element">
							
							<img src="<?php echo $project["projectimgs"][0]["image"]; ?>">
							
							<div class = "block-portfolio-element-hover">
								<?php echo '<h3 class="text-center">'.$project["project_name"].'</h3>'; ?>
								<?php echo '<p>'.$project["short_description"].'</p>'; ?>						
							</div>
							
						</div>
					</div>					

					<?php } ?>
		
			
				</div>
				</div>
				
</div>
