(function () {
  var screen = document.getElementById('boot-screen');
  if (!screen) return;

  var output = document.getElementById('boot-output');
  var skipHint = document.getElementById('boot-skip-hint');

  var reduceMotion = window.matchMedia &&
    window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  var alreadyBooted = sessionStorage.getItem('bootSequenceDone') === 'true';

  if (reduceMotion || alreadyBooted) {
    screen.remove();
    return;
  }

  var lines = [
    'JLR-BIOS (C) 1994-2026 Blue Square Systems',
    'Initializing quantum flux capacitor......... OK',
    'Checking for aliens in the feline tail....... NONE FOUND',
    "Loading Perl runtime................. it's like a thermos",
    'Mounting /dev/sea_captain_dreams............. OK',
    'Bypassing the Royal Navy blockade............ OK',
    'WARNING: unauthorized jQuery usage detected.. IGNORING',
    'Establishing uplink to johnlradford.io....... OK',
    '',
    'guest@johnlradford:~$ whoami',
    'John Radford',
    'guest@johnlradford:~$ ./boot_homepage.sh',
    'Welcome aboard. Aargh.'
  ];

  var buffer = '';
  var finished = false;
  var timers = [];

  function setTimer(fn, delay) {
    var id = window.setTimeout(fn, delay);
    timers.push(id);
    return id;
  }

  function finish() {
    if (finished) return;
    finished = true;
    timers.forEach(window.clearTimeout);
    sessionStorage.setItem('bootSequenceDone', 'true');
    screen.classList.add('boot-hidden');
    document.removeEventListener('keydown', finish);
    screen.removeEventListener('click', finish);
    window.setTimeout(function () {
      screen.remove();
    }, 450);
  }

  function typeLine(lineIndex, charIndex) {
    if (lineIndex >= lines.length) {
      setTimer(finish, 700);
      return;
    }
    var line = lines[lineIndex];
    if (charIndex < line.length) {
      buffer += line[charIndex];
      output.textContent = buffer;
      setTimer(function () {
        typeLine(lineIndex, charIndex + 1);
      }, 12);
    } else {
      buffer += '\n';
      output.textContent = buffer;
      setTimer(function () {
        typeLine(lineIndex + 1, 0);
      }, 90);
    }
  }

  setTimer(function () {
    typeLine(0, 0);
  }, 200);

  setTimer(function () {
    skipHint.classList.add('visible');
  }, 1200);

  document.addEventListener('keydown', finish);
  screen.addEventListener('click', finish);
})();
