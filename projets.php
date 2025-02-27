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
                  <img src="./Styles/Images/star.png" alt="Icone Étoile" />
                  <p>Expérience</p>
                </a>
              </li>
              <li>
                <a href="projets.html">
                  <img
                    src="./Styles/Images/RouageNoir.png"
                    alt="Icone Rouage"
                  />
                  <p style="color: rgb(0, 0, 0)">Projets</p>
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
                <img src="./Styles/Images/Home.png" alt="Placeholder" />
                <p>Home</p>
              </a>
            </li>
            <li>
              <a href="/experience.html">
                <img
                  src="./Styles/Images/smallPlaceholder.jpg"
                  alt="Bouton Home"
                />
                <p>Expérience</p>
              </a>
            </li>
            <li>
              <a href="projets.html">
                <img
                  src="./Styles/Images/RouageNoir.png"
                  alt="Bouton Projets"
                />
                <p>Projets</p>
              </a>
            </li>
            <li>
              <a href="/contact.html">
                <img
                  src="./Styles/Images/smallPlaceholder.jpg"
                  alt="Bouton Contact"
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
    </div>
    <script src="./main.js"></script>
  </body>
</html>
