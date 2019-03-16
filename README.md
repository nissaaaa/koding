koding adalah repository untuk menjawab soal arkademy batch 9. berikut ini penjelasan mengenai pemecahan soal <br>
NB:semua program dalam projek ini saya buat dengan bahasa PHP dengan menggunakan editor notepad++. Untuk menjalankannya maka harus menjalankan XAMPP (start apache dan mysql) kemudian masing2 file diletakkann pada folder <strong>XAMPP/htdocs</strong> kemudian pada browser ketikkan <strong>localhost/namafile.php </strong><br>

<strong>1.Function untuk mencetak biodata dengan keluaran JSON </strong> <br>
Untuk mencetak keluaran berupa JSON, menggunakan syntax <strong> json_encode </strong>. Algoritma yang digunakan hanyalah mendeklarasikan masing2 variabel didalam fungsi <strong> biodataku () </strong> sesuai dengan tipe datanya, mencetaknya dengan <strong> json_encode </strong> dan memanggil function tersebut pada baris lain. <br>

sehinggga keluaran yang dihasilkan seperti berikut: <br>
<strong>{"nama":"Choirun Nisa","alamat":"Desa Punjul Kecamatan Plosoklaten Kabupaten Kediri","hobi":"basket","statusku":"belum menikah","keahlian":{"hardskill":"programming,","softskill":"hard working"}}"SMAN 2 PARE""PENS"</strong>
<br>

<strong>2.Function untuk memverifikasi password </strong> <br>
requirement password yang benar adalah Berjumlah delapan karakter dan Setidaknya terdapat minimal sebuah huruf kecil, sebuah huruf besar, sebuah angka dan sebuah karakter spesial<br>
untuk itu maka algoritma yang dipakai adalah<br>
        a. buat function dengan parameter password yang akan dicek <strong>function passValid($n)</strong> <br>
        b. deklarasikan masing2 requirement password  dengan perintah <strong>preg_match</strong><br>
        c. buat fungsi untuk pengecekan password. disini yang digunakan adalah fungsi <strong>if else dan operasi dan(&&)</strong>. yaitu jika password memenuhi requirement <strong>if( $lowercase && $number && strlen($passw)==8 && $uppercase && $specialchar )</strong> maka akan ada prompt password OK, jika tidak memenuhi maka akan ada prompt password salah <br>
        d. panggil fungsi <strong>passValid(123Qwer_)</strong> <br>

<strong>3.Function untuk mencetak karakter "*" dan "=" dalam bentuk persegi </strong> <br>
pada soal ini menggunakan algoritma sebagai berikut:<br>
        a. buat function dengan parameter banyaknya sisi persegi yang akan dicetak <strong>function drawKarakter($n)</strong> <br>
        b. karena pada kolom ke-3 dan baris ke-3 semua dicetak "*" maka digunakan fungsi for. <strong>function drawKarakter($n)</strong>

        
      
