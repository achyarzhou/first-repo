(function(){
  // Simple modal for konsentrasi
  function qs(selector, root){ return (root||document).querySelector(selector); }
  function qsa(selector, root){ return (root||document).querySelectorAll(selector); }

  var modal = qs('#konsentrasi-modal');
  var modalTitle = qs('.modal-title', modal);
  var modalDesc = qs('.modal-desc', modal);
  var closeBtn = qs('.modal-close', modal);

  qsa('.konsentrasi-card').forEach(function(btn){
    btn.addEventListener('click', function(){
      var title = btn.getAttribute('data-title') || '';
      var desc = btn.getAttribute('data-desc') || '';
      modalTitle.textContent = title;
      modalDesc.textContent = desc;
      modal.setAttribute('aria-hidden', 'false');
      modal.classList.add('open');
    });
  });

  function closeModal(){
    modal.setAttribute('aria-hidden','true');
    modal.classList.remove('open');
  }

  closeBtn && closeBtn.addEventListener('click', closeModal);
  modal && modal.addEventListener('click', function(e){ if(e.target === modal) closeModal(); });
  document.addEventListener('keydown', function(e){ if(e.key === 'Escape' && modal.classList.contains('open')) closeModal(); });
})();
