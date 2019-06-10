<div class="container-fluid" id="shop">
    <div class="row p-3">
        <div class="col p-1">
            <div id='carousel-custom' class='carousel slide' data-ride='carousel'>
				
			
				
				
                <!-- Wrapper for slides -->
                <div class='carousel-inner'>
                    <div class="carousel-item active">
                        <img src='./img/instru0.jpg' alt='Vue1' />
                    </div>
                    <div class='carousel-item'>
                        <img src='./img/instru1.jpg' alt='Vue2' />
                    </div>
                    <div class='carousel-item'>
                         <img src='./img/instru2.jpg' alt='Vue3' />
                    </div>
					 <div class='carousel-item'>
                         <img src='./img/instru3.jpg' alt='Vue4' />
                    </div>
					 <div class='carousel-item'>
                         <img src='./img/instru4.jpg' alt='Vue5' />
                    </div>
                    
                </div>
            


    
                <!-- Indicators -->
                <ol class='carousel-indicators'>
                    <li data-target='#carousel-custom' data-slide-to='0' class='active'><img src='./img/instru11.jpg' alt='VueZoom1' /></li>
                    <li data-target='#carousel-custom' data-slide-to='1'><img src='./img/instru22.jpg' alt='VueZoom2' /></li>
                    <li data-target='#carousel-custom' data-slide-to='2'><img src='./img/instru33.jpg' alt='VueZoom3' /></li>
					<li data-target='#carousel-custom' data-slide-to='3'><img src='./img/instru44.jpg' alt='VueZoom4' /></li>
					<li data-target='#carousel-custom' data-slide-to='4'><img src='./img/instru55.jpg' alt='VueZoom5' /></li>
                </ol>

                <a class="carousel-control-prev" href="#carousel-custom" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#carousel-custom" data-slide="next">
                <span class="carousel-control-next-icon"></span>
                </a>
            </div>

        </div>
        <div class="col-lg-12 col-xl-6 col-md-12 black-brd-lft p-lg-5 p-md-12 p-sm-1">
            <div class="row justify-content-center">
                <h5 class="guitar-name">Electromatic Walnut</h5>
                <p class="text-center px-3 pt-3"> Vous cherchez une guitare électrique d’allure vintage capable d’assurer sur les genres de musique bien lourds ? La semi hollow-body Gretsch G5622T-CB pourrait bien être pile ce qu’il vous faut ! Issue de la célèbre série Electromatic, elle propose un design classique avec bloc central en épicéa qui permet de partir sur de grosses saturations sans trop s’exposer aux larsens. Ceci permet également davantage de sustain qu’une guitare hollow body standard. Son corps Thinline de 44 mm d’é  paisseur comprend, par ailleurs, deux pans coupés qui facilitent le jeu dans les aigus et deux ouïes « cat’s eye » typées ‘60s. Au niveau des micros, le constructeur américain a opté pour pas moins de trois humbuckers.</p>
                <div class="container">
                    <div class="row justify-content-center p-3">
                        <span class="prix d-block">862€</span>
                    </div>
                    <div class="row justify-content-center">
                        <button type="button" class="btn btn-dark d-flex" data-toggle="modal" data-target="#exampleModalCenter">RESERVER L'INSTRUMENT</button>
                    </div>
                    <div class="row justify-content-center mt-2">
                        <button type="button" class="btn btn-light d-flex renseignements"><a href="?page=contact">DEMANDER PLUS DE RENSEIGNEMENTS</a></button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12"></div>
				<div class="col-8 ligne-page-instru black-brd-tp"></div>
                <div class="col-12 justify-content-center p-sm-1 my-3">
                    <h5 class="text-uppercase text-center my-3 carac">Caracteristiques</h5>
                    
                    <table class="m-auto">
                       
                            <tr>
                                <td class="text-right carac-name">Bois du corps:</td>
                                <td class="text-left">érable</td>
                            </tr>
							<tr>
                                <td class="text-right carac-name">Bois de la touche:</td>
                                <td class="text-left">palissandre (rosewood)</td>
                            </tr
                            <tr>
                                <td class="text-right carac-name">Nombres de cordes :</td>
                                <td class="text-left">6</td>
                            </tr>
							<tr>
                                <td class="text-right carac-name">Nombres de frettes :</td>
                                <td class="text-left">21</td>
                            </tr>
							<tr>
                                <td class="text-right carac-name">Fixation du manche :</td>
                                <td class="text-left">collé (set neck)</td>
                            </tr>
							<tr>
                                <td class="text-right carac-name">Poids :</td>
                                <td class="text-left">4,0 kg</td>
                            </tr>
							<tr>
                                <td class="text-right carac-name">Dimensions :</td>
                                <td class="text-left">112,0 x 54,0 x 13,0 cm</td>
                            </tr>
						
                    </table>
                    
                </div>
                <div class="col"></div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Reservation-->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Réserver l'instrument</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="info-reserv">
			<span>Pour reserver l'instrument, merci de remplir les champs d'informations ci-dessous afin que nous puissons vous recontacter.</span>
		</div>
	 
	   <div class="form-reserv">
		<form class="contact-form row reserv-form" action="mailreservation.php" method="post">
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
	   
      <div class="form-field col-lg-12">
		  <textarea id="message" name="message" class="input-text-message js-input" type="text" rows="10" required></textarea>
		  <label class="label label-message" for="message"><span>Message</span></label>
      </div>
		
	   
     <!-- <div class="form-field col-lg-12">
         <input class="submit-btn btn-dark" type="submit" value="Envoyer">
      </div>-->
   		</form>
	</div>
		  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-fermer" data-dismiss="modal">Fermer</button>
        <button type="submit" class="btn btn-primary submit-btn btn-dark" data-dismiss="modal">Envoyer</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal informations-->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Informations sur l'instrument</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="info-reserv">
			<span>Pour reserver l'instrument, merci de remplir les champs d'informations ci-dessous afin que nous puissons vous recontacter.</span>
		</div>
	 
	   <div class="form-reserv">
		<form class="contact-form row reserv-form" action="" method="post">
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
	   
      <div class="form-field col-lg-12">
		  <textarea id="message" name="message" class="input-text-message js-input" type="text" rows="10" required></textarea>
		  <label class="label label-message" for="message"><span>Message</span></label>
      </div>
		
	   
     <!-- <div class="form-field col-lg-12">
         <input class="submit-btn btn-dark" type="submit" value="Envoyer">
      </div>-->
   		</form>
	</div>
		  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-fermer" data-dismiss="modal">Fermer</button>
        <button type="submit" class="btn btn-primary submit-btn btn-dark">Envoyer</button>
      </div>
    </div>
  </div>
</div>

