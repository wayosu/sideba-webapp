<?php

if (isset($_POST['cetak_sktm'])) {
    require_once 'vendor/autoload.php';
    
    ob_start();
    include 'views/template_surat/sktm.php';
    $content = ob_get_clean();
    
    $encryption = crypt("sktm", "bmntr");
    $file = $encryption.'.pdf';
    
    $mpdf = new \Mpdf\Mpdf();
    $mpdf->WriteHTML($content);
    $mpdf->Output($file, 'I');
    exit;
} else {
    ?>
    <script>
        document.location = '<?= $base_url; ?>user/sktm';
    </script>
    <?php
}