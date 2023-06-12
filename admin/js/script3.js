const keywordItem = document.getElementById("keywordItem");
const searchContainerItem = document.getElementById ("search-container-item");

keywordItem.onkeyup = function() {
    fetch('ajax/search.tempat.php?keywordItem=' + keywordItem.value)
    .then((response) => response.text())
    .then((text) => (searchContainerItem.innerHTML = text));
};