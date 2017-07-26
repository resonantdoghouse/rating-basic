<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>5 Star Rating Basic</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link href="css/rating.css?v=2" rel="stylesheet">

  </head>
  <body>


    <!-- As a heading -->
    <nav class="navbar navbar-light bg-faded">
      <h1 class="navbar-brand mb-0">Company Name</h1>
    </nav>

    <div class="container">

      <form method="post" action="email.php">
        <h1>Testimonial</h1>

        <div class="bcw-star-rating">
          <label>Rating:</label>
          <div class="stars">
            <label class="star-label">
              <input name="rating" class="hidden-radio-button" type="radio" value="1 Star">
              <i class="fa fa-star"></i>
            </label>
            <label class="star-label">
              <input name="rating" class="hidden-radio-button" type="radio" value="2 Stars">
              <i class="fa fa-star"></i>
            </label>
            <label class="star-label">
              <input name="rating" class="hidden-radio-button" type="radio" value="3 Stars">
              <i class="fa fa-star"></i>
            </label>
            <label class="star-label">
              <input name="rating" class="hidden-radio-button" type="radio" value="4 Stars">
              <i class="fa fa-star"></i>
            </label>
            <label class="star-label">
              <input name="rating" class="hidden-radio-button" type="radio" value="5 Stars">
              <i class="fa fa-star"></i>
            </label>
          </div>
        </div>

        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="name">
        </div>

        <div class="form-group">
          <label for="email">Email Address:</label>
          <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>

        <div class="form-group">
          <label for="review">Review:</label>
          <textarea class="form-control" id="review" name="review" rows="6" aria-describedby="reviewHelp"></textarea>
          <small id="reviewHelp" class="form-text text-muted">Please describe your experience.</small>
        </div>

        <button type="submit" class="btn btn-primary" disabled="disabled">Submit</button>

      </form>


    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

    <script src="js/rating.js?v=2"></script>

  </body>
</html>