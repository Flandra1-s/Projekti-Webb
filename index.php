<?php
include('db-connection.php');

$sql = "SELECT title, price, image_path FROM booking";
$result = $conn->query($sql);

$destinations = [];
if ($result && $result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $destinations[] = $row;
    }
} else {
    echo "No destinations found!";
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TravelLand | Explore the World</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="image.png">
</head>
<body>
    <header class="header">
        <div class="container header-container">
            <div class="logo">
                <img src="logo.jpg" alt="Logo">
                <h1>TravelLand</h1>
            </div>
            <div class="hamburger-menu" id="hamburger-menu">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <nav class="nav" id="nav">
                <ul class="nav-menu">
                    <li><a href="product.php">Destinations</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#packages">Packages</a></li>
                    <li><a href="login.html" id="login-link">Login</a></li>
                </ul>
            </nav>
        </div>
    </header>
    
    <section id="home" class="hero">
        <div class="hero-content">
            <h1>Explore The World with <span>TravelLand</span></h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed diam nonumy eirmod tempor invidunt dolore.</p>
            <a href="#packages" class="btn-primary">Book Now</a>
        </div>
    </section>
</body>
</html>
<section id="about" class="section about">
    <div class="container about-container">
        <div class="about-image">
            <img src="https://media.istockphoto.com/id/1500563478/photo/traveler-asian-woman-relax-and-travel-on-thai-longtail-boat-in-ratchaprapha-dam-at-khao-sok.jpg?s=612x612&w=0&k=20&c=_bb2PdPJMtY9KmNNBSFY6w_TOcC98we45LvsYoa48p8=" alt="About Us">
        </div>
        <div class="about-content">
            <h2>About Us</h2>
            <h3>TraveLand in <span>Numbers</span></h3>
            <p>
                At TravelLand, we are passionate about crafting unforgettable travel experiences. 
                From breathtaking destinations to seamless travel arrangements, we ensure that every journey is extraordinary.
            </p>
            <a href="#packages" class="btn-secondary">Read More</a>
        </div>
    </div>
    <div class="container stats-container">
        <div class="stat-box">
            <h3>534</h3>
            <p>Trips Done</p>
        </div>
        <div class="stat-box">
            <h3>424</h3>
            <p>Corporate Clients</p>
        </div>
        <div class="stat-box">
            <h3>35</h3>
            <p>Visited Countries</p>
        </div>
        <div class="stat-box">
            <h3>15</h3>
            <p>Team Members</p>
        </div>
    </div>
</section>
<section id="packages" class="section packages">
    <div class="container">
        <h2>Trip Packages</h2>
        <p>
            Discover our curated packages to the world's most beautiful destinations. Whether you're looking for adventure, relaxation, or cultural immersion,
             we've got the perfect trip for you.
        </p>
        <div class="packages-grid">
            <?php foreach ($destinations as $destination): ?>
                <div class="package-card">
                    <img src="<?php echo htmlspecialchars($destination['image_path']); ?>" alt="<?php echo htmlspecialchars($destination['title']); ?>">
                    <div class="package-content">
                        <h3><?php echo htmlspecialchars($destination['title']); ?></h3>
                        <p><?php echo htmlspecialchars($destination['price']); ?></p>
                        <a href="#" class="btn-primary">Book Now</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<section id="services" class="section services">
    <div class="container">
        <h2>Service We Provide</h2>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed 
            dianum eirmod tempor invidunt ut labore et dolore magna.
        </p>
        <div class="services-grid">
            <div class="service-box">
                <img src="https://png.pngtree.com/png-vector/20190623/ourmid/pngtree-hotel-icon-png-image_1511479.jpg" alt="Hotel Booking">
                <h3>Hotel Booking</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                    sed dianum eirmod.
                </p>
            </div>
            <div class="service-box">
                <img src="https://cdn3.vectorstock.com/i/1000x1000/29/22/airline-tickets-black-icon-sign-vector-23012922.jpg" alt="Flight Booking">
                <h3>Flight Booking</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                    sed dianum eirmod.
                </p>
            </div>
            <div class="service-box">
                <img src="https://www.shutterstock.com/image-vector/ship-ticket-black-vector-tourist-260nw-2450680351.jpg" alt="Ship Booking">
                <h3>Ship Booking</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                    sed dianum eirmod.
                </p>
            </div>
            <div class="service-box">
                <img src="https://images.pond5.com/black-car-rental-icon-isolated-footage-233776418_iconl.jpeg" alt="Car Booking">
                <h3>Car Booking</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                    sed dianum eirmod.
                </p>
            </div>
        </div>
    </div>
</section>
<section id="testimonials" class="section testimonials">
    <div class="container">
        <h2>Testimonials</h2>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed 
            dianum eirmod tempor invidunt ut labore et dolore magna.
        </p>
        <div class="testimonials-slider">
            <div class="testimonial">
                <img src="https://plus.unsplash.com/premium_photo-1709675363654-01ed9fbe4d4f?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8Ymx1cnJlZCUyMGZhY2V8ZW58MHx8MHx8fDA%3D" alt="Radika Smith">
                <h3>Radika Smith</h3>
                <span>Nomad</span>
                <p>
                    Each destination offered something magical—whether it was the vibrant markets filled with local treasures,
                    the tranquil beaches that stretched endlessly, or the ancient landmarks whispering tales of history. 
                </p>
                <div class="quote-icon">“</div>
            </div>
            <div class="testimonial">
                <img src="https://play-lh.googleusercontent.com/VYn74_SDQGVToOKEwGRzHg0VNIO7jmM9yUvJ9XPoP5UfgLCsqwzmIZmhwnEFERgtHQk" alt="Sara A. K.">
                <h3>Sara A. K.</h3>
                <span>Professional</span>
                <p>
                    As the journey unfolded, it became more than just a trip; it was a celebration of life, exploration, 
                    and the sheer joy of discovering the world around us. 
                    Truly, it was an experience we'll carry in our hearts forever.
                </p>
                <div class="quote-icon">“</div>
            </div>
        </div>
    </div>
</section>
<section id="contact">
    <div class="contact-container">
        <h2>Get in Touch</h2>
        <p>
            Have questions, need support, or want to book a trip? We're here for you! Fill out the form below, 
            and we'll respond promptly to assist you in planning your dream journey.
        </p>
        <form id="contact-form">
            <div class="form-row">
                <input type="text" placeholder="Your Name" required>
                <input type="text" placeholder="Phone Number" required>
            </div>
            <div class="form-row">
                <input type="email" placeholder="Your Email" required>
                <select required>
                    <option value="" disabled selected>Select Your Destination</option>
                    <option value="tokyo">Tokyo, Japan</option>
                    <option value="beijing">Beijing, China</option>
                    <option value="hawaii">Hawaii, USA</option>
                    <option value="malaysia">Semporna, Malaysia</option>
                    <option value="bangkok">Bangkok, Thailand</option>
                    <option value="singapore">Yushin, Singapore</option>
                </select>
            </div>
            <textarea placeholder="Your Message" rows="5" required></textarea>
            <button type="submit" class="btn-primary">Send Message</button>
        </form>
    </div>
</section>

    </section>

    <footer>
        <p>&copy; 2024 TravelLand. All rights reserved.</p>
    </footer>

    <script src="script.js"></script>
    <script src="login.js"></script>
    <script src="home.js"></script>
</body>
</html>
