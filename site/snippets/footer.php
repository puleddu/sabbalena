    <div class="row">
      <footer class="footer col" role="contentinfo">
        <div class="copyright">
          <?php echo $site->copyright()->kirbytext() ?>
        </div>
      </footer>
    </div>
  </div>
  <?php echo js('assets/js/intense.min.js') ?>
  <script>var elements = document.querySelectorAll('.zoomable'); if (elements.length > 0) Intense(elements); </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/KaTeX/0.5.1/katex.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/KaTeX/0.5.1/contrib/auto-render.min.js"></script>
  <script>renderMathInElement(document.body);</script>
  <?php echo js('assets/vendor/plyr/plyr.js') ?>
  <script>plyr.setup();</script>
</body>
</html>
