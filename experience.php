<?php 
  require_once("block/header.php");
?>

    <div id="fullPageFlexBox">
      <header>
        <div class="sideBarHeader">
          <div id="boxFullnameAndStatus">
            <p>Yasmina Souleimanov</p>
            <p>Développeuse Web</p>
            <span>Status : Available</span>
          </div>

          <nav class="leftBoxAnchors">
            <ul>
              <li>
                <a href="index.html">
                  <img src="./Styles/Images/Home.png" alt="Icone Maison" />
                  <p>Home</p>
                </a>
              </li>
              <li>
                <a href="experience.html">
                  <img src="./Styles/Images/starNoir.png" alt="Icone Étoile" />
                  <p style="color: rgb(0, 0, 0)">Expérience</p>
                </a>
              </li>
              <li>
                <a href="projets.html">
                  <img src="./Styles/Images/Rouage.png" alt="Icone Rouage" />
                  <p>Projets</p>
                </a>
              </li>
              <li>
                <a href="contact.html">
                  <img src="./Styles/Images/phone.png" alt="Icone Téléphone" />
                  <p>Contact</p>
                </a>
              </li>
            </ul>
          </nav>

          <section class="ongoingProject">
            <a href="">Téléchargez mon CV</a>
          </section>
        </div>

        <div class="offScreenMenu">
          <ul>
            <li>
              <a href="index.html">
                <img
                  src="./Styles/Images/smallPlaceholder.jpg"
                  alt="Icone Maison"
                />
                <p>Home</p>
              </a>
            </li>
            <li>
              <a href="/experience.html">
                <img
                  src="./Styles/Images/smallPlaceholder.jpg"
                  alt="Icone Étoile"
                />
                <p style="color: rgb(0, 0, 0)">Expérience</p>
              </a>
            </li>
            <li>
              <a href="">
                <img
                  src="./Styles/Images/smallPlaceholder.jpg"
                  alt="Icone Rouage"
                />
                <p>Projets</p>
              </a>
            </li>
            <li>
              <a href="/contact.html">
                <img
                  src="./Styles/Images/smallPlaceholder.jpg"
                  alt="Icone Téléphone"
                />
                <p>Contact</p>
              </a>
            </li>
          </ul>
        </div>

        <nav class="navHamMenu">
          <div class="hamMenu">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </nav>
      </header>
      <main>
        <div class="allContentBox">
          <section id="presentationBox">
            <h1>Mes expériences professionnelles</h1>
            <p>
              J’ai eu la chance d’avoir un parcours professionnelles très varié,
            </p>
            <p>
              D’abord principalement tourné vers le domaine de l’art, j’ai pu
              effectuer un éventail de tâches et de découvrir de nouvelles
              technologies. J’ai ensuite aiguisé mes skills sociaux dans le
              domaine de la vente, ce qui m’a permis d’être plus à l’écoute et
              de mieux comprend les attentes des clients lors de mes emplois
              suivants.
            </p>
          </section>

          <ul class="timeline">
            <li class="event" data-date="Sept 2024 - Sept 2025">
              <h1>En formation <span>@ Human Booster</span></h1>
              <h2>Villeurbanne</h2>
              <h3>Tâches :</h3>
              <p>
                Initiation au Développement Web et Web Mobile, gestion de
                l’intégralité de la partie front et back.
              </p>
              <p>
                Maquettage : Création d’une première maquette avec Figma, machin
                bidule truc machin .........
              </p>
            </li>

            <li class="event" data-date="Sept 2023 - Mars 2024">
              <h1>Vendeuse et Graphiste <span>@ Shopcase</span></h1>
              <h2>Lyon</h2>
              <h3>Tâches :</h3>
              <p>
                Création de design sur mesures, imprimé sur place et sur
                différents supports, comme des plaques d'entreprise, des coques
                de téléphone ...
              </p>
              <p>
                Gestion de logiciel tels qu'Indesign et Illustrator, Conseil
                client, Organisation de l'inventaire.
              </p>
            </li>

            <li class="event" data-date="Sept 2023 - Mars 2024">
              <h1>Responsable Adjointe <span>@ Claire's</span></h1>
              <h2>Lyon</h2>
              <h3>Tâches :</h3>
              <p>Service client, Inventaire, Gestion des emplois du temps,</p>
              <p>
                Gestion de logiciel tels qu'Indesign et Illustrator, Conseil
                client, Organisation de l'inventaire.
              </p>
            </li>

            <li class="event" data-date="Janvier 2022 - Juillet 2022">
              <h1>Concept Artist et UI/UX <span> @ 62 Ruby Street</span></h1>
              <h2>Manosque</h2>
              <h3>Tâches :</h3>
              <p>
                Création d'une interface pour un jeu AR, design des personnages,
                assets et environnements, game design et narration.
              </p>
              <p>Utilisation de Figma, Adobe Photoshop et Illustrator.</p>
            </li>

            <li class="event" data-date="Mai 2012 - Présent">
              <h1>
                Concept Artist et Graphiste bénévole<span> @ SublimeMédia</span>
              </h1>
              <h2>Télétravail</h2>
              <h3>Tâches :</h3>
              <p>Création d'icones, d'environnements et de personnages.</p>
              <p>Réalisé avec Adobe Photoshop et Illustrator.</p>
            </li>
          </ul>
        </div>
      </main>
    </div>
    <script src="./main.js"></script>
  </body>
</html>
