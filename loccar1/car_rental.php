<!doctype html>
<html>

<head>

    <title>car rental</title>
    <meta name="viewport" content="width=width-devise,initial-scale=1.8">
    <meta charset="utf-8">
    <!--CSS car ental-->
    <link rel="stylesheet" href="car_rental.css" type="text/css">
    <!--SCRIPT et CSS des fonts awesomes (les icons)-->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oleo+Script&display=swap" rel="stylesheet">
  <!-- CSS OWL CAROUSEL -->

  <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
  <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">

  <!-- JS OWL CAROUSEL -->

  <script src="owlcarousel/jquery.min.js"></script>
  <script src="owlcarousel/script.js"></script>
  <script src="owlcarousel/owl.carousel.min.js"></script>
</head>

<body>

    <div class="container">
        <div class="navigation">

            <ul>

                <!----liste item1-->
                <li>
                    <a href="car_rental.php" target="_blank">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="titre">Home</span>
                    </a>

                </li>
                <!----liste item2-->
                <li>
                    <a href="#rent_car" target="_blank">
                        <span class="icon">
                            <ion-icon name="car-sport-sharp"></ion-icon>
                        </span>
                        <span class="titre">Rent your car</span>
                    </a>

                </li>
                <!----liste item3-->
                <!--<li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="person-outline"></ion-icon>
                        </span>
                        <span class="titre">customers</span>
                    </a>

                </li>
                ---liste item4-->
                <li>
                    <a href="#section7" target="_blank">
                        <span class="icon">
                            <ion-icon name="chatbubble-outline"></ion-icon>
                        </span>
                        <span class="titre">our contact & location</span>
                    </a>

                </li>
                <!--liste item5-->
                <li>
                    <a href="about_us.html" target="_blank">
                        <span class="icon">
                            <ion-icon name="help-outline"></ion-icon>
                        </span>
                        <span class="titre">About us</span>
                    </a>

                </li>
                <!--liste item5-->
               <li>
                    <a href="login.php" target="_blank">
                        <span class="icon">
                            <ion-icon name="settings-outline"></ion-icon>
                        </span>
                        <span class="titre">dashboard </span>
                    </a>

                </li>

            </ul>

        </div>
        <!--*********************main*********************************-->
        <div class="main">

            <!--search
                <div class="search">
                    <label>
                        <input type="text" placeholder="search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>
                <div class="user">

                    <img src="images/tesla.jfif" id="img1">
                </div>-->
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
            </div>

            <!--***************************section1*********************************-->
            <section class="section1">
                <div class="cars"id="v">
                    <div class="color_overlay">
                        <div class="car1">
                            <img src="images/car1.png" alt="car1" >
                        </div>
                        <div class="titr1">
                            <h1>NOW,<br>it's eassy for you<br>to rent your car</h1>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                            <path fill="#f7f9ff" fill-opacity="1" d="M0,192L48,186.7C96,181,192,171,288,144C384,117,480,75,576,101.3C672,128,768,224,864,266.7C960,309,1056,299,1152,266.7C1248,235,1344,181,1392,154.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
                        </svg>
                    </div>
                </div>

            <!--**********slide owl carousel************************-->
            </section>
            <section id="section_slide">
                <h2 id="titr_slide"> Review </h2>
                <h3 id="mini_titr_slide">Nous vous offre une meileure qualité avec du meileure service</h3>
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <img src="images/tesla_a.jpg" alt="tesla model A"  id="tesla_a" >
                        <div><h3>Tesla model A</h3><br><small>Apartir de <sup>$</sup>3000</small></div>
                    </div>
                    <div class="item">
                        <img src="images/tesla_s.jpg" alt="tesla model S" id="tesla_s">
                        <div><h3>Tesla model S</h3><br><small>Apartir de <sup>$</sup>3000</small></div>
                    </div>
                    <div class="item">
                        <img src="images/toyota_c-hr.jpg" alt="toyota" id="toyota_ch-r">
                        <div ><h3>Toyota</h3><br><small>Apartir de <sup>$</sup>3000</small></div>
                    </div>
                    <div class="item">
                        <img src="images/toyota_2018.jfif" alt="toyota 2018" id="toyota_2018">
                        <div><h3>Toyota 2018</h3><br><small>Apartir de <sup>$</sup>3000</small></div>
                    </div>
                    <div class="item">
                        <img src="images/mercedic_2021.jfif" alt="mercidic 2021" id="mercedic_2021">
                        <div ><h3>mercedic 2021</h3><br><small>Apartir de <sup>$</sup>3000</small></div>
                    </div>
                    <div class="item">
                        <img src="images/volswagen_golf.jfif" alt="volswagen golf" id="volswagen_golf">
                        <div ><h3>Volswagen golf</h3><br><small>Apartir de <sup>$</sup>3000</small></div>
                    </div>
                </div>
            </section>
            <!--************************section2************************************-->
            <section class="section2">
                <div class="titr2">

                    <h2>des plus grands entrepreuneures nous fait confiance</h2>

                </div>
                <!----------------societe1------------------------------>
                <div class="societe">
                    <div id="br" class="brand">
                        <img src="images/tesla_car.jpg" alt="tesla">
                    </div>
                    <div class="director">
                        <div class="profil">
                            <img src="images/elon-mask.jpg" alt="elon mask">
                        </div>
                        <div class="opinion">
                            <div class="name">
                                <h4>ELON MASK</h4>
                                <h3> chef d'entreprise tesla </h3>
                            </div>
                            <p>C'est vraiment géniale d'avoire comme c'est jeune entrepreneure qui cherche
                                toujourd d'améliorer le style de vie par des idées inovatrice, et moi
                                comme chef de la marke tesla je soutien ce sort des services en rend compt la bonne
                                qualité
                                de services et des markes disponibles.
                            </p>
                        </div>

                    </div>

                </div>
                <!----------------societe2------------------------------>
                <div class="societe">
                    <div class="director">
                        <div class="profil">
                            <img src="images/hebert_diess.jpg" alt="hebert diess">
                        </div>
                        <div class="opinion">
                            <div class="name">
                                <h4>Herbert Diess</h4>
                                <h3> chef actuel d'entreprise volkswagen </h3>
                            </div>
                            <p> Aprés tous ce que nous avons vu de la bonne qualité de services
                                on a choisi auto-power comme centre d'invisticement ainsi que son
                                succés nous somme toujourd prét pour supporter cette sociéter et
                                on recommande à tous les amtteures des voitures
                                ou les familles en générale de louer leurs voitures dans cette sociétéqui qui a apporter
                                des nouvelles fonctionnalités d'alocation des voitures au maroc afin de satisfaire
                                votres besoins.
                            </p>
                        </div>
                    </div>
                    <div class="brand2">
                        <img src="images/volkswagen_car.jpg" alt="volkswagen">
                    </div>
                </div>
                <!----------------societé3------------------------------>
                <div class="societe">
                    <div class="brand">
                        <img src="images/unnamed.jpg" alt="toyota">
                    </div>
                    <div class="director">
                        <div class="profil">
                            <img src="images/akio_toyoda.jpg" alt="akio toyoda">
                        </div>
                        <div class="opinion">
                            <div class="name">
                                <h4>AKIO TOYODA</h4>
                                <h3> chef actuel d'entreprise toyota </h3>
                            </div>
                            <p>la moindre des choses à dire sur cette société est
                                une excelante entreprise capable d'offrir une bonne qualité de services
                                au client et de garantir ca satisfaction cela nous donne un bonne esprit et
                                une satisfaction sur l'avenir du monde des voitures dans le monde
                                et surtout au maroc.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <!--************************section3************************************-->
            <section class="section3">
                <div class="pertenaires">
                    <div class="titr3">
                        <h2>notre partenaires</h2>
                    </div>
                    <div class="logos">
                        <span> <img src="images/tesla.jfif" alt="logo tesla"></span>
                        <span> <img src="images/toyota-logo.jpg" alt="logo toyota"></span>
                        <span> <img src="images/volskwagen_logo.jfif" alt="logo volswagen"></span>
                        <span> <img src="images/audi logo.jpg" alt="logo audi"></span>
                        <span> <img src="images/dacia_logo.jfif" alt="logo dacia"></span>
                    </div>
                </div>
            </section>
            <!--************************section4************************************-->
            <section class="section4">
                <div class="titr4">
                    <h2>comment ca marche</h2>
                </div>
                <div class="articles">
                    <article class="article">
                        <h3>01</h3>
                        <p>Rendez-vous sur service d'allocation de voiture
                            "Rent your car".</p>
                    </article>
                    <article class="article">
                        <h3>02</h3>
                        <p>Remplir le formulaire puis valider vous informations.</p>
                    </article>
                    <article class="article">
                        <h3>03</h3>
                        <p>Félicitation!! vous avez louer votre voiture avec
                            succé,notre équipe vous shouaite bon route.</p>
                    </article>
                </div>

            </section>
            
            <!--**************************************section5***********************************-->
            <section class="section5" style="height: 800px">
            <h2 id="rent_car">RENT YOUR CAR</h2>
            <h3>remplir le formullaire et amuser vous avec votre voiture de réve</h3>
            <form method="POST" action="alocation.php" enctype="multimedia/form-data"><!--l\'attribut action prend la page ou les données doivent étre traiter-->
		 <label for="nom" class="label-class">
			Donnez votre nom:
			<input type="text" name="nom" id="nom" required>
		 </label>
		
		 <br><br>
		 <label for="prenom" class="label-class">
			Donnez votre prenom:
			<input type="text" name="prenom" id="prenom" required>
		 </label>
         <br><br>
		 <label for="numtel" class="label-class">
            Donnez votre numero de telephone:
            <input type="text" name="numtel" id="numtel" required>
         </label>
		 <br><br>
         <label for="email" class="label-class">
            Donnez votre numero email:
            <input type="email" name="email" id="email" required style=" padding: 10px;border-radius: 10px;width: 210px;font-size: 17px;border-color: black;">
         </label>
         <br><br>
		
		 <label for="model" class="label-class">
			Choisissez votre model preferer:
			<select name="model" id="model" required>
				<option value="tesla model A">tesla model A</option>
				<option value="tesla model S">tesla model S</option>
				<option value="toyota">toyota_2018</option>
				<option value="volswagen">volswagen golf</option>
				<option value="mercedic 2021">mercedic 2021</option>
			</select>
		 </label><br><br>

		 <span class="label-class">gender</span>
		 <label for="Homme">
			<input type="radio" name="sexe" value="Homme" id="Homme" required>
			Homme
		 </label>

		 <label for="Femme">
			<input type="radio" name="sexe" value="Femme" id="Femme" required>
			Femme
		 </label><br><br>

		 <label for="DateNaissance" class="label-class">
			Donnez votre date de naissance:
			<input type="date" name="DateNaissance" id="DateNaissance" required>
		 </label><br><br>
		 <label for="DateNaissance" class="label-class">
            from:
            <input type="date" name="from" id="DateNaissance" required>
            to:
            <input type="date" name="to" id="DateNaissance" required>
         </label>
         
         <br><br>
		 <br><br>

		 <input type="submit" value="RENT NOW">
	      </form>   

     <!--*****************************section 7*****************************************************-->
     <section id="section7">

        <div id="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13764.608261889167!2d-9.53006!3d30.4034272!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xca0e141e9c9847a1!2sEcole%20Polytechnique%20d&#39;Agadir!5e0!3m2!1sfr!2sma!4v1640700015786!5m2!1sfr!2sma"
             width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            <div id="contacts">
                <h2 id="titr_contact">contact</h2>
                <h5>Phone:</h5>
                <p>0 800 123 45 67</p>
                <h5>Hours available:</h5>
                <p>11AM_8PM</p>
                <h5>Email:</h5>
                <p>younes.akel@e-polytechnique.ma</p>
            </div>
        </div>
    </section>
     <!--*******************************************footer*****************************************************-->
     <footer id="footer">
         
        <div id="footer_content">
            <div id="m_cash">
                <h3>PETIT RESUME SUR NOUS</h3><br>
                <p id="parag_footer">nous somme une entreprise spécialisé en domaine d'allocation des voitures avec plus de 20 ans d'experience 
                    notre équipe des ingénieures et des techniciens sont les meilleures au maroc tout pour garantir un bon service a vous
                    notre but est d'aboutir votre confiance
                </p>
            </div>
            <div id="document">
                <h3>Documents</h3><br>
                <h6>Privacy policy</h6>
                <h6>Teams and conditions</h6>
            </div>
            <div id="menu">
                <h3>Menu</h3><br>
                <h6>Contact us</h6>
                <h6> About us </h6>
                <h6>dashboard</h6>
                
            </div>
            <div id="about_company">
                <h3>About company</h3><br>
                <h6> Company no.:123456789 </h6>
                <h6>VAT Number: 123 4567 89</h6>
            </div>
            <div id="follow_us">
                <h3>Fllow us</h3><br>
                <img src="images/facebook.png" alt="our facebook" id="facebook">
                <img src="images/linkedin.png" alt="our linkdin" id="linkdin">
            </div>
        </div>
       <hr id="tr9">
        <h6 id="adresse">
        &copy; copyrights ALL right reserved for younes akel
        </h6>
            
    </footer>
  
   
        <!--*******************ici integration de javascript************-->
        <script src="car_rental.js" type="text/javascript"> </script>
        <!--************************************************************-->
        </div>
     </div>
</div>

</body>

</html>