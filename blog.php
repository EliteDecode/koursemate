<?php  
include('includes/header.php');
include('blog/admin/includes/database/db_controllers.php');

$categories = selectAll('topic');
$trends =selectPageConditionRand('posts', 0, 5);
$category = 'All';
$post;

if (isset($_GET['category'])) {
    $category_id = $_GET['category'];
    $posts = selectAll('posts', ['Topic_id' => $category_id]);
    echo "<script>window.scrollTo({ top: 100, behavior: 'smooth' }) </script>";
    $result = selectOne('topic', ['id' => $category_id]);
    $category = $result['Topic'];
    if($category== 'All'){
         $posts = selectAll('posts');
    }
}else{
    $posts = selectPageCondition('posts', 0, 15);
}

?>


<style>
.custom-blue {
    color: #422774;
}

.bg-custom-blue {
    background-color: #422774;
}

.custom-border-right {
    border-right: 3px solid #f97316;
}

.custom-border-blue-2 {
    border: 1px solid #422774;
}

.ads {
    height: 350px;
    background-size: cover;
    background-image: url("assets/banner.jpg");
    background-color: rgba(0, 0, 0, 0.2);
    background-blend-mode: overlay;
    background-position: 0px 0px;
    background-repeat: no-repeat;
}

.cat1 {
    background: url("assets/marketting.png");
    background-position: 0px -50px;
    background-repeat: no-repeat;
    background-size: cover;
    background-color: rgba(0, 0, 0, 0.75);
    background-blend-mode: overlay;
    border-right: 4px solid #f0513a;
}

.carousel-item img {
    margin-left: 18%;
}

@media (min-width: 0px) and (max-width: 575px) {
    .carousel-item img {
        margin-left: 0% !important;
    }
}
</style>



<!--Featured News-->
<div class="py-5 featured-news">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-12 py-3">
                <div class="mt-2">
                    <div class="header p-2 flex justify-between custom-border-right bg-gray-100 rounded-md">
                        <h1 class="text-xl uppercase font-bold">Latest Posts</h1>
                        <h1 class="text-lg uppercase font-semibold">View All</h1>
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
                                <img class="card-img-top rounded-lg"
                                    src="blog/admin/images/<?php echo $post['Picture']  ?>" alt="Card image cap"
                                    style="height: 200px" />
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
                                            <img src="blog/assets/logo.jpeg" alt="" style="
                              height: 20px;
                              width: 20px;
                              border-radius: 50%;
                            " />
                                            <h1 class="text-sm sm:text-md font-bold text-gray-500">
                                                <?php echo $post['Authur'] ?>
                                            </h1>
                                        </div>
                                        <div class="flex items-center space-x-4">
                                            <div class="flex items-center space-x-1">
                                                <span
                                                    class="text-xs text-gray-600"><?php echo $total_comments  ?></span>
                                                <img src="blog/assets/icons/comment.png" alt="" width="15px" />
                                            </div>
                                            <div class="flex items-center space-x-1">
                                                <span class="text-xs text-gray-600"><?php echo $total_views ?></span>
                                                <img src="blog/assets/icons/eye.png" alt="" width="15px" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <?php endforeach ?>
                    </div>
                    <!--end of cards-->
                </div>

            </div>

            <div class="col-lg-3 col-md-3 col-sm-12 bg-white">
                <?php  include('includes/sidebar.php') ?>
            </div>
        </div>
    </div>

    <!--Ads-->
    <div class="container-fluid ads my-5"></div>
    <!--end of Ads-->

    <div class="container">
        <!--single blog ares-->
        <div class="flex justify-center">
            <div class="col-lg-10 col-md-10 col-sm-10 ">
                <section class="center avenir">
                    <h2 class="uppercase font-semibold my-2">Trending Posts</h2>
                    <?php 
             
             foreach($trends as $post):
                 $id = $post['Topic_id'];
                 $post_id = $post['id'];
                 $response_category = selectOne('Topic', ['id' => $id]);
                 $category = $response_category['Topic'];
                 $views = selectAll('tracks', ['Post_id' => $post_id]);
                 $comments = selectAll('comments', ['Post_id' => $post_id, 'Approved' => 1]);
                 $total_comments = count($comments);
                 $total_views = count($views);
                 $dd = html_entity_decode(substr($post['Descrip'], 0, 340). '...')
                
             ?>

                    <article class="bb b--black-10">
                        <a class="db pv4 ph3 ph0-l no-underline black" href="#0">
                            <div class="flex flex-col sm:flex-row flex-row-ns">
                                <div class="pr3-ns mb4 mb0-ns w-100 w-40-ns">
                                    <img class="card-img-top rounded-lg db"
                                        src="blog/admin/images/<?php echo $post['Picture']  ?>" alt="Card image cap" />
                                </div>
                                <div class="w-100 w-60-ns pl3-ns">
                                    <h1 class="f3 fw1 baskerville mt0 lh-title">
                                        <?php echo $post['Title']  ?>
                                    </h1>
                                    <p class="f6 f5-l lh-copy">
                                        <?php
                                          echo $dd
                                         ?>
                                    </p>
                                    <div class="flex justify-between items-center mt-3">
                                        <p class="f6 lh-copy mv0 text-gray-600 my-2">
                                            <?php echo $post['Authur']  ?>
                                        </p>
                                        <div class="flex items-center space-x-4">
                                            <div class="flex items-center space-x-1">
                                                <span
                                                    class="text-xs text-gray-600"><?php echo $total_comments  ?></span>
                                                <img src="blog/assets/icons/comment.png" alt="" width="15px" />
                                            </div>
                                            <div class="flex items-center space-x-1">
                                                <span class="text-xs text-gray-600"><?php echo $total_views ?></span>
                                                <img src="blog/assets/icons/eye.png" alt="" width="15px" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </article>
                    <?php endforeach ?>
                </section>
            </div>

        </div>
        <!--end single blog area-->


    </div>
</div>
<!--End Featured News-->

<?php include('includes/footer.php') ?>