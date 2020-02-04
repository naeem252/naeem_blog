<?php
/**
 * Created by PhpStorm.
 * User: Naeem
 * Date: 2/2/2020
 * Time: 10:08 PM
 */
$posts=select_all_post();
?>
<div class="container">
    <div class="row mx-auto mt-5">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    <form action="" method="post" >
                        <div class="form-group">
                            <label for="post_title">
                                Post Title
                            </label>
                            <input id="post_title" type="text" class="form-control" name="post_title">
                        </div>
                        <div class="form-group">
                            <label for="post_content">
                                Post Content
                            </label>
                            <input id="post_content" type="text" class="form-control" name="post_content">
                        </div>
                        <div class="form-group">
                            <label for="post_img">
                                Post Image
                            </label>
                            <input type="file" name="post_image" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="category">
                                Category
                            </label>
                            <select name="category" class="form-control chosen-select" id="category">
                                <option value="select">Select</option>
                                <?php
                                while($post=mysqli_fetch_assoc($posts)){
                                    ?>
                                    <option value="<?php echo $post['post_category'];?>">
                                        <?php echo $post['post_category'];?>
                                    </option>
                                <?php }?>
                            </select>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Add New">
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>