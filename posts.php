<?php  
include('admin/includes/database/db_controllers.php');
include('includes/header.php');
$trends =selectPageConditionRand('posts', 0, 4);
$categories = selectAll('topic');

$limit = 12;
$page =isset( $_GET['page']) ? $_GET['page'] : 1;
$date = 'DateReg';
$start=($page -1) * $limit;


$rowcount = selectAll('posts', ['Publish' => 'yes']);
$count = count($rowcount);
$totalPages = ceil($count / $limit);

if ($page == 1) {
    $disabledPrev = 'disabled';
    $bg = 'grey';
}else{
    $disabledPrev = '';
    $bg = '';
}
if($page == $totalPages){
    $disabledNext = 'disabled';
    $bg = 'grey';
}else{
    $disabledNext = '';
    $bg = '';
}
$first = 1;
$last = $totalPages;
$previous = $page -1;
$next = $page +1;

$postTitle = 'All Posts'; 
if (isset($_POST['search_term'])) {
 $posts = searchTrack($_POST['search_term'], $start , 12);
 if (count($posts) != 0) {
     $postTitle = "You searched for '" . strtoupper($_POST['search_term']) . " ' ";
 }else{
     $postTitle = 'No record found on your search term....';
 }

}elseif(!isset($_POST['search_term'])){
 $posts = selectPageCondition('posts', $start,$limit);
}

?>
<div class="container">
    <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-12 py-3">
            <form action="posts.php" method='post'>
                <div class="form-group">
                    <input type="search" class="form-control custom-red"
                        placeholder="Search for a post By Authur Or Title..."
                        style='font-weight:bold; text-transform:capitalize' name='search_term' value='<?php if (isset($_POST['search_term'])) {
                                   echo $_POST['search_term'];
                                } ?>'>
                </div>
            </form>
            <div class="mt-2">
                <div class="header p-2 flex justify-between custom-border-right bg-white">
                    <h1 class="text-xl uppercase font-bold"><?php echo $postTitle  ?></h1>

                </div>
                <!--start of cards-->
                <div class="row">
                    <?php
                        foreach($posts as $post):
                            $id = $post['Topic_id'];
                            $post_id = $post['id'];
                            $response_category = selectOne('Topic', ['id' => $id]);
                            $category = $response_category['Topic'];
                            $views = selectAll('tracks', ['Post_id' => $post_id]);
                            $comments = selectAll('comments', ['Post_id' => $post_id, 'Approved' => 1]);
                            $total_comments = count($comments);
                            $total_views = count($views);
                        ?>
                    <a href="singlePost.php?id=<?php echo $post['id'] ?>"
                        class="col-lg-4 col-md-4 col-sm-4 cursor-pointer ">
                        <div class="card mt-5 shadow shadow-lg rounded-lg">
                            <img class="card-img-top rounded-lg" src="admin/images/<?php echo $post['Picture']  ?>"
                                alt="Card image cap" style="height: 200px" />
                            <div class="card-body">
                                <div class="flex items-center space-x-1">
                                    <h2 class="border py-1 px-2 bg-custom-blue text-white font-bold capitalize "
                                        style="font-size: 12px;">
                                        <?php echo   $category ?>
                                    </h2>
                                    <h6 class="text-gray-500 font-semibold" style="font-size: 12px;">
                                        <?php echo date('F j, Y', strtotime($post['DateReg'])) ?>
                                    </h6>
                                </div>
                                <h1 class="font-bold text-xl my-2">
                                    <?php
                                         $output = strlen($post['Title']) > 45 ? substr($post['Title'],0,45)."..." : $post['Title'];
                                         echo $output;
                                         ?></h1>
                                </h1>


                                <hr class="my-1" />

                                <div class="flex items-center justify-between">
                                    <div class="flex items-center space-x-2">
                                        <img src="assets/oconnect.jpg" alt="" style="
                              height: 50px;
                              width: 50px;
                              border-radius: 50%;
                            " />
                                        <h1 class="text-sm sm:text-md font-bold text-gray-500">
                                            <?php echo $post['Authur'] ?>
                                        </h1>
                                    </div>
                                    <div class="flex items-center space-x-4 text-gray-500">
                                        <div class="flex items-center space-x-1">
                                            <i class="fa fa-eye text-xs"></i> <?php 
                                                 if($total_views > 0 ){
                                                    echo "<span>$total_views</span>";
                                                 }else{
                                                    echo "<span>0</span>";
                                                 }
                                                
                                                ?>
                                        </div>
                                        <div class="flex items-center space-x-1">
                                            <i class="fa fa-message text-xs"></i>
                                            <?php 
                                                 if($total_views > 0 ){
                                                    echo "<span>$total_comments</span>";
                                                 }else{
                                                    echo "<span>0</span>";
                                                 }
                                                
                                                ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>

                    <?php endforeach ?>


                    <div class="container mt-3" style="overflow-x: scroll">
                        <nav aria-label="...">
                            <ul class="pagination">
                                <li class="page-item <?php echo $disabledFirst?> "
                                    style='background-color:<?php echo $bg ?>'>
                                    <a class="page-link" href="posts.php?page=<?php echo $first ?>"
                                        tabindex="-1">First</a>
                                </li>
                                <li class="page-item  <?php echo $disabledPrev?> "
                                    style='background-color:<?php echo $bg ?>'>
                                    <a class="page-link " href="posts.php?page=<?php echo $previous ?>" tabindex="-1"><i
                                            class="fa fa-caret-left" style='cursor:pointer'></i></a>
                                </li>

                                <!-- Looping through pages to print numbers -->
                                <?php for ($i=1; $i <= $totalPages ; $i++) :?>
                                <li class="page-item"><a class="page-link " id='active'
                                        href="posts.php?page=<?php echo $i ?>"
                                        value='<?php echo $i ?>'><?php echo $i ?></a>
                                </li>
                                <?php endfor; ?>
                                <!-- End Looping through pages to print numbers -->

                                <li class="page-item <?php echo $disabledNext?>"
                                    style='background-color:<?php echo $bg ?>'>
                                    <a class="page-link" href="posts.php?page=<?php echo $next ?>"><i
                                            class="fa fa-caret-right" style='cursor:pointer'></i></a>
                                </li>
                                <li class="page-item <?php echo $disabledLast?> "
                                    style='background-color:<?php echo $bg ?>'>
                                    <a class="page-link" href="posts.php?page=<?php echo $last ?>"
                                        tabindex="-1">Last</a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                </div>
                <!--end of cards-->
            </div>

        </div>
        <div class="col-lg-3 col-md-3 col-sm-12 bg-white">
            <?php  include('includes/sidebar.php') ?>
        </div>
    </div>
</div>

<?php include('includes/footer.php') ?>