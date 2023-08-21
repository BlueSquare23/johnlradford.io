let textArea = document.getElementById("message");
let characterCounter = document.getElementById("char_count");
const maxNumOfChars = 500;

const countCharacters = () => {
    let numOfEnteredChars = textArea.value.length;
    let counter = maxNumOfChars - numOfEnteredChars;
    characterCounter.textContent = counter + "/" + maxNumOfChars;
};

textArea.addEventListener("input", countCharacters);
