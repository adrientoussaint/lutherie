<!DOCTYPE html>
	<html lang="en">
		<head>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<meta http-equiv="X-UA-Compatible" content="ie=edge">
			<title>Woove</title>
			
			<link rel="stylesheet" href="style.css">
			
			
			<!--bootstrap + js -->
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

			<!-- autres libs -->
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" />
			<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
			
			<link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet">
			
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

				//Filtres Custom
				$("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
					e.preventDefault();
					$(this).siblings('a.active').removeClass("active");
					$(this).addClass("active");
					var index = $(this).index();
					$("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
					$("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
				});

				// CHANGER TEXTE CUSTOM AVEC CHOIX
				// initialiser les var
				window.onload=function(){
					localStorage.setItem("oldValModele", 350);
					localStorage.setItem("oldValBois", 250);
					localStorage.setItem("oldValCorde", 120);

					var total = parseFloat(localStorage.getItem("oldValModele")) + parseFloat(localStorage.getItem("oldValBois")) + parseFloat(localStorage.getItem("oldValCorde"));
					localStorage.setItem("total", total);
					$('#price').text(total);
				}
				//récupérer les 3 valeurs diférentes quand elles changent et les stocker dans une variable en local
				// changer le texte à droite pour celui contenue dans data input cliqué
				$('.inputGroup > input').on('click',function(e){
					var price = 0;
					var name = $(this).data("name");
					var total = localStorage.getItem("total");
					if($(this).hasClass('radioModele')){
						price = $(this).data('price');
						$("#recap-corps").text(name);
						console.log(price)
						calcTotal(total, price,0);
						localStorage.setItem("oldValModele", price);
					}else if($(this).hasClass('radioBois')){
						price = $(this).data('price');
						$("#recap-bois").text(name);
						calcTotal(total, price,1);
						localStorage.setItem("oldValBois", price);
					}else if($(this).hasClass('radioCorde')){
						price = $(this).data('price');
						$("#recap-cordes").text(name+" cordes");
						calcTotal(total, price,2);	
						localStorage.setItem("oldValCorde", price);
					}
					$('#price').text(localStorage.getItem("total"));
				});
				// function qui calcul le total doit être appelée à chaque changement de valeur
					function calcTotal(total, price, type){
						console.log("valeur du radio cliqué : "+price);
						var oldVal = [parseFloat(localStorage.getItem("oldValModele")), parseFloat(localStorage.getItem("oldValBois")), parseFloat(localStorage.getItem("oldValCorde"))]; 
						console.log("valeur de l'ancien radio : "+oldVal[type]);
						console.log("total ancien: " +total);
						var newTotal = (total - oldVal[type])+ price;
						console.log("total nouveau: " +newTotal);
						localStorage.setItem("total", newTotal);
					}
					

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

					var popup_btn = $('.popup-btn');
					popup_btn.magnificPopup({
						type : 'image',
						gallery : {
							enabled : true
						}
					});
				});
			</script>	
		</footer>
</html>