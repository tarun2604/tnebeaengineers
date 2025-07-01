<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - TNEBEA</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .nav-pills .nav-link.active {
            background-color: #007bff;
        }
        .preview-image {
            max-width: 200px;
            max-height: 200px;
            margin: 10px 0;
        }
        .event-card {
            border: 1px solid #ddd;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="#carousel-section" data-toggle="pill">
                                <i class="fa fa-image"></i> Manage Carousel
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#events-section" data-toggle="pill">
                                <i class="fa fa-calendar"></i> Manage Events
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Admin Dashboard</h1>
                </div>

                <div class="tab-content">
                    <!-- Carousel Management Section -->
                    <div class="tab-pane fade show active" id="carousel-section">
                        <h3>Manage Carousel Images</h3>
                        <form action="handle_upload.php" method="POST" enctype="multipart/form-data" class="mb-4">
                            <input type="hidden" name="type" value="carousel">
                            <div class="form-group">
                                <label for="carouselImage">Upload New Image</label>
                                <input type="file" class="form-control-file" id="carouselImage" name="image" accept="image/*" required>
                            </div>
                            <div class="form-group">
                                <label for="imageCaption">Image Caption (Optional)</label>
                                <input type="text" class="form-control" id="imageCaption" name="caption">
                            </div>
                            <button type="submit" class="btn btn-primary">Upload Image</button>
                        </form>

                        <h4>Current Carousel Images</h4>
                        <div class="row" id="carouselImages">
                            <!-- PHP will populate this section with current images -->
                        </div>
                    </div>

                    <!-- Events Management Section -->
                    <div class="tab-pane fade" id="events-section">
                        <h3>Manage Events</h3>
                        <form action="handle_upload.php" method="POST" class="mb-4">
                            <input type="hidden" name="type" value="event">
                            <div class="form-group">
                                <label for="eventTitle">Event Title</label>
                                <input type="text" class="form-control" id="eventTitle" name="title" required>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="eventDate">Event Date</label>
                                    <input type="date" class="form-control" id="eventDate" name="date" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="eventLink">Event Link (Optional)</label>
                                <input type="url" class="form-control" id="eventLink" name="link">
                            </div>
                            <button type="submit" class="btn btn-primary">Add Event</button>
                        </form>

                        <h4>Current Events</h4>
                        <div id="eventsList">
                            <!-- PHP will populate this section with current events -->
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Preview image before upload
        document.getElementById('carouselImage').addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const preview = document.createElement('img');
                    preview.src = e.target.result;
                    preview.className = 'preview-image';
                    const previewContainer = document.querySelector('#carousel-section form');
                    // Remove any existing preview
                    const existingPreview = previewContainer.querySelector('.preview-image');
                    if (existingPreview) {
                        existingPreview.remove();
                    }
                    previewContainer.insertBefore(preview, previewContainer.lastElementChild);
                }
                reader.readAsDataURL(file);
            }
        });
    </script>
</body>
</html> 