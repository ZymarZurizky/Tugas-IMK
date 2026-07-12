@extends('layouts.tailwind-public')

@section('title', 'Staf Medis')

@section('styles')
<style>
    .staff-card-hover:hover .staff-image {
        transform: scale(1.05);
    }
    .staff-image {
        transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }
</style>
@endsection

@section('content')
<!-- Hero Section: Mission & History -->
<section class="py-12 md:py-16">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
        <div class="space-y-8">
            <div class="inline-flex items-center gap-2 bg-secondary-container text-on-secondary-container px-4 py-1.5 rounded-full text-label-md font-label-md">
                <span class="material-symbols-outlined text-[18px]">history</span>
                Warisan Kepedulian Kami
            </div>
            <h1 class="font-display-lg text-display-lg text-on-surface leading-tight">
                Melayani Masyarakat dengan <span class="text-primary">Integritas</span> dan <span class="text-primary">Keunggulan</span>.
            </h1>
            <p class="text-body-lg font-body-lg text-secondary leading-relaxed">
                Didirikan sejak tahun 1985, Puskesmas Sehat Utama telah menjadi pilar utama kesehatan bagi masyarakat setempat selama lebih dari tiga dekade. Misi kami adalah menghadirkan pelayanan kesehatan berkualitas tinggi, terjangkau, dan penuh empati bagi setiap warga.
            </p>
            <div class="grid grid-cols-2 gap-8 border-l-4 border-primary pl-8">
                <div>
                    <div class="text-display-lg font-display-lg text-primary">35+</div>
                    <div class="text-label-md font-label-md text-secondary uppercase tracking-wider">Tahun Pengabdian</div>
                </div>
                <div>
                    <div class="text-display-lg font-display-lg text-primary">24/7</div>
                    <div class="text-label-md font-label-md text-secondary uppercase tracking-wider">Dukungan UGD</div>
                </div>
            </div>
        </div>
        <div class="relative group">
            <div class="absolute -inset-4 bg-primary-container/10 rounded-2xl -rotate-2 group-hover:rotate-0 transition-transform duration-500"></div>
            <div class="relative h-[450px] rounded-xl overflow-hidden shadow-xl">
                <img class="w-full h-full object-cover" alt="Fasilitas Puskesmas" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBdyYTUpMgmDGExZt1qJh59YovEhjFTl036R5tXyucsVwbtm3eAKOAryHl2voeR-3tHaEDlibsmdaR0S7hyhVervxYmEMaHHxiEXcN2-EcPeUI851anSZvl5vzkaF9JZaQSjlgOeCYany0YjZTOK7CKrzUr7D8NhXVYR-xkCHXlWw9HgjKR1vp_MM391gQPdt6XOgvdr-xOBJmZqmO6EFHGPpzE8KM7rBZDKwNNQOEIsoGj8CT2LBKCqLbcGrtgWBDjw66hId0YoJw"/>
            </div>
        </div>
    </div>
</section>

