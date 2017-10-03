<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
  </head>

  <body>

<!-- Mixins-->
<!-- Pen Title-->
    <div class="container">

      <div class="card">
        <h1 class="title">Login</h1>
        <form method="POST" action="<?php echo site_url()?>/cLogin/userLogin">
          <div class="input-container">
            <input type="#{type}" id="#{label}" name="Username" required="required"/>
            <label for="#{label}">Username</label>
            <div class="bar"></div>
          </div>
          <div class="input-container">
            <input type="password" id="#{label}" name="Password" required="required"/>
            <label for="#{label}">Password</label>
            <div class="bar"></div>
          </div>
          <div class="button-container">
            <button type="submit"><span>Go</span></button>
          </div>
        </form>
      </div>

      </div>
    </div>

  </body>
</html>
