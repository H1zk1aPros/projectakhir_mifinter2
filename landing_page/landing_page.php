<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jember Combat Club</title>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&family=Old+Standard+TT&display=swap" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero-section {
            background-image: url("asset/aseoooyy.png");
            background-size: cover;
            background-position: center;
            padding: 60px 0;
            color: white;
            text-align: center;
        }
        .hero-section h1 {
            color: #b60000;
            font-family: 'Libre Baskerville', serif;
            font-size: 48px;
        }
        .hero-section p {
            color: #000000;
            font-family: 'Old Standard TT', serif;
            font-size: 27px;
        }
        .services-section.bg-danger {
            background-color: #b60000;
        }
        .services-section, .coaches-section {
            color: #b60000;
            padding: 40px 0;
        }
        .coach-card {
            text-align: center;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            transition: 0.3s;
        }
        .coach-card:hover {
            background-color: #f8f9fa;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .schedule-table {
            overflow-x: auto;
        }
        footer {
            background-color: #b60000;
            color: white;
            text-align: center;
            padding: 20px;
        }
    </style>
</head>
<body>
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <h1>Combat Sports Gym pertama di Jember</h1>
            <p>Di Jember Combat Club, kami menghadirkan pengalaman berlatih olahraga bela diri yang terintegrasi dengan pendekatan teknis dan disiplin. Dalam suasana yang ramah dan mendukung. Setiap praktisi dari pemula hingga ahli, dapat mengembangkan kemampuan mereka secara efektif dan bertahap.</p>
        </div>
    </section>

<!-- Services Section -->
<section class="services-section text-white" style="background-color: #b60000;">
    <div class="container text-center">
        <h2>Our Services</h2>
        <div class="row">
            <div class="col-md-3">Jiu Jitsu</div>
            <div class="col-md-3">Karate</div>
            <div class="col-md-3">Boxing</div>
            <div class="col-md-3">Muay Thai</div>
        </div>
    </div>
</section>


    <!-- Coaches Section -->
    <section class="coaches-section">
        <div class="container text-center">
            <h2>Meet Our Coaches</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="coach-card">
                        <img src="./asset/akira.png" alt="Akira" class="img-fluid rounded-circle">
                        <h3>AKIRA</h3>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="coach-card">
                        <img src="./asset/satria.png" alt="Satria" class="img-fluid rounded-circle">
                        <h3>SATRIA</h3>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="coach-card">
                        <img src="./asset/nyo.png" alt="Nyo" class="img-fluid rounded-circle">
                        <h3>NYO</h3>
                    </div>
                </div>
            </div>
            <button class="btn btn-primary mt-3">Learn About our Coaches</button>
        </div>
    </section>

    <!-- Schedule Section -->
    <section class="schedule-section">
        <div class="container">
            <h2 class="text-center">Class Schedule</h2>
            <div class="table-responsive schedule-table">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Time</th>
                            <th>Monday</th>
                            <th>Tuesday</th>
                            <th>Wednesday</th>
                            <th>Thursday</th>
                            <th>Friday</th>
                            <th>Saturday</th>
                            <th>Sunday</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>09:00 - 10:00</td>
                            <td>Jiu Jitsu</td>
                            <td></td>
                            <td>Karate</td>
                            <td>Boxing</td>
                            <td></td>
                            <td>Muay Thai</td>
                            <td></td>
                        </tr>
                        <!-- More rows as per the schedule -->
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>Contact us: 081336677567 | jember.combatclub@gmail.com</p>
        <p>Jember Combat Club &copy; 2024</p>
    </footer>

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.4.7/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