<!-- Personnel Categories -->
<section class="py-16 border-t border-outline-variant/30">
    <div class="text-center max-w-2xl mx-auto mb-16">
        <h2 class="font-headline-lg text-headline-lg text-on-surface mb-4">Temui Profesional Medis Kami</h2>
        <p class="text-body-md font-body-md text-secondary">Tim medis kami terdiri dari spesialis berkualifikasi tinggi yang berkomitmen penuh terhadap kesehatan dan pemulihan Anda.</p>
    </div>

    <!-- Bento Grid Staff Section -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-grid-gutter">
        <!-- Doctor 1 (Lead Physician - General Medicine) -->
        <div class="staff-card-hover group bg-white p-6 rounded-xl border border-outline-variant hover:border-primary transition-all duration-300 soft-card-shadow">
            <div class="aspect-square rounded-lg overflow-hidden mb-6">
                <img class="staff-image w-full h-full object-cover" alt="Dr. Sarah Wijaya" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAqoDa8RgYHJAlG6p2px52M5f2zoq9-phyYqTbQhQqmxJM17OQKDNhq-HheJfeq3Fr2QMYD7XvFOf3BeqV9rMQ9QJVDVPWGdhO0BSKrrxU_SdEvvmMJ395KHNZaKKnq6sT7ZMXPiyou-Q7gknCA_jObdPnEq8aNAs3ScUBxdj2ewx3wBkKg1lXDh3MDWnCgHuhxQH-5gB2XgsK3SsfK6FL0dtz-arPGBEd_WE7NHe5s110KH0Y2pd9STVCKFVw7LRyGwkK6DzZpH0Q"/>
            </div>
            <div class="space-y-2">
                <div class="flex justify-between items-start">
                    <div>
                        <h3 class="font-headline-md text-headline-md text-on-surface">Dr. Sarah Wijaya</h3>
                        <p class="text-primary font-label-md text-label-md">Kepala Poli Umum</p>
                    </div>
                    <span class="bg-primary-container text-on-primary-container px-2 py-0.5 rounded text-[10px] font-bold uppercase">Utama</span>
                </div>
                <p class="text-body-md font-body-md text-secondary line-clamp-3">Spesialis Penyakit Dalam dengan pengalaman lebih dari 15 tahun di bidang manajemen kesehatan masyarakat dan pencegahan penyakit kronis.</p>
                <div class="pt-4 flex gap-4">
                    <span class="material-symbols-outlined text-primary cursor-pointer hover:scale-110 transition-transform">verified_user</span>
                    <span class="material-symbols-outlined text-primary cursor-pointer hover:scale-110 transition-transform">mail</span>
                </div>
            </div>
        </div>

        <!-- Doctor 2 (Pediatrics) -->
        <div class="staff-card-hover group bg-white p-6 rounded-xl border border-outline-variant hover:border-primary transition-all duration-300 soft-card-shadow">
            <div class="aspect-square rounded-lg overflow-hidden mb-6">
                <img class="staff-image w-full h-full object-cover" alt="Dr. Ahmad Hidayat" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCMOlT98eemOSFz_eWZZpx7ZGF2CPW-M4tn5kGi_QuUW0To_dMhje9uFnNtIvlG4KxgRhUHONrYBr5hleWiEt1QaYWItcr4WmEOB_el31sV9rJUZ2R5LzDXR30dG3Kqugy-prKmo5wCYsFWCUBFmr3yT9Su7nA0HVtuad8i2nD8X33AvuFM8_WovJz0Z_PkRxIVNlZm-lhnt8iuBXHd_p9IbreMl6_N5XQgKbRwsY7lk1tApY0dKFSMoU8aVfWAe6TLIA6k8lhZ1Yo"/>
            </div>
            <div class="space-y-2">
                <h3 class="font-headline-md text-headline-md text-on-surface">Dr. Ahmad Hidayat</h3>
                <p class="text-primary font-label-md text-label-md">Spesialis Poli Anak</p>
                <p class="text-body-md font-body-md text-secondary line-clamp-3">Berdedikasi tinggi terhadap tumbuh kembang dan kesehatan anak. Memimpin program penyuluhan kesehatan anak sehat di Puskesmas.</p>
                <div class="pt-4 flex gap-4">
                    <span class="material-symbols-outlined text-primary cursor-pointer hover:scale-110 transition-transform">verified_user</span>
                    <span class="material-symbols-outlined text-primary cursor-pointer hover:scale-110 transition-transform">mail</span>
                </div>
            </div>
        </div>

        <!-- Dentist -->
        <div class="staff-card-hover group bg-white p-6 rounded-xl border border-outline-variant hover:border-primary transition-all duration-300 soft-card-shadow">
            <div class="aspect-square rounded-lg overflow-hidden mb-6">
                <img class="staff-image w-full h-full object-cover" alt="Drg. Robert Chen" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAZgaom61I9IVjFOF3dSEqML9XCjLkLIkv8O0V2flfPh-D7YQ0d--cNhGlzOcN10WMYYiA7iAodFajO5UjwP-S4H9M7Kx9AJgWjmtL90o60fTwYD20Gs4ViUERBwDMM3qSkHUoO6Byqp49-jsB68k9f4_TmsrW8YnbmMcZMxYR5xKdDz9PrsSFEFKSriyRorsFrRBG6ZWqzjdCuOPizREToxfuAqF33OR-2FMtuDLATjc5QWK0Zz4nL6VtqJ7htKlRY8ZD0UMRmCFk"/>
            </div>
            <div class="space-y-2">
                <h3 class="font-headline-md text-headline-md text-on-surface">Drg. Robert Chen</h3>
                <p class="text-primary font-label-md text-label-md">Dokter Spesialis Poli Gigi</p>
                <p class="text-body-md font-body-md text-secondary line-clamp-3">Spesialis bedah mulut dan restorasi gigi. Berkomitmen menghadirkan perawatan gigi yang nyaman, ramah anak, dan bebas rasa cemas.</p>
                <div class="pt-4 flex gap-4">
                    <span class="material-symbols-outlined text-primary cursor-pointer hover:scale-110 transition-transform">dentistry</span>
                    <span class="material-symbols-outlined text-primary cursor-pointer hover:scale-110 transition-transform">mail</span>
                </div>
            </div>
        </div>

        <!-- Midwife (Maternal Care) -->
        <div class="staff-card-hover group bg-white p-6 rounded-xl border border-outline-variant hover:border-primary transition-all duration-300 soft-card-shadow">
            <div class="aspect-square rounded-lg overflow-hidden mb-6">
                <img class="staff-image w-full h-full object-cover" alt="Bdn. Siti Aminah" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAulPgxxQP0_dgKH9JHsFlaW9tWdkE_VDHkvzbD-7MGTejCyAS4NLOcm-uCPTO3VDUgfIjNuAoclLWSvdpOmrtXIi8Kl_wj4XFODCKMsXTADK17XBsPF-Jme42QepxvaxQ47ciHLirLpDW03HEvWJ5v5MaXBj51AJQAaZSmsYOlxR0e6Dz5XyYHwd6q7_5PuKkmOgp1kuwP9beNy0P9E2s-yWUPCKbsTxXLhIne7txp9knvWHBlxtp7WRq6SH_MmqpUBrxJ5-Fkeac"/>
            </div>
            <div class="space-y-2">
                <h3 class="font-headline-md text-headline-md text-on-surface">Bdn. Siti Aminah</h3>
                <p class="text-primary font-label-md text-label-md">Bidan Senior Poli KIA</p>
                <p class="text-body-md font-body-md text-secondary line-clamp-3">Fokus pada perawatan antenatal dan pascamelahirkan. Bidan Siti siap mendampingi para calon ibu di setiap fase kehamilan hingga persalinan.</p>
                <div class="pt-4 flex gap-4">
                    <span class="material-symbols-outlined text-primary cursor-pointer hover:scale-110 transition-transform">child_care</span>
                    <span class="material-symbols-outlined text-primary cursor-pointer hover:scale-110 transition-transform">mail</span>
                </div>
            </div>
        </div>

        <!-- Nurse (Senior Nurse) -->
        <div class="staff-card-hover group bg-white p-6 rounded-xl border border-outline-variant hover:border-primary transition-all duration-300 soft-card-shadow">
            <div class="aspect-square rounded-lg overflow-hidden mb-6">
                <img class="staff-image w-full h-full object-cover" alt="Sr. Maria Ulfa" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAoFR-ffOSHnoHOD_02GI8mlbUOwMUba-twfoROaT0eMtQUOsir2cS8yLYSmkzUFY-8IuHOMj-NqhsmKqFgRQrvYqUdV-852JbxheXth8FCKdvA7i59qptrrJLRXaji07TvTjsIwH0nIdrxky7jaPBgVX-YTaKuOewNafzuP0K1xBRyc60EhR1os9N3oh2ZI898Bf67yD5av3oKY1uglWnTyctIu_NCKC6gyEZ0cXqzIqUgxlMukrhdGjYWmvp0C8LksuLy7v2ReBc"/>
            </div>
            <div class="space-y-2">
                <h3 class="font-headline-md text-headline-md text-on-surface">Sr. Maria Ulfa</h3>
                <p class="text-primary font-label-md text-label-md">Kepala Keperawatan</p>
                <p class="text-body-md font-body-md text-secondary line-clamp-3">Pakar dalam triase pasien dan perawatan darurat. Memastikan alur pelayanan pasien berjalan tertib, higienis, dan nyaman.</p>
                <div class="pt-4 flex gap-4">
                    <span class="material-symbols-outlined text-primary cursor-pointer hover:scale-110 transition-transform">clinical_notes</span>
                    <span class="material-symbols-outlined text-primary cursor-pointer hover:scale-110 transition-transform">mail</span>
                </div>
            </div>
        </div>

        <!-- CTA Card -->
        <div class="bg-primary flex flex-col justify-center items-center text-center p-8 rounded-xl border border-primary shadow-lg hover:shadow-primary/20 transition-all">
            <span class="material-symbols-outlined text-on-primary text-6xl mb-6">medical_services</span>
            <h3 class="font-headline-md text-headline-md text-on-primary mb-4">Ingin Bergabung dengan Tim Kami?</h3>
            <p class="text-on-primary/80 mb-8 font-body-md text-body-md">Kami selalu membuka peluang bagi profesional kesehatan bertalenta yang berdedikasi tinggi.</p>
            <button class="bg-on-primary text-primary px-8 py-3 rounded-lg text-label-md font-label-md hover:bg-primary-container hover:text-on-primary-container transition-colors">
                Lihat Karir
            </button>
        </div>
    </div>
