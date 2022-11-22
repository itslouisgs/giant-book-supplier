<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::insert([
            [
                'publisher_id' => 1,
                'title' => 'Sapiens: A Brief History of Humankind',
                'author' => 'Yuval Noah Harari',
                'year' => '2018',
                'synopsis' => '100,000 years ago, at least six human species inhabited the earth. Today there is just one. Us. Homo sapiens. How did our species succeed in the battle for dominance? Why did our foraging ancestors come together to create cities and kingdoms? How did we come to believe in gods, nations and human rights; to trust money, books and laws; and to be enslaved by bureaucracy, timetables and consumerism? And what will our world be like in the millennia to come?',
                'image' => 'book-001.jpg',
                'created_at' => Carbon::now()->setTimezone('Asia/Jakarta'),
            ],
            [
                'publisher_id' => 1,
                'title' => 'Homo Deus: A Brief History of Tomorrow',
                'author' => 'Yuval Noah Harari',
                'year' => '2018',
                'synopsis' => 'Yuval Noah Harari, author of the critically-acclaimed New York Times bestseller and international phenomenon Sapiens, returns with an equally original, compelling, and provocative book, turning his focus toward humanity’s future, and our quest to upgrade humans into gods.',
                'image' => 'book-002.jpg',
                'created_at' => Carbon::now()->setTimezone('Asia/Jakarta'),
            ],
            [
                'publisher_id' => 1,
                'title' => 'Never Split the Difference',
                'author' => 'Chris Voss, Tahl Raz',
                'year' => '2016',
                'synopsis' => 'After a stint policing the rough streets of Kansas City, Missouri, Chris Voss joined the FBI, where his career as a kidnapping negotiator brought him face-to-face with bank robbers, gang leaders and terrorists. Never Split the Difference takes you inside his world of high-stakes negotiations, revealing the nine key principles that helped Voss and his colleagues succeed when it mattered the most – when people’s lives were at stake.',
                'image' => 'book-003.jpg',
                'created_at' => Carbon::now()->setTimezone('Asia/Jakarta'),
            ],
            [
                'publisher_id' => 2,
                'title' => 'Crazy Rich Asians',
                'author' => 'Kevin Kwan',
                'year' => '2022',
                'synopsis' => 'Crazy Rich Asians is the outrageously funny debut novel about three super-rich, pedigreed Chinese families and the gossip, backbiting, and scheming that occurs when the heir to one of the most massive fortunes in Asia brings home his ABC (American-born Chinese) girlfriend to the wedding of the season.',
                'image' => 'book-004.jpg',
                'created_at' => Carbon::now()->setTimezone('Asia/Jakarta'),
            ],
            [
                'publisher_id' => 3,
                'title' => 'Project Hail Mary',
                'author' => 'Andy Weir',
                'year' => '2022',
                'synopsis' => 'The only hope for humanity rests with Dr. Ryland Grace — if only he could remember his mission. Andy Weir, the bestselling author of The Martian, delivers another perfect science-based thriller with Project Hail Mary, a tale of impending catastrophe, survival and interstellar adventure.',
                'image' => 'book-005.jpg',
                'created_at' => Carbon::now()->setTimezone('Asia/Jakarta'),
            ],
            [
                'publisher_id' => 3,
                'title' => 'Born a Crime: Stories from a South African Childhood',
                'author' => 'Trevor Noah',
                'year' => '2019',
                'synopsis' => 'Trevor Noah’s Born a Crime is a brilliant and witty memoir that illustrates an unbreakable bond between mother and son. Noah’s poignant prose creates a startling portrayal of his experience growing up in South Africa during apartheid. This memoir, while filled with Noah’s quick wit and humor, is a thought-provoking and insightful look into the life of a comedian who, quite literally, was born a crime.',
                'image' => 'book-006.jpg',
                'created_at' => Carbon::now()->setTimezone('Asia/Jakarta'),
            ],
            [
                'publisher_id' => 4,
                'title' => 'Merawat Luka Batin',
                'author' => 'dr. Jiemi Ardian, Sp.KJ',
                'year' => '2022',
                'synopsis' => '“You are what you think,” begitu kata banyak orang. Padahal, ketika saya berpikir saya kaya, uang dalam rekening saya tidak otomatis bertambah. Akan lebih tepat jika kutipan ini sedikit diubah menjadi “You are how you think”, karena perasaan dan diri kita bergantung pada bagaimana cara kita berpikir.',
                'image' => 'book-007.jpg',
                'created_at' => Carbon::now()->setTimezone('Asia/Jakarta'),
            ],
            [
                'publisher_id' => 4,
                'title' => 'Masih Belajar',
                'author' => 'Iman Usman',
                'year' => '2019',
                'synopsis' => 'Lewat berbagai prestasi dan karyanya, Iman membuktikan bahwa kesuksesan karir dan berdampak sosial bisa berjalan beriringan. Di usianya yang baru 27 tahun, Iman sudah mendirikan perusahaan teknologi pendidikan yang kini mempekerjakan ribuan pegawai, menjalankan berbagai organisasi dan inisiatif sosial, menjadi pembicara dan pengajar di berbagai penjuru dunia, dan meraih gelar master di salah satu perguruan tinggi terbaik di dunia. Prestasi dan pola pikirnya memang jauh melampaui usianya. Tapi itu semua tidak diraih dengan mudah dan hingga hari ini pun ia masih belajar. Lewat buku ini, Iman berbagi cerita perjalanan hidupnya – menemui berbagai hambatan dan penolakan – dan bagaimana proses belajar tanpa putusnya membawa ia pada posisinya saat ini.',
                'image' => 'book-008.jpg',
                'created_at' => Carbon::now()->setTimezone('Asia/Jakarta'),
            ],
            [
                'publisher_id' => 4,
                'title' => 'Selamat Tinggal',
                'author' => 'Tere Liye',
                'year' => '2020',
                'synopsis' => 'Kita tidak sempurna. Kita mungkin punya keburukan, melakukan kesalahan, bahkan berbuat jahat, menyakiti orang lain. Tapi beruntunglah yang mau berubah. Berjanji tidak melakukannya lagi, memperbaiki, dan menebus kesalahan tersebut.',
                'image' => 'book-009.jpg',
                'created_at' => Carbon::now()->setTimezone('Asia/Jakarta'),
            ],
            [
                'publisher_id' => 5,
                'title' => 'Komunikasi Itu Ada Seninya',
                'author' => 'Oh Su Hyang',
                'year' => '2020',
                'synopsis' => 'Oh Su Yang mengajarkan seni berkomunikasi kepada siapa saja, di mana saja, dan dalam situasi apa pun. Orangtua kepada anak, antarteman, lawan jenis, karyawan dan bos, para mahasiswa, dan sebagainya. Setiap strategi yang diberikan berdasarkan teori psikologi komunikasi dan riset ilmiah, namun diberikan dengan penyampaian sederhana dan bisa dipahami kaum awam. Selain itu, penulis juga memberikan contoh-contoh kalimat yang efektif untuk berkomunikasi. Dengan menguasai seni berkomunikasi, Anda dapat menaklukkan dunia!',
                'image' => 'book-010.jpg',
                'created_at' => Carbon::now()->setTimezone('Asia/Jakarta'),
            ]
        ]);
    }
}
