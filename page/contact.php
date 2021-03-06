<div class="container-fluid" id="contact">
	<div class="row">

	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2634.6458564386985!2d6.151142015667863!3d48.6740152792698!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4794a27d3a147d8d%3A0xe68336bae991ace2!2s50+Rue+Georges+Clemenceau%2C+54600+Villers-l%C3%A8s-Nancy!5e0!3m2!1sfr!2sfr!4v1554209107944!5m2!1sfr!2sfr" width="1890" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
</div>

 <div class="container">
	<div class="row contact">
		<h5 class="col-12 contact-name justify-content-center">CONTACT</h5>
		<p class="justify-content-center contact-text">50 rue georges clémenceau, Villers-lès-Nancy 54600</p>
		<p class="justify-content-center contact-text">03 22 43 51 76</p>
		<p class="justify-content-center contact-text">Ouvert du lundi au vendredi de 9h à 19h</p>
	</div>
</div>

<section class="form container">
   <form class="contact-form row" id="contactForm" action="" method="post">
      <div class="form-field col-lg-6">
         <input id="nom" name="nom" class="input-text js-input" type="text" required>
         <label class="label" for="nom">Nom</label>
      </div>
	  <div class="form-field col-lg-6">
         <input id="prenom" name="prenom" class="input-text js-input" type="text" required>
         <label class="label" for="prenom">Prénom</label>
      </div>
      <div class="form-field col-lg-6 ">
         <input id="email" name="email" class="input-text js-input" type="email" required>
         <label class="label" for="email">E-mail</label>
      </div>
      <div class="form-field col-lg-6 ">
         <input id="phone" name="phone" class="input-text js-input" type="text">
         <label class="label" for="phone">Numéro de téléphone</label>
      </div>
	  
	   <div class="form-field col-lg-12 check">
		    <label class="label objet" for="objet">Objet du mail</label>
			
		   <div class="checkbox">
				<input type="checkbox" class="subject" id="devis" name="devis">
				<label for="devis">Devis</label>
			
				<input type="checkbox" class="subject" id="informations" name="informations">
				<label for="informations">Customisation</label>
				
				<input type="checkbox" class="subject" id="reservation" name="reservation">
				<label for="reservation">Réservation</label>
			
				<input type="checkbox" class="subject" id="reparation" name="reparation">
				<label for="reparation">Réparation</label>
				
				<input type="checkbox" class="subject" id="autre" name="autre">
				<label for="autre">Autre</label>
				<input type="hidden" name="objet" id="objet">
			</div>
	  	</div>
	   
	   
      <div class="form-field col-lg-12">
		  <textarea id="message" name="message" class="input-text-message js-input" type="text" rows="10" required></textarea>
		  <label class="label label-message" for="message"><span>Message</span></label>
      </div>
	   
      <div class="form-field col-lg-12">
         <input class="submit-btn btn-dark" type="submit" value="Envoyer">
      </div>
   </form>
	<div class="" id="sucess">
		<h5>Votre mail à bien été envoyé !</h5>
		<p>L'équipe de Woove reviendra vers vous aussi vite que possible !</p>
		 <button type="button" class="btn btn-secondary btn-fermer btn-form">Retour au formulaire</button>
	</div>
</section>
<script>
	var arraySubject = [];
	$(".subject").on('click', function(){
		var indexTab = arraySubject.indexOf($(this).attr("name"))
		if( indexTab === -1){
			arraySubject.push($(this).attr("name"));
		}else{
			arraySubject.splice(indexTab, 1);
		}
		$("#objet").val(arraySubject);
		console.log($("#objet").val());
	})

	$("#contactForm").on("submit", function(e){
		e.preventDefault();
		var nom = $('#nom').val();
		var prenom = $('#prenom').val();
		var email = $('#email').val();
		var phone = $('#phone').val();
		var objet = $('#objet').val();	
		var message = $('#message').val();
		$.ajax({
			type:'POST',
			url: "./action/mail.php",
			dataType: "json",
			data:{nom, prenom, email, phone, objet, message},
			success:(function(){
				$("#sucess").css('display', 'block');
				$("#contactForm").css('display', 'none');
			}),
			error:function(){
				alert("erreur dans l'envoi du mail");
			}
		})
	});
	
	$(".btn-form").on("click", function(){
		location.reload();
	});
</script>
