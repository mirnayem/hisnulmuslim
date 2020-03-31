<?php

use App\Dua;
use Illuminate\Database\Seeder;

class DuasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dua1 = new Dua();
        $dua1->title = 'কাপড় পরিধানের দো‘আ';
        $str = strtolower($dua1->title);
        $dua1->slug = preg_replace('/\s+/', '-', $str);
        $dua1->arabic = 'الْحَمْدُ لِلَّهِ الَّذِي كَسَانِي هَذَا (الثَّوْبَ) وَرَزَقَنِيهِ مِنْ غَيْرِ حَوْلٍ مِنِّي وَلاَ قُوَّةٍ';
        $dua1->translation = 'সকল হামদ-প্রশংসা আল্লাহ্‌র জন্য; যিনি আমাকে এ (কাপড়)টি পরিধান করিয়েছেন এবং আমার শক্তি-সামর্থ্য ছাড়াই তিনি আমাকে এটা দান করেছেন';
        $dua1->transliteration = 'আল্‌হামদু লিল্লা-হিল্লাযী কাসানী হা-যা (আসসাওবা) ওয়া রযাকানীহি মিন্ গইরি হাওলিম মিন্নী ওয়ালা কুওওয়াতিন';
        $dua1->audio_url = 'https://download.quranicaudio.com/quran/salaah_bukhaatir/114.mp3';
        $dua1->reference = 'আবূ দাউদ, নং ৪০২৩; তিরমিযী, নং ৩৪৫৮; ইবন মাজাহ্‌, নং ৩২৮৫। আর শাইখ আলবানী একে হাসান বলেছেন। দেখুন, ইরওয়াউল গালীল, ৭/৪৭।';
        $dua1->save();


        $dua2 = new Dua();
        $dua2->title = 'বাড়ি থেকে বের হওয়ার সময়ের যিকর';
        $str = strtolower($dua2->title);
        $dua2->slug = preg_replace('/\s+/', '-', $str);
        $dua2->arabic = 'بِسْمِ اللَّهِ، تَوَكَّلْتُ عَلَى اللَّهِ، وَلَا حَوْلَ وَلَا قُوَّةَ إِلاَّ بِاللَّهِ';
        $dua2->translation = 'আল্লাহ্‌র নামে (বের হচ্ছি)। আল্লাহর উপর ভরসা করলাম। আর আল্লাহর সাহায্য ছাড়া (পাপ কাজ থেকে দূরে থাকার) কোনো উপায় এবং (সৎকাজ করার) কোনো শক্তি কারো নেই';
        $dua2->transliteration = 'বিসমিল্লাহি, তাওয়াককালতু ‘আলাল্লা-হি, ওয়ালা হাওলা ওয়ালা কুওয়াতা ইল্লা বিল্লাহ';
        $dua2->reference = 'আবূ দাউদ ৪/৩২৫, নং ৫০৯৫; তিরমিযী ৫/৪৯০, ৩৪২৬। আরও দেখুন, সহীহুত তিরমিযী, ৩/১৫১।';
        $dua2->audio_url = 'https://download.quranicaudio.com/quran/salaah_bukhaatir/111.mp3';
        $dua2->save();
        
        $dua3 = new Dua();
        $dua3->title = 'ঋণ মুক্তির জন্য দো‘আ ';
        $str = strtolower($dua3->title);
        $dua3->slug = preg_replace('/\s+/', '-', $str);
        $dua3->arabic = 'اللَّهُمَّ اكْفِنِي بِحَلاَلِكَ عَنْ حَرَامِكَ، وَأَغْنِنِي بِفَضْلِكَ عَمَّنْ سِوَاكَ';
        $dua3->translation = 'হে আল্লাহ! আপনি আমাকে আপনার হালাল দ্বারা পরিতুষ্ট করে আপনার হারাম থেকে ফিরিয়ে রাখুন এবং আপনার অনুগ্রহ দ্বারা আপনি ছাড়া অন্য সকলের থেকে আমাকে অমুখাপেক্ষী করে দিন।';
        $dua3->transliteration = 'আল্লা-হুম্মাকফিনী বিহালা-লিকা ‘আন হারা-মিকা ওয়া আগনিনী বিফাদ্বলিকা ‘আম্মান সিওয়া-ক';
        $dua3->reference = 'তিরমিযী ৫/৫৬০, নং ৩৫৬৩। আরও দেখুন, সহীহুত তিরমিযী, ৩/১৮০।';
        $dua3->audio_url = 'https://download.quranicaudio.com/quran/salaah_bukhaatir/112.mp3';
        $dua3->save();
    }
}
