<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Navbar Clone</title>
  <script scr="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="./index.js"></script>
  <link rel="stylesheet" href="./index.css" />
</head>

<body>
  <section class="navigation">
    <div class="nav-container">
      <div class="brand">
        <a href="#!">Logo</a>
      </div>
      <nav>
        <div class="nav-mobile">
          <a id="nav-toggle" href="#!"><span></span></a>
        </div>
        <ul class="nav-list">
          <li>
            <a href="#!">Programs</a>
            <ul class="nav-dropdown">
              <li>
                <a href="#!">
                  <h3><strong>Full Stack Developer</strong></h3>
                  <p class="greyColor">Be a full Stack Developer</p>
                </a>
              </li>
              <li>
                <a href="#!">
                  <h3><strong>Full Stack Developer</strong></h3>
                  <p class="greyColor">Be a full Stack Developer</p>
                </a>
              </li>
              <li>
                <a href="#!">
                  <h3><strong>Full Stack Developer</strong></h3>
                  <p class="greyColor">Be a full Stack Developer</p>
                </a>
              </li>
            </ul>
          </li>
          <li>
            <a href="#!">Hire Crio Developers</a>
          </li>
          <li>
            <a href="#!">Projects</a>
          </li>
          <li>
            <a href="#!">About</a>
          </li>
          <li>
            <a href="#!" class="btn"> <span>Sign In</span></a>
          </li>
          <li>
            <a href="#!" style="box-shadow: inset 0 0 10px rgb(0, 255, 255); color: rgb(0, 255, 255);">Book Your Free Trial</a>
          </li>
        </ul>
      </nav>
    </div>
  </section>
</body>

</html>