</section>

<!-- Trust Badges & Values -->
<section class="py-12 border-t border-outline-variant/30">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
        <div class="flex flex-col items-center text-center p-8 border border-outline-variant rounded-xl hover:bg-tertiary-tint transition-all duration-200">
            <span class="material-symbols-outlined text-primary text-4xl mb-4">verified</span>
            <h4 class="font-headline-md text-headline-md text-on-surface mb-2">Akreditasi Paripurna</h4>
            <p class="text-body-md font-body-md text-secondary">Fasilitas dan layanan kami memegang predikat akreditasi tertinggi nasional untuk mutu pelayanan.</p>
        </div>
        <div class="flex flex-col items-center text-center p-8 border border-outline-variant rounded-xl hover:bg-tertiary-tint transition-all duration-200">
            <span class="material-symbols-outlined text-primary text-4xl mb-4">group</span>
            <h4 class="font-headline-md text-headline-md text-on-surface mb-2">Berfokus pada Pasien</h4>
            <p class="text-body-md font-body-md text-secondary">Setiap staf dibekali keahlian komunikasi empatik guna memberikan pendampingan yang hangat.</p>
        </div>
        <div class="flex flex-col items-center text-center p-8 border border-outline-variant rounded-xl hover:bg-tertiary-tint transition-all duration-200">
            <span class="material-symbols-outlined text-primary text-4xl mb-4">clinical_notes</span>
            <h4 class="font-headline-md text-headline-md text-on-surface mb-2">Fasilitas Modern</h4>
            <p class="text-body-md font-body-md text-secondary">Menggunakan perlengkapan diagnostik medis terkini untuk hasil pemeriksaan yang cepat dan akurat.</p>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const observerOptions = {
            threshold: 0.1
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('opacity-100', 'translate-y-0');
                    entry.target.classList.remove('opacity-0', 'translate-y-10');
                }
            });
        }, observerOptions);

        // Apply fade-in animation to staff cards
        document.querySelectorAll('.staff-card-hover').forEach((card, index) => {
            card.classList.add('transition-all', 'duration-700', 'opacity-0', 'translate-y-10');
            card.style.transitionDelay = `${index * 100}ms`;
            observer.observe(card);
        });
    });
</script>
@endsection
