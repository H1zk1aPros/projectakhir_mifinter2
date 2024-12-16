<?php  include "includes/header.php"; ?>

<!-- Navigation -->
<?php include "includes/navigation.php"; ?>

<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Our Programs</title>
      <link
        crossorigin="anonymous"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        rel="stylesheet"
      />
      <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        rel="stylesheet"
      />
      <style>
        body {
          background-color: #fff;
          font-family: "Arial", sans-serif;
        }
    
        .program-section {
          padding: 20px;
        }
        .program-section h2 {
          text-align: center;
          margin-bottom: 20px;
        }
        .program-titles {
          cursor: pointer;
          margin-bottom: 20px;
        }
        .program-titles h3 {
          font-size: 1.5rem;
          margin: 10px 0;
        }
        .program-card {
          display: none;
          background-color: #fff;
          border-radius: 10px;
          box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
          margin-bottom: 20px;
          padding: 20px;
        }
        .program-content {
          display: flex;
          align-items: flex-start;
        }
        .program-text {
          flex: 1;
          font-size: 1.2rem;
          color: #b60000;
          padding-right: 20px;
          text-align: left;
          display: flex;
          flex-direction: column;
          justify-content: flex-start;
        }
        .program-image {
          flex: 1;
          max-width: 25%;
          display: flex;
          align-items: center;
          justify-content: center;
        }
        .program-image img {
          width: 100%;
          height: auto;
          max-width: 100%;
          border-radius: 10px;
        }
        .footer {
          background-color: #b60000;
          color: #fff;
          padding: 40px 20px;
          text-align: center;
        }
        .footer .btn {
          background-color: #f3f4f5;
          color: #0d0d0d;
        }
        .footer .contact-info p {
          margin: 5px 0;
        }
        .footer .social-icons i {
          font-size: 1.5rem;
          margin: 0 10px;
        }
        .whatsapp-logo {
          position: fixed;
          bottom: 20px;
          right: 20px;
          font-size: 2rem;
          color: #25d366;
        }
      </style>
    </head>
    <body>
      <div class="program-section">
        <h2>Our Programs</h2>
        <div class="container">
          <div class="program-titles">
            <h3 onclick="showProgram('gi')">Brazilian Jiujitsu</h3>
                    <!-- Program Card: Brazilian Jiujitsu -->
          <div class="program-card" id="gi">
              <div class="program-content">
                <div class="program-text">
                  <p>
                    Our Brazilian Jiu-Jitsu program teaches effective
                    ground-fighting techniques, focusing on leverage and skill, to
                    empower jiujitero of all sizes to control and submit opponents
                    confidently.
                  </p>
                
                </div>
                <div class="program-image">
                  <img
                    src="https://storage.googleapis.com/a1aa/image/Fgz1U76tVs5WHhi7we1X1MKUk5551OXhDzyffLdJsUplzeWOB.jpg"
                    alt="Person practicing Gi Jiu Jitsu"
                  />
                </div>
              </div>
            </div>
    
            <h3 onclick="showProgram('nogi')">Boxing</h3>
                    <!-- Program Card: Boxing -->
          <div class="program-card" id="nogi">
              <div class="program-content">
                <div class="program-text">
                  <p>
                    Our Boxing program focuses on strength, speed, and techniques to
                    train participants in the art of striking and defensive tactics.
                  </p>
                </div>
                <div class="program-image">
                  <img
                    src="https://storage.googleapis.com/a1aa/image/7EgcCD1Um96rGFYob7naExDJo2f6bm85EpGQoUqdLh9hs3yJA.jpg"
                    alt="Person practicing Boxing"
                  />
                </div>
              </div>
            </div>
    
            <h3 onclick="showProgram('wrestling')">Muay Thai</h3>
                    <!-- Program Card: wrestling -->
          <div class="program-card" id="wrestling">
              <div class="program-content">
                <div class="program-text">
                  <p>
                    Our Boxing program focuses on strength, speed, and techniques to
                    train participants in the art of striking and defensive tactics.
                  </p>

                </div>
                <div class="program-image">
                  <img
                    src="https://storage.googleapis.com/a1aa/image/7EgcCD1Um96rGFYob7naExDJo2f6bm85EpGQoUqdLh9hs3yJA.jpg"
                    alt="Person practicing Boxing"
                  />
                </div>
              </div>
            </div>
    
            <h3 onclick="showProgram('kids')">Karate</h3>
              <!-- Program Card: kids -->
          <div class="program-card" id="kids">
              <div class="program-content">
                <div class="program-text">
                  <p>
                    Our Boxing program focuses on strength, speed, and techniques to
                    train participants in the art of striking and defensive tactics.
                  </p>
              
                </div>
                <div class="program-image">
                  <img
                    src="https://storage.googleapis.com/a1aa/image/7EgcCD1Um96rGFYob7naExDJo2f6bm85EpGQoUqdLh9hs3yJA.jpg"
                    alt="Person practicing Boxing"
                  />
                </div>
              </div>
            </div>
            <h3 onclick="showProgram('private')">Private Training</h3>
              <!-- Program Card: private -->
          <div class="program-card" id="private">
              <div class="program-content">
                <div class="program-text">
                  <p>
                    Our Boxing program focuses on strength, speed, and techniques to
                    train participants in the art of striking and defensive tactics.
                  </p>
              
                </div>
                <div class="program-image">
                  <img
                    src="https://storage.googleapis.com/a1aa/image/7EgcCD1Um96rGFYob7naExDJo2f6bm85EpGQoUqdLh9hs3yJA.jpg"
                    alt="Person practicing Boxing"
                  />
                </div>
              </div>
            </div>
          </div>



          <!-- Additional Program Cards (Muay Thai, Karate, Private Training) follow the same format -->
        </div>
      </div>
      
      <?php  include "includes/footer.php"; ?>

      <script>
        function showProgram(program) {
          var selectedProgram = document.getElementById(program);
          // Jika program yang dipilih sudah terlihat, sembunyikan
          if (selectedProgram.style.display === "flex") {
            selectedProgram.style.display = "none";
          } else {
            // Sembunyikan semua program terlebih dahulu
            var programs = document.getElementsByClassName("program-card");
            for (var i = 0; i < programs.length; i++) {
              programs[i].style.display = "none";
            }
            // Tampilkan program yang dipilih
            selectedProgram.style.display = "flex";
          }
        }
      </script>
      
    </body>
  </html>