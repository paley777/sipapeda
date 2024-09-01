@extends('layouts.landing')

@section('title', 'Tentang Kami | SIPAPEDA')

@section('content')
    <section class="bg-gray-100 py-10 px-4 md:px-12">
        <div class="container mx-auto text-center pb-4">
            <h2 class="text-4xl font-bold text-gray-800">Tentang Kami</h2>
            <p class="text-lg text-gray-800 mt-2 mb-4">Telusuri sejarah, visi, misi dan struktur organisasi Satuan Polisi
                Pamong Praja Provinsi Bengkulu.</p>
        </div>
        <div class="bg-white border border-blue-500 rounded-lg shadow-md">
            <div class="bg-blue-500 text-white px-6 py-3 rounded-t-lg">
                <h5 class="text-lg">Profil SATPOL PP Provinsi Bengkulu</h5>
            </div>
            <div class="px-6 py-4 flex flex-col md:flex-row">
                <div class="w-full md:w-1/4 pr-4">
                    <nav id="scrollspy" class="sticky top-20 space-y-2">
                        <a class="block py-2 px-3 text-gray-700 hover:bg-gray-200 rounded-md" href="#item-1">Sejarah</a>
                        <a class="block py-2 px-3 text-gray-700 hover:bg-gray-200 rounded-md" href="#item-2">Visi</a>
                        <a class="block py-2 px-3 text-gray-700 hover:bg-gray-200 rounded-md" href="#item-3">Misi</a>
                        <a class="block py-2 px-3 text-gray-700 hover:bg-gray-200 rounded-md" href="#item-4">Struktur
                            Organisasi</a>
                    </nav>
                </div>

                <div class="w-full md:w-3/4 pl-4">
                    <div id="scroll-container" class="space-y-8">
                        <div id="item-1" class="scroll-mt-24">
                            <h4 class="text-lg font-bold mb-1">Sejarah Umum Satuan Polisi Pamong Praja</h4>
                            <hr class="mb-2">
                            <p class="mb-2">
                                Keberadaan Satuan Polisi Pamong Praja (Satpol PP) memiliki akar sejarah yang panjang,
                                dimulai sejak era kolonial ketika VOC menguasai Batavia di bawah Gubernur Jenderal Pieter
                                Both. Pada masa itu, kebutuhan untuk memelihara ketertiban dan keamanan sangat mendesak,
                                mengingat Batavia sering kali mendapat serangan sporadis dari penduduk lokal dan tentara
                                Inggris. Sebagai respons, dibentuklah BAILLUW, sebuah institusi yang berfungsi ganda sebagai
                                polisi, jaksa, dan hakim untuk menangani perselisihan hukum antara VOC dan warga serta
                                menjaga ketentraman.
                            </p>
                            <p class="mb-2">
                                Di bawah pemerintahan Raffles, BAILLUW berkembang menjadi BESTURRS POLITIE atau yang kini
                                dikenal sebagai Polisi Pamong Praja, yang bertugas membantu pemerintah di tingkat kawedanan
                                dalam menjaga ketertiban, keamanan, dan ketentraman warga. Namun, menjelang akhir era
                                kolonial, khususnya selama pendudukan Jepang, peran Polisi Pamong Praja menjadi kabur karena
                                strukturnya bercampur dengan kemiliteran.
                            </p>
                            <p class="mb-2">
                                Pasca Proklamasi Kemerdekaan Republik Indonesia, Polisi Pamong Praja tetap menjadi bagian
                                dari organisasi kepolisian, meski tanpa dasar hukum yang jelas hingga diterbitkannya
                                Peraturan Pemerintah Nomor 1 Tahun 1948. Sejak saat itu, nama dan struktur organisasi Satpol
                                PP mengalami beberapa perubahan. Dimulai dengan pembentukan Detasemen Polisi Pamong Praja
                                Keamanan Kapanewon pada 30 Oktober 1948, yang kemudian berganti nama menjadi Detasemen
                                Polisi Pamong Praja pada 10 November 1948.
                            </p>
                            <p class="mb-2">
                                Pada 3 Maret 1950, berdasarkan Keputusan Mendagri No.UP.32/2/21, nama tersebut berubah
                                menjadi Kesatuan Polisi Pamong Praja. Di tahun 1962, nama ini diubah lagi menjadi Pagar Baya
                                sesuai Peraturan Menteri Pemerintahan Umum dan Otonomi Daerah No. 10 Tahun 1962, dan setahun
                                kemudian, Pagar Baya berubah menjadi Pagar Praja melalui Surat Menteri No.1 Tahun 1963.
                            </p>
                            <p class="mb-2">
                                Perubahan signifikan terjadi setelah diterbitkannya UU No.5 Tahun 1974 tentang Pokok-pokok
                                Pemerintahan di Daerah, di mana Pagar Praja diubah kembali menjadi Polisi Pamong Praja
                                sebagai perangkat daerah. Selanjutnya, dengan adanya UU No.22 Tahun 1999, nama ini
                                diperbarui menjadi Satuan Polisi Pamong Praja. Terakhir, UU No.32 Tahun 2004 tentang
                                Pemerintahan Daerah semakin memperkuat posisi Satpol PP sebagai pembantu kepala daerah dalam
                                menegakkan peraturan daerah serta menyelenggarakan ketertiban umum dan ketenteraman
                                masyarakat.
                            </p>
                            <p class="mb-2">
                                Meskipun Satuan Polisi Pamong Praja telah mengalami berbagai perubahan baik dalam struktur
                                organisasi maupun nomenklatur, inti tugas pokok dan fungsinya tetap konsisten, yaitu
                                melindungi dan melayani masyarakat serta menegakkan peraturan daerah.
                            </p>
                        </div>

                        <div id="item-2" class="scroll-mt-24">
                            <h4 class="text-lg font-bold mb-1">Visi</h4>
                            <hr class="mb-2">
                            <p class="mb-2 font-semibold italic">"Terwujudnya Satuan Polisi Pamong Praja yang Berwibawa dalam Melaksanakan
                                Ketertiban Umum dan Ketentraman Masyarakat serta Perlindungan Masyarakat"</p>
                        </div>
                        <div id="item-3" class="scroll-mt-24">
                            <h4 class="text-lg font-bold mb-1">Misi</h4>
                            <hr class="mb-2">
                            <p class="mb-2">1. Meningkatkan kualitas sumber daya manusia dengan pelatihan-pelatihan.</p>
                            <p class="mb-2">2. Meningkatkan kemampuan, kompetensi dan profesionalisme aparatur dalam
                                melaksanakan tugas dan fungsi.</p>
                            <p class="mb-2">3. Memelihara ketertiban umum dan ketentraman masyarakat, serta perlindungan
                                masyarakat.</p>
                            <p class="mb-2">4. Penegakan Peraturan Daerah melalui mekanisme dan tahapan pengumpulan
                                bahan-bahan, penyelidikan, penyidikan dan penuntutan.</p>
                            <p class="mb-2">5. Melaksanakan pengamanan dan pengawalan kepala daerah dan wakil daerah serta
                                objek-objek vital.</p>
                        </div>
                        <div id="item-4" class="scroll-mt-24">
                            <h4 class="text-lg font-bold mb-1">Struktur Organisasi</h4>
                            <hr class="mb-2">
                            <div class="overflow-x-auto">
                                <table id="strukturTable" class="min-w-full bg-white">
                                    <thead>
                                        <tr>
                                            <th
                                                class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                No</th>
                                            <th
                                                class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                Jabatan</th>
                                            <th
                                                class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                Nama</th>
                                            <th
                                                class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                NIP</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($strukturs as $struktur)
                                            <tr>
                                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                    {{ $loop->iteration }}</td>
                                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                    <span
                                                        class="bg-green-100 text-green-800 px-2 py-1 rounded-full">{{ $struktur->jabatan }}</span>
                                                </td>
                                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                    {{ $struktur->nama }}</td>
                                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                    {{ $struktur->nip }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sections = document.querySelectorAll('#scroll-container > div');
            const navLinks = document.querySelectorAll('#scrollspy a');
            const offset = 200; // Adjust this value according to your header height

            navLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('href').slice(1);
                    const targetElement = document.getElementById(targetId);
                    const elementPosition = targetElement.getBoundingClientRect().top + window
                        .pageYOffset;

                    window.scrollTo({
                        top: elementPosition - offset,
                        behavior: 'smooth'
                    });
                });
            });

            window.addEventListener('scroll', () => {
                let current = '';

                sections.forEach(section => {
                    const sectionTop = section.offsetTop - offset;
                    if (pageYOffset >= sectionTop) {
                        current = section.getAttribute('id');
                    }
                });

                navLinks.forEach(link => {
                    link.classList.remove('bg-gray-200');
                    if (link.getAttribute('href').includes(current)) {
                        link.classList.add('bg-gray-200');
                    }
                });
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#strukturTable').DataTable();
        });
    </script>
@endsection
