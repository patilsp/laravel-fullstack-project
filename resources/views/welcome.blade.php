<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <title>Task Sprint</title>
  <meta charset="utf-8" />
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="shortcut icon" href="assets/media/logos/favicon.png" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
  <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
  <link href="assets/css/main.css" rel="stylesheet" type="text/css" />

  <style>
    * {
      font-family: "Roboto", sans-serif;
      box-sizing: border-box;
    }

    body {
      margin: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-color: #e9ebf1;
    }

    .wrapper {
      width: 100%;
      max-width: 400px;
      height: 640px;
      position: relative;
      overflow: hidden;
      background: #fff;
      border-radius: 4px;
      /* box-shadow: 0 10px 20px 20px rgba(0, 0, 0, 0.08); */
    }

    .home {
      padding: 40px;
    }

    .welcome-image {
      max-width: 100%;
      height: auto;
      display: block;
      margin-bottom: 20px;
    }

    .heading {
      color: #6f2d80;
      font-size: 23px;
      text-align: center;
      font-weight: 700;
    }

    .sub-heading {
      color: #99a1b7;
      font-size: 20px;
      text-align: center;
      margin-top: 20px;
    }

    .btn {
      color: white;
      background: black;
      text-transform: uppercase;
      border: 0;
      padding: 15px 40px;
      border-radius: 4px;
      font-weight: 700;
      letter-spacing: 2px;
      cursor: pointer;
      display: block;
      margin: 30px auto;
      transition: background-color 0.3s ease;
    }

    .btn:hover {
      background-color: #6f2d80;
    }

    @media (max-width: 500px) {
      .heading {
        font-size: 20px;
      }

      .sub-heading {
        font-size: 16px;
      }

      .btn {
        font-size: 14px;
        padding: 10px 30px;
      }
    }

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .home {
      animation: fadeInUp 0.8s ease;
    }
  </style>
</head>

<body id="kt_body" class="app-blank page-bg">
  <div class="wrapper">
    <div class="home">
      <img src="assets/media/images/work-1.png" alt="image" class="welcome-image" />
      <h1 class="heading mt-5">Let's Work Together</h1>
      <h5 class="sub-heading fs-6 fw-semibold text-muted mb-10">Working with experienced teams makes work easier & gets you closer to your goals.</h5>
      <br />
      <br />
      <br />
      <br />
      <br />
      <a class="btn btn-default bottom-0" href="{{ route('login') }}">Get Started</a>
    </div>
  </div>
  <script src="assets/js/custom.js"></script>
</body>

</html>
