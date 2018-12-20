<?php
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/ourcms.css" type="text/css">
    <title></title>
  </head>
  <body>
    <div id="container">
      <nav>
        <div class="headbtn">
          <h5 class="btnred">Banner</h5>
        </div>
        <div class="headbtn">
          <h5>Stats</h5>
        </div>
        <div class="headbtn">
          <h5>Trending</h5>
        </div>
        <div class="headbtn">
          <h5>Categories</h5>
        </div>
        <div class="headbtn">
          <h5>Sub-categories</h5>
        </div>
        <div class="headbtn">
          <h5>Frequently asked</h5>
        </div>
        <div class="headbtn">
          <h5>User</h5>
        </div>
        <div class="logout">
          <button class="btn btn-outline-danger" type="submit">Log Out</button>
        </div>
      </nav>
      <div id="fieldarea">
        <form class="" action="" method="post">
          <table class="table table-striped">
          <tbody>
            <tr class="">
              <th scope="row">Banner Image</th>
              <td>
                  <input type="file" class="form-control-file" id="">
              </td>
              <td><input type="button" class="btn btn-success" id="" value="Upload Image" /></td>
            </tr>
            <tr class="none">
              <th scope="row">Textboon Stats</th>
              <td>
                <label for="daily_readers">Daily Readers</label><input class="form-control" type="number" placeholder="Daily Readers">
                <label for="blogs">Blogs</label><input class="form-control" type="number" placeholder="Blogs">
                <label for="bloggers">Bloggers</label><input class="form-control" type="number" placeholder="Bloggers">
                <label for="topics">Topics</label><input class="form-control" type="number" placeholder="Topics">
              </td>
              <td><input type="button" class="btn btn-success" id="" value="Update" /></td>
            </tr>
            <tr class="none">
              <th scope="row">Trending on textboon</th>

              <td>
                <label for="title">Title</label><input class="form-control" type="text" placeholder="Enter title of article">
                <label for="article">Enter article here</label><textarea class="form-control" id="" rows="10"></textarea>
              </td>
              <td><input type="button" class="btn btn-success" id="" value="Update" /></td>
            </tr>
            <tr class="none">
              <th scope="row">Add Categories</th>
              <td><input class="form-control" type="text" placeholder="Put categories here"></td>
              <td>
                <input type="button" class="btn btn-success" id="" value="Add More" />
                <input type="button" class="btn btn-success" id="" value="Update" />
              </td>
            </tr>
            <tr class="none">
              <th scope="row">
                <label for="sub-cat">Categories</label>

                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="Management" id="">
                  <label class="form-check-label" for="defaultCheck1">Management</label>
                </div>

                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="Management" id="">
                  <label class="form-check-label" for="defaultCheck1">Engineering</label>
                </div>

                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="Management" id="">
                  <label class="form-check-label" for="defaultCheck1">Medical</label>
                </div>

                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="Management" id="">
                  <label class="form-check-label" for="defaultCheck1">Journalism</label>
                </div>

                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="Management" id="">
                  <label class="form-check-label" for="defaultCheck1">Arts</label>
                </div>

              </th>
              <td>
                <label for="sub-cat"><b>Sub-Categories</b></label>
                <input class="form-control" type="text" placeholder="To add sub categories, select categories given on left">
              </td>
              <td>
                <input type="button" class="btn btn-success" id="" value="Add More" />
                <input type="button" class="btn btn-success" id="" value="Update" />
              </td>
            </tr>
            <tr class="none">
              <th scope="row">Frequently Searched Categories</th>
              <td>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="Management" id="">
                  <label class="form-check-label" for="defaultCheck1">Management</label>
                </div>

                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="Management" id="">
                  <label class="form-check-label" for="defaultCheck1">Engineering</label>
                </div>

                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="Management" id="">
                  <label class="form-check-label" for="defaultCheck1">Medical</label>
                </div>

                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="Management" id="">
                  <label class="form-check-label" for="defaultCheck1">Journalism</label>
                </div>

                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="Management" id="">
                  <label class="form-check-label" for="defaultCheck1">Arts</label>
                </div>
              </td>
              <td>
                <input type="button" class="btn btn-success" id="" value="Update" />
              </td>
            </tr>
            <tr class="none">
              <th scope="row">Testimonial</th>
              <td>
                <label for="image">User's Image</label><input type="file" class="form-control-file" id="">
                <label for="name">Name</label><input class="form-control" type="text" placeholder="Enter name of user">
                <label for="about">About</label><input class="form-control" type="text" placeholder="Enter about user">
                <label for="testimonial">Enter Testimonial here</label><textarea class="form-control" id="" rows="10"></textarea>
              </td>
              <td><input type="button" class="btn btn-success" id="" value="Update" /></td>
            </tr>
          </tbody>
        </table>
      </form>
    </div>
    </div>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/ourcms.js"></script>
  </body>
</html>
