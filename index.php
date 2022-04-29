<?php session_start(); $title = "Сервис закладок"; require_once "stat.php"; require_once "header.php"; ?>
<!DOCTYPE html>
<html lang="ru">
	


	<body>
		<div class="container-fluid" 
		class="pfblock pfblock-gray">

			<div class="row header-service">

				<div class="col-sm-10 col-sm-offset-1">

					<div class="pfblock-header">
						<h2 class="pfblock-title">Сервис визуальных закладок</h2>
					</div>
				</div>
			</div><!-- .row -->
			
		
		
		
			<div class="row">
				<div class="col-sm-10 col-sm-offset-1">
					<div id="content" class="pfblock-header">
			<?php	
				StartDB();
				//InitDB(); // Первоначальное создание таблиц
				
							//Дальше можно вынести в функцию				
							if (empty($_POST['sitename'])) //если нет поиска по имени - продолжаем контроль поиска по группе
								{
									if (empty($_POST['sitegroup'])) //если нет поиска по группе - логин и отображаем все закладки
										{
											CheckLogin();
										}
									else 
										{
											ShowGroup(); // есть поиск по группе
										}
								}
							else 
								{
								ShowSearch(); //есть поиск по наименованию
								}	
							
																
				EndDB(); 
			?>

					</div>
				</div>
			</div>
							
			<div class="row">
			<div class="col">
				
					<?php ShowAddSite(); ?>
				</div>
			</div><!-- .row -->
		</div><!-- .container -->		
			
<?php require_once "footer.php"; ?>			


