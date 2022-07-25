<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <?php
                $role_id = $this->session->userdata('role_id');
                $queryMenu = "SELECT `admin_menu`.`id`, `menu`
                         FROM `admin_menu` JOIN  `admin_access_menu`
                           ON `admin_menu`.`id` = `admin_access_menu`.`menu_id`
                        WHERE `admin_access_menu`.`role_id` = $role_id
                        AND `admin_menu`.`is_active` = 1
                        ORDER BY `admin_access_menu`.`menu_id` ASC
                          ";
                $menu = $this->db->query($queryMenu)->result_array();
                ?>

                <?php foreach ($menu as $m) : ?>
                    <li class="nav-small-cap">
                        <i class="mdi mdi-dots-horizontal"></i>
                        <span class="hide-menu"><?= $m['menu']; ?></span>
                    </li>

                    <!-- siapkan sub-menu sesuai menu -->
                    <?php
                    $menuId = $m['id'];
                    $querySubMenu = "SELECT *
                        FROM `admin_sub_menu` JOIN `admin_menu`
                        ON  `admin_sub_menu`.`menu_id` = `admin_menu`.`id`
                        WHERE `admin_sub_menu`.`menu_id` = $menuId
                        AND `admin_sub_menu`.`is_active` = 1
                    ";
                    $subMenu = $this->db->query($querySubMenu)->result_array();
                    ?>

                    <?php foreach ($subMenu as $sm) : ?>
                        <?php if ($title == $sm['title']) : ?>
                            <li class="sidebar-item">
                                <a class="sidebar-link waves-dark active" href="<?= base_url($sm['url']); ?>" aria-expanded="false">
                                <?php else :  ?>
                            <li class="sidebar-item">
                                <a class="sidebar-link waves-dark" href="<?= base_url($sm['url']); ?>" aria-expanded="false">
                                <?php endif; ?>
                                <i class="<?= ($sm['icon']); ?>"></i>
                                <span class="hide-menu"><?= ($sm['title']); ?></span>
                                </a>
                            </li>
                        <?php endforeach;  ?>
                    <?php endforeach; ?>
                    <br>
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-dark" href="<?= base_url('auth/logout') ?>" aria-expanded="false" data-toggle="modal" data-target="#logoutModal">
                            <i class="mdi mdi-logout"></i>
                            <span class="hide-menu">Logout</span>
                        </a>
                    </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->