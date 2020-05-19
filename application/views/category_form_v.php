<!DOCTYPE html>
<html>       
<head>
    <meta charset="UTF-8">   
    <title>Input Category</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>       
</head>        
<body>

    <br><br><br>
    <div class="container"><p><a class="btn btn-info" href="<?php echo site_url('Category');?>">Data Category</a></p>

                    <form method="post" action="<?php echo site_url('Category/insert'); ?>" 
                          enctype="multipart/form-data"> 

                        <div class="form-group"> 
                            <label for="usr">Category Name:</label>
                            <input type="text" class="form-control" name="category_name" required="">
                        </div>

                        <div class="form-group">
                            <label for="comment">Category Description:</label>
                            <textarea class="form-control" rows="15" name="category_description" required=""></textarea>
                        </div>

                        <div class="form-group">
                            <label for="usr"> Category Image :</label>
                            <input type="file" class="form-control" name="category_image" required="">
                        </div>


                        <button style ="margin-bottom:25px" class="btn btn-success" 
                                type="submit">Save</button>
                    </form>
    </div>       
   </body>
   </html>