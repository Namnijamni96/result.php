<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NEX GEN AI License</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- FontAwesome Icons -->
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <!-- Custom Styles -->
  <style>
    /* Body and General Styles */
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(to right, #0f172a, #1e293b);
      color: white;
      overflow-x: hidden;
      line-height: 1.8;
    }

    /* Header Section */
    .header {
      text-align: center;
      padding: 80px 0;
      background: linear-gradient(135deg, #4e73df, #1e3a8a);
      border-radius: 10px;
      animation: fadeInDown 1s ease-in-out;
    }

    
    .header::before {
      content: "";
      position: absolute;
      top: -50px;
      left: -50px;
      width: 150px;
      height: 150px;
      background: rgba(255, 255, 255, 0.15);
      border-radius: 50%;
      animation: moveCircle 6s infinite alternate;
    }

    @keyframes moveCircle {
      0% {
        transform: translate(0, 0);
      }
      100% {
        transform: translate(150px, 100px);
      }
    }

    .header h1 {
      font-size: 3.5rem;
      font-weight: 800;
      color: #fff;
      text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
    }

    .header p {
      font-size: 1.5rem;
      margin-top: 10px;
    }

    /* Animated Divider */
    .divider {
      width: 100px;
      height: 4px;
      background: #ff7e5f;
      margin: 20px auto;
      animation: slideIn 1.5s ease-out;
    }

    /* License Section */
    .license-section {
      margin: 40px auto;
      padding: 40px 20px;
      background: #1f2937;
      border-radius: 8px;
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.5);
      animation: fadeInUp 1.5s ease-in-out;
    }

    .license-section h2 {
      text-align: center;
      font-size: 2.8rem;
      font-weight: 700;
      color: #4e73df;
    }

    .license-item {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
      animation: fadeIn 1s ease-in-out;
    }

    .license-item i {
      font-size: 1.8rem;
      color: #ff7e5f;
      margin-right: 15px;
    }
   
    
      .license-text {
      font-size: 18px;
      line-height: 1.8;
      color: #cbd5e1;
      padding: 20px;
      border: 1px solid #374151;
      border-radius: 8px;
      box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.2);
      background: #1e293b;
    }

    .license-text ul {
      list-style-type: none;
      padding: 0;
    }

    .license-text li {
      padding-left: 30px;
      position: relative;
      margin-bottom: 10px;
      transition: all 0.3s ease-in-out;
    }

    .license-text li::before {
      content: "✔";
      position: absolute;
      left: 0;
      color: #38bdf8;
      font-weight: bold;
    }

    .license-text li:hover {
      color: #38bdf8;
      transform: translateX(5px);
    }


    /* Card Hover Effect */
    .license-card {
      padding: 20px;
      border: 1px solid #4e73df;
      border-radius: 8px;
      transition: transform 0.4s ease-in-out, box-shadow 0.4s;
    }

    .license-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 10px 25px rgba(78, 115, 223, 0.5);
    }

    /* Creator Section */
    .creator {
      text-align: center;
      background: linear-gradient(135deg, #1e293b, #111827);
      padding: 50px 20px;
      border-radius: 10px;
      box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.5);
      animation: slideUp 1.5s ease-out;
      margin-top: 50px;
    }

    .creator h3 {
      font-size: 2.5rem;
      color: #ff7e5f;
    }

    .creator p {
      font-size: 1.2rem;
    }

    /* Animation Keyframes */
    @keyframes fadeInDown {
      0% {
        opacity: 0;
        transform: translateY(-30px);
      }
      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes fadeInUp {
      0% {
        opacity: 0;
        transform: translateY(30px);
      }
      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes slideIn {
      0% {
        width: 0;
      }
      100% {
        width: 100px;
      }
    }

    @keyframes slideInUp {
      0% {
        opacity: 0;
        transform: translateY(50px);
      }
      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>
</head>
<body>

  <!-- Header Section -->
  <div class="header">
    <h1>NEX GEN AI License</h1>
    <p>Comprehensive Terms and Creator Information</p>
    <div class="divider"></div>
  </div>

  <!-- License Section -->
  <div class="container license-section">
    <h2>License Details</h2>
    <ul>
    <div class="row mt-4">
      <div class="col-md-6">
        <div class="license-item">
          <i class="fas fa-check-circle"></i>
        <li>  <p>Permission is granted to use the software for both personal and commercial purposes.</p> </li>
        </div>
        <div class="license-item">
          <i class="fas fa-check-circle"></i>
        <li>  <p>Redistribution and modification are allowed under terms of the license agreement.</p> </li>
        </div>
      </div>
      <div class="col-md-6">
        <div class="license-item">
          <i class="fas fa-check-circle"></i>
        <li>  <p>Credit to the creator <strong>Naman</strong> must be included in all redistributions.</p> </li>
        </div>
        <div class="license-item">
       <i class="fas fa-check-circle"></i>
     <strong>  <li> <p> Warranty: Software is provided "as-is" without   liability for damages.</p> </li> </strong>
        </div>
      </div>
    </div>
  </div>
</ul>

  <!-- Extra License Cards -->
  <div class="container mt-5">
    <div class="row g-4">
      <div class="col-md-4">
        <div class="license-card text-center">
          <h5 class="text-primary mb-3">Personal Use</h5>
          <p>Use for your personal projects and experiments without restrictions.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="license-card text-center">
          <h5 class="text-primary mb-3">Commercial Use</h5>
          <p>Leverage this software in commercial projects with proper attribution.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="license-card text-center">
          <h5 class="text-primary mb-3">Redistribution</h5>
          <p>Modify and redistribute with proper credits to the creator, Naman.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Creator Section -->
  <div class="container creator mt-5">
    <h3>Meet the Creator</h3>
    <p>This powerful AI system is brought to you by <span class="fw-bold text-warning">Naman</span>, an innovator in AI technology.</p>
  </div>

  <!-- Bootstrap JS and Popper -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
