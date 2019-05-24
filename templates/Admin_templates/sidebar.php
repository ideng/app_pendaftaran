
<div id="sidebar" class="sidebar responsive ace-save-state">
    <script type="text/javascript">
        try{ace.settings.loadState('sidebar')}catch(e){}
    </script>
<?php
    $page = filter_input(INPUT_GET, 'p');
?>
<ul class="nav nav-list"> 
    <li align=center>
        <a href=""></i><span>Menu</span></a>
        <b class="arrow"></b>
    </li>  
    <li <?php echo empty($page) || $page == 'dashboard'?'class=\'active\'':''; ?>>
        <a href="templates/view/sidebar/">
            <i class="menu-icon fa fa-tachometer"></i> <span>Dashboard</span>
        </a>  
        <b class="arrow"></b>
    </li>      

    <li class="treeview <?php echo $page == 'data_siswa'?'active':''; ?>">
        <a href="#" class="dropdown-toggle">
            <i class="menu-icon fa fa-desktop"></i><span>Pendaftaran</span>
            <b class="arrow fa fa-angle-down"></b>
        </a>
        <b class="arrow"></b>
            <ul class="submenu">
                <li <?php echo $page == 'data_siswa'?'class=\'active\'':''; ?>>
                    <a href="templates/view/pendaftaran/data_siswa/"><i class="menu-icon fa fa-caret-right"></i>Data Siswa</a>
                    <b class="arrow"></b>
                </li>

                    <b class="arrow"></b>
                </li>
            </ul>

    <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
        <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
    </div>
</div>