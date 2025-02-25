let textArea = document.getElementById("message");
let characterCounter = document.getElementById("char_count");
let maxNumOfChars = 1000;
if (window.location.pathname == '/') {
  maxNumOfChars = 500;
}

const countCharacters = () => {
  let numOfEnteredChars = textArea.value.length;
  let counter = maxNumOfChars - numOfEnteredChars;
  characterCounter.textContent = counter + "/" + maxNumOfChars;
};

textArea.addEventListener("input", countCharacters);
