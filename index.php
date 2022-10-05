<?php include('includes/header.php')  ?>
<style>
.modal-title {
    padding: 4% 3%;
}

@media (min-width: 0px) and (max-width: 575px) {
    .content .container {
        margin-top: 15%;
    }

    .title {
        display: block !important;
        text-align: center;
    }

    .title h1 {
        font-size: 25px !important;
        font-weight: 600;
    }

    .title img {
        width: 50px !important;
        margin: auto;
    }

    .search {
        width: 100% !important;
    }

}

@media (min-width: 0px) and (max-width: 575px) {
    .content .container {
        margin-top: 10%;
    }

    .title {
        display: block !important;
        text-align: center;
    }

    .title h1 {
        font-size: 30px !important;
        font-weight: 600;
    }

    .title img {
        width: 50px !important;
        margin: auto;
    }

    .search {
        width: 90% !important;
    }
}

.title h1 {
    font-size: 35px;
    font-weight: 600;
}

.search {
    width: 50%;
}

.modal-body a {
    width: 100%;
}
</style>
<section class="main h-screen">
    <!--header-->
    <div class="header">
        <div class="minibar py-2 w-full">
            <div class="container flex items-center justify-between">
                <div class="flex items-center space-x-4">
                    <div class="flex items-center space-x-2">
                        <img src="assets/gmail.png" alt="" style="width: 12px" />
                        <h5 class="font-normal text-sm text-gray-600" style="font-size: 12px">
                            support@koursemate.com
                        </h5>
                    </div>
                    <div class="flex items-center space-x-2 minibar__phone">
                        <img src="assets/phone-call.png" alt="" style="width: 12px" />
                        <h5 class="font-normal text-sm text-gray-600" style="font-size: 12px">
                            +234 703 0548 630
                        </h5>
                    </div>
                </div>

                <button
                    class="p-1 text-gray-200 border rounded-md bg-orange-600 text-xs hover:bg-white hover:text-orange-600">
                    Subscribe
                </button>
            </div>
        </div>
        <div class="container">
            <div class="flex items-center justify-between py-4">
                <div class="logo">
                    <h2 class="font-semibold text-2xl custom-dark">
                        Kourse<span class="custom-orange">Mate.</span>
                    </h2>
                </div>

                <div class="nav__links">
                    <ul class="flex items-center space-x-8">
                        <li class=" " style="list-style: none">
                            <a href="" style="text-decoration: none" class="flex items-center space-x-1">
                                <img src="assets/house.png" alt="" width="15px" />
                                <span class="text-sm">Home</span>
                            </a>
                        </li>

                        <li class=" " style="list-style: none">
                            <a href="" style="text-decoration: none" class="flex items-center space-x-1">
                                <img src="assets/project-management.png" alt="" width="15px" />
                                <span class="text-sm">Projects</span>
                            </a>
                        </li>
                        <li class=" " style="list-style: none">
                            <a href="" style="text-decoration: none" class="flex items-center space-x-1">
                                <img src="assets/new-post.png" alt="" width="15px" />
                                <span class="text-sm">Hire a writer</span>
                            </a>
                        </li>
                        <li class=" " style="list-style: none">
                            <a href="" style="text-decoration: none" class="flex items-center space-x-1">
                                <img src="assets/team.png" alt="" width="15px" />
                                <span class="text-sm">Patnership</span>
                            </a>
                        </li>
                        <li class=" " style="list-style: none">
                            <a href="" style="text-decoration: none" class="flex items-center space-x-1">
                                <img src="assets/aboutb.png" alt="" width="15px" />
                                <span class="text-sm">About Us</span>
                            </a>
                        </li>
                        <li class=" " style="list-style: none">
                            <a href="" style="text-decoration: none" class="flex items-center space-x-1">
                                <img src="assets/blog.png" alt="" width="15px" />
                                <span class="text-sm">Blog</span>
                            </a>
                        </li>
                        <li class=" " style="list-style: none">
                            <a href="" style="text-decoration: none" class="flex items-center space-x-1">
                                <img src="assets/phone-call.png" alt="" width="15px" />
                                <span class="text-sm">Contact Us</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="controller border-2 px-2 py-1" id="controller">
                    <img src="assets/list.png" alt="" width="24px" />
                </div>
            </div>
        </div>

        <div class="mobile__links bg-white py-3 h-screen"
            style="position: absolute; top: 0%; width: 75%; z-index:111111" id="mobile_nav">
            <div class="logo px-4 py-2 mb-3">
                <h2 class="font-semibold text-2xl custom-dark">
                    Kourse<span class="custom-orange">Mate.</span>
                </h2>
            </div>
            <ul class="flex flex-col space-y-8">
                <li class="px-4 py-2" style="list-style: none">
                    <a href="" style="text-decoration: none" class="flex items-center space-x-2">
                        <img src="assets/house.png" alt="" width="18px" />
                        <span class="text-sm uppercase">Home</span>
                    </a>
                </li>

                <li class="px-4 py-2" style="list-style: none">
                    <a href="" style="text-decoration: none" class="flex items-center space-x-2">
                        <img src="assets/project-management.png" alt="" width="18px" />
                        <span class="text-sm uppercase">Projects</span>
                    </a>
                </li>
                <li class="px-4 py-2" style="list-style: none">
                    <a href="" style="text-decoration: none" class="flex items-center space-x-2">
                        <img src="assets/new-post.png" alt="" width="18px" />
                        <span class="text-sm uppercase">Hire a writer</span>
                    </a>
                </li>
                <li class="px-4 py-2" style="list-style: none">
                    <a href="" style="text-decoration: none" class="flex items-center space-x-2">
                        <img src="assets/team.png" alt="" width="18px" />
                        <span class="text-sm uppercase">Patnership</span>
                    </a>
                </li>
                <li class="px-4 py-2" style="list-style: none">
                    <a href="" style="text-decoration: none" class="flex items-center space-x-2">
                        <img src="assets/aboutb.png" alt="" width="18px" />
                        <span class="text-sm uppercase">About Us</span>
                    </a>
                </li>
                <li class="px-4 py-2" style="list-style: none">
                    <a href="" style="text-decoration: none" class="flex items-center space-x-2">
                        <img src="assets/blog.png" alt="" width="18px" />
                        <span class="text-sm uppercase">Blog</span>
                    </a>
                </li>
                <li class="px-4 py-2" style="list-style: none">
                    <a href="" style="text-decoration: none" class="flex items-center space-x-2">
                        <img src="assets/phone-call.png" alt="" width="18px" />
                        <span class="text-sm uppercase">Contact Us</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!--end of header-->

    <div class="content py-3">
        <div class="container">
            <div class="col-lg-7 py-2" style="margin: auto">
                <div class="flex items-center justify-center space-x-2 title">
                    <img src="assets/idea.png" alt="" width="40px" />
                    <h1>Your research projects right in front of you</h1>
                </div>
                <div class="actions flex space-x-2 justify-center items-center mt-3">
                    <button class="btn py-2 custom-slate text-white sm:flex hidden text-lg rounded-md border-slate"
                        data-bs-toggle="modal" data-bs-target="#staticBackdrop" type="button">
                        Get started
                    </button>

                    <div class="flex items-center search px-3 py-1 space-x-4 rounded-md border-slate cursor-pointer"
                        data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        <img src="assets/search.png" alt="" width="20px" />
                        <h1 class="text-sm text-gray-600">Quick search...</h1>
                    </div>
                </div>

                <!--modal-->

                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <div class="modal-title flex space-x-4 w-full items-center border rounded-md"
                                    id="staticBackdropLabel">
                                    <i class="fa fa-search text-md"></i>
                                    <input type="text" name="search" id="search" class="w-full"
                                        style="border: none; outline: none"
                                        placeholder="Search project by name, department or faculty " />
                                </div>
                            </div>
                            <div class="modal-body " id="modal-body">

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                    Close
                                </button>
                                <button type="button" class="btn btn-primary">Search</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end modal-->
            </div>
        </div>
    </div>
</section>

<?php include('includes/footer.php') ?>

<script>
var search = document.getElementById("search");



$("#search").keyup(function() {
    var searchTerm = search.value
    if (searchTerm != "") {
        $.ajax({
            url: "backend/ajax/getSearchTerm__ajax.php",
            method: "post",
            data: {
                searchTerm: searchTerm,
            },
            dataType: "text",
            success: function(data) {
                $('#modal-body').html(data)

            }
        });
    } else {
        $('#modal-body').html('')
    }
});

function pushText(e) {
    console.log(e.id);
    search.value = e.id;
    $('#modal-body').html('')
}
</script>