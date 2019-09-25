<?php
include_once 'db_function/insurance_func.php';
include_once 'db_function/patient_func.php';
?>

<!DOCTYPE html>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/tableStyle.css">
    <script src="js/my_js.js"></script>
</head>

<body>
<div class="page">
    <nav>
        <ul>
            <li><a href="?menu=hm">Home</a></li>
            <li><a href="?menu=pt">Patient</a></li>
            <li><a href="?menu=ins">Insurance</a></li>
        </ul>
    </nav>

    <main>
        <?php
        $targetMenu = filter_input(INPUT_GET, 'menu');
        switch ($targetMenu) {
            case 'hm':
                include_once 'view/home.php';
                break;
            case 'pt':
                include_once 'view/patient.php';
                break;
            case 'ins':
                include_once 'view/insurance.php';
                break;
            case 'updIns':
                include_once 'view/insurance_update.php';
                break;
            case 'updPat':
                include_once 'view/patient_update.php';
                break;
            default:
                include_once 'view/home.php';
        }
        ?>
    </main>

</div>
</body>
<script>
    $(document).ready(function () {
        $('#myTable').DataTable();
    });
</script>
</html>

