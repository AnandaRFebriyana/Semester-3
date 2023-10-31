import com.google.common.truth.Truth
//Mengimpor kelas Truth dari pustaka Google Truth.
//Google Truth adalah pustaka pengujian yang memungkinkan Anda menulis pengujian dengan cara yang lebih ekspresif dan mudah dibaca.
import org.junit.jupiter.api.Test
//Mengimpor anotasi Test dari kerangka kerja pengujian JUnit
//Anotasi Test digunakan untuk menandai metode yang akan dijalankan sebagai pengujian unit.


class EmailValidatorTest {
    //Penggunaan JUnit untuk menguji fungsi isvalidEmail pada kelas EmailValidator
    @Test
    //Anotasi ini menandai metode correctEmailReturnTrue sebagai metode pengujian. Metode ini akan dijalankan saat pengujian unit dijalankan.
    fun correctEmailReturnTrue() {
        //Fungsi correctEmailReturnTrue menguji apakah fungsi isvalidEmail benar-benar mengembalikan nilai true ketika diberikan alamat email yang valid.
        val email = "nfbryn@gmail.com";
        //mendefinisikan variabel email dengan nilai string "nfbryn@gmail.com"
        Truth.assertThat(EmailValidator.isvalidEmail(email)).isTrue()
        //Pernyataan pengujian utama. Menggunakan pustaka Google Truth untuk memeriksa hasil dari pemanggilan.
    // Jika fungsi isvalidEmail benar-benar mengembalikan nilai true, maka pengujian akan berhasil dan tidak akan ada pesan kesalahan yang ditampilkan.
    }

}