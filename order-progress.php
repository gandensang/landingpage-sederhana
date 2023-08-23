<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $utm_source = isset($_POST['utm_source']) ? $_POST['utm_source'] : '';
    $utm_medium = isset($_POST['utm_medium']) ? $_POST['utm_medium'] : '';
    $utm_content = isset($_POST['utm_content']) ? $_POST['utm_content'] : '';
    $utm_campaign = isset($_POST['utm_campaign']) ? $_POST['utm_campaign'] : '';
    $utm_term = isset($_POST['utm_term']) ? $_POST['utm_term'] : '';
    $utm_gclid = isset($_POST['utm_gclid']) ? $_POST['utm_gclid'] : '';
    $nama = isset($_POST['nama']) ? $_POST['nama'] : ''; 
    $whatsapp = isset($_POST['whatsapp']) ? $_POST['whatsapp'] : '';
    $jenis_pompa = isset($_POST['jenis_pompa']) ? $_POST['jenis_pompa'] : ''; 
    

    // Data untuk dikirim ke API dalam format JSON
    $data = array(
        'Nama' =>  $jenis_pompa . " - " . $nama,
        'Whatsapp' => $whatsapp,
        'UtmSource' => $utm_source,
        'UtmMedium' => $utm_medium,
        'UtmTerm' => $utm_term,
        'UtmCampaign' => $utm_campaign,
        'UtmContent' => $utm_content,
        'Gclid' => $utm_gclid,
        'LandingPageUrl' => 'suryaguna.com/pompa-air'
    );
    
    // Mengubah array data menjadi format JSON
    $jsonData = json_encode($data);

    // Kirim data JSON ke API menggunakan metode POST
     $apiUrl = 'https://suryaguna.azurewebsites.net/api/apiform/form'; // Ganti dengan URL API yang sesuai
     $response = sendPostRequest($apiUrl, $jsonData);

    // Mengambil nomor WhatsApp dari respons API
    //$whatsappNumber = $response['whatsapp_number']; // Ganti dengan key yang sesuai di respons API
    $whatsappNumber = '6281334590410';
    $isiPesan = 'Halo kak, saya ' . $nama . ' mau info lebih lanjut tentang pompa air ' .$jenis_pompa ;

    //echo $isiPesan;

     header("Location: http://wa.me/" .$whatsappNumber. "/?text=".urlencode($isiPesan));
     exit();
}

function sendPostRequest($url, $data) {
    $options = array(
        'http' => array(
            'header'  => "Content-type: application/json\r\n",
            'method'  => 'POST',
            'content' => $data,
        ),
    );

    $context  = stream_context_create($options);
    $result = file_get_contents($url, false, $context);

    if ($result === false) {
        // Handle error
        return false;
    }

    return json_decode($result, true);
}
?>
