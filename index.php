<!DOCTYPE html>
	<html lang="en">
		<head>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<meta http-equiv="X-UA-Compatible" content="ie=edge">
			<title>Woove</title>
			
			<link rel="stylesheet" href="style.css">
			
			
			<!--bootstrap + js -->
			
			<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


			<!-- autres libs -->
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" />
			<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
			
			<link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet">
			
			<!---------------------------------------- PROBLEME DIAPO PAGE 1------------------------------>
			
			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

	
		</head>
		
		
		<body>
		<?php 
			//pour lier les pages au menu
			include("./element/menu.php");
			require('controller.php');

			if (isset($_GET['page'])) {
				if ($_GET['page'] == 'home') {
					home();
				}elseif($_GET['page'] == 'shop'){
					shop();
				}elseif($_GET['page'] == 'instrument'){
					instrument();
				}elseif($_GET['page'] == 'atelier'){
					atelier();
				}elseif($_GET['page'] == 'contact'){
					contact();
				}elseif($_GET['page'] == 'custom'){
					custom();
				}
			}
			else {
				home();
			}
			include("./element/footer.php");
		?>
		</body>

		<footer>
			
			<script>
				//permet de récupérer le paramètre qui est dans le barre d'url
				$(document).ready(function(){
				  var getUrlParameter = function getUrlParameter(sParam) {
				  var sPageURL = window.location.search.substring(1),
					  sURLVariables = sPageURL.split('&'),
					  sParameterName,
					  i;

				  for (i = 0; i < sURLVariables.length; i++) {
					  sParameterName = sURLVariables[i].split('=');

					  if (sParameterName[0] === sParam) {
						  return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
					  }
				  }
			  };
				// j'ai le nom de la page
				  var page = getUrlParameter('page');
				  // j'ajoute la classe .active au nav-item pour pouvoir souligner dans le menu
				  // la nav-item a un data-name qui correspond à page
				  $('.nav-item').each(function( index ) {
					if($(this).data('name') == page){
					  $(this).addClass('active');
					}else{
					  $(this).removeClass('active');
					}
				  });

				  $(document).ready(function(){
					$("#message").on("click", function(){
						$(this).height(140);
					})
				})
				});
			</script>
			
			
			
			<script>
				// filtres shop
				$('.portfolio-item').isotope({
					itemSelector: '.item',
					layoutMode: 'fitRows'
				 });
				 $('.portfolio-menu ul li').click(function(){
					$('.portfolio-menu ul li').removeClass('active');
					$(this).addClass('active');

					var selector = $(this).attr('data-filter');
					$('.portfolio-item').isotope({
						filter:selector
					});
					return  false;
				 });
				 $(document).ready(function() {
				 var popup_btn = $('.popup-btn');
				 popup_btn.magnificPopup({
				 type : 'image',
				 gallery : {
					enabled : true
				 }
				 });
				 });

			</script>
			
			
			<script>
			//FIRTRES CUSTOM
				$(document).ready(function() {
					$("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
						e.preventDefault();
						$(this).siblings('a.active').removeClass("active");
						$(this).addClass("active");
						var index = $(this).index();
						$("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
						$("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
					});
				});
			</script>
			
			
			<script>
				// CHANGER TEXTE CUSTOM AVEC CHOIX
				$('div.test').click(
					function(){
						$('span#radio12').text( $('.recap-corde') );
					});

			</script>
			
			
			
		</footer>
</html>