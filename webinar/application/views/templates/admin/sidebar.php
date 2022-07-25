    <!-- ========== Left Sidebar Start ========== -->
    <div class="vertical-menu">

        <div data-simplebar class="h-100">

            <!--- Sidemenu -->
            <div id="sidebar-menu">
                <!-- Left Menu Start -->
                <ul class="metismenu list-unstyled" id="side-menu">
                    <?php
                    $role_id = $this->session->userdata('role_id');
                    $queryMenu = "SELECT `user_menu`.`id`, `menu`
                        FROM `user_menu` JOIN  `user_access_menu`
                          ON `user_menu`.`id` = `user_access_menu`.`menu_id`
                       WHERE `user_access_menu`.`role_id` = $role_id
                       ORDER BY `user_access_menu`.`menu_id` ASC
                         ";
                    $menu = $this->db->query($queryMenu)->result_array();
                    ?>

                    <?php foreach ($menu as $m) : ?>
                        <li class="menu-title"><?= $m['menu'] ?></li>


                        <?php
                        $menuId = $m['id'];
                        $querySubMenu = "SELECT *
                        FROM `user_sub_menu` JOIN `user_menu`
                        ON  `user_sub_menu`.`menu_id` = `user_menu`.`id`
                        WHERE `user_sub_menu`.`menu_id` = $menuId
                        AND `user_sub_menu`.`is_active` = 1
                    ";
                        $subMenu = $this->db->query($querySubMenu)->result_array();
                        ?>
                        <?php foreach ($subMenu as $sm) : ?>
                            <li>
                                <a href="<?= base_url($sm['url']); ?>" class="waves-effect">
                                    <div class="d-inline-block icons-sm mr-1"><i style="color:#265CD5;" class="<?= $sm['icon']; ?>"></i></div>
                                    <span><?= $sm['title']; ?></span>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    <?php endforeach; ?>
                    <br>
                    <li>
                        <a href="javascript:void(0);" id="logout" class="waves-effect waves-light">
                            <div class="d-inline-block icons-sm mr-1"><i style="color:#de3910;" class="fas fa-sign-out-alt"></i></div>
                            <span>Logout</span>
                        </a>
                        <!-- <a href="#" class="waves-effect" id="sa-warning">
                        </a> -->
                    </li>
                </ul>

            </div>
            <!-- Sidebar -->
        </div>
    </div>
    <!-- Left Sidebar End -->