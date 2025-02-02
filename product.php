<?php
include('db-connection.php');

$sql = "SELECT title, description, image_path FROM destinations";
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
    <title>Travel Adventures</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="product.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>
<body>

<button class="back-btn btn btn-primary btn-sm d-flex align-items-center" onclick="window.location.href='index.php'">
    <i class="fa fa-arrow-left me-2"></i> Back to Home
</button>


<div class="container">
    <h5 class="text-center mt-5">Explore Our Travel Adventures</h5>
    
    <div class="row mt-5">
        <?php foreach($destinations as $destination): ?>
            <div class="col-md-4 mb-4">
                <div class="card custom-card">
                    <img src="<?php echo $destination['image_path']; ?>" class="card-img-top" alt="<?php echo $destination['title']; ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $destination['title']; ?></h5>
                        <p class="card-text"><?php echo $destination['description']; ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>


    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <ul>
                        <li>Contact Information</li>
                        <li>Phone: +1 123-456-7890</li>
                        <li>Email: info@example.com</li>
                        <li>Address: 123 Street, City, Country</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul>
                        <li>About Us</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul>
                        <li>Connect with Us</li>
                        <li>
                            <a href="#" class="social-icon"><i class="fab fa-facebook"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
