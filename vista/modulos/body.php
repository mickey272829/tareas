<body>

    <div class="main-wrapper">

<?php

    $vistaDashboard = new DashboardController();
    $vistaDashboard->vistaSideBarController();
    
?>

        <div class="page-wrapper">

        <?php 
        
        $vistaDashboard->vistaNavBarController(); 
        $vistaDashboard->vistaContentController(); 
        
        ?>