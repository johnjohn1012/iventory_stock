<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4 sidebar-no-expand" style="background-color: #343a40;">
    <!-- Brand Logo -->
    <a href="<?php echo base_url ?>admin" class="brand-link bg-gradient-primary text-sm">
        <img src="../uploads/logo.jpg" alt="Store Logo" class="brand-image img-circle elevation-3 bg-black" style="width: 1.8rem;height: 1.8rem;max-height: unset">
        <span class="brand-text font-weight-light" style="color: #fff;">Harah Rubina Del Dios</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar os-host os-theme-light os-host-overflow os-host-overflow-y os-host-resize-disabled os-host-transition os-host-scrollbar-horizontal-hidden">
        <div class="os-resize-observer-host observed">
            <div class="os-resize-observer" style="left: 0px; right: auto;"></div>
        </div>
        <div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;">
            <div class="os-resize-observer"></div>
        </div>
        <div class="os-content-glue" style="margin: 0px -8px; width: 249px; height: 646px;"></div>
        <div class="os-padding">
            <div class="os-viewport os-viewport-native-scrollbars-invisible" style="overflow-y: scroll;">
                <div class="os-content bg-gradient-primary" style="padding: 0px 8px; height: 100%; width: 100%;">
                    <!-- Sidebar Menu -->
                    <nav class="mt-4" bg-gradient-primary>
                        <ul class="nav nav-pills nav-sidebar flex-column text-sm nav-compact nav-flat nav-child-indent nav-collapse-hide-child" data-widget="treeview" role="menu" data-accordion="false">
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" id="inventoryDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #fff;">
                                    <i class="nav-icon fas fa-archive"></i> <!-- Modern Icon for Inventory -->
                                    <p>
                                        Inventory
                                    </p>
                                </a>
                                <div class="dropdown-menu bg-gradient-primary" aria-labelledby="inventoryDropdown" style="width: 150px; text-align: justify;">
    <a class="dropdown-item" href="./" style="color: #000; font-size: 16px;">
        <i class="fas fa-tachometer-alt"></i> Dashboard
    </a>
    <a class="dropdown-item" href="<?php echo base_url ?>admin/?page=purchase_order" style="color: #000; font-size: 16px;">
        <i class="fas fa-file-invoice"></i> Purchase Order
    </a>
    <a class="dropdown-item" href="<?php echo base_url ?>admin/?page=receiving" style="color: #000; font-size: 16px;">
        <i class="fas fa-truck-loading"></i> Receiving
    </a>
    <a class="dropdown-item" href="<?php echo base_url ?>admin/?page=back_order" style="color: #000; font-size: 16px;">
        <i class="fas fa-box-open"></i> Back Order
    </a>
    <a class="dropdown-item" href="<?php echo base_url ?>admin/?page=return" style="color: #000; font-size: 16px;">
        <i class="fas fa-undo-alt"></i> Return List
    </a>
    <a class="dropdown-item" href="<?php echo base_url ?>admin/?page=stocks" style="color: #000; font-size: 16px;">
        <i class="fas fa-warehouse"></i> Stocks
    </a>
    <a class="dropdown-item" href="<?php echo base_url ?>admin/?page=sales" style="color: #000; font-size: 16px;">
        <i class="fas fa-tags"></i> Sale List
    </a>
    <a class="dropdown-item" href="<?php echo base_url ?>admin/?page=maintenance/supplier" style="color: #000; font-size: 16px;">
        <i class="fas fa-industry"></i> Supplier List
    </a>
    <a class="dropdown-item" href="<?php echo base_url ?>admin/?page=maintenance/item" style="color: #000; font-size: 16px;">
        <i class="fas fa-cogs"></i> Item List
    </a>
    <a class="dropdown-item" href="<?php echo base_url ?>admin/?page=user/list" style="color: #000; font-size: 16px;">
        <i class="fas fa-users"></i> User List
    </a>
</div>

                            </li>
                        </ul>
                    </nav>
                    <!-- /.sidebar-menu -->
                </div>
            </div>
        </div>
        <div class="os-scrollbar os-scrollbar-horizontal os-scrollbar-unusable os-scrollbar-auto-hidden">
            <div class="os-scrollbar-track">
                <div class="os-scrollbar-handle" style="width: 100%; transform: translate(0px, 0px);"></div>
            </div>
        </div>
        <div class="os-scrollbar os-scrollbar-vertical os-scrollbar-auto-hidden">
            <div class="os-scrollbar-track">
                <div class="os-scrollbar-handle" style="height: 55.017%; transform: translate(0px, 0px);"></div>
            </div>
        </div>
        <div class="os-scrollbar-corner"></div>
    </div>
    <!-- /.sidebar -->
</aside>

<script>
    var page;
    $(document).ready(function(){
        page = '<?php echo isset($_GET['page']) ? $_GET['page'] : 'home' ?>';
        page = page.replace(/\//gi,'_');

        if($('.nav-link.nav-'+page).length > 0){
            $('.nav-link.nav-'+page).addClass('active');
            if($('.nav-link.nav-'+page).hasClass('tree-item') == true){
                $('.nav-link.nav-'+page).closest('.nav-treeview').siblings('a').addClass('active');
                $('.nav-link.nav-'+page).closest('.nav-treeview').parent().addClass('menu-open');
            }
            if($('.nav-link.nav-'+page).hasClass('nav-is-tree') == true){
                $('.nav-link.nav-'+page).parent().addClass('menu-open');
            }
        }

        $('#receive-nav').click(function(){
            $('#uni_modal').on('shown.bs.modal',function(){
                $('#find-transaction [name="tracking_code"]').focus();
            })
            uni_modal("Enter Tracking Number","transaction/find_transaction.php");
        })
    });
</script>
