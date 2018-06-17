
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                ADMIN
                <small>Subheading</small>
            </h1>

            <?php

            $user = User::find_by_id(3);

            echo $user->username;

            $photo = Photo::find_by_id(4);

            echo $photo->title;

            // $user = new User();
            //
            // $user->username = "Leman";
            // $user->password = "wolf";
            // $user->first_name = "Leman";
            // $user->last_name = "Russ";
            //
            // $user->save();

            // $photos = Photo::find_all();
            //
            // foreach ($photos as $photo) {
            //   echo $photo->title;
            // }

            // $user->username = "Konrad";
            // $user->password = "bolo";
            // $user->first_name = "Konrad";
            // $user->last_name = "Curze";
            // $user->update();

            // $photo = new Photo();
            //
            // $photo->title = "Leman";
            // $photo->description = "Russ";
            // $photo->size = 20;
            //
            //
            // $photo->save();

            // echo INCLUDES_PATH;
            // echo "<br>";
            // echo __DIR__;

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
