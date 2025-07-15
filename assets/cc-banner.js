// assets/cc-banner.js
(function(){
  function initCookieBanner() {
    console.log('[cookies] initCookieBanner');

    var overlay = document.getElementById('cookie-consent');
    var btn     = document.getElementById('accept-cookies');
    console.log('[cookies] overlay, btn →', overlay, btn);

    if (!overlay || !btn) return;

    // Se já consentiu antes, remove banner e carrega GTM
    if (document.cookie.indexOf('cookie_consent=true') !== -1) {
      console.log('[cookies] Já havia consentido, removendo banner');
      overlay.remove();
      document.body.classList.remove('cookie-consent-active');
      if (typeof loadGTM === 'function') loadGTM();
      return;
    }

    // Exibe banner e bloqueia scroll
    document.body.classList.add('cookie-consent-active');

    btn.addEventListener('click', function(e){
      console.log('[cookies] botão clicado!', e);

      // Grava cookie de consentimento por 1 ano
      document.cookie = [
        'cookie_consent=true',
        'path=/',
        'max-age=' + 60*60*24*365,
        'SameSite=Lax'
      ].join('; ');

      // Remove banner e desbloqueia scroll
      overlay.remove();
      document.body.classList.remove('cookie-consent-active');

      // Carrega GTM dps do consentimento
      if (typeof loadGTM === 'function') loadGTM();
    });
  }

  // Inicializa no DOMReady
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initCookieBanner);
  } else {
    initCookieBanner();
  }
})();
