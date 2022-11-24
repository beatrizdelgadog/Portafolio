const onScroll = () => {
    if (window.scrollY > 50) {

      document.getElementById('mainNav').classList.add('scrolled')
    } else {
      document.getElementById('mainNav').classList.remove('scrolled')
    }
  }

window.addEventListener("scroll", onScroll);
