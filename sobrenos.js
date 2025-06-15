<script>
  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if(entry.isIntersecting){
        entry.target.classList.add('visible');
      }
    });
  });

  document.querySelectorAll('.info-bloco.animado').forEach(bloco => {
    observer.observe(bloco);
  });
</script>
