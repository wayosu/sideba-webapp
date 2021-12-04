<?php

if (isset($_POST['cetak_bantuan'])) {
    require_once 'vendor/autoload.php';
    
    ob_start();
    include 'views/template_other/bantuan.php';
    $content = ob_get_clean();
    
    $encryption = crypt("bantuan", "bmntr");
    $file = $encryption.'.pdf';
    
    $mpdf = new \Mpdf\Mpdf(['orientation' => 'L']);
    $mpdf->WriteHTML($content);
    $mpdf->Output($file, 'I');
    exit;
} else {
    ?>
    <script>
        document.location = '<?= $base_url; ?>admin/bantuan';
    </script>
    <?php
}