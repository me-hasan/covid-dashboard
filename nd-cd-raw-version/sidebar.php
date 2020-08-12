<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="alert alert-primary small last-updated-date" role="alert">
        <strong><strong>শেষ আপডেট: <?php echo BanglaConverter::en2bn(date('d/m/Y', strtotime($_apiResponseData['report_date']))); ?></strong></strong>
    </div>
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="dashboard.php">
                <span class="menu-title">সামগ্রিক চিত্র</span>
                <i class="mdi mdi-home menu-icon"></i>
            </a>
        </li>
        <li class="nav-item<?php echo ($_REQUEST['datatype'] == 'riskzone')?' active':''; ?>">
            <a class="nav-link" href="dataframe.php?datatype=riskzone">
                <span class="menu-title">রিস্ক জোন রিপোর্ট</span>
                <i class="mdi mdi-chart-bar menu-icon"></i>
            </a>
        </li>
        <li class="nav-item<?php echo ($_REQUEST['datatype'] == 'patientmobility')?' active':''; ?>">
            <a class="nav-link" href="dataframe.php?datatype=patientmobility">
                <span class="menu-title">আক্রান্ত ব্যাক্তির চলাচল</span>
                <i class="mdi mdi-nature-people menu-icon"></i>
            </a>
        </li>
        <li class="nav-item<?php echo ($_REQUEST['datatype'] == 'citizenmobility')?' active':''; ?>">
            <a class="nav-link" href="dataframe.php?datatype=citizenmobility">
                <span class="menu-title">নাগরিক চলাচল</span>
                <i class="mdi mdi-pac-man menu-icon"></i>
            </a>
        </li>
        <li class="nav-item<?php echo ($_REQUEST['datatype'] == 'synnoptic_surveillance')?' active':''; ?>">
            <a class="nav-link" href="dataframe.php?datatype=synnoptic_surveillance">
                <span class="menu-title">সিনোপটিক সারভেইল্যান্স ম্যাপ</span>
                <i class="mdi mdi-map menu-icon"></i>
            </a>
        </li>
        <li class="nav-item<?php echo ($_REQUEST['datatype'] == 'ss_report')?' active':''; ?>">
            <a class="nav-link" href="dataframe.php?datatype=ss_report">
                <span class="menu-title">সিভিল সার্জন রিপোর্ট</span>
                <i class="mdi mdi-chart-bar menu-icon"></i>
            </a>
        </li>
        <!-- <li class="nav-item">
             <a class="nav-link" href="#">
                 <span class="menu-title">এলার্ট সার্ভিস মনিটরিং</span>
                 <i class="mdi mdi-information menu-icon"></i>
             </a>
         </li>-->
        <li class="nav-item<?php echo ($_REQUEST['datatype'] == 'sdp_monitoring')?' active':''; ?>">
            <a class="nav-link" href="dataframe.php?datatype=sdp_monitoring">
                <span class="menu-title">সামাজিক দুরত্ব পর্যবেক্ষণ</span>
                <i class="mdi mdi-eye menu-icon"></i>
            </a>
        </li>
        <li class="nav-item<?php echo ($_REQUEST['datatype'] == 'analytics')?' active':''; ?>">
             <a class="nav-link" href="dataframe.php?datatype=analytics">
                <span class="menu-title">এনালিটিক্স (বিশ্লেষণ)</span>
                <i class="mdi mdi-chart-arc menu-icon"></i>
            </a>
        </li>
    </ul>
</nav>