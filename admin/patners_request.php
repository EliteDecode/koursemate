<?php 
session_start();
require('includes/header.php');
require('includes/database/db_controllers.php');

$admin = $_SESSION['admin'];
if (!isset($_SESSION['admin'])) {
    header('location:login.php');
 }


 $requests = selectAll('patners');


?>


<style>
.table-container {

    width: 95%;
    margin: 0% 2.5%;
}

@media (min-width: 0px) and (max-width: 575px) {

    .table-container {
        width: 90%;
        margin: 0% 5% !important;
    }
}

thead tr th {
    font-size: 16px;
}

tbody tr td {
    font-size: 12px;
}

.dataTables_length select {
    border: 2px solid #171d64 !important;
    width: 90px !important;
    margin: 3% 0%;
}


.dataTables_length label,
.dataTables_info {
    font-weight: bold;
    text-transform: uppercase;
    font-size: 12px;
}

.paginate_button {
    font-weight: bold;
    text-transform: capitalize;
    font-size: 14px;


}

.dataTables_filter input {
    content: "e.g. jonhdoe";
    height: 35px;
    width: 200px;
    border: 2px solid #171d64 !important;
    font-size: 14px;
    margin: 3% 0%;
}


.dataTables_wrapper {
    background-color: #fff;
    padding: 3% 4%;
    border-radius: 10px;
}
</style>

<?php include ('nav.php') ?>

<body>
    <div class="wrap h-screen" style=" background:#F9F9F9; overflow-x:hidden">
        <div class="row">
            <div class="col-md-2 col-lg-2 col-xl-2">
                <?php include('sidenav.php') ?>
            </div>
            <div class="col-md-10 col-lg-10 col-xl-10" style='padding:0% 2%'>
                <div class=" mt-2 table-container">
                    <div class=" w-full p-2 rounded-md  my-3 bg-white flex justify-between items-center ">
                        <div>
                            <h4 class="font-bold text-red-600 uppercase my-3 text-sm">Page</h4>
                            <div class="flex space-x-1 items-center">
                                <img src="../assets/icons/idea.png" alt="" width="25px">
                                <p class="font-bold uppercase text-md "> All Projects Request</p>
                            </div>
                        </div>

                    </div>
                    <table class="table table-bordered  table-hover" id="postTable" style="width:100%; ">
                        <thead>
                            <tr>

                                <th scope="col">S/N</th>
                                <th scope="col">Fullname</th>
                                <th scope="col">Email</th>
                                <th scope="col">State</th>
                                <th scope="col">Status</th>

                                <th scope="col">Action</th>

                            </tr>
                        </thead>
                        <tbody>


                            <?php foreach($requests as $key=>$request): ?>
                            <tr>

                                <th scope="row"><?php echo $key + 1  ?></th>
                                <td><?php echo $request['Name']  ?></td>
                                <td><?php echo $request['Email']  ?></td>
                                <td><?php echo $request['State'] ?></td>


                                <?php if ($request['Status'] === 1):  ?>
                                <td><button id="<?php echo $request['id'] ?>"
                                        class="px-2 py-1 bg-green-200 rounded-lg flex space-x-1 items-center"><img
                                            src="../assets/icons/publishing.png" alt=""
                                            style="width:15px;"><span>Approved</span></button></td>
                                <?php elseif($request['Status'] === 0): ?>
                                <td><button id="<?php echo $request['id'] ?>"
                                        class="px-2 py-1 bg-orange-200 rounded-lg flex space-x-1 items-center"><img
                                            src="../assets/icons/pending.png" alt=""
                                            style="width:15px;"><span>Pending</span></button></td>
                                <?php elseif($request['Status'] === -1): ?>
                                <td><button id="<?php echo $request['id'] ?>"
                                        class="px-2 py-1 bg-red-400 text-white rounded-lg flex space-x-1 items-center"><img
                                            src="../assets/icons/delete.png" alt=""
                                            style="width:15px;"><span>Declined</span></button></td>
                                <?php endif; ?>

                                </button></td>

                                <td><a href="view_patners_request.php?id=<?php echo $request['id'] ?>"><button
                                            id="<?php echo $request['id'] ?>"
                                            class="px-2 py-1 bg-blue-200 rounded-lg flex space-x-1 items-center"
                                            onclick='editid(this)'><img src="../assets/icons/eye.png" alt=""
                                                style="width:15px;"> <span>View</span></button></a>
                                </td>

                            </tr>
                            <?php endforeach;?>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>





    <?php include('includes/footer.php')?>

    <script>
    jQuery(document).ready(function($) {
        $('#postTable').DataTable({
            scrollX: true,
            language: {
                search: "_INPUT_",
                searchPlaceholder: "E.g. John Doe"
            }
        });
    })
    </script>

</body>

</html>