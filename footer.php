
<div class="mv__waves">
  <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
    <defs>
      <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
    </defs>
    <g class="parallax">
      <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff"></use>
    </g>
  </svg>
</div>

<section class="sec contact">
  <div class="sec__inner">
    <div class="sec__ttlBox">
      <h2 class="sec__ttl sec__ttl--contact">C<span class="sec__ttl--small">ontact</span></h2>
      <p class="sec__ttl-sub">ご連絡</p>
    </div>


    <form id="contact">
      <div class="container">
        <input type="text" name="name" placeholder="Name" /><input  type="email" name="email" placeholder="Email" /><textarea type="text" name="message" placeholder="Message"></textarea><br />
        <div class="message">Message Sent</div>
        <button id="submit" type="submit">
          Send!
        </button>
      </div>
    </form>

  </div>
</section>



  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="./js/script.js"></script>
</div>

<?php wp_footer(); ?>
</body>
</html>
