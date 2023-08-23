<?php require_once 'data/posts.php'; ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center p-3 my-2">All posts!</h1>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>user id</th>
                            <th>title</th>
                            <th>body</th>
                            <th>edit</th>
                            <th>delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($posts as $post): ?>
                        <tr>
                            <td><?php echo $post['id']; ?></td>
                            <td><?php echo $post['userId']; ?></td>
                            <td><?php echo $post['title']; ?></td>
                            <td><?php echo $post['body']; ?></td>
                            <td><a href="#" class="btn btn-info">edit</a></td>
                            <td><a href="#" class="btn btn-danger">delete</a></td>
                            
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>