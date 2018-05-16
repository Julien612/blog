<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
   <link rel="stylesheet" href="/css/materialize.css">
   <style>
       *{
        
       }
       body{
        background:#ff6d00; 
       }
       .kek{
           margin-top: 295px;
       }
       /*<img class="materialboxed lol"  src="https://wpapers.ru/wallpapers/Citys/New-York/11786/1366x768_%D0%9D%D0%BE%D1%87%D0%BD%D0%BE%D0%B9-%D0%9D%D1%8C%D1%8E-%D0%99%D0%BE%D1%80%D0%BA.jpg">*/
    </style>
</head>
<body>
    
  <nav>
    <div class="nav-wrapper flow-text blue-grey darken-3">
      <a href="/" class="brand-logo "> &lt;/CODE&gt;  </a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        @yield('links')
      </ul>
    </div>
  </nav>
  
  <div class="container">
        <div class="row">
            <div class="col s12">
              <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                  @yield('body')
                </div>

              </div>
            </div>
          </div>
            
  </div>
  
  
  
  <footer class="page-footer blue-grey darken-3 kek">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2014 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>
            
</body>
</html>