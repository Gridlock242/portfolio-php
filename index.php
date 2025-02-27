<?php 
  $currentStyle = "Styles/style.css";
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
                  <img
                    src="./Styles/Images/HomeGreyVers.png"
                    alt="Icone Maison"
                  />

                  <p style="color: rgb(0, 0, 0)">Home</p>
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
              <a href="">
                <img
                  src="./Styles/Images/smallPlaceholder.jpg"
                  alt="Placeholder"
                />
                <p>Home</p>
              </a>
            </li>
            <li>
              <a href="">
                <img
                  src="./Styles/Images/smallPlaceholder.jpg"
                  alt="Placeholder"
                />
                <p>Expérience</p>
              </a>
            </li>
            <li>
              <a href="">
                <img
                  src="./Styles/Images/smallPlaceholder.jpg"
                  alt="Placeholder"
                />
                <p>Projets</p>
              </a>
            </li>
            <li>
              <a href="">
                <img src="./Styles/Images/smallPlaceholder.jpg" alt="" />
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
            <p>Salut ! Moi c'est</p>
            <h1>Yasmina Souleimanov</h1>
            <h2>Bienvenue sur ma page,</h2>
            <p>
              Actuellement en formation chez Human Booster pour obtenir le titre
              de Développeuse Web et Web mobile, j'ai décidé de me reconvertir
              dans ce domaine passionnant après plusieurs années à travailler
              dans l'illustration. J'ai une affinité pour des languages tel que
              Javascript, Angular ou Java, mais suis ouverte à la découverte et
              l'apprentissage d'autres.  
            </p>
          </section>

          <section id="projects">
            <h2>Derniers Projets</h2>
            <ul>
              <li>
                <div class="boxProject">
                  <div class="preview"></div>
                  <div class="titleAndParagraph">
                    <h3>Projet 1</h3>
                    <p>Janvier 2024 - Septembre 2024</p>
                    <p>HTML - CSS</p>
                  </div>
                  <a href="/experiencetest.html"><p>Voir +</p></a>
                </div>
              </li>
              <li>
                <div class="boxProject">
                  <div class="preview"></div>
                  <div class="titleAndParagraph">
                    <h3>Projet 2</h3>
                    <p>Août 2024 - Décembre 2024</p>
                    <p>HTML - CSS</p>
                  </div>
                  <a href=""><p>Voir +</p></a>
                </div>
              </li>
              <li>
                <div class="boxProject">
                  <div class="preview"></div>
                  <div class="titleAndParagraph">
                    <h3>Projet 3</h3>
                    <p>Décembre 2023 - Décembre 2024</p>
                    <p>HTML - CSS</p>
                  </div>
                  <a href=""><p>Voir +</p></a>
                </div>
              </li>
            </ul>
          </section>

          <section id="softwareAndLanguages">
            <h2>Logiciels et langages</h2>
            <div class="fullIconBox">
              <div id="upperIcons">
                <ul class="iconsContainer">
                  <li>
                    <img
                      src="./Styles/Images/suiteAdobeTest.png"
                      alt="Logo Suite Adobe"
                    />
                    <p>Suite Adobe</p>
                  </li>
                  <li>
                    <img src="./Styles/Images/htmlLogo.png" alt="Logo HTML" />
                    <p>HTML</p>
                  </li>
                  <li>
                    <img src="./Styles/Images/cssLogo.png" alt="Logo CSS" />
                    <p>CSS</p>
                  </li>
                  <li>
                    <img src="./Styles/Images/jsLogo.png" alt="Logo JS" />
                    <p>JavaScript</p>
                  </li>
                  <li>
                    <img src="./Styles/Images/phpLogo.png" alt="Logo PHP" />
                    <p>PHP</p>
                  </li>
                </ul>
              </div>
              <div id="lowerIcons">
                <ul class="iconsContainer">
                  <li>
                    <img src="./Styles/Images/sqlLogo.png" alt="Logo SQL" />
                    <p>SQL</p>
                  </li>
                  <li>
                    <img
                      src="./Styles/Images/symfonyLogo.png"
                      alt="Logo Symfony"
                    />
                    <p>Symfony</p>
                  </li>
                  <li>
                    <img
                      src="./Styles/Images/angularLogo.png"
                      alt="Logo Angular"
                    />
                    <p>Angular</p>
                  </li>
                  <li>
                    <img src="./Styles/Images/javaLogo.png" alt="Logo Java" />
                    <p>Java</p>
                  </li>
                  <li>
                    <img src="./Styles/Images/cLogo.png" alt="Logo C#" />
                    <p>C#</p>
                  </li>
                </ul>
              </div>
            </div>
          </section>

          <section id="whereToFindMe">
            <h2>Retrouvez moi ici</h2>
            <ul>
              <li>
                <a href="mailto:y.souleimanov@hotmail.com">
                  <img src="./Styles/Images/mail.png" alt="Icone Mail" />
                </a>
                <p>Mail</p>
              </li>
              <li>
                <a href="">
                  <img src="./Styles/Images/github.png" alt="Icone GitHub" />
                </a>
                <p>GitHub</p>
              </li>
              <li>
                <a href="">
                  <img
                    src="./Styles/Images/Artstation.png"
                    alt="Icone Artstation"
                  />
                </a>
                <p>Artstation</p>
              </li>
              <li>
                <a href="">
                  <img
                    src="./Styles/Images/linkedin.png"
                    alt="Icone Linkedin"
                  />
                </a>
                <p>Linkedin</p>
              </li>
            </ul>
          </section>
        </div>
      </main>
    </div>
    <script src="./main.js"></script>
  </body>
</html>
