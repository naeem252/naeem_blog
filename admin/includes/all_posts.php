<?php
/**
 * Created by PhpStorm.
 * User: Naeem
 * Date: 2/2/2020
 * Time: 9:40 PM
 */
$page=$_GET['page'] ?? 1;
$ofset=($page-1)*5;
$posts=select_all_post(["limit"=>5,"offset"=>$ofset]);
$rows=mysqli_num_rows(select_all_post());
$page_num=ceil($rows/5);
$prev=$page;
$next=$page;

if(isset($_GET['submit'])){
    $clone_arr=$_GET['clone'];
    echo $_GET['bulkoption'];
    foreach ($clone_arr as $arr){
        $sql="SELECT * FROM posts WHERE id={$arr}";
        $sql_post=mysqli_query($database,$sql);
        $query_data=mysqli_fetch_assoc($sql_post);
//        var_dump($query_data);
        $add_sql="INSERT INTO posts(post_title,post_content,post_image,post_date,post_comment_count,post_author,post_category,post_tags) ";
        $add_sql.="VALUES(";
        $add_sql.="'".e($query_data['post_title'])."', ";
        $add_sql.="'".e($query_data['post_content'])."', ";
        $add_sql.="'".e($query_data['post_image'])."', ";
        $add_sql.="now(), ";
        $add_sql.="'".e($query_data['post_comment_count'])."', ";
        $add_sql.="'".e($query_data['post_author'])."', ";
        $add_sql.="'".e($query_data['post_category'])."', ";
        $add_sql.="'".e($query_data['post_tags'])."')";

        $add_post_query=mysqli_query($database,$add_sql);
        if($add_post_query){

        }else{
            echo mysqli_error($database);
        }

    }

}

?>
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <form action="" method="get">
                <div class="form-group">
                    <select  class="form-control" name="bulkoption" id="">
                        <option value="clone">Clone</option>
                    </select>
                </div>
                <input class="btn btn-block btn-primary" type="submit" name="submit" value="apply">

            <table class="table mt-5">
                <tr>
                    <th><input type="checkbox" id="post_first_check"></th>
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
                    <td><input class="post_check" type="checkbox" value="<?php echo $post['id'];?>" name="clone[]"></td>
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
            </form>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <?php
                    if($next!=1){
                    ?>
                    <li class="page-item"><a class="page-link" href="<?php $prev--;

                        echo url_for("admin/posts.php?post=all&page={$prev}");
                        ?>">Previous</a></li>
                    <?php }?>
                    <?php
                        for($i=1;$i<=$page_num;$i++){
                    ?>
                    <li class="page-item <?php if($i==$page){echo "active";}?>"><a class="page-link " href="<?php echo url_for("admin/posts.php?post=all&page={$i}");?>"><?php echo $i;?></a></li>
                    <?php }?>
                    <?php
                        if($page_num!=$next){
                    ?>
                    <li class="page-item"><a class="page-link" href="<?php $next++;

                         echo url_for("admin/posts.php?post=all&page={$next}");
                         ?>">Next</a></li>
                    <?php }?>
                </ul>
            </nav>
        </div>
    </div>
</div>

