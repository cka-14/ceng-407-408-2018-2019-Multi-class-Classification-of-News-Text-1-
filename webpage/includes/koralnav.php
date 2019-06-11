<nav class="bar bar--sm bg--dark" id="menu5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-1 hidden-xs hidden-sm">
                            <div class="bar__module">
                                <a href="index.php">
                                    <img class="logo logo-light" alt="logo" src="../img/ceng.png">

                                </a>
                            </div>
                            <!--end module-->
                        </div>
                        <div class="col-lg-5">
                            <div class="bar__module">
                                <ul class="menu-horizontal">
                                    <li>
                                        <a href="memmodel.php">
                                            <i class="stack-interface stack-plus-circled"></i> Prepare Classify
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../users/<?php echo $_SESSION['user']['uName']; ?>/classify/classify.php">
                                            <i class="stack-interface stack-cog"></i> Classify
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--end columns-->
                        <div class="col-lg-6 text-right text-left-xs">
                            <div class="bar__module">
                                <ul class="menu-horizontal">
                                    <li class=" text-left">
                                        <span class="">
<!--                                            <img alt="avatar" class="avatar image--xxs" src="img/avatar-round-1.png" />-->

                                        <strong><?php echo $_SESSION['user']['uName']; ?></strong>
                                            (<?php echo ucfirst($_SESSION['user']['uType']); ?>)
                                        </span>

                                        <!--<div class=" dropdown__container">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-3 col-lg-2 dropdown__content">
                                                    <ul class="menu-vertical">
                                                        <li>
                                                         <a href="edituser.php">Edit Profile</a>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                       </div>-->


                                    </li>

                                </ul>
                            </div>
                            <div class="bar__module">
                                <a class="btn btn--primary btn--sm type--uppercase" href="../index.php?logout='1'">
                                    <span class="btn__text">
                                        Logout
                                    </span>
                                </a>
                            </div>
                        </div>
                        <!--end columns-->
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
</nav>
