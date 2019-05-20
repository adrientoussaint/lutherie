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
   <form class="contact-form row" action="action/mail.php" method="post">
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
			<input type="checkbox" id="devis" name="devis">
			<label for="devis">Devis</label>
		
			<input type="checkbox" id="informations" name="informations">
			<label for="informations">Customisation</label>
			
			<input type="checkbox" id="reservation" name="reservation">
			<label for="reservation">Réservation</label>
		
			<input type="checkbox" id="reparation" name="reparation">
			<label for="reparation">Réparation</label>
			
			<input type="checkbox" id="autre" name="autre">
			<label for="autre">Autre</label>
			<input type="hidden" name="subject">
		</div>
	  </div>
	   
	   
      <div class="form-field col-lg-12">
		  <textarea id="message" name="message" class="input-text js-input" type="text" rows="10" required></textarea>
         <label class="label label-message" for="message">Message</label>
      </div>
	   
	 
	   
	   
      <div class="form-field col-lg-12">
         <input class="submit-btn btn-dark" type="submit" value="Envoyer">
      </div>
   </form>
</section>
<script>
	// the selector will match all input controls of type :checkbox
	// and attach a click event handler 
	$("input:checkbox").on('click', function() {
		// in the handler, 'this' refers to the box clicked on
		var box = $(this);
		if (box.is(":checked")) {
			// the name of the box is retrieved using the .attr() method
			// as it is assumed and expected to be immutable
			var group = ".check input:checkbox";
			// the checked state of the group/box on the other hand will change
			// and the current value is retrieved using .prop() method
			$(group).prop("checked", false);
			box.prop("checked", true);
			$("input:hidden[name='subject']").val(box.attr("name"));
		} else {
			box.prop("checked", false);
		}
});
</script>
