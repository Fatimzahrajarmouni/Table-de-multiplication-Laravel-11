<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="stylesheet" href="css/styles.css"/>
    </head>
    <body>
        <div class="login-box">
          <h1>Table de multiplication</h1>
          <form action="/table" method="POST">
             @csrf
              <div class="user-box">
                  <input type="number" name="number" min="1" required />
                      <label>Nombre</label>
          </div>
          <center>
           <button type="submit">
             <p>Afficher
                <span></span>
                    </p></button>
   
          </center>
        </form>
  </div>  
  </body>
</html>
