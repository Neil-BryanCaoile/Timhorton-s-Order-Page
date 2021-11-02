<!-- Author: Neil Bryan Caoile 
     StudentId: 817643697
-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/index.css" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto&display=swap"
      rel="stylesheet"
    />
    <title>Start Your Order</title>
  </head>
  <body>
    <header>
      <img src="images/tims-logo.png" alt="tims logo" />
    </header>

    <main>
      <form
        name="myform"
        id="form"
        action="order.php"
        method="POST"
        onsubmit="return validation()"
      >
        <div class="errMsg" id="errMsg"></div>
        <!-- Select Cup size -->
        <div>
          <div class="outer-radio-container">
            <div class="radio-container">
              <label for="small">
                <img
                  class="cups"
                  id="small-img"
                  src="images/cup.png"
                  alt="small cup"
                />
                Small
              </label>
              <input type="radio" name="cup-size" id="small" value="small" />
            </div>

            <div class="radio-container">
              <label for="medium">
                <img
                  class="cups"
                  id="medium-img"
                  src="images/cup.png"
                  alt="medium"
                />
                Medium
              </label>
              <input type="radio" name="cup-size" id="medium" value="medium" />
            </div>

            <div class="radio-container">
              <label for="large">
                <img
                  class="cups"
                  id="large-img"
                  src="images/cup.png"
                  alt="large"
                />
                Large
              </label>
              <input type="radio" name="cup-size" id="large" value="large" />
            </div>

            <div class="radio-container">
              <label for="x-large">
                <img
                  class="cups"
                  id="x-large-img"
                  src="images/cup.png"
                  alt="x-large"
                />
                X-large
              </label>
              <input
                type="radio"
                name="cup-size"
                id="x-large"
                value="x-large"
              />
            </div>
          </div>
        </div>

        <div class="container-inputs">
          <!-- Number of Coffees -->
          <div>
            <label for="num-coffee">Number of coffee</label>
            <input type="number" id="num-coffee" name="num-coffee" />
          </div>

          <!-- Number of Coffees -->
          <div>
            <label for="num-sugar">Number of sugar</label>
            <input type="number" id="num-sugar" name="num-sugar" />
          </div>

          <!-- Number of Coffees -->
          <div>
            <label for="num-cream">Number of cream</label>
            <input type="number" id="num-cream" name="num-cream" />
          </div>
        </div>

        <!-- Submit-->
        <div class="btn">
          <input type="submit" value="Order Now" />
        </div>
      </form>
    </main>
    <footer>
      <span>codecaoile</span>
    </footer>
    <script src="js/index.js"></script>
  </body>
</html>
