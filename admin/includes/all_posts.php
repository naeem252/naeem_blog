<?php
/**
 * Created by PhpStorm.
 * User: Naeem
 * Date: 2/2/2020
 * Time: 9:40 PM
 */
$posts=select_all_post();
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table class="table mt-5">
                <tr>
                    <th>Id</th>
                    <th>Post Title</th>
                    <th>Post Content</th>
                    <th>Post Image</th>
                    <th>Post Date</th>
                    <th>Post Author</th>
                    <th>Post Category</th>
                </tr>
                <?php
                while($post=mysqli_fetch_assoc($posts)){
                ?>
                <tr>
                    <td><?php echo $post['id'];?></td>
                    <td><?php echo substr($post['post_title'],0,50);?></td>
                    <td><?php echo substr($post['post_content'],0,100);?></td>
                    <td><img width="100" height="100" src="../images/<?php echo $post['post_image'];?>" alt=""></td>
                    <td><?php echo $post['post_date'];?></td>
                    <td><?php echo $post['post_author'];?></td>
                    <td><?php echo $post['post_category'];?></td>
                </tr>
                <?php }?>
            </table>
        </div>
    </div>
</div>
