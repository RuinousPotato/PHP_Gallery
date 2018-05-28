
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                ADMIN
                <small>Subheading</small>
            </h1>

            <?php

            // $user = new User();
            //
            // $user->username = "Horus";
            // $user->password = "dick";
            // $user->first_name = "Horus";
            // $user->last_name = "Lupercal";
            //
            // $user->save();

            $users = User::find_all();

            foreach ($users as $user) {
              echo $user->username;
            }
            // $user->username = "Konrad";
            // $user->password = "bolo";
            // $user->first_name = "Konrad";
            // $user->last_name = "Curze";
            // $user->update();


             ?>

            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                </li>
                <li class="active">
                    <i class="fa fa-file"></i> Blank Page
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

</div>
<!-- /.container-fluid -->
