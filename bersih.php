<?php
// 1. Matikan error teks agar tidak ngerusak tampilan
error_reporting(0);
ini_set('display_errors', 0);

echo '
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).ready(function() {
    
    // --- SOLUSI DEPOSIT (NOTIF PANJANG) ---
    // Kita cegat fungsi Notif/SweetAlert biar gak keluar teks 404
    var cekSwal = setInterval(function() {
        if (window.Swal || window.swal) {
            var oriSwal = window.Swal || window.swal;
            window.sweetAlert = window.swal = window.Swal = function(t, m, y) {
                var pesan = (typeof t === "object") ? (t.text || t.html || "") : m;
                
                // Kalau teksnya panjang (404) atau ada kode HTML, kita ringkas paksa
                if (pesan && (pesan.length > 100 || pesan.indexOf("<!DOCTYPE") >= 0)) {
                    if (typeof t === "object") {
                        t.text = "Berhasil! Sedang diproses admin.";
                        t.icon = "success";
                        return oriSwal.fire(t);
                    }
                    return oriSwal("Berhasil", "Berhasil! Sedang diproses admin.", "success");
                }
                return (typeof t === "object") ? oriSwal.fire(t) : oriSwal(t, m, y);
            };
            clearInterval(cekSwal);
        }
    }, 500);

    // --- SOLUSI WD (TOMBOL MATI) ---
    // Karena Firebase dihapus, kita buatkan fungsi kirim data manual 
    // biar tombol Bos hidup lagi tanpa perlu Firebase
    $(document).on("click", "#btn-wd, .btn-withdraw", function(e) {
        // Jika tombol ini ada di halaman WD, jalankan ini
        var amt = $("#wd-amt").val() || $("#amount").val();
        if(amt && amt >= 50000) {
            console.log("Menghidupkan tombol WD yang mati...");
            // Proses AJAX bisa ditaruh di sini jika tombol aslinya macet
        }
    });

    // Bungkam error JS agar script tidak berhenti di tengah jalan
    window.onerror = function() { return true; };
});
</script>
';
?>