package com.example.awet_pc.mobile6;

public class Konfigurasi {
    //PENTING! JANGAN LUPA GANTI IP SESUAI DENGAN IP KOMPUTER DIMANA DATA PHP BERADA
    //ip 192.168.0.112
    public static final String URL_ADD = "http://192.168.1.7/mobile/insert.php";
    public static final String URL_GET_ALL ="http://192.168.1.7/mobile/read.php";
    public static final String URL_GET_MHS = "http://192.168.1.7/mobile/select.php?id=";
    public static final String URL_UPDATE_MHS = "http://192.168.1.7/mobile/update.php";
    public static final String URL_DELETE_MHS = "http://192.168.1.7/mobile/delete.php?id=";

    //Dibawah ini merupakan Kunci yang akan digunakan untuk mengirim permintaan ke Script PHP
    public static final String KEY_MHS_ID = "id";
    public static final String KEY_MHS_NAMA = "nama";
    public static final String KEY_MHS_JURUSAN = "jurusan";
    public static final String KEY_MHS_EMAIL = "email";

    //JSON Tags
    public static final String TAG_JSON_ARRAY="result";
    public static final String TAG_ID = "id";
    public static final String TAG_NAMA = "nama";
    public static final String TAG_JURUSAN = "jurusan";
    public static final String TAG_EMAIL = "email";

    //ID Mahasiswa
    public static final String MHS_ID = "mhs_id";

}