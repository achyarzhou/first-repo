<?php get_header(); ?>

<section class="hero">
  <div class="hero-text">
    <h1>Magister Ekonomi</h1>
    <h2>Fakultas Ekonomi dan Bisnis<br>Universitas Samudra</h2>
    <p>Program pascasarjana yang berorientasi pada pengembangan ilmu ekonomi dan kebijakan publik yang aplikatif.</p>
    <div class="hero-actions">
      <a href="#pendaftaran" class="btn btn-primary">Informasi Pendaftaran</a>
      <a href="#kurikulum" class="btn btn-outline">Lihat Kurikulum</a>
    </div>
  </div>
</section>

<section class="section" id="keunggulan">
  <h2>Keunggulan Program</h2>
  <div class="grid-3">
    <div class="card">
      <h3>Dosen Berpengalaman</h3>
      <p>Dibimbing oleh dosen-dosen bergelar doktor dan praktisi di bidang ekonomi.</p>
    </div>
    <div class="card">
      <h3>Kurikulum Relevan</h3>
      <p>Fokus pada isu-isu ekonomi regional, pembangunan, dan kebijakan publik.</p>
    </div>
    <div class="card">
      <h3>Jaringan Luas</h3>
      <p>Kerja sama dengan instansi pemerintah, perbankan, dan sektor swasta.</p>
    </div>
  </div>
</section>

<!-- Bidang Konsentrasi -->
<section class="section" id="konsentrasi">
  <h2>Bidang Konsentrasi</h2>
  <p class="muted">Pilih bidang yang sesuai dengan tujuan karier Anda. Klik kartu untuk melihat ringkasan.</p>
  <div class="grid-5 konsentrasi-grid">
    <button class="konsentrasi-card" data-title="Ekonomi Keuangan Negara dan Daerah" data-desc="Fokus pada kebijakan fiskal, manajemen keuangan pemerintah pusat dan daerah, serta evaluasi program publik.">Ekonomi Keuangan Negara & Daerah</button>

    <button class="konsentrasi-card" data-title="Ekonomi Pariwisata" data-desc="Studi tentang pengembangan pariwisata berkelanjutan, dampak ekonomi, dan kebijakan destinasi.">Ekonomi Pariwisata</button>

    <button class="konsentrasi-card" data-title="Ekonomi Keuangan Pasar Modal" data-desc="Materi tentang pasar modal, instrumen keuangan, analisis investasi, dan regulasi pasar modal.">Ekonomi Keuangan Pasar Modal</button>

    <button class="konsentrasi-card" data-title="Ekonomi Perencanaan dan Pembangunan" data-desc="Perencanaan pembangunan, evaluasi proyek, kebijakan pembangunan regional dan nasional.">Perencanaan & Pembangunan</button>

    <button class="konsentrasi-card" data-title="Ekonomi Sumber Daya Manusia" data-desc="Analisis pasar tenaga kerja, kebijakan SDM, dan pengembangan kompetensi tenaga kerja untuk pembangunan ekonomi.">Sumber Daya Manusia</button>
  </div>
</section>

<section class="section" id="kurikulum">
  <h2>Kurikulum Singkat</h2>
  <p>Deskripsikan struktur mata kuliah inti, pilihan, dan fokus konsentrasi di sini.</p>
</section>

<section class="section" id="pendaftaran">
  <h2>Informasi Pendaftaran</h2>
  <p>Tuliskan syarat, jadwal, biaya kuliah, dan alur pendaftaran secara ringkas.</p>
</section>

<section class="section" id="berita">
  <h2>Berita & Pengumuman</h2>
  <div class="grid-3">
    <?php
    $berita = new WP_Query([
        'posts_per_page' => 3,
        'post_status'    => 'publish',
    ]);
    if ($berita->have_posts()) :
        while ($berita->have_posts()) : $berita->the_post(); ?>
          <article class="card">
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p class="meta"><?php echo get_the_date(); ?></p>
            <p><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
          </article>
    <?php
        endwhile;
        wp_reset_postdata();
    else :
        echo '<p>Belum ada berita.</p>';
    endif;
    ?>
  </div>
</section>

<!-- Modal for Konsentrasi -->
<div id="konsentrasi-modal" class="modal" aria-hidden="true" role="dialog" aria-label="Detail konsentrasi">
  <div class="modal-panel" role="document">
    <button class="modal-close" aria-label="Close">&times;</button>
    <h3 class="modal-title"></h3>
    <p class="modal-desc"></p>
    <div class="modal-actions">
      <a href="#pendaftaran" class="btn btn-primary">Daftar Konsentrasi Ini</a>
      <a href="#kurikulum" class="btn btn-outline">Lihat Kurikulum</a>
    </div>
  </div>
</div>

<?php get_footer(); ?>
