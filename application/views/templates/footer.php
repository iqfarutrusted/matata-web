    <footer>
      <div class="info-3" id="info-3">
        <img class="matata" src="<?= base_url('assets/'); ?>img/matata-7.png" />
        <img class="fortuna" src="<?= base_url('assets/'); ?>img/fortuna-1.png" />
        <br />
        <a href="https://www.facebook.com/officialfortunabrownieskukus" class="link-fb" id="link-fb">
          <img src="<?= base_url('assets/'); ?>img/link-fb.png" alt="link-fb" />
        </a>
        <a href="https://www.tiktok.com/@matatabrowniesfortuna" class="link-tk" id="link-tk">
          <img src="<?= base_url('assets/'); ?>img/link-tk.png" alt="link-tk" />
        </a>
        <a href="https://www.instagram.com/matatabrowniesfortuna/" class="link-ig" id="link-ig">
          <img src="<?= base_url('assets/'); ?>img/link-ig.png" alt="link-ig" />
        </a>
        <a href="
        www.youtube.com/@MatataBrowniesKukus" class="link-yt" id="link-yt">
          <img src="<?= base_url('assets/'); ?>img/link-yt.png" alt="link-yt" />
        </a>
      </div>
      <!-- <div class="info-4">
        <p>COPYRIGHT © 2023 FORTUNABROWNIES&nbsp;&nbsp;ALL RIGHTS RESERVED.</p>
      </div> -->
      <div class="info-5" id="info-5">
        <div class="title" id="title">
          <span>NO TELP</span>
          <span>EMAIL</span>
          <span>ALAMAT</span>
        </div>
        <div class="information" id="information" style="margin-right: 0">
          <span>+6281331307144</span><br />
          <span>media@matatabrownieskukus.com</span><br />
          <span class="title" id="title" style="margin-right: 0">HEAD OFFICE</span>
          <span></span><br />
          <span>Kota Baru, Jl. Kalimantan No 36, Wonorejo, Yosowilangun,Kabupaten
            Gresik, Jawa Timur 61152</span><br />
          <span class="title" id="title">FACTORY</span><br />
          <span>Jl. Raya Pedurungan, Kel. Wedoro, Kec. Glagah</span>
          <span></span>
        </div>
      </div>
    </footer>

    <script src="<?= base_url('assets/') ?>js/jquery.js"></script>
    <script src="<?= base_url('assets/') ?>js/zoomsl.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/script.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script>
      AOS.init();
    </script>
    <script>
      $(document).ready(function() {
        $('.small-image img').click(function() {
          var image = $(this).attr('src');
          $('.big-image img').attr('src', image);
        });

        $('#zoom').imagezoomsl();
        zoomrange: [4, 4]

      });
    </script>
    </body>

    </html>