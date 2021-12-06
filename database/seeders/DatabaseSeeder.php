<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Book;
use App\Models\Detail;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(){
    
    Category::create([
        'category' =>'Fiction'
         ]);
    
    Category::create([
    'category' =>'Science'
    ]);
    
    Category::create([
        'category' =>'Computer'
        ]);

    Book::create([
        'id' => '1',
        'category_id' => 2,
        'title' => 'Cosmos'
    ]);

    Detail::create([
        'id' => '1',
        'book_id' => 1,
        'author' => 'Carl Sagan',
        'publisher' => 'Gramedia',
        'year'=>'2021',
        'description' => 'Buku tentang ilmu astronomi ini begitu asik untuk dibaca bagi para pemula. Carl Sagan mampu membuat pembacanya langsung terpikat dengan planet-planet, bintang, dan segala hal di jagat raya yang dipenuhi misteri. Di buku Cosmos ini, Carl Sagan mencoba berspekulasi bahwasannya bisa saja ada makhluk hidup di suatu planet di luar sana, karena begitu banyaknya planet-planet yang berkeliaran. Dan juga Carl Sagan berharap untuk semua negara di Bumi ini membuat proyek besar untuk melakukan eksplorasi ke seluruh planet dibandingkan menghabiskan duit untuk membiayai peralatan perang. Sangat menarik buat kamu baca.'
    ]);

    Book::create([
        'id' => '2',
        'category_id' => 2,
        'title' => 'The Selfish Gene'
    ]);

    Detail::create([
        'id' => '2',
        'book_id' => 2,
        'author' => 'Richard Dawkins',
        'publisher' => 'Gramedia',
        'year'=>'2012',
        'description' => 'Buku yang sangat wajib dibaca ini ditulis oleh seorang ahli biologi, Richard Dawkins. The Selfish Gene menjelaskan sebuah topik yang sangat menarik, yaitu kenapa organisme selalu berusaha mempertahankan hidupnya? Richard Dawkins dapat menjelaskan itu semua. Ia menjelaskan bahwa kita semua memiliki sebuah gen yang disebut, gen egois. Bagaimana gen tersebut berusaha mempertahankan dirinya dari evolusi yang kejam. Maka dari itu semua makhluk hidup berusaha mempertahankan spesiesnya, tak kecuali dengan binatang yang berotak, manusia.kan eksplorasi ke seluruh planet dibandingkan menghabiskan duit untuk membiayai peralatan perang. Sangat menarik buat kamu baca.'
    ]);

    Book::create([
        'id' => '3',
        'category_id' => 2,
        'title' => 'Genome - The Autobiography'
    ]);

    Detail::create([
        'id' => '3',
        'book_id' => 3,
        'author' => 'Matt Ridley',
        'publisher' => 'Gramedia',
        'year'=>'2014',
        'description' => 'Kalau di buku The Selfish Gene lebih fokus membahas sebuah gen egois, kalau di buku ini, membahas 23 kromosom yang ada di dalam tubuh manusia. Buku biologi ini begitu lengkap menjelaskan segala perilaku manusia, apa penyebab dan akibatnya. Genom merupakan sebuah informasi yang terdiri sel, nukleus, kromosom dan gen. Dari situlah genetika sangat berperan penting terhadap tubuh kita. Mulai dari sikap, penyakit, hingga inteligensi kita.'
    ]);

    Book::create([
        'id' => '4',
        'category_id' => 2,
        'title' => 'On the Origin of Species'
    ]);

    Detail::create([
        'id' => '4',
        'book_id' => 4,
        'author' => 'Matt Ridley',
        'publisher' => 'Gramedia',
        'year'=>'2017',
        'description' => 'Kalau di buku The Selfish Gene lebih fokus membahas sebuah gen egois, kalau di buku ini, membahas 23 kromosom yang ada di dalam tubuh manusia. Buku biologi ini begitu lengkap menjelaskan segala perilaku manusia, apa penyebab dan akibatnya. Genom merupakan sebuah informasi yang terdiri sel, nukleus, kromosom dan gen. Dari situlah genetika sangat berperan penting terhadap tubuh kita. Mulai dari sikap, penyakit, hingga inteligensi kita.'
    ]);

    Book::create([
        'id' => '5',
        'category_id' => 2,
        'title' => 'A Brief History of Time'
    ]);

    Detail::create([
        'id' => '5',
        'book_id' => 5,
        'author' => 'Stephen Hawking',
        'publisher' => 'Gramedia',
        'year'=>'2004',
        'description' => 'Selain Newton dan Einstein, mungkin Stephen Hawking merupakan ilmuan yang sangat termahsyur di seluruh dunia. Itu berkat bukunya yang paling fenomenal, A Brief History of Time. Di buku ini Hawking mencoba menjelaskan dengan sangat mudah dipahami asal mula jagat raya dibentuk. Teori paling terkenalnya, dentuman besar atau the big bang dijelaskannya lewat buku ini, dan juga peran Tuhan terhadap penciptaan. Dan juga ia pun mengkritisi segala hipotesis ilmuan lainnya yang layak untuk diperbaiki. Itulah 5 buku tentang sains yang wajib dibaca sekali seumur hidup. Perbanyaklah wawasan dengan membaca buku. Karena begitu banyak hal yang belum kita ketahui, dan sangat disayangkan kalau apatis begitu saja.'
    ]);

    Book::create([
        'id' => '6',
        'category_id' => 1,
        'title' => 'Katarsis'
    ]);

    Detail::create([
        'id' => '6',
        'book_id' => 6,
        'author' => 'Anastasia Aemilia',
        'publisher' => 'Gramedia',
        'year'=>'2014',
        'description' => 'Rekomendasi novel fiksi yang pertama, yaitu Katarsis yang ditulis oleh Anastasia Aemilia, seorang pengarang, editor, dan penerjemah di Gramedia Pustaka Utama. Novel yang ditulisnya ini pun berhasil diterbitkan pertama kalinya oleh penerbit Gramedia Pustaka Utama pada tahun 2013 lalu. Novel dengan tebal 261 halaman ini mengisahkan seorang gadis remaja kurang lebih berusia 18 tahun–menjadi satu-satunya saksi perampokan mengenaskan yang terjadi di rumah pamannya yang berada di kota Bandung. Tara Johandi namanya, ia merupakan satu-satunya orang yang masih bertahan hidup, sementara semua anggota keluarganya sudah tewas. Saat ditemukan, Tara dikurung di dalam sebuah kotak perkakas kayu dengan keadaannya yang sangat syok. Polisi menduga bahwa pelakunya merupakan sepasang perampok yang memang sudah lama menjadi buronan. Selama penyidikan pun, satu per satu bukti petunjuk mulai menampakkan keganjilannya. Alfons yang merupakan seorang psikiater, membantu Tara dalam melepaskan segala trauma atas kejadian yang dialaminya itu. Alfons merasa bila Tara menyimpan suatu rahasia dengan sangat erat. Akan tetapi, sebelum Alfons menguak lebih dalam terkait rahasia tersebut, laki-laki misterius bernama Ello hadir sehingga membuat Alfons merasa kesulitan untuk menghilangkan trauma pada diri Tara.'
    ]);

    Book::create([
        'id' => '7',
        'category_id' => 1,
        'title' => 'Keberangkatan'
    ]);

    Detail::create([
        'id' => '7',
        'book_id' => 7,
        'author' => 'Nh Dini',
        'publisher' => 'Gramedia',
        'year'=>'2019',
        'description' => 'Novel Keberangkatan karya Nh. Dini ini pertama kalinya terbit pada tahun 1977. Mengisahkan seorang gadis keturunan belanda bernama Elisa yang jatuh hati kepada seorang laki-laki Jawa. Kisah percintaan dan drama keluarga menghiasi novel yang bernas akan pertanyaan mengenai jati diri dan hakikat seorang perempuan di negeri ini. Melalui berbagai karya awalnya, Nh. Dini pun telah membela dan mempertahankan suara perempuan dan mengutarakan pentingnya kesetaraan hak antara kaum laki-laki dan perempuan.'
    ]);

    Book::create([
        'id' => '8',
        'category_id' => 1,
        'title' => 'Renjana'
    ]);

    Detail::create([
        'id' => '8',
        'book_id' => 8,
        'author' => 'Elicia',
        'publisher' => 'Gramedia',
        'year'=>'2009',
        'description' => 'Renjana adalah sebuah novel dengan genre gabungan, yakni fiksi fantasi dengan kebudayaan yang ditulis oleh ElAlicia. Pada suatu kesempatan sang penulis pernah mengatakan alasan dibalik dirinya mengusung tema tersebut sebab genre yang dipilihnya terbilang jarang dan memang dirinya menaruh hati pada sejarah Indonesia dan kebudayaan kota Jogja. Dengan mengangkat tema kebudayaan Nusantara, El membalut sebuah khayal dengan kebudayaan Jawa hingga dapat dijadikan ke dalam bentuk novel ini. Mulanya,  El menggunakan platform digital Wattpad untuk menuliskan karyanya ini, hingga berhasil memenangkan Wattys Award pada tahun 2020 lalu dengan kategori Historical Fiction.'
    ]);

    Book::create([
        'id' => '9',
        'category_id' => 1,
        'title' => 'Murder on the Orient Express'
    ]);

    Detail::create([
        'id' => '9',
        'book_id' => 9,
        'author' => 'Agatha',
        'publisher' => 'Gramedia',
        'year'=>'2003',
        'description' => 'Murder on the Orient Express atau Pembunuhan di Orient Express merupakan novel fiksi detektif-misteri karya Agatha Christie yang memperlihatkan seorang detektif asal Belia bernama Hercule Poirot. Karya tulisnya ini pertama kali diterbitkan pada awal Januari tahun 1934 di Britania Raya oleh Collins Crime Club. Novel ini terdiri dari tiga bagian. Bagian pertama berisi penjelasan beberapa fakta, yaitu mengenai mayat korban dan ada 12 orang yang dicurigai. Kemudian, pada bagian kedua merupakan interogasi para penumpang yang dicurigai. Bagian ketiga adalah analisis detektif Poirot yang dibantu oleh dua rekannya. Bila dilihat dari jumlah tokohnya, akan cenderung ramai sebab tokohnya berjumlah 17 orang, ada tokoh detektif Poirot, ada si korban, dokter, kondektur, direktur, dan 12 orang yang dicurigai.'
    ]);

    Book::create([
        'id' => '10',
        'category_id' => 1,
        'title' => 'The Midnight Library'
    ]);

    Detail::create([
        'id' => '10',
        'book_id' => 10,
        'author' => 'Matt Haig',
        'publisher' => 'Gramedia',
        'year'=>'2012',
     'description' => 'The Midnight Library mengisahkan seorang gadis berusia 35 tahun, bernama Nora yang hidupnya sarat akan penyesalan. Suatu ketika, ia menetapkan untuk mengakhiri hidupnya, tetapi ia justru terbawa ke dalam suatu perpustakaan entah di alam mana. Perpustakaan tersebut menawarkan kesempatan pada Nora untuk dapat mewujudkan berbagai hal yang pernah Nora tolak saat di masa lampau. Midnight Library namanya. Di sana, Nora diberikan penawaran menarik untuk menjalani berbagai kejadian yang ia sesali dalam hidupnya dan melakukan kehidupan yang berbeda dari sebelumnya. Nora diperlihatkan Book of Regrets berisi berbagai penyesalan yang pernah Nora alami semasa hidup dan dipersilakan menentukan pilihan guna mengubah kehidupan yang telah disesali selama ini.'
    ]);
    }
}
