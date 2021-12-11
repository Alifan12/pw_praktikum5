<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="">
  <style>
  body,
  html {
    width: 100%;
    height: 100%;
  }

  body,
  h1,
  h2,
  h3 {
    font-family: "Lato", "Helvetica Neue", Helvetica, Arial, sans-serif;
    font-weight: 700;
  }

  .intro-header {
    padding-top: 10px;
    /* If you're making other pages, make sure there is 50px of padding to make sure the navbar doesn't overlap content! */
    padding-bottom: 50px;
    text-align: center;
    color: #f8f8f8;
    background: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/827672/desktop_background_2.png") no-repeat center center;
    background-size: cover;
  }

  .intro-message {
    position: relative;
    padding-top: 20%;
    padding-bottom: 20%;
  }

  .intro-message>h1 {
    margin-top: -500;

    text-shadow: 2px 2px 3px rgba(0, 0, 0, 0.6);
    font-size: 5em;
  }

  .intro-message>p {
    font-weight: 200px;
    margin-top: 20px;
    text-shadow: 2px 2px 3px rgba(0, 0, 0, 0.6);
    font-size: 2em;
  }

  #button {
    margin-top: 30px;
    background: #7CC241;
    border: none;
    border-radius: 0%;
    border-bottom: 6px solid #69A436;
    padding: 15px 15px 15px 15px;

  }

  #button:hover {
    margin-top: 30px;
    background: #61DFD1;
    border-bottom: 6px solid #33D4C1;
    border-radius: 0%;
    padding: 15px 15px 15px 15px;
  }

  .network-name {
    text-transform: uppercase;
    font-size: 17px;
    font-weight: 600;
    font-family: 'lato';
    letter-spacing: 2px;
  }
  </style>
</head>

<body>
  <!-- Header -->

  <div class="intro-header">
    <div class="container">

      <div class="row">
        <div class="col-lg-12">
          <div class="intro-message">
            <h1 class="animated bounceInDown">IoT Monitoring</h1>
            <p class="animated lightSpeedIn">
              IoT Monitoring merupakan website yang dapat menampilkan
            </p>
            <p>
              device IoT apa saja yang tersedia di dalam kantor,
            </p>
            <p>
              beserta detail dari setiap device.
            </p>

            <ul class="list-inline intro-social-buttons" id="headerButton">
              <li>
                <a href="Home.php"><button id="button" class="animated bounceInUp btn btn-success btn-lg"> <span
                      class="network-name">DASHBOARD</span></button></a>
              </li>

            </ul>
          </div>
        </div>
      </div>

    </div>
    <!-- /.container -->

  </div>

  <script src="" async defer></script>
</body>

</html>