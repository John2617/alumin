<?php include 'admin/db_connect.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>

    <!-- Add Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Styles -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url('path-to-your-background.gif') no-repeat center center fixed; 
            background-size: cover;
            color: white;
        }

        .gallery-container {
            margin-top: 80px;
            padding: 50px 0;
            text-align: center;
        }

        h2 {
            font-size: 2.5em;
            margin-bottom: 40px;
            animation: fadeIn 2s ease-in-out;
        }

        .gallery-row {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .gallery-item {
            width: 30%;
            margin-bottom: 30px;
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .gallery-item:hover img {
            transform: scale(1.1);
        }

        .gallery-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.3);
        }

        .gallery-description {
            position: absolute;
            bottom: 0;
            background: rgba(0, 0, 0, 0.6);
            color: white;
            width: 100%;
            padding: 10px;
            text-align: center;
        }

        .search-container {
            margin-bottom: 20px;
        }

        .search-container input {
            border-radius: 25px;
            padding: 10px;
            width: 100%;
            max-width: 400px;
            margin: 0 auto;
            border: none;
            background-color: rgba(255, 255, 255, 0.7);
            font-size: 16px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .search-container input:focus {
            outline: none;
            background-color: rgba(255, 255, 255, 0.9);
        }

        @media (max-width: 768px) {
            .gallery-item {
                width: 45%;
            }
        }

        @media (max-width: 480px) {
            .gallery-item {
                width: 90%;
            }
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
    </style>
</head>
<body>

    <!-- Include Header -->
    <?php include 'header.php'; ?>

    <div class="container gallery-container">
        <h2>Our Gallery</h2>

        <!-- Search Bar -->
        <div class="search-container">
            <input type="text" id="searchInput" class="form-control" placeholder="Search Images...">
        </div>

        <!-- Gallery Row -->
        <div class="gallery-row">
            <?php
            $query = "SELECT image_name, image_description FROM gallery"; 
            $result = $conn->query($query);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $imagePath = 'path-to-your-images-folder/' . $row['image_name'];
                    $imageDescription = $row['image_description'] ?? 'No description available';
            ?>
            <div class="gallery-item" data-name="<?php echo strtolower($row['image_name']); ?>">
                <img src="<?php echo $imagePath; ?>" alt="<?php echo $imageDescription; ?>">
                <div class="gallery-description"><?php echo $imageDescription; ?></div>
            </div>
            <?php
                }
            } else {
                echo "<p>No images found in the gallery.</p>";
            }
            ?>
        </div>
    </div>

    <!-- Include Footer -->
    <?php include 'footer.php'; ?>

    <!-- JavaScript & jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js" defer></script>

    <!-- Search Functionality -->
    <script>
        document.getElementById('searchInput').addEventListener('input', function() {
            let searchQuery = this.value.toLowerCase();
            let galleryItems = document.querySelectorAll('.gallery-item');

            galleryItems.forEach(function(item) {
                let name = item.getAttribute('data-name');
                if (name.includes(searchQuery)) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    </script>

</body>
</html>
