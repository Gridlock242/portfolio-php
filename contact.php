<?php 
  $currentStyle = "Styles/contact.css";
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
                  <img src="./Styles/Images/Rouage.png" alt="Icone Rouage" />
                  <p>Projets</p>
                </a>
              </li>
              <li>
                <a href="contact.html">
                  <img
                    src="./Styles/Images/phoneNoir.png"
                    alt="Icone Téléphone"
                  />
                  <p style="color: rgb(0, 0, 0)">Contact</p>
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
              <a href="/index.html">
                <img
                  src="./Styles/Images/smallPlaceholder.jpg"
                  alt="Placeholder"
                />
                <p>Home</p>
              </a>
            </li>
            <li>
              <a href="/experience.html">
                <img
                  src="./Styles/Images/smallPlaceholder.jpg"
                  alt="Placeholder"
                />
                <p>Expérience</p>
              </a>
            </li>
            <li>
              <a href="/projets.html">
                <img
                  src="./Styles/Images/smallPlaceholder.jpg"
                  alt="Placeholder"
                />
                <p>Projets</p>
              </a>
            </li>
            <li>
              <a href="/contact.html">
                <img
                  src="./Styles/Images/phoneNoir.png"
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
        <div id="allContentBox">
          <section class="contact">
            <h2>Contactez-moi !</h2>

            <form action="#">
              <div class="inputBox">
                <div class="inputFieldField">
                  <input
                    type="text"
                    placeholder="Nom"
                    id="name"
                    class="item"
                    autocomplete="off"
                  />
                </div>

                <div class="inputFieldField">
                  <input
                    type="text"
                    placeholder="Adresse E-mail"
                    id="email"
                    class="item"
                    autocomplete="off"
                  />
                </div>
              </div>

              <div class="inputBox">
                <div class="inputFieldField">
                  <input
                    type="text"
                    placeholder="Numéro de téléphone"
                    id="phone"
                    class="item"
                    autocomplete="off"
                  />
                </div>

                <div class="inputField">
                  <input
                    type="text"
                    placeholder="Sujet"
                    id="subject"
                    class="item"
                    autocomplete="off"
                  />
                </div>
              </div>

              <div class="textAreaField">
                <textarea
                  name=""
                  id="message"
                  cols="30"
                  rows="10"
                  placeholder="Votre message"
                  class="item"
                  autocomplete="off"
                ></textarea>

                <button type="submit">Envoyer</button>
              </div>
            </form>
          </section>
        </div> -->
      <!-- <!-- </main>
      <script src="./main.js"></script>
    </div>
  </body>
</html> -->
