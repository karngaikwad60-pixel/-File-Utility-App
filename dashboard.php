<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>File Utility App</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: #f4f6f9;
      font-family: 'Segoe UI', sans-serif;
      color: #333;
    }

    /* Header */
    header {
      background: linear-gradient(90deg, #0d47a1, #1976d2, #42a5f5);
      padding: 30px 0;
      color: white;
      text-align: center;
      box-shadow: 0 4px 10px rgba(0,0,0,0.15);
    }

    header img {
      height: 60px;
      margin-bottom: 10px;
    }

    header h1 {
      font-size: 2.2rem;
      font-weight: 700;
      margin: 0;
    }

    header p {
      font-size: 1rem;
      margin-top: 5px;
      color: #e1f5fe;
      font-style: italic;
    }

    /* Navbar */
    .navbar {
      background: #ffffff;
      box-shadow: 0 3px 10px rgba(0,0,0,0.1);
    }

    .navbar .nav-link {
      font-weight: 500;
      color: #333 !important;
    }

    .navbar .nav-link:hover {
      color: #0d6efd !important;
    }

    .navbar .logout {
      color: #d9534f !important;
      font-weight: 600;
    }

    /* Section Title */
    .section-title {
      font-size: 1.5rem;
      font-weight: 600;
      margin: 50px 0 20px;
      color: #0d47a1;
      text-align: justify;
      border-left: 5px solid #1976d2;
      padding-left: 12px;
    }

    /* Cards */
    .card {
      border-radius: 15px;
      box-shadow: 0 8px 18px rgba(0,0,0,0.08);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      border: none;
    }

    .card:hover {
      transform: translateY(-6px);
      box-shadow: 0 15px 30px rgba(0,0,0,0.15);
    }

    .card h5 {
      font-weight: 600;
      margin-top: 15px;
      color: #0d47a1;
    }

    .feature-img {
      width: 100%;
      height: 160px;
      object-fit: cover;
      border-radius: 12px;
    }

    footer {
      margin-top: 50px;
      padding: 20px;
      background: #0d47a1;
      color: #fff;
      text-align: center;
      font-size: 0.9rem;
    }
  </style>
</head>
<body>

<!-- Header -->
<header>
  <img src="assets/icons/toolbox.png" alt="App Logo">
  <h1>File Utility App</h1>
  <p>✨ Simplify your files. Boost your productivity.</p>
</header>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
  <div class="container">
    <a class="navbar-brand fw-bold text-primary" href="#">📂 File Utility</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navmenu">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="feedback.php">💬 Feedback</a></li>
        <li class="nav-item"><a class="nav-link" href="notifications.php">🔔 Notifications</a></li>
        <li class="nav-item"><a class="nav-link logout" href="logout.php">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Main Content -->
<div class="container py-5">

  <!-- PDF Tools Section -->
  <div class="section-title">PDF Tools</div>
  <div class="row g-4">
    <?php
    $pdf_tools = [
      'pdf_to_word'   => ['📄 PDF to Word',   'assets/big/pdf-word.jpg'],
      'word_to_pdf'   => ['📝 Word to PDF',   'assets/big/word-pdf.jpg'],
      'ppt_to_pdf'    => ['📊 PPT to PDF',    'assets/big/ppt-pdf.jpg'],
      'images_to_pdf' => ['🖼️ Images to PDF', 'assets/big/image-pdf.jpg'],
      'merge_pdfs'    => ['➕ Merge PDFs',     'assets/big/merge-pdf.jpg'],
      'lock_pdf'      => ['🔒 Lock PDF',       'assets/big/lock-pdf.jpg'],
      'excel_to_pdf'  => ['📈 Excel to PDF',   'assets/big/excel-pdf.jpg'],
      'pdf_to_excel'  => ['📉 PDF to Excel',   'assets/big/pdf-excel.jpg'],
    ];
    foreach ($pdf_tools as $key => $data) {
      list($label, $image) = $data;
      echo "
        <div class='col-md-4'>
          <a href='tools.php?tool=$key' class='text-decoration-none'>
            <div class='card p-3 text-center'>
              <img src='$image' class='feature-img' alt=''>
              <h5 class='mt-3'>$label</h5>
            </div>
          </a>
        </div>
      ";
    }
    ?>
  </div>

  <!-- Image Tools Section -->
  <div class="section-title">Image Tools</div>
  <div class="row g-4">
    <?php
    $image_tools = [
      'resize_image'  => ['📏 Resize Image', 'assets/big/resize.jpg'],
      'convert_image' => ['🖼️ JPG ↔ PNG ↔ WEBP', 'assets/big/convert.jpg'],
    ];
    foreach ($image_tools as $key => $data) {
      list($label, $image) = $data;
      echo "
        <div class='col-md-4'>
          <a href='tools.php?tool=$key' class='text-decoration-none'>
            <div class='card p-3 text-center'>
              <img src='$image' class='feature-img' alt=''>
              <h5 class='mt-3'>$label</h5>
            </div>
          </a>
        </div>
      ";
    }
    ?>
  </div>

  <!-- Video Tools Section -->
  <div class="section-title">Video Tools</div>
  <div class="row g-4 mb-5">
    <?php
    $video_tools = [
      'video_to_audio' => ['🎬 MP4 to MP3', 'assets/big/video-audio.jpg'],
    ];
    foreach ($video_tools as $key => $data) {
      list($label, $image) = $data;
      echo "
        <div class='col-md-4'>
          <a href='tools.php?tool=$key' class='text-decoration-none'>
            <div class='card p-3 text-center'>
              <img src='$image' class='feature-img' alt=''>
              <h5 class='mt-3'>$label</h5>
            </div>
          </a>
        </div>
      ";
    }
    ?>
  </div>
</div>

<!-- Footer -->
<footer>
  © 2025 File Utility App | Crafted with ❤️ to simplify your workflow.
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
