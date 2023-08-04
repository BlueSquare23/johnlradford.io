/* Uses JS Fetch to get pgp_key.txt and put its content into title attribute on
 * the pgp key icon. */

const keyIcon = document.getElementById("pgp-key-icon");
fetch('pgp_key.txt')
.then(response => response.text()) 
.then(textString => {
  keyIcon.setAttribute('title', textString);
});
