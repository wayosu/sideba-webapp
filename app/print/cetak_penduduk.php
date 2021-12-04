<?php

if (isset($_POST['cetak_penduduk'])) {
    require_once 'vendor/autoload.php';
    
    ob_start();
    include 'views/template_other/penduduk.php';
    $content = ob_get_clean();
    
    $encryption = crypt("penduduk", "bmntr");
    $file = $encryption.'.pdf';
    
    $mpdf = new \Mpdf\Mpdf(['orientation' => 'L']);
    $mpdf->WriteHTML($content);
    $mpdf->Output($file, 'I');
    exit;
} else {
    ?>
    <script>
        document.location = '<?= $base_url; ?>admin/penduduk';
    </script>
    <?php
}