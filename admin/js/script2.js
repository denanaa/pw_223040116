const keywordUser = document.getElementById("keywordUser");
const searchContainerUser = document.getElementById ("search-container-user");

keywordUser.onkeyup = function() {
    fetch('ajax/search.admin.php?keywordUser=' + keywordUser.value)
    .then((response) => response.text())
    .then((text) => (searchContainerUser.innerHTML = text));
